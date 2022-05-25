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
<h1>Fortnite: The Review <small> Battle Royale is Here!</small></h1>

</div>
<p class="lead"> Taking the world by Storm but Its all about Surviving the Storm in this game!</p>
</div>
<section>



<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:65%">
    <span class=>Another Classic! You cant go wrong here 7.5! </span>
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
<td>Fortnite</td>
<td>2017</td>
<td>Online Multiplayer</td>
<td>PG</td>
<td>PS4,Xbox,PC,Mobile</td>
</tr>
</table>
</article>

<img src="img/master/480x360-fort.jpg">


</div>

<div class ="col-sm-6">
<p>Fortnite is an online video game developed by Epic Games and released in 2017. It is available in three distinct game mode versions 
that otherwise share the same general gameplay and game engine: Fortnite: Save the World, a cooperative shooter-survival game for up to four players
 to fight off zombie-like creatures and defend objects with fortifications they can build; Fortnite Battle Royale, a free-to-play battle royale game where up to 100 
players fight to be the last person standing;
 and Fortnite Creative, where players are given complete freedom to create worlds and battle arenas.</p>

<p>Battle Royale is a player-versus-player game for up to 100 players, allowing one to play alone, in a duo, or in a squad (usually consisting of three or four players).
 Weaponless players airdrop from a "Battle Bus" that crosses the game's map. When they land, they must scavenge for weapons, items, resources,
 and even vehicles while trying to stay alive and to attack and eliminate other players. Over the course of a round, the safe area of the map 
shrinks down in size due to an incoming toxic storm; players outside that threshold take damage and can be eliminated if they fail to quickly evacuate.
 This forces remaining players into tighter spaces and encourages player encounters. The last player, duo, or squad remaining is the winner.</p>


<p> I never thought I'd enjoy this game but then I played it. There is something about being in the last 10 people out of 100 at the start, really thrilling. The only downside to this game 
is the amount of in game advertising for the Battlepass. Its easy to see how kids can spend so much on their parents credit cards! Great game but be careful of the V Bucks </p>
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
<td>FREE</td>
<td><a href="https://www.epicgames.com/fortnite">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>FREE</td>
<td><a href="https://www.epicgames.com/fortnite">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>FREE</td>
<td><a href="https://www.epicgames.com/fortnite">Buy Now</a></td>


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
<a href="Fortnite.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>



  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Fortnite?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/pc/fortnite">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2018/03/27/fortnite-battle-royale-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/fortnite-review">PC Gamer</a></p>
</div>





<ul class="pager">
  <li class="previous"><a href="ACO.php">Previous</a></li>
  <li class="next"><a href="F1.php">Next</a></li>
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