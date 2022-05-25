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
<h1>Skyrim: The Review <small> Maybe The Best Game We Ever Played</small></h1>

</div>
<p class="lead">Are you ready for The Ultimate Quest?</p>
</div>


<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:92%">
    <span class=>One of the Best Games Ever Made! 9.0</span>
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
<td>The Elder Scrolls V : Skyrim</td>
<td>01.11.2011</td>
<td>RPG</td>
<td>16</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/Skyrim480x360-2.jpg">


</div>

<div class ="col-sm-6">
<p> The Elder Scrolls V: Skyrim is an action role-playing video game developed by Bethesda Game Studios and published by Bethesda Softworks. It is the fifth main
 installment in The Elder Scrolls series, following The Elder Scrolls IV: Oblivion,
 and was released worldwide for Microsoft Windows, PlayStation 3, and Xbox 360 on November 11, 2011. 
The game's main story revolves around the player's character, the Dragonborn, on their quest to defeat Alduin the World-Eater, a dragon who is prophesied to destroy the world. 
The game is set 200 years after the events of Oblivion and takes place in Skyrim, the northernmost province of Tamriel. Over the course of the game, the player
 completes quests and develops the character by improving skills. The game continues the open-world tradition of its predecessors by allowing the player to travel anywhere

 in the game world at any time, and to ignore or postpone the main storyline indefinitely.
<p> Its a really enjoyable game to play as you can nearly do anything. The Main Quest is excellent and DLC's just keep on coming. If you bought a PS4. Buy this Game! </p>

 </p>

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
<td><a href="https://www.game.co.uk/en/skyrim-special-edition-1330081?msclkid=a785ab1bb6ab1a593c5af5a3dfb3670d&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£20.95</td>
<td><a href="https://www.amazon.co.uk/Elder-Scrolls-Skyrim-Special-PS4/dp/B01GV7Y1SM">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£17.99</td>
<td><a href= "https://www.argos.co.uk/product/7546938">Buy Now</a></td>


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
<a href="Skyrim.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>






  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Battlefield?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/switch/the-elder-scrolls-v-skyrim">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2011/11/10/the-elder-scrolls-v-skyrim-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/the-elder-scrolls-v-skyrim-review">PC Gamer</a></p>
</div>


<ul class="pager">
  <li class="previous"><a href="Ranking.php">Previous</a></li>
  <li class="next"><a href="BattlfieldV.php">Next</a></li>
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