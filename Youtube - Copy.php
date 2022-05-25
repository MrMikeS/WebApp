<?php


//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    //Page-Specific Static Content
    
    
    
    
    $tpagecontent = <<<PAGE
<div class="containerS5 text-center">
  <h1><b>Too Lazy To Read Our Reviews?</b> Dont worry, Here's the Video Version!</h1>
  <p><em>Take a look below!</em></p>




<div><h2>Skyrim Video Review<h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/bH1GUi8rNQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>



<div><h2>Battlefield V Video Review</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/mFCJfaMZjSw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div><h2>Fifa 20 Video Review<h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/GCNbhH6jq_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>



<div><h2>Jedi Fallen Order Video Review</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4M6ZBk53LMU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>





<div><h2> Assasins Creed Odyssey Video Review</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/sF99utFEfk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>




<div><h2>Fornite Video Review</h2>

<iframe width="560" height="315" src="https://www.youtube.com/embed/vlL_U07Qol4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>





<div><h2>F1 2019 Video Review</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/lV-SB2bEuN4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>



<div><h2>Rocket League Video Review</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Fj0D9_oecO4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>



<div><h2>Ace Combat 7 Video Review </h2> 

<iframe width="560" height="315" src="https://www.youtube.com/embed/JhdpQULdRn8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




<div><h2>Godzilla Video Review </h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xH-K91-c7gE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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