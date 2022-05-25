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
<h1>Assassins Creed Odyssey: The Review <small> Your own Odyssey Awaits!</small></h1>

</div>
<p class="lead"> A Superb Addition to the franchise!</p>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <span class>8.0! Ubisoft have done it again!</span>
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
<td>05.10.2018</td>
<td>Action RPG</td>
<td>16</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/AC-480x360.jpg">


</div>

<div class ="col-sm-6">
<p> <p>Assassin's Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. 
It is the eleventh major installment, and 21st overall, in the Assassin's Creed series and the successor to 2017's Assassin's Creed Origins. 
Set in the years 431-422 BCE, the plot tells a mythological history of the Peloponnesian War between Athens and Sparta. 
Players control a male or female mercenary who fights for both sides as they attempt to unite their family. </p>
<p>Assassin's Creed Odyssey places more emphasis on role-playing elements than previous games in the series. The game contains dialogue options, branching quests and multiple endings.
 The player is able to choose between siblings Alexios and Kassandra as to whom they use as the main character. 
The game features a notoriety system in which mercenaries chase after the player if they commit crimes like killing or stealing in the presence of others.
 
The player character is a Greek mercenary and a descendant of the Spartan king Leonidas I.
 They inherit his broken spear, which is forged into a blade to become a weapon that grants the player special abilities in combat.
 The game uses a skill tree system that allows the player to unlock new abilities. The three skill trees are "hunter", which focuses on ranged attacks through the use of a bow & arrow,
 "warrior", which focuses on weapons-based combat (swords, spears, axes etc.), and "assassin", which focuses on stealth and silent take-downs.
</p>

<p> Its a really fun game like all the others in the series. It has some great DLCs for it too. You can play this for days and days! The beautiful lands of ancient greece are yours to save or to destory. We give this game 8/10. Buy it! </p>

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
<td>£17.99</td>
<td><a href="https://www.game.co.uk/en/assassins-creed-odyssey-2388064?msclkid=2a5cff2887f81009bb25a190fa0f6143&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£40.99</td>
<td><a href="https://www.amazon.co.uk/Ubisoft-300100862-Assassins-Creed-Odyssey/dp/B07DJ1PVJG">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£21.99</td>
<td><a href="https://www.argos.co.uk/product/8371157">Buy Now</a></td>


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
<a href="ACO.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>




  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Assassins Creed Odyssey?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/playstation-4/assassins-creed-odyssey">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2018/10/01/assassins-creed-odyssey-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/assassins-creed-odyssey-review">PC Gamer</a></p>
</div>

<ul class="pager">
  <li class="previous"><a href="JediFO.php">Previous</a></li>
  <li class="next"><a href="Fortnite.php">Next</a></li>
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