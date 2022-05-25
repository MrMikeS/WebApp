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
<h1>Ace Combat 7: The Review <small> Become Top Gun</small></h1>

</div>
<p class="lead"> If you ever wondered what its like to be a fighter pilot..wonder no more!</p>
</div>


<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:50%">
    <span class>A Mild 5.5</span>
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
<td>Ace Combat 7 : Skies of Deception</td>
<td>18.01.2019</td>
<td>Combat Fighting Simulation Game</td>
<td>16</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-ac7.jpg">


</div>

<div class ="col-sm-6">
<p>Like the rest of the Ace Combat series, Ace Combat 7: Skies Unknown forgoes a realistic flight model in favor of faster, 
arcade-like gameplay to increase its accessibility to newer players. Players complete missions by destroying various air and surface targets.
 A mission briefing details the player's expected route of attack and the enemy opposition in a 3D map display. The player can also choose Novice or Expert control settings;
 the latter enables the player to execute realistic aircraft maneuvers such as rolls and high-g turns. Wingmen accompany the player through the mission, providing exposition 

and potentially shooting down enemy planes for the player. The game features 28 different aircraft, with an additional three as downloadable content and the F-4E Phantom II 
offered as a pre-order bonus. As with previous entries in the series, most of the aircraft are licensed from the real-world, although a set of fictional superplanes are also included. 
Several aircraft in the game make their series debut such as various members of the Su-30 family as well as upgraded versions of older aircraft like the Gripen E and A-10C Thunderbolt II.</p>

<p>ver the course of the single-player campaign, the player earns an in-game currency, known as "MRP," to purchase additional aircraft and equipment through a tech tree. The player begins the game with the F-16C, and is able to unlock the MiG-21 and F-104 Starfighter after the fourth mission without need of using MRP, with the F-22A Raptor, Su-57 and the fictional X-02S Strike Wyvern as top-tier aircraft in the tech tree</p>
<p> Its a good game with a decent story however personally for me it just isnt good enough to spend that much time on and the missions are very "samey" after a while. </p> 

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
<td>£29.99</td>
<td><a href="https://www.game.co.uk/en/ace-combat-7-skies-unknown-967295?msclkid=c34f093814a115997a9957806d008295&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£24.99</td>
<td><a href="https://www.amazon.co.uk/Ace-Combat-7-Skies-PS4/dp/B073FFRVKQ">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£24.99</td>
<td><a href="https://www.argos.co.uk/product/8818098">Buy Now</a></td>


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
  <h3>What Do Other People Think Of Ace Combat?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/playstation-4/ace-combat-7">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2019/01/18/ace-combat-7-skies-unknown-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/ace-combat-7-skies-unknown-review">PC Gamer</a></p>
</div>

    <ul class="pager">
  <li class="previous"><a href="RL.php">Previous</a></li>
  <li class="next"><a href="Godzilla.php">Next</a></li>
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