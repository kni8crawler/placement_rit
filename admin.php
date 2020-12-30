<?php
    include("dbconfig.php");
   session_start();
   $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;

   if($requestMethod == "POST") {
      // username and password sent from form 
      
      $name1 = mysqli_real_escape_string($db,$_POST['usn']);
      $password = mysqli_real_escape_string($db,$_POST['pass']); 
      $name =strtoupper($name1);
      $sql = "SELECT * FROM admin_login WHERE name = '$name' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      if($count == 1) {
         //session_register("myusn");
      	$_SESSION['user1'] = $name1;
      	
         header("location: admin_home.php");
      	
      	exit();
      	}
      else {
         $error = "Your Username or Password is invalid";
      }
   }
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
					<form class="mdl-layout " action="" method="post" name="myform">	
				
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="usn" name="usn" pattern="^[a-zA-Z0-9]*$">
				    		<label class="mdl-textfield__label" for="usn" style="color: black;">Username</label>
				    		<span class="mdl-textfield__error">Invalid USN!</span>
				    </div>
				 	
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="Password" id="pass" name="pass">
				    		<label class="mdl-textfield__label" for="pass" style="color: black;">Password</label>
			  		</div>
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >	
					</form>	

               

			</div>
		</div>
	</div>	
	 <div class="mdl-cell">
	 				
	</div>

</div>
</body>
</html>