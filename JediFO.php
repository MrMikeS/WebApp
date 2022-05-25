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
<h1>Jedi Fallen Order: The Review <small> The Force is Strong in this One!</small></h1>

</div>
<p class="lead"> Feel the force! unleash your inner Jedi!</p>
</div>



<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <span class=>The Return of the Jedi! Its an 8.5</span>
  </div>
</div>







<section>
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
<td>Jedi Fallen Order</td>
<td>20.11.2019</td>
<td>Single Player Action RPG</td>
<td>16</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-jedi.jpg">


</div>

<div class ="col-sm-6">

 <p>Jedi Fallen Order is completely different to any of the Star Wars games I had played before. For the first time in history, EA may have finally listended to Fans of the franchise. All other games where lacking in
story but Jedi fallen order is all about the Story. 
Star Wars Jedi: Fallen Order is an action-adventure game developed by Respawn Entertainment and published by Electronic Arts. 
It was released for Windows, PlayStation 4, and Xbox One on November 15, 2019. A Google Stadia version is due in 2020. 
The game is set in the Star Wars universe, five years after the fall of the Galactic Republic and rise of the Galactic Empire 
(as depicted in Star Wars: Episode III – Revenge of the Sith), and follows a young Jedi Padawan named Cal Kestis as he is 
hunted through the galaxy by the Empire, 
all the while attempting to complete his Jedi training and restore the now wiped out Jedi Order. </p>
<p>Fallen Order was inspired heavily by Batman: Arkham Asylum with regards to the combat system and the "Metroidvania" style
 of exploration and progression.

<p>Overall, its a very good game from start to finish. Its no longer about button bashing and hoping you will destroy everyone in site but it is now about timed combat. It takes a lot of skill to parry
a heavy blow from an opponnent. When you up the difficulty to Jedi Knight, Its a whole new game again. You have to be extremley patient in each battle and you have to tactically choose what power to use next</p>


<p> The Level up system is well thought out and has a real effect on gameplay. You must choose wisely as one knight once said. Its a great Story too, finally EA have put a bit of background to the story,
you are no longer aimlessly hacking at Stormtroopers. Furthermore the gameplay has evolved so that it plays like Uncharted. There are puzzles throughout the game which sometimes leave you stumped but you eventually get there. Its rewarding
in a sense, however I did find myself watching a youtube video or two on what I should do next. </p>

<p> The Planets to explore are vast and different and allows for a lot of exploration should you want. The only downside to the game is there is no multiplayer, It would of been nice to have a few online Jedi fights but Overall its a solid single player game 
that most people will thoroughly enjoy. Go Buy it Now! We Rate this game 8.5/10 </p>


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
<td>£27.99</td>
<td><a href="https://www.game.co.uk/en/star-wars-jedi-fallen-order-2388092?msclkid=a30ca1124ac716973b47ffaa2466b65f&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£37.99</td>
<td><a href="https://www.amazon.co.uk/Star-Wars-JEDI-Fallen-Order/dp/B07QN7HVMH">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£49.99</td>
<td><a href="https://www.argos.co.uk/product/1971011">Buy Now</a></td>


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
<a href="JediFO.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>


  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Jedi Fallen Order?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/playstation-4/star-wars---jedi-fallen-order">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2019/11/15/star-wars-jedi-fallen-order-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/uk/star-wars-jedi-fallen-order-review/?&_flexi..">PC Gamer</a></p>
</div>






<ul class="pager">
  <li class="previous"><a href="Fifa20.php">Previous</a></li>
  <li class="next"><a href="ACO.php">Next</a></li>
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