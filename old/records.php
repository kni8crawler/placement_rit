<?php
   include('session.php');
?>
<?php
   include("dbconfig.php");
   $sql = "SELECT * FROM records WHERE usn = '$login_session'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
    $name = $row["name"];
   $usn = $row["usn"];
  $email = $row["email"];
   $mno = $row["mno"];
      $gender = $row["gender"];
      $dob = $row["dob"];
   $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
   if($requestMethod == "POST") {
      // username and password sent from form 
      
      $sslc = mysqli_real_escape_string($db,$_POST['sslc']);
      $pudip = mysqli_real_escape_string($db,$_POST['pudip']);
      $yop = mysqli_real_escape_string($db,$_POST['yop']);
      $aadhaar = mysqli_real_escape_string($db,$_POST['aadhaar']);
      $back = mysqli_real_escape_string($db,$_POST['back']);
      $sql1 = "UPDATE records SET  sslc='$sslc', pudip='$pudip', aadhaar='$aadhaar' WHERE usn = '$login_session' ";
      $result1 = mysqli_query($db,$sql1);
      if($result1) 
      {    header("location: records1.php");
    mysqli_close();
         exit();
      }
      
      else
      	$error = "Invalid Submission!!!";
  }
?>
<html>
   
   <head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Records Section</title>
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
   <style>
   
 </style>
   </head>
<body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat;">
<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell"></div>
	  <div class="mdl-cell" >
		<div class="card text-center" style="margin-top:20%; margin-bottom:auto; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 50%; max-height: auto;"></center>
			<div class="card-body" >
					<form class="mdl-layout " action="" method="post" name="myform" style="text-align: left; font-weight: bolder;">	
				
					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">USN</label>
				    		<input class="mdl-textfield__input" type="text" id="usn" name="usn" value="<?php echo htmlspecialchars($usn); ?>"  style="color: blue;" disabled>
				    		
				    </div>
				 	
					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Name</label>
				    		<input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" style="color: blue;" disabled>
				    		
			  		</div>
			 
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Email</label>
				    		<input class="mdl-textfield__input" type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" style="color: blue;" disabled>
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Mobile Number</label>
				    		<input class="mdl-textfield__input" type="text" id="mno" name="mno" value="<?php echo htmlspecialchars($mno); ?>" style="color: blue;" disabled>
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Gender</label>
				    		<input class="mdl-textfield__input" type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($gender); ?>" style="color: blue;" disabled>
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">DOB</label>
				    		<input class="mdl-textfield__input" type="text" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" style="color: blue;" disabled>
				    		
			  		</div>
				    	
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="sslc" name="sslc" pattern="^[0-9]{2,3}[.]*[0-9]*$" >
				    		<label class="mdl-textfield__label" for="sslc" style="color: black;">SSLC Percent (Don't Put %)</label>
				    		<span class="mdl-textfield__error">Invalid Format.!</span>
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="pudip" name="pudip" pattern="^[0-9]{2,3}[.]*[0-9]*$" >
				    		<label class="mdl-textfield__label" for="pudip" style="color: black;">PUC/12th/Diploma Percent (Don't Put %)</label>
				    		<span class="mdl-textfield__error">Invalid Format.!</span>
			  		</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="aadhaar" name="aadhaar" pattern="^[0-9]{12}$"  >
				    		<label class="mdl-textfield__label" for="aadhaar" style="color: black;">Aadhaar Number:</label>
						<span class="mdl-textfield__error">Invalid Format.!</span>
			  		</div>

			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Continue" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="continue" >	
					</form>	

               

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
 
<script type="text/javascript">
	 $(".mdl-textfield__input").blur(function (){
    if( !this.value ){
        $(this).prop('required', true);
        $(this).parent().addClass('is-invalid');
    }
});
$(".mdl-button[type='submit']").click(function (event){
    $(this).siblings(".mdl-textfield").addClass('is-invalid');
    $(this).siblings(".mdl-textfield").children(".mdl-textfield__input").prop('required', true);
});
</script>   
</body>
   
</html>
