<?php
   include('session.1php');
?>
<?php
    include("dbconfig.php");
       $usnn = $_GET['usn'];
   $sql = "SELECT * FROM records WHERE usn = '$usnn'";
   $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
      $name = $row["name"];
      $usn = $row["usn"];
      $email = $row["email"];
      $mno = $row["mno"];
      $gender = $row["gender"];
      $dob = $row["dob"];
      $sslc = $row["sslc"];
      $pudip = $row["pudip"];
   
      $sql2 = "SELECT * FROM be_data WHERE usn = '$usnn'";
      $result2 = mysqli_query($db,$sql2);
      $row1 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result2);
      
      $sem1o = $row1["sem1"];
      $sem2o = $row1["sem2"];
      $sem3o = $row1["sem3"];
      $sem4o = $row1["sem4"];
      $sem5o = $row1["sem5"];
      $sem6o = $row1["sem6"];
      $sem7o = $row1["sem7"];
      $sem8o = $row1["sem8"];
      $overall = $row1["overall"];
      $back = $row1["back"];
      $yop = $row1["yop"];
      $nob = $row1["nob"]; 
      $branch = $row1["branch"];
      $sem1p = $row1["sem1p"];
      $sem2p = $row1["sem2p"];
      $sem3p = $row1["sem3p"];
      $sem4p = $row1["sem4p"];
      $sem5p = $row1["sem5p"];
      $sem6p = $row1["sem6p"];
      $sem7p = $row1["sem7p"];
      $sem8p = $row1["sem8p"];
      $overall1 = $row1["overall1"];
   
   if(isset($_POST['submit'])) 
   {
      $sql = "SELECT * FROM be_data WHERE usn = '$usnn'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      $sem1o = mysqli_real_escape_string($db,$_POST['sem1o']);
      $sem2o = mysqli_real_escape_string($db,$_POST['sem2o']);
      $sem3o = mysqli_real_escape_string($db,$_POST['sem3o']);
      $sem4o = mysqli_real_escape_string($db,$_POST['sem4o']);
      $sem5o = mysqli_real_escape_string($db,$_POST['sem5o']);
      $sem6o = mysqli_real_escape_string($db,$_POST['sem6o']);
      $sem7o = mysqli_real_escape_string($db,$_POST['sem7o']);
      $sem8o = mysqli_real_escape_string($db,$_POST['sem8o']);
      $back = mysqli_real_escape_string($db,$_POST['back']);
      $nob = mysqli_real_escape_string($db,$_POST['nob']);
      $yop = mysqli_real_escape_string($db,$_POST['yop']);
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $mno = mysqli_real_escape_string($db,$_POST['mno']);
      $gender = mysqli_real_escape_string($db,$_POST['gender']);
      $dob = mysqli_real_escape_string($db,$_POST['dob']);
      $sslc = mysqli_real_escape_string($db,$_POST['sslc']);
      $pudip = mysqli_real_escape_string($db,$_POST['pudip']);
      $overall = mysqli_real_escape_string($db,$_POST['overall']);
      $sem1p = mysqli_real_escape_string($db,$_POST['sem1p']);
      $sem2p = mysqli_real_escape_string($db,$_POST['sem2p']);
      $sem3p = mysqli_real_escape_string($db,$_POST['sem3p']);
      $sem4p = mysqli_real_escape_string($db,$_POST['sem4p']);
      $sem5p = mysqli_real_escape_string($db,$_POST['sem5p']);
      $sem6p = mysqli_real_escape_string($db,$_POST['sem6p']);
      $sem7p = mysqli_real_escape_string($db,$_POST['sem7p']);
      $sem8p = mysqli_real_escape_string($db,$_POST['sem8p']);
      $overall1 = mysqli_real_escape_string($db,$_POST['overall1']);
      $sql1= "UPDATE be_data SET sem1 ='$sem1o', sem2 = '$sem2o', sem3 = '$sem3o', sem4 = '$sem4o', sem5 = '$sem5o', sem6 ='$sem6o', sem7 = '$sem7o', sem8 = '$sem8o',overall = '$overall', back = '$back', nob ='$nob', yop ='$yop', branch='$branch', sem1p ='$sem1p', sem2p = '$sem2p', sem3p = '$sem3p', sem4p = '$sem4p', sem5p = '$sem5p', sem6p ='$sem6p', sem7p = '$sem7p', sem8p = '$sem8p', overall1 = '$overall1' WHERE usn = '$usnn'";
      //$sql2= "UPDATE sem_marks_sgpa SET sem1o ='$sem1o', sem2o = '$sem2o', sem3o = '$sem3o', sem4o = '$sem4o', sem5o = '$sem5o', sem6o ='$sem6o', sem7o = '$sem7o', sem8o = '$sem8o' WHERE usn = '$usnn'";
      $sql3= "UPDATE records SET name ='$name', email ='$email', mno ='$mno', gender ='$gender', dob ='$dob', sslc ='$sslc', pudip ='$pudip' WHERE usn = '$usnn'";
      $result1 = mysqli_query($db,$sql1);
      //$result2 = mysqli_query($db,$sql2);
      $result3 = mysqli_query($db,$sql3);
      if($result1 AND $result3) 
      {       header("location: admin_home.php");   }
      
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
<body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat;  background-attachment: fixed;">
<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell mdl-cell--3-col"></div>
	  <div class="mdl-cell mdl-cell--6-col" >
		<div class="card text-center" style="margin-top:20%; margin-bottom:auto; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 30%; max-height: auto;"></center>
			<div class="card-body" >
			<form class="mdl-layout " action="" method="post" name="myform" style="text-align: left; font-weight: bolder;">	
				
					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">USN</label>
				    		<input class="mdl-textfield__input" type="text" id="usn" name="usn" value="<?php echo htmlspecialchars($usn); ?>"  style="color: blue;" disabled>
				    		
				    </div>
				 	
					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Name</label>
				    		<input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" style="color: blue;" >
				    		
			  		</div>
			 
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Email</label>
				    		<input class="mdl-textfield__input" type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" style="color: blue;" >
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Mobile Number</label>
				    		<input class="mdl-textfield__input" type="text" id="mno" name="mno" value="<?php echo htmlspecialchars($mno); ?>" style="color: blue;" >
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">Gender</label>
				    		<input class="mdl-textfield__input" type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($gender); ?>" style="color: blue;" >
				    		
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<label style="color: black;">DOB</label>
				    		<input class="mdl-textfield__input" type="text" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>" style="color: blue;" >
				    		
			  		</div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
                <label style="color: black;">Branch</label>
                <input class="mdl-textfield__input" type="text" id="branch" name="branch" value="<?php echo htmlspecialchars($branch); ?>" style="color: blue;"  disabled>
                
            </div>
				    	
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="sslc" name="sslc" value="<?php echo htmlspecialchars($sslc); ?>" style="color: blue;" pattern="^[0-9]{2,3}[.]*[0-9]*$" >
				    		<label class="mdl-textfield__label" for="sslc" style="color: black;">SSLC Percent (Don't Put %)</label>
				    		<span class="mdl-textfield__error">Invalid Format.!</span>
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="pudip" name="pudip" value="<?php echo htmlspecialchars($pudip); ?>" style="color: blue;" pattern="^[0-9]{2,3}[.]*[0-9]*$" >
				    		<label class="mdl-textfield__label" for="pudip" style="color: black;">PUC/12th/Diploma Percent (Don't Put %)</label>
				    		<span class="mdl-textfield__error">Invalid Format.!</span>
			  		</div>
          <div>
              <table width="600px;" style="text-align: center; margin-left: 20%;"">
                
                <tr>
                  <td><label style="color: black;">Semester</label></td>
                  <td><label style="color: black;">SCGPA</label></td>
                  <td><label style="color: black;">Percentage</label></td>     
                </tr>

                <tr>
                  <td ><label style="color: black;">1</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text1" name="sem1o" value="<?php echo htmlspecialchars($sem1o) ?>" style="color: blue; text-align: center;" onchange="percent()" required></td> 
                  <td><input class="mdl-textfield__input txt" type="text" id="Text2" name="sem1p" value="<?php echo htmlspecialchars($sem1p) ?>" style="color: blue; text-align: center;" onchange="percent()" required></td> 
                </tr>

                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>
          

                <tr>
                  <td><label style="color: black;">2</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text3" name="sem2o" value="<?php echo htmlspecialchars($sem2o) ?>" style="color: blue; text-align: center;" onchange="percent1()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text4" name="sem2p" value="<?php echo htmlspecialchars($sem2p) ?>" style="color: blue; text-align: center;" onchange="percent1()" required></td>
                  </tr>
              
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">3</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text5" name="sem3o" value="<?php echo $sem3o ?>" style="color: blue; text-align: center;" onchange="percent2()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text6" name="sem3p" value="<?php echo htmlspecialchars($sem3p) ?>" style="color: blue; text-align: center;" onchange="percent2()" required></td>
                  </tr>
             
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">4</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text7" name="sem4o" value="<?php echo $sem4o ?>" style="color: blue; text-align: center;" onchange="percent3()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text8" name="sem4p" value="<?php echo htmlspecialchars($sem4p) ?>" style="color: blue; text-align: center;" onchange="percent3()" required></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">5</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text9" name="sem5o" value="<?php echo $sem5o ?>" style="color: blue; text-align: center;"  onchange="percent4()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text10" name="sem5p" value="<?php echo htmlspecialchars($sem5p) ?>" style="color: blue; text-align: center;" onchange="percent4()" required></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">6</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text11" name="sem6o" value="<?php echo $sem6o ?>" style="color: blue; text-align: center;" onchange="percent5()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text12" name="sem6p" value="<?php echo htmlspecialchars($sem6p) ?>" style="color: blue; text-align: center;" onchange="percent5()" required></td>
                </tr>
              
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>
                
                <tr>
                  <td><label style="color: black;">7</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text13" name="sem7o" value="<?php echo $sem7o ?>" style="color: blue; text-align: center;" onchange="percent6()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text14" name="sem7p" value="<?php echo htmlspecialchars($sem7p) ?>" style="color: blue; text-align: center;" onchange="percent6()" required></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">8</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text15" name="sem8o" value="<?php echo $sem8o ?>" style="color: blue; text-align: center;" onchange="percent7()" required></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text16" name="sem8p" value="<?php echo htmlspecialchars($sem8p) ?>" style="color: blue; text-align: center;" onchange="percent7()" required></td>
                </tr>
              
              
        </table>
        </div>
          <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
            
              <table>
            
                <tr>
                  
                    <td><label style="color: black;">Final SGPA</label></td>
                  <td><label style="color: black;">Aggregate Percentage</label></td>
                </tr>
                <tr>  
                  <td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" ></td>
                  <td><input class="mdl-textfield__input" type="text" id="res1" name="overall1" value="<?php echo $overall1 ?>" style="color: blue;" ></td>
                </tr>
              
            </table>

            
        </div>
            

           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
              <div id="ifYes" style="">
                  <label for="back">Any Active Backlogs (YES/NO)?</label> <input class="mdl-textfield__input" type="text" id="back" name="back" value="<?php echo $back ?>" style="color: blue;"/><br />

              </div>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
              <div id="ifYes" style="">
                  <label for="nob">No. of backlogs?</label> <input class="mdl-textfield__input" type="text" id="nob" name="nob" value="<?php echo $nob ?>" style="color: blue;"/><br />

              </div>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
                <input class="mdl-textfield__input" type="text" id="yop" name="yop" value="<?php echo $yop ?>" style="color: blue;" pattern= "^201[8 9]$" >
                <label class="mdl-textfield__label" for="yop" style="color: black;">Year of Passing</label>
                
            </div>
            <div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
          <input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="submit" >  

			</form>	

               

			</div>
		</div>
	</div>	
	 <div class="mdl-cell mdl-cell--3-col">
	 				<div class="mdl-layout--large-screen-only">
					<a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: black; box-shadow: 10px 10px 5px black;margin-top:40%; margin-left: -50px;">
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