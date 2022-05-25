<?php
// ----INCLUDE APIS------------------------------------
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createFormPage()
{ 
    $tcontent = <<<PAGE
    <form class="form-horizontal">
	<fieldset>
		<!-- Form Name -->
		<legend>Enter new Player</legend>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="squadno">Squad Number</label>
			<div class="col-md-4">
				<input id="squadno" name="squadno" type="text" placeholder=""
					class="form-control input-md" required=""> <span class="help-block">Enter
					the Squad Number</span>
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fname">First Name</label>
			<div class="col-md-4">
				<input id="fname" name="fname" type="text" placeholder=""
					class="form-control input-md" required=""> <span class="help-block">Enter
					the Players First Name</span>
			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="lname">Last Name</label>
			<div class="col-md-4">
				<input id="lname" name="lname" type="text" placeholder=""
					class="form-control input-md" required=""> <span class="help-block">Enter
					the Player's Last Name</span>
			</div>
		</div>
        
        <!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="role">Role</label>
			<div class="col-md-4">
				<input id="role" name="role" type="text" placeholder=""
					class="form-control input-md" > 
                <span class="help-block">Enter the Player's Role</span>
			</div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="pos">Position</label>
			<div class="col-md-4">
				<select id="pos" name="pos" class="form-control">
					<option value="GK">GoalKeeper</option>
					<option value="DF">Defender</option>
					<option value="MF">Midfielder</option>
					<option value="FW">Forward</option>
					<option value="ST">Striker</option>
				</select>
                <span class="help-block">Select the Player's Position</span>
			</div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="nat">Nationality</label>
			<div class="col-md-4">
				<select id="nat" name="nat" class="form-control">
					<option value="English">English</option>
					<option value="Spanish">Spanish</option>
					<option value="German">German</option>
					<option value="Dutch">Dutch</option>
					<option value="French">French</option>
					<option value="Italian">Italian</option>
					<option value="Brazilian">Brazilian</option>
                    <option value="Argentinean">Argentinean</option>
				</select>
                <span class="help-block">Select the Player's Nationality</span>
			</div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="bio">Player Biography</label>
			<div class="col-md-4">
				<textarea class="form-control" id="bio" name="bio"></textarea>
                <span class="help-block">Enter a biography for the player</span>
			</div>
		</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="form-sub">Submit Form</label>
  <div class="col-md-4">
    <button id="form-sub" name="form-sub" type="submit" class="btn btn-danger">Add New Player</button>
  </div>
</div>
	</fieldset>
</form>
PAGE;
    return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------

session_start();
$tpagecontent = "";

if(appFormMethodIsPost())
{
    //Capture the Bio Data
    $tbio = appFormProcessData($_REQUEST["bio"]  ?? "");
    //Map the Form Data
        
    $tvalid = true;
    //TODO:  PUT SERVER-SIDE VALIDATION HERE
    
    if($tvalid)
    {
        
    } 
    else 
    {
        $tdest = appFormActionSelf();
        $tpagecontent = <<<ERROR
                         <div class="well">
                            <h1>Form was Invalid</h1>
                            <a class="btn btn-warning" href="{$tdest}">Try Again</a>
                         </div>
ERROR;
    }
}
else
{
    //This page will be created by default.
    $tpagecontent = createFormPage();
}
$tpagetitle = "Player Entry Page";
$tpagelead = "";
$tpagefooter = "";

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tpage = new MasterPage($tpagetitle);
// Set the Three Dynamic Areas (1 and 3 have defaults)
if (! empty($tpagelead))
    $tpage->setDynamic1($tpagelead);
$tpage->setDynamic2($tpagecontent);
if (! empty($tpagefooter))
    $tpage->setDynamic3($tpagefooter);
    // Return the Dynamic Page to the user.
$tpage->renderPage();

?>