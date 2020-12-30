<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'password';
   $dbase = 'rit_tpo';
   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
   
   $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;

   if($requestMethod == "POST") {
      // username and password sent from form 
      
      $old_password = mysqli_real_escape_string($db,$_POST['old_pass']); 
      $confirm_password = mysqli_real_escape_string($db,$_POST['confirm_pass']); 
      $password = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT * FROM login WHERE pass = '$old_password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      $old_pass = $row["pass"]; 
      $usn = $row["usn"];
      $password = crypt($password);
      // If result matched $myusername and $mypassword, table row must be 1 row
		  $sql1 = "UPDATE login SET pass='$password' WHERE usn='$usn'";
      $result1 = mysqli_query($db,$sql1);
      $sql2 = "UPDATE login SET first_time='0' WHERE usn='$usn'";
      $result2 = mysqli_query($db,$sql2);
      if($result2 && $count==1) {
         //session_register("myusn");
         header("location: welcome.php");
      	exit();
      }
      else {
         $error = "Password change unsuccessfull!!!";
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

<body style="background: url(images/back1.jpg);background-size: cover;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell"></div>
	  <div class="mdl-cell" >
		<div class="card text-center" style="margin-top:20%; margin-bottom:auto; background-color: rgba(204, 239, 255,0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 50%; max-height: auto;"></center>
			<div class="card-body" >
					<form class="mdl-layout " action="" method="post" name="myform">	
				  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
                <input class="mdl-textfield__input" type="Password" id="pass" name="old_pass" required>
                <label class="mdl-textfield__label" for="old_pass" style="color: black;">Old Password</label>
            </div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
                <input class="mdl-textfield__input" type="Password" id="pass" name="pass" required>
                <label class="mdl-textfield__label" for="pass" style="color: black;">New Password</label>
            </div>
				 	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
                <input class="mdl-textfield__input" type="Password" id="pass" name="confirm_pass" required>
                <label class="mdl-textfield__label" for="confirm_pass" style="color: black;">Confirm Password</label>
            </div>
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >	
					</form>	

               

			</div>
		</div>
	</div>	
	    <div class="mdl-cell">
          <div class="mdl-layout--large-screen-only">
          <a href="index.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary" style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:15%; margin-left: -50px;">
              <i class="material-icons" >home</i>
          </button></a>
          </div>
          <div class="mdl-layout--small-screen-only">
          <center>
          <a href="index.php"><button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary " style="color:white;background-color: black; box-shadow: 10px 10px 5px black;border-radius: 10px;  margin-bottom:10%;">Home</button></a>
          </center>
          </div>
  </div>
</div>
</body>
</html>
