<?php


//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    //Page-Specific Static Content
    
    
    
    $tpagecontent = <<<PAGE
    
    <div class="container">
    <div class="row" id="bigCallout4">
<div class="col-12">
<div class= "well">
<div class="page-header">
<h1>Rocket League : The Review <small> Football + Rockets + Cars = Mayhem!</small></h1>

</div>
<p class="lead"> A Great Bit Of Fun</p>
</div>
<section>


<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:55%">
    <span class=>Rocket League with a Mediocre 7. Still worth a few games! </span>
  </div>
</div>


 <div class="col-sm-6">
<article class="index-table2">

<table class= "table table-bordered table-condensed table-hover">

<tr>
<th>Title</th>
<th>Release Date</th>
<th>Genre</th>
<th>Age Rating</th>
<th>Platforms</th>

</tr>

<tr>
<td>Rocket League</td>
<td>07.07.2015</td>
<td>Racing/Sport/Multiplayer</td>
<td>3+</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-rl.jpg">


</div>

<div class ="col-sm-6">
<p>Rocket League is a vehicular soccer video game developed and published by Psyonix. The game was first released for Microsoft Windows and PlayStation 4 in July 2015,
 with ports for Xbox One and Nintendo Switch being released later on. In June 2016, 505 Games began distributing a physical retail version for PlayStation 4 and Xbox One, 
with Warner Bros. Interactive Entertainment taking over those duties by the end of 2017.
 Versions for macOS and Linux were also released in 2016, but support for their online services were dropped in 2020. </p>
<p>Described as "footy, but with rocket-powered cars", Rocket League has up to four players assigned to each of the two teams, 
using rocket-powered vehicles to hit a ball into their opponent's goal and score points over the course of a match. 
The game includes single-player and multiplayer modes which can be played both locally and online, including cross-platform play between all versions.
 Later updates for the game enabled the ability to modify core rules and added new game modes, including ones based on ice hockey and basketball. </p>

<p> This Game is great to play with your friends so we gave it a 7!</p>


</div>
</div>
</section>
</div>
</div>

<article class="index-table3">

<table class= "table table-bordered table-condensed table-hover">

<tr>
<th>Retailer</th>
<th>Price</th>
<th>Buy Now</th>

</tr>

<tr>
<td>GAME.CO.UK</td>
<td>£14.99</td>
<td><a href="https://www.game.co.uk/en/rocket-league-collectors-edition-2186946?msclkid=d05a2d6376821901455573db01fe6dec&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£28.50</td>
<td><a href="https://www.amazon.co.uk/Rocket-League-Collectors-Edition-PS4/dp/...">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£19.99</td>
<td><a href="https://www.argos.co.uk/product/8246701">Buy Now</a></td>


</table>
</article>

<h1>Add Your Own Review</h1>
<!-------Wrap------------>
<div id="wrap">
<div id="main">
<div class="row">
<div class="col-md-5">
<h3 class="heading">Comments and Responses</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>

<p>Your email address will not be published. Required fields are marked *</p>

<!------------Form Start---------->

<div id='form'>
<div class="row">
<div class="col-md-12">

<form action="" method="POST" id="commentform">

<div id="comment-name" class="form-row">
<input type = "text" placeholder = "Name (required)" name = "dname"  id = "name" >
</div>
<div id="comment-email" class="form-row">
<input type = "text" placeholder = "Mail (will not be published) (required)" name = "demail"  id = "email">
</div>
<div id="comment-url" class="form-row">
<input type = "text" placeholder = "Website" name = "url"  id = "url" >
</div>
<div id="comment-message" class="form-row">
<textarea name = "comment" placeholder = "Message" id = "comment" ></textarea>
</div>
<a href="RL.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>


  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Rocket League?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/pc/rocket-league">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2017/12/06/rocket-league-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/rocket-league-review">PC Gamer</a></p>
</div>


<ul class="pager">
  <li class="previous"><a href="F1.php">Previous</a></li>
  <li class="next"><a href="AC7.php">Next</a></li>
</ul>









    









PAGE;
    return $tpagecontent;
}

//----BUSINESS LOGIC---------------------------------
//Start up a PHP Session for this user.
session_start();

//Build up our Dynamic Content Items.
$tpagetitle = "The Game Directory";
$tpagelead  = "";
$tpagecontent = createPage();
$tpagefooter = "";

//----BUILD OUR HTML PAGE----------------------------
//Create an instance of our Page class
$tpage = new MasterPage($tpagetitle);
//Set the Three Dynamic Areas (1 and 3 have defaults)
if(!empty($tpagelead))
    $tpage->setDynamic1($tpagelead);
    $tpage->setDynamic2($tpagecontent);
    if(!empty($tpagefooter))
        $tpage->setDynamic3($tpagefooter);
        //Return the Dynamic Page to the user.
        $tpage->renderPage();
        ?>