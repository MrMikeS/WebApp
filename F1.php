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
<h1>F1 2020: The Review <small> Ready! Set! Vroooooooooom!</small></h1>

</div>
<p class="lead"> Time to put your driving skills to the test!</p>
</div>

<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:60%">
    <span class=>Another Classic! You cant go wrong here 7.3! </span>
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
<td>F1 2019</td>
<td>20.06.2019</td>
<td>Racing</td>
<td>3+</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-f1.jpg">


</div>

<div class ="col-sm-6">
<p>F1 2019 is the official video game of the 2019 Formula One and Formula 2 Championships developed and published by Codemasters.
 It is the twelfth title in the Formula One series developed by the studio. The game was announced by Codemasters on 28 March 2019. 
The video game is the eleventh installment of the franchise, and it features all twenty-one circuits, twenty drivers and ten teams present in the 2019 Formula One World Championship. 
Codemasters has stated that the game was in development for nearly two years,
 and described it as "the most ambitious release in franchise history"</p>
<p>F1 2019 is the first game in the series to feature driver transfers, with AI-controlled drivers able to switch teams during or at the end of a championship year.
These moves will be randomly-generated rather than scripted events. 
The game includes 18 Formula 1 cars from F1 2018 from the 1972–2010 seasons, with the DLC having a focus on the careers of Alain Prost and Ayrton Senna. 
The DLC also includes the 2010 McLaren MP4-25, driven by Lewis Hamilton and Jenson Button, and the 2010 Ferrari F10, driven by Fernando Alonso and Felipe Massa.
 These cars were included to celebrate the ten-year anniversary of Codemasters releasing the Formula 1 game on the seventh and eighth generations of consoles.
 Two Ferrari cars, however, are noticeably absent. These are the 2002 Ferrari F2002, and the 1995 Ferrari 412 T2. 
Players are able to design liveries—including fictional sponsors—for a generic 2019 car in multiplayer modes.</p>

<p> Its a great racing game as we expected. Online is brilliant and frustrating, nothing like taking the lead early on and defending your position for the next five laps. Lives up to its Hype! if you want to race online, play F1 2019</p>

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
<td>£52.99</td>
<td><a href="https://www.game.co.uk/en/f1-2019-anniversary-edition-2600637">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£49.98</td>
<td><a href="https://www.amazon.co.uk/F1-2019-Anniversary-PS4/dp/B07Q6GN4BK">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£33.99</td>
<td><a href="https://www.argos.co.uk/product/1345939">Buy Now</a></td>


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
<a href="F1.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>



  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of F1 2019?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/playstation-4/f1-2019">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2019/07/04/f1-2019-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/f1-2019-review">PC Gamer</a></p>
</div>
<ul class="pager">
  <li class="previous"><a href="fortnite.php">Previous</a></li>
  <li class="next"><a href="RL.php">Next</a></li>
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