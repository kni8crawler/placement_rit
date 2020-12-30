<?php
   include('session.php');
?>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'password';
   $dbase = 'rit_tpo';
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
   
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/favicon.png">
	<title>RIT Placements</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="js/material.min.js"></script>
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background: url(images/back1.jpg); background-size: cover;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell"></div>
	  <div class="mdl-cell" >
		<div class="card text-center" style="margin-top:20%; margin-bottom:auto; background-color: rgba(204, 239, 255,0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 50%; max-height: auto;"></center>
			<div class="card-body" >
					
          <h3> You have successfully submitted the data, for modifications contact Placement officer</h3>
			 <h4> To view your submission click on the button below. </h4>
      <a href="pdfgen.php" target="_blank"><button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary " style="color:white;background-color: black; box-shadow: 10px 10px 5px black;border-radius: 10px; ">Entered details</button></a>
      </div>
		</div>
	</div>	
	 <div class="mdl-cell">
	 				<div class="mdl-layout--large-screen-only">
					<a href="welcome.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:20%; margin-left: -50px;">
  						<i class="material-icons" >home</i>
					</button></a>
					</div>				
					<div class="mdl-layout--small-screen-only">
					<center>
					<a href="welcome.php"><button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary " style="color:white;background-color: black; box-shadow: 10px 10px 5px black;border-radius: 10px; ">Home</button></a>
					</center>
	</div>

</div>
</body>
</html>