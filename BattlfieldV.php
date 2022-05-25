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
<h1>Battlefield V: The Review <small> You'll need your squad mates here!</small></h1>

</div>
<p class="lead"> The Best Online Multiplayer on Console! 32 Players per team! This is WAR!</p>
</div>



<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <span class=>Another Classic in the Series! We score this 8.8! </span>
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
<td>Battlefield V</td>
<td>20.11.2018</td>
<td>FPS/Multiplayer</td>
<td>16</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/Battlefield360x480.jpg">


</div>

<div class ="col-sm-6">
<p> 
<p>Battlefield V is a first-person shooter video game developed by EA DICE and published by Electronic Arts.
 Battlefield V is the sixteenth installment in the Battlefield series. It was released worldwide for Microsoft Windows, 
PlayStation 4, and Xbox One on November 20, 2018. Those who pre-ordered the Deluxe Edition of the game were granted early
 access to the game on November 15, 2018, and Origin Access Premium subscribers on PC received access to the game on November 9,
 2018. The game is based on World War II 
and is a thematic continuation of its World War I based precursor Battlefield 1. </p>


<p>
Battlefield V is focused extensively on party-based features and mechanics, scarcity of resources, and removing "abstractions" 
from game mechanics to increase realism. There is an expanded focus on player customization through the new Company system, 
where players can create multiple characters with cosmetic and weapon options. Cosmetic items, and currency used to purchase others, 
are earned by completing in-game objectives.
The game features several new multiplayer modes, including the "continuous" campaign mode "Firestorm", and "Grand Operations".
 The Grand Operations mode is an expansion of the "Operations" mode introduced in Battlefield 1, which focuses on matches taking 
place across multiple stages to simulate a campaign from the war. In Grand Operations, each round will have specific objectives, and 
performance in each stage will influence the next. If the final day ends with a close margin of victory, the match will culminate with
 a "Final Stand," with players fighting to the 
last man standing on a continually shrinking map. Similarly to Battlefield 1, the game features a collection of single-player "war stories"
 based on aspects of World War II. The game also features a cooperative mode not seen since Battlefield 3 called "Combined Arms," where up to four players can
undertake 
missions together and features dynamic missions and objectives 
so missions cannot be played the same way each time. </p>
<p>The battle royale mode is built around the franchise's "core pillars of destruction, team play, and vehicles.The name "Firestorm" refers to a literal storm of
 fire that constricts players similar to the popular Battle Royale game mechanic of restricting the play area. Furthermore, this particular game mode was not developed by EA DICE 
themselves, but has been outsourced to Criterion Games and features the biggest map created by the franchise to date. It is playable by 64 players, which can be divided into up to
 16 squads with a focus on team work. We Scored this game 8.8/10. </p>

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
<td><a href="https://www.game.co.uk/en/battlefield-v-2380715?msclkid=36084e9954a61117ba54102136df7096&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£19.52</td>
<td><a href="https://www.amazon.co.uk/Electronic-Arts-1047910-Battlefield-PS4/dp/B07D7FTVKH">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£39.99</td>
<td><a href="https://www.argos.co.uk/Latest_Games/PS4">Buy Now</a></td>


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
<a href="Batllfield.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
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
  <p><a href="https://www.metacritic.com/game/pc/battlefield-v">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2018/11/17/battlefield-v-a-multiplayer-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/battlefield-5-review">PC Gamer</a></p>
</div>




<ul class="pager">
  <li class="previous"><a href="Skyrim.php">Previous</a></li>
  <li class="next"><a href="Fifa20.php">Next</a></li>
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