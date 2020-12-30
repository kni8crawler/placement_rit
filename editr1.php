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


      $sql1 = "SELECT * FROM sem_marks WHERE usn = '$usnn'";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $sem1o = $row1["sem1o"];
      $sem2o = $row1["sem2o"];
      $sem3o = $row1["sem3o"];
      $sem4o = $row1["sem4o"];
      $sem5o = $row1["sem5o"];
      $sem6o = $row1["sem6o"];
      $sem7o = $row1["sem7o"];
      $sem8o = $row1["sem8o"];
      $sem1m = $row1["sem1m"];
      $sem2m = $row1["sem2m"];
      $sem3m = $row1["sem3m"];
      $sem4m = $row1["sem4m"];
      $sem5m = $row1["sem5m"];
      $sem6m = $row1["sem6m"];
      $sem7m = $row1["sem7m"];
      $sem8m = $row1["sem8m"];
     
      $sql2 = "SELECT * FROM be_data WHERE usn = '$usnn'";
      $result2 = mysqli_query($db,$sql2);
      $row1 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result2);
      
      $sem1 = $row1["sem1"];
      $sem2 = $row1["sem2"];
      $sem3 = $row1["sem3"];
      $sem4 = $row1["sem4"];
      $sem5 = $row1["sem5"];
      $sem6 = $row1["sem6"];
      $sem7 = $row1["sem7"];
      $sem8 = $row1["sem8"];
      $overall = $row1["overall"];
      $back = $row1["back"];
      $yop = $row1["yop"];
      $nob = $row1["nob"]; 
      $branch = $row1["branch"];
   
   if(isset($_POST['submit'])) 
   {
      $sql = "SELECT * FROM be_data WHERE usn = '$usnn'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      
      $sem1 = mysqli_real_escape_string($db,$_POST['sem1']);
      $sem2 = mysqli_real_escape_string($db,$_POST['sem2']);
      $sem3 = mysqli_real_escape_string($db,$_POST['sem3']);
      $sem4 = mysqli_real_escape_string($db,$_POST['sem4']);
      $sem5 = mysqli_real_escape_string($db,$_POST['sem5']);
      $sem6 = mysqli_real_escape_string($db,$_POST['sem6']);
      $sem7 = mysqli_real_escape_string($db,$_POST['sem7']);
      $sem8 = mysqli_real_escape_string($db,$_POST['sem8']);
      $sem1o = mysqli_real_escape_string($db,$_POST['sem1o']);
      $sem2o = mysqli_real_escape_string($db,$_POST['sem2o']);
      $sem3o = mysqli_real_escape_string($db,$_POST['sem3o']);
      $sem4o = mysqli_real_escape_string($db,$_POST['sem4o']);
      $sem5o = mysqli_real_escape_string($db,$_POST['sem5o']);
      $sem6o = mysqli_real_escape_string($db,$_POST['sem6o']);
      $sem7o = mysqli_real_escape_string($db,$_POST['sem7o']);
      $sem8o = mysqli_real_escape_string($db,$_POST['sem8o']);
      $sem1m = mysqli_real_escape_string($db,$_POST['sem1m']);
      $sem2m = mysqli_real_escape_string($db,$_POST['sem2m']);
      $sem3m = mysqli_real_escape_string($db,$_POST['sem3m']);
      $sem4m = mysqli_real_escape_string($db,$_POST['sem4m']);
      $sem5m = mysqli_real_escape_string($db,$_POST['sem5m']);
      $sem6m = mysqli_real_escape_string($db,$_POST['sem6m']);
      $sem7m = mysqli_real_escape_string($db,$_POST['sem7m']);
      $sem8m = mysqli_real_escape_string($db,$_POST['sem8m']);
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
      $sql1= "UPDATE be_data SET sem1 ='$sem1', sem1 = '$sem2', sem3 = '$sem3', sem4 = '$sem4', sem5 = '$sem5', sem6 ='$sem6', sem7 = '$sem7', sem8 = '$sem8',overall = '$overall', back = '$back', nob ='$nob', yop ='$yop' WHERE usn = '$usnn'";
      $sql2= "UPDATE sem_marks SET sem1o ='$sem1o', sem2o = '$sem2o', sem3o = '$sem3o', sem4o = '$sem4o', sem5o = '$sem5o', sem6o ='$sem6o', sem7o = '$sem7o', sem8o = '$sem8o', sem1m ='$sem1m', sem2m = '$sem2m', sem3m = '$sem3m', sem4m = '$sem4m', sem5m = '$sem5m', sem6m ='$sem6m', sem7m = '$sem7m', sem8m = '$sem8m' WHERE usn = '$usnn'";
      $sql3= "UPDATE records SET name ='$name', email ='$email', mno ='$mno', gender ='$gender', dob ='$dob', sslc ='$sslc', pudip ='$pudip' WHERE usn = '$usnn'";
      $result1 = mysqli_query($db,$sql1);
      $result2 = mysqli_query($db,$sql2);
      $result3 = mysqli_query($db,$sql3);
      if($result1 AND $result2 AND $result3) 
      {          }
      
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
                  <td><label style="color: black;">Marks Obtained</label></td>
                  <td><label style="color: black;">Maximum Marks</label></td>
                  <td><label style="color: black;">Percentage(%)</label></td>
                </tr>

                <tr>
                  <td ><label style="color: black;">1</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text1" name="sem1o" value="<?php echo htmlspecialchars($sem1o) ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text2" name="sem1m" value="<?php echo htmlspecialchars($sem1m) ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text"  id="txtresult" name="sem1" value="<?php echo htmlspecialchars($sem1) ?>" style="color: blue; text-align: center;" ></td>
                </tr>

                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>
          

                <tr>
                  <td><label style="color: black;">2</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text3" name="sem2o" value="<?php echo htmlspecialchars($sem2o) ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text4" name="sem2m" value="<?php echo htmlspecialchars($sem2m) ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult1"  name="sem2" value="<?php echo htmlspecialchars($sem2) ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">3</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text5" name="sem3o" value="<?php echo $sem3o ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text6" name="sem3m" value="<?php echo $sem3m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult2" name="sem3" value="<?php echo $sem3 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
                        
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">4</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text7" name="sem4o" value="<?php echo $sem4o ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text8" name="sem4m" value="<?php echo $sem4m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult3" name="sem4" value="<?php echo $sem4 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">5</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text9" name="sem5o" value="<?php echo $sem5o ?>" style="color: blue; text-align: center;"   ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text10" name="sem5m" value="<?php echo $sem5m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult4" name="sem5" value="<?php echo $sem5 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">6</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text11" name="sem6o" value="<?php echo $sem6o ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text12" name="sem6m" value="<?php echo $sem6m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult5" name="sem6" value="<?php echo $sem6 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>
                
                <tr>
                  <td><label style="color: black;">7</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text13" name="sem7o" value="<?php echo $sem7o ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text14" name="sem7m" value="<?php echo $sem7m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult6" name="sem7" value=" <?php echo $sem7 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
            
                <tr>
                  <td> <br/></td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                </tr>

                <tr>
                  <td><label style="color: black;">8</label></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text15" name="sem8o" value="<?php echo $sem8o ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="Text16" name="sem8m" value="<?php echo $sem8m ?>" style="color: blue; text-align: center;"  ></td>
                  <td><input class="mdl-textfield__input txt" type="text" id="txtresult7" name="sem8" value="<?php echo $sem8 ?>" style="color: blue; text-align: center;" ></td>
                </tr>
              
              
        </table>
        </div>
          <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
            
              <table>
            
                <tr>
                  
                  <td><label style="color: black;">Aggregate</label></td>
                </tr>
                <tr>  
                  <td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" ></td>
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