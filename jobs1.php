<?php
{
include("session1.php");
}
?>
<?php
   include("dbconfig.php");
   	  $sslc = mysqli_real_escape_string($db,$_POST['sslc']);
      $pudip = mysqli_real_escape_string($db,$_POST['pudip']);
      $overall = mysqli_real_escape_string($db,$_POST['overall']);
      $back = mysqli_real_escape_string($db,$_POST['back']);
      $yop = mysqli_real_escape_string($db,$_POST['yop']);
      $branch = mysqli_real_escape_string($db,$_POST['branch']);
      $sql = "SELECT r.name, r.usn, r.email, r.mno, r.sslc, r.pudip, b.branch, b.overall, b.back, b.yop, b.branch FROM records r, be_data b WHERE r.usn = b.usn AND r.sslc REGEXP '$sslc' AND r.pudip REGEXP '$pudip' AND b.overall REGEXP '$overall' AND b.back REGEXP '$back' AND b.yop REGEXP '$yop' AND b.branch REGEXP '$branch'";

   	  $result = mysqli_query($db,$sql);
      $rows = mysqli_num_rows($result); 
  if($_POST['req']){
  if($rows > 0){
    $delimiter = ",";
    $filename = "rit_student_record_" . date('Y-m-d H:i:s') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('Name', 'USN', 'Email', 'Phone', 'SSLC', 'PUC/XII/Diploma', 'Branch', 'B.E', 'Backlog Present', 'Year of Passing');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['name'], $row['usn'], $row['email'], $row['mno'], $row['sslc']."%", $row['pudip']."%", $row['branch'], $row['overall']."%", $row['back'], $row['yop']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;
}
?>
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
 <body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat; background-attachment: fixed;">
<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell mdl-cell--2-col"></div>
	  <div class="mdl-cell mdl-cell--8-col" >
		<div class="card text-center" style="margin-top:20%; margin-bottom:auto; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 15%; max-height: auto;"></center>
			<div class="card-body" >
				<h3 align="center">UPCOMING DRIVES</h3>
			<table align="center" cellspacing="5px">
				<tr>
					<th style="width:10%;border: 1px solid black;color: blue; text-align: center;">COMPANY NAME</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">ROLE</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">WEBSITE</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">JOB DESCRIPTION</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">PACKAGE</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">CONSTRAINTS</th>
					<th style="border: 1px solid black;color: blue; text-align: center;">DRIVE DATE</th>
				</tr>
			<?php
			for ($j = 0 ; $j < $rows; $j++)
			{

      			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				echo "<tr>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['cname']."</td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['role']."</td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['website']."</td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'><a href='files/".$row['jd']."'></a></td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['pack']."%</td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['const']."%</td>";
				echo "<td style='width:10%;border: 1px solid black;color: blue; text-align: center;'>".$row['dd']."</td>";
				echo "</tr>";
			}
			?>
			</table>
			<form action="" method="post">
				<input type="submit" value="Generate CSV" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="req" name="req" >
			</form>
			</div>
		</div>
	</div>	
	 <div class="mdl-cell mdl-cell--2-col">
	 				<div class="mdl-layout--large-screen-only">
					<a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;">
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
 <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</head>
</html>