<?php
{
include("session.php");
}
?>
<?php
   	   include("dbconfig.php");
   	  
      $sql = "SELECT * FROM jobsdb";
	  $result = mysqli_query($db,$sql);
	  $rows = mysqli_num_rows($result); 

?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>JOBS</title>
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
 <body style="background: url(images/back1.jpg); background-size: cover; background-repeat:  no-repeat; background-attachment: fixed;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
<div class="mdl-cell mdl-cell--1-col"></div>
	  <div class="mdl-cell mdl-cell--10-col mdl-layout--large-screen-only" >
		<div class="card text-center" style="margin-top:10%; margin-bottom:10%; margin-bottom:auto; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 15%; max-height: auto;"></center>
			<div class="card-body" >
				<h3 align="center">UPCOMING DRIVES</h3>
			<table class="table table-stripped table-hover" >
				<thead>
				<tr>
					<th scope="col"">SL NO.</th>
					<th scope="col"">COMPANY NAME</th>
					<th scope="col"">ROLE</th>
					<th scope="col"">WEBSITE</th>
					<th scope="col"">JOB DESCRIPTION</th>
					<th scope="col"">PACKAGE</th>
					<th scope="col"">REQUIREMENTS</th>
					<th scope="col"">SKILLS</th>
					<th scope="col"">DRIVE DATE</th>
				</tr>
				</thead>
				<tbody>
			<?php
			for ($j = 0 ; $j < $rows; $j++)
			{

      			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				echo "<tr>";

				echo "<td scope='row'>".$row['id']."</td>";
				echo "<td >".$row['cname']."</td>";
				echo "<td >".$row['role']."</td>";
				echo "<td ><a target='_blank' style='color:red' href='http://".$row['website']."'>".$row['website']."</a></td>";
				echo "<td ><a target='_blank' style='color:red' href='files/".$row['jd']."'> Download</a></td>";
				echo "<td >".$row['pack']."</td>";
				echo "<td >".$row['const']."</td>";

				echo "<td >".$row['skills']."</td>";
				echo "<td >".$row['dd']."</td>";
				echo "</tr>";
			}
			?>
			</tbody>
			</table>
			<div>
    <form method="get" action="jobsl.php">
    <input type="submit" value="Previous Drives" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style=" font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >
   </form></div>
			</div>
		</div>
	</div>	
	 		 <div class="mdl-cell mdl-cell--1-col">
	 				<div class="mdl-layout--large-screen-only">
	 			
					<a href="welcome.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;">
  						<i class="material-icons" >home</i>
					</button></a>
					</div>				
					
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
 <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</head>
</html>