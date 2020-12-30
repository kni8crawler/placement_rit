<?php
   include('session1.php');
?>
<?php
   include("dbconfig.php");
   $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
   if($requestMethod == "POST") {
      // username and password sent from form 
      
      $cname = mysqli_real_escape_string($db,$_POST['cname']);
      $role = mysqli_real_escape_string($db,$_POST['role']);
      $website = mysqli_real_escape_string($db,$_POST['website']);
      $jd = mysqli_real_escape_string($db,$_POST['jd']);
      $pack = mysqli_real_escape_string($db,$_POST['pack']);
      $const = mysqli_real_escape_string($db,$_POST['const']);
      $dd = mysqli_real_escape_string($db,$_POST['dd']);
      $skills = mysqli_real_escape_string($db,$_POST['skills']);
      $sql1 = "INSERT INTO jobsdb (cname, role, website, jd, pack, const, dd, skills) VALUES ('$cname','$role', '$website','$jd','$pack','$const', '$dd', '$skills')";
      $result1 = mysqli_query($db,$sql1);
      if($result1) 
      { 
        header("location:admin_home.php");
      }
      else
      	$error = "Invalid Submission!!!";
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Jobs Section</title>
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
<body style="background: url(images/back1.jpg); background-size: cover;">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell"></div>
	  <div class="mdl-cell" >
      <div>
    <form method="get" action="ajobsp.php">
    <input type="submit" value="Previous Drives" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style=" margin-left:35%; font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >
   </form></div>
		<div class="card text-center" style="margin-top:10%; background-color: rgba(204, 239, 255,0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 50%; max-height: auto;"></center>
			<div class="card-body" >
				<form class="mdl-layout " action="" method="POST" name="myform">	
			  		
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
				    		<input class="mdl-textfield__input" type="text" id="cname" name="cname">
				    		<label class="mdl-textfield__label" for="cname" style="color: black;">Company Name</label>
			  		</div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
            <label style="color: black;">Drive Date</label>
            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" name="dd" readonly>
                    <span class="input-group-addon  col-md-2"><span class="glyphicon glyphicon-remove" required></span></span>
          <span class="input-group-addon col-md-2"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
                <input class="mdl-textfield__input" type="text" id="role" name="role">
                <label class="mdl-textfield__label" for="role" style="color: black;">Role</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
                <input class="mdl-textfield__input" type="text" id="website" name="website">
                <label class="mdl-textfield__label" for="website" style="color: black;">Website(Don't include http://)</label>
            </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
                <input class="mdl-textfield__input" type="text" id="jd" name="jd">
                <label class="mdl-textfield__label" for="jd" style="color: black;">Job Description(Provide filename with extension)</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle" style="">
                <input class="mdl-textfield__input" type="text" id="pack" name="pack">
                <label class="mdl-textfield__label" for="pack" style="color: black;">Package</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="sonst"  name="const"></textarea>
                <label class="mdl-textfield__label" for="const" style="color: black;">Requirements(use , as a separator)</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
                <textarea class="mdl-textfield__input" type="text" rows= "3" id="skills"  name="skills"></textarea>
                <label class="mdl-textfield__label" for="skills" style="color: black;">Skills(use , as a separator)</label>
            </div>


			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >	
				</form>	

			</div>
		</div>
  </div>	
	 <div class="mdl-cell">
	 				<div class="mdl-layout--large-screen-only">
					<a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary" style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:15%; margin-left: -50px;">
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
    <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });

</script>

<script type="text/javascript">
	function validate(){
	var password = document.getElementById("pass");
   confirm_password = document.getElementById("confirm_pass");


  if(password.value != confirm_password.value) {
    alert('Passwords do not match')
  } else {
    confirm_password.setCustomValidity('');
  }
}
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