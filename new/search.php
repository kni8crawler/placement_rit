<?php
{
include("session1.php");
}
?>
<?php
   include("dbconfig.php");  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Search Records</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
    <script type="text/javascript" src="js/material.min.js"></script>
    
</head>
<body style="background: url(images/back1.jpg); background-size: cover;  background-attachment: fixed;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell"></div>
	  <div class="mdl-cell" >
		<div class="card text-center" style="margin-top:10%; background-color: rgba(204, 239, 255,0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 50%; max-height: auto;"></center>
			<div class="card-body" >
				<h3 align="center">Search Record</h3>
				<form class="mdl-layout " action="search1_new.php" method="POST" name="myform">	
			  		
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<label style="color: black;">SSLC %</label><br/>
				    		<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="sslc" value="^[6-9][0-9]|^100" >60+
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="sslc" value="^6[5-9]|^[7-9][0-9]|^100">65+
							</label>
			  	    			<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="sslc" value="^[7-9][0-9]|^100">70+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="sslc" value="^7[5-9]|^[8-9][0-9]|^100">75+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="sslc" value=".*" required>No cutoff
							</label>
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<label style="color: black;">PUC/XII/DIPLOMA %</label><br/>
				    		<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="pudip" value="^[6-9][0-9]|^100">60+
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="pudip" value="^6[5-9]|^[7-9][0-9]|^100">65+
							</label>
			  	    			<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="pudip" value="^[7-9][0-9]|^100">70+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="pudip" value="^7[5-9]|^[8-9][0-9]|^100">75+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="pudip" value=".*" required>No cutoff
							</label>
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<label style="color: black;">B.E Aggregate %</label><br/>
				    		<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="overall1" value="^[6-9][0-9]|^100">60+
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="overall1" value="^6[5-9]|^[7-9][0-9]|^100">65+
							</label>
			  	    			<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="overall1" value="^[7-9][0-9]|^100">70+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="overall1" value="^7[5-9]|^[8-9][0-9]|^100">75+
							</label>
								<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="overall1" value=".*" required>No cutoff
							</label>
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="font-weight: bolder">
					    		<label>Branch</label>
					    		<select name="branch" >
							    <option value=".*" name="branch" required>All Branches</option>
							    <option value="CIVIL ENGINEERING" name="branch">CIVIL ENGINEERING</option>
							    <option value="COMPUTER SCIENCE & ENGINEERING" name="branch">COMPUTER SCIENCE & ENGINEERING</option>

							    <option value="ELECTRONICS & COMMUNICATION ENGINEERING" name="branch">ELECTRONICS & COMMUNICATION ENGINEERING</option>
							    <option value="ELECTRONICS & ELECTRICAL ENGINEERINGG" name="branch">ELECTRONICS & ELECTRICAL ENGINEERING</option>
							    <option value="INFORMATION SCIENCE & ENGINEERING" name="branch">INFORMATION SCIENCE & ENGINEERING</option>
							    <option value="MECHANICAL & ENGINEERING" name="branch">MECHANICAL ENGINEERING</option>

							    </select>
			  		</div>	

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<label style="color: black;">Number of Backlogs Allowed</label><br/>
				    		<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="nob" value="0" required>0
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="nob" value="[0 1]" >1
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="nob" value="[0 1 2]" >2
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="nob" value="[0 1 2 3]" >3
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="nob" value="[0 1 2 3 4]" >4
							</label>
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<label style="color: black;">Year of Passing</label><br/>
				    		<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="yop" value="2018" required>2018
							</label>
							<label class="radio-inline" style="font-weight: bolder;">
							   <input type="radio" name="yop" value="2019">2019
							</label>
			  		</div>
			  		
			  		
			  		
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Search" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >	
				</form>	

			</div>
		</div>
	</div>	
	 <div class="mdl-cell">
	 				<div class="mdl-layout--large-screen-only">
					<a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary" style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:10%; margin-left: -50px;">
  						<i class="material-icons" >home</i>
					</button></a>
					</div>
					
</div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    </body>
</html>