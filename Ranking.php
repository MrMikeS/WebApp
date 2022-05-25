<?php 
//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    //Page-Specific Static Content
    
    

$tpagecontent = <<<PAGE

<article class="index-table">

<table class= "table table-bordered table-hover">

<tr>
<th>Rank</th>
<th>Title</th>
<th>Publisher</th>
<th>Score</th>

</tr>

<tr>
<td>1.</td>
<td><a href="Skyrim.php">Skyrim</a></td>
<td>Bethesda</td>
<td>9/10</td>
</tr>

<tr>
<td>2.</td>
<td><a href="BattlfieldV.php">Battlefield V</a></td>
<td>Dice</td>
<td>8.8/10</td>
</tr>

<tr>
<td>3.</td>
<td><a href="Fifa20.php">Fifa 20</a></td>
<td>EA Sports</td>
<td>8.8/10</td>
</tr>


<tr>
<td>4.</td>
<td><a href="JediFO.php">Jedi Fallen Order</a></td>
<td>EA</td>
<td>8.5/10</td>
</tr>
<tr>
<td>5.</td>
<td><a href="ACO.php">Assasins Creed Odyssey</a></td>
<td>Ubisoft</td>
<td>8.0/10</td>
</tr>

<tr>
<td>6.</td>
<td><a href="Fortnite.php">Fortnite</a></td>
<td>Epic Studios</td>
<td>7.5/10</td>
</tr>

<tr>
<td>7.</td>
<td><a href="F1.php">F1 2020</a></td>
<td>EA</td>
<td>7.3/10</td>
</tr>


<tr>
<td>8.</td>
<td><a href="RL.php">RocketLeague</a></td>
<td>EA</td>
<td>7.0/10</td>
</tr>


<tr>
<td>9.</td>
<td><a href="AC7.php">Ace Comabt 7</a></td>
<td>NAMCO</td>
<td>6.5/10</td>
</tr>


<tr>
<td>10.</td>
<td><a href="Godzilla.php">Godzilla</a></td>
<td>NAMCO</td>
<td>3.0/10</td>
</tr>

</table>

</article>


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