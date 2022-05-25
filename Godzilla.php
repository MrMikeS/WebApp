<?php


//----INCLUDE APIS------------------------------------
include("api/api.inc.php");

//----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    //Page-Specific Static Cont
    
    
    
    
    
    
    
    $tpagecontent = <<<PAGE
    
    



<div class="container">
    <div class="row" id="bigCallout4">
<div class="col-12">
<div class= "well">
<div class="page-header">
<h1>Godzilla: The Review <small> The Big Lizard is back and He's Angry at NAMCO!</small></h1>

</div>
<p class="lead"> One of the Worst Games I've Ever Played</p>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
  aria-valuemin="0" aria-valuemax="100" style="width:30%">
    <span class=>Not Worth the Time or the Money! </span>
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
<td>Godzilla</td>
<td>14.07.2015</td>
<td>Action Adventure</td>
<td>16+</td>
<td>PS4,Xbox,PC</td>
</tr>
</table>
</article>

<img src="img/master/480x360-zilla.jpg">


</div>

<div class ="col-sm-6">
<p> Godzilla is a 2014 video game developed by Natsume and published by Bandai Namco Games for the PlayStation 3 and PlayStation 4 based on the Japanese monster
 Godzilla franchise by Toho and has no connection to the 2014 film of the same name. It was first released on December 18, 2014 in Japan only for the PlayStation 3. It was released on July 14, 2015 in North America and on July 17, 2015 in Europe. The Western PlayStation 4 version is based on the upgraded Japanese release called Godzilla VS,
 released on July 14, 2015, containing more content such as additional monsters. </p>
<p> This Honestly is one the worst ever PS4 games. Its gathered a cult following because its so bad! If you look below at the prices you can see that its now very expensive and very rare due to the fact there are so few copies left out there </p>
<p><b>TRUST ME! Its not worth the plastic its stored on so dont bother ever buying it!<b></p>

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
<td>OUT OF STOCK</td>
<td><a href="https://www.game.co.uk/en/godzilla-323963">Buy Now</a></td>

</tr>

<tr>
<td>AMAZON.CO.UK</td>
<td>£129.18</td>
<td><a href="https://www.amazon.co.uk/Namco-Bandai-1063296-Godzilla-PS4/dp/B00SD9IIJU">Buy Now</a></td>

</tr>



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
<a href="Godzilla.php"><input type="submit" name="dsubmit" id="commentSubmit" value="Submit Review"></a>
<input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>



</div>


  <div class="containerS1 text-center">
  <h3>What Do Other People Think Of Godzilla?</h3>
  <p><em>Check Out Some Other Reviews!</em></p>
  <p><a href=https://www.metacritic.com/game/playstation-4/godzilla">Metacritic Review</a></p>
  <p><a href="https://www.ign.com/articles/2019/05/30/godzilla-king-of-the-monsters-review">IGN Review</a></p>
  <p><a href="https://www.gamespot.com/reviews/godzilla-review/1900-6416191">GameSpot</a></p>
</div>








<ul class="pager">
  <li class="previous"><a href="AC7.php">Previous</a></li>
  <li class="next"><a href="Ranking.php">Next</a></li>
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