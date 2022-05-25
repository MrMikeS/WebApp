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
<h1>Fifa 20: The Review <small>A Beautiful Game</small></h1>

</div>
<p class="lead">Classic Fifa with everything and more</p>
</div>


<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:80%">
    <span class=>An Epic 8.8</span>
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
<td>FIFA 20</td>
<td>27.09.2019</td>
<td>Sports/Multiplayer</td>
<td>U</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-fifa.jpg">


</div>

<div class ="col-sm-6">
<p> <p>Gameplay changes to FIFA 20 focus primarily on a new feature titled VOLTA Football. The mode, which translates to 'return' in Portuguese, focuses on street football rather than the traditional matches associated with the FIFA series. It includes several options to play in three versus three, four versus four and five versus five matches,
 as well as with professional futsal rules. The mode will incorporate the same engine, but places emphasis on skill and independent play rather than tactical or team play.
Additionally, players have the option to customise their player by gender, clothing, shoes, hats and tattoos. Following the completion of the three-part series "The Journey" in FIFA 19, players can now have a similar storyline mode in VOLTA Football, which would be played with the player's own character.
Changes were also made to the traditional 11 versus 11 mode to encourage more one-on-ones and off-the-ball space creation. New penalty and free-kick mechanics were implemented and updates were made to the ball physics
VOLTA Football includes 17 locations, with each providing a unique experience. As well as a generic warehouse and parking lot, players can also compete in Amsterdam, Barcelona, Berlin, Buenos Aires, Cape Town, Lagos, London, Los Angeles, Mexico City, Miami, New York City, Paris, Rio de Janeiro, Rome and Tokyo. 
Commentary is once again provided by Martin Tyler and Alan Smith and alternating with Derek Rae and Lee Dixon for all competitions, with Alan McInally providing in-game score updates. 

</p>
<p>Pro clubs is a game mode in FIFA 20 where players can create personalised pros and compete in a squad against other squads online. The objective is to rise up the Divisions, starting in Division 10 and climbing to compete for the Division 1 title. 
Ultimate Team
Ultimate Team features 88 icon players, including 15 new names. Carlos Alberto, John Barnes, Kenny Dalglish, Didier Drogba, Michael Essien, Garrincha, Pep Guardiola, Kaká, Ronald Koeman, Andrea Pirlo, Ian Rush, Hugo Sánchez, Ian Wright, Gianluca Zambrotta and Zinedine Zidane all feature as icons for the first time.
Two new game modes – King of the Hill and Mystery Ball – are also incorporated in Ultimate Team following their previous inclusion in kick-off mode.Mystery Ball gives the attacking side boosts to passing, shooting, dribbling, speed or all attributes, adding unpredictability to every match.King of the Hill sees players fight for possession in a randomly generated zone on the pitch to boost the amount the next goal is worth. Ultimate Team also includes a new dedicated kit supporting Premier League's no room for racism campaign.
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
<td>£32.99</td>
<td><a href="https://www.game.co.uk/en/fifa-20-2622573?msclkid=f5e864b038f5105f73783a0854b2a142&utm_source=bing&utm_medium=cpc&utm_campaign=Shopping%7C%7CSoftware&utm_term=4580496728260865&utm_content=SOFTWARE%20-%20Mint%20Catalogue">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£32.99</td>
<td><a href="https://www.amazon.co.uk/Electronic-Arts-1056021-FIFA-PS4/dp/B07RX7FZHQ">Buy Now</a></td>

</tr>

<tr>
<td>ARGOS.CO.UK</td>
<td>£49.99</td>
<td><a href="https://www.argos.co.uk/product/3246500">Buy Now</a></td>


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
<a href="Fifa20.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>

  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of FIFA 20?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href="https://www.metacritic.com/game/playstation-4/fifa-20">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2019/09/19/fifa-20-review">IGN Review</a></p>
  <p><a href="https://www.pcgamer.com/fifa-20-review">PC Gamer</a></p>
</div>




<ul class="pager">
  <li class="previous"><a href="BattlfieldV.php">Previous</a></li>
  <li class="next"><a href="JediFO.php">Next</a></li>
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