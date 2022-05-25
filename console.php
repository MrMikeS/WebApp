<?php 
//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------

function createPage()
{

    //Construct the Page
$tcontent = <<<PAGE
   
<section class="row details" id="Console Summary">
   
<div class="panel">
<div class ="panel heading">
<h3 class="panel-title"><b><i>Console Information</b></i></h3>
</div>
      <div class="panel-body">
        <p>The <b>PlayStation 4</b> (officially abbreviated as PS4) is an eighth-generation home video game console developed by Sony Interactive Entertainment. Announced as the successor to the PlayStation 3 in February 2013, 
it was launched on November 15 in North America, November 29 in Europe, South America and Australia, and on February 22, 2014 in Japan. It's the 4th best-selling console of all time. It competes with Microsoft's Xbox One and Nintendo's Wii U and Switch.</p>

 
<p>Moving away from the more complex Cell microarchitecture of its predecessor, the console features an AMD Accelerated Processing Unit (APU) built upon the x86-64 architecture, which can theoretically peak at 1.84 teraflops; AMD stated that it was the "most powerful" APU 
it had developed to date. The PlayStation 4 places an increased emphasis on social interaction and integration with other devices and services, including the ability to play games off-console on PlayStation Vita and other supported devices ("Remote Play"), the ability to stream gameplay online or to friends,
 with them controlling gameplay remotely ("Share Play"). The console's controller was also redesigned and improved over the PlayStation 3, with improved buttons and analog sticks, and an integrated touchpad among other changes. The console also supports HDR10 High-dynamic-range video and playback of 4K resolution multimedia.</p>


 
<p>The PlayStation 4 was released to critical acclaim, with critics praising Sony for acknowledging its consumers' needs, embracing independent game development, and for not imposing the restrictive digital rights management schemes like those originally announced by Microsoft for the Xbox One. Critics and third-party studios
 also praised the capabilities of the PlayStation 4 in comparison to its competitors; developers described the performance difference between the console and Xbox One as "significant" and "obvious".Heightened demand also helped Sony top global console sales. By the end of September 2019, over 102 million PlayStation 4 consoles had been shipped worldwide, surpassing lifetime sales of the PlayStation 3.</p> 


<p>On September 7, 2016, Sony unveiled the PlayStation 4 Slim, a smaller version of the console; and a high-end version called the PlayStation 4 Pro, which features an upgraded GPU and a higher CPU clock rate to support enhanced performance and 4K resolution in supported games</p>
   





<p>Both these PS4 models play the same games, support the same peripherals, and give you access to the same PlayStation Store – but when it comes to the look and feel of the games you actually play, that's when picking one console or the other really matters.
The PS4 Pro, the newer of the two consoles, is Sony's premium offering. It plays games in a higher resolution (up to 4K) and often in High Dynamic Range (HDR). It's a little more expensive, but that's because it uses slightly improved hardware to get better results in terms of performance – it's not the PS5, but it's closer.
The older Sony PS4 (Slim) is the standard version of Sony's fourth major home console (not counting the short-lived PlayStation TV). It's a huge step up from the PS3, with a whole new set of games, and is largely considered to be the winner in the current console wars with the Xbox One.</p>

    </div>
    </div>
</section>
     




<img src = "img/master/PS4console.jpg">




<article class="index-table5">

<table class= "table table-bordered table-condensed table-hover">

<tr>
<th>Console</th>
<th>Release Date</th>
<th>Capacity</th>
<th>4K?</th>
<th>GPU</th>

</tr>

<tr>
<td>PS4</td>
<td>15.09.2016</td>
<td>500GB</td>
<td>No</td>
<td>AMD Radeon 1.84 TFLOPs</td>
</tr>
<tr>
<td>PS4 Pro</td>
<td>10.11.2016</td>
<td>1TB</td>
<td>Yes</td>
<td>AMD Radeon 4.2 TFLOPs</td>
</tr>
</table>
</article>
PAGE;

return $tcontent;
}

//----BUSINESS LOGIC---------------------------------
//Start up a PHP Session for this user.
session_start();

//Build up our Dynamic Content Items. 
$tpagetitle = "Console Information";
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