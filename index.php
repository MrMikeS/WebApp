<?php 
//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    //Page-Specific Static Content
    
    

$tpagecontent = <<<PAGE

<h2><b><i>This Weeks Top Reviews</i></b></h2>
<div class="row">
  <div class="col-sm-4">

  <h3><b><a href ="Skyrim.php">The Elder Scrolls V:Skyrim</a></b></h3>
 <p> The Best RPG Adventure game in a generation. We Guarentee that when you start playing this game you wont put it down.It has hundreds of quests and hundreds of hours of gameplay awaiting you. Click the Link to Read More!</p>
  <img src ="img/master/300x180-sky.jpg">
  </div>
  <div class="col-sm-4">
  <h3><b><a href="JediFO.php">Jedi fallen Order</a> </b> </h3>
  <p>Activison have really gone above and beyond for this Title. After the poor reviews on Star Wars Battlefront, We expected Activision to come back fighting and they have! Check out the Review for more information! <p>
  <img src="img/master/300x180-jed.jpg">
  </div>
 
 <div class="col-sm-4">
  <h3><b><a href="ACO.php">Assasins Creed Odyssey</a></b></h3>
  <p> Have you ever wondered what it would be like to be a real life Hercules? Well imagine no longer. Our Assasins Creed Odyssey Review is here! Delve into a deep and well thought out campaign across the Greek Islands</p>
  <img src="img/master/300x180-ass.jpg">
  </div>
</div>
</div>



<div class = "container8 text-center">
<h3><b>Check Out Riot Games 2019 Year in Review</b><h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4zZblTdqEuk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
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