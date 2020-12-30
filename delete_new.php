<?php
   include('session1.php');
?>
<?php
    include("dbconfig.php");
$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;

   if($requestMethod == "POST") {
  	  $myusn = mysqli_real_escape_string($db,$_POST['usn']);
   		$myusn = strtoupper($myusn);
        $sql = "SELECT * FROM records WHERE usn = '$myusn'";
    $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      if($count != 1) {
        $error = "Record does not exist!!!";
      }
      else{
      $sql = "DELETE FROM login WHERE usn = '$myusn'";
      $sql1 = "DELETE FROM records WHERE usn = '$myusn'";
      $sql2 = "DELETE FROM be_data WHERE usn = '$myusn'";
      $sql3 = "DELETE FROM sem_marks_sgpa WHERE usn = '$myusn'";
   	  $result = mysqli_query($db,$sql);
      $result1 = mysqli_query($db,$sql1);
      $result2 = mysqli_query($db,$sql2);
      $result3 = mysqli_query($db,$sql3);
      if($result AND $result1 || $result2 || $result3) 
      {   echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Record Deletion Successful!!!');
        window.location.replace(\"admin_home.php\");
    	</SCRIPT>";
    	mysqli_close();
       
      }
      else
      	$error = "Deletion failed.";
    }
   }
    
   
?>
<html>
   
   <head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Password Reset</title>
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
    <script type="text/javascript" src="js/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <style>
   
 </style>
   </head>
<body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat; background-attachment: fixed;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell mdl-cell--3-col"></div>
	  <div class="mdl-cell mdl-cell--6-col" >
		<div class="card" style="margin-top:10%; margin-bottom:10%; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 30%; max-height: auto;"></center>
			<div class="card-body" style="text-align: center; " >
					<div>
					<form class="mdl-layout " action="" method="POST" name="myform" id="formid" style="text-align: center; font-weight: bolder;">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="usn" name="usn" pattern="^4[R r][A a][0-9]{2}[A-Z a-z]{2,3}[0-9]{3}$">
				    		<label class="mdl-textfield__label" for="usn" style="color: black;">USN</label>
				    		<span class="mdl-textfield__error">Invalid USN!</span>
			  		</div>
			  		<br/>
			  		<input type="submit" value="Delete Record" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >
					   <div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>				    	
			  	</form>
			  		</div>
			  						

			</div>
		</div>
		</div>
	<div class="mdl-cell mdl-cell--3-col">
		<a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:20%; margin-left: -50px;">
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
    <script>
    function yesnoCheck(that) {
        if (that.value == "YES") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes1").style.display = "block";
        }
    }
</script>
</body>
</html>