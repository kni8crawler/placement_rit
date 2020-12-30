<?php
   include('session.php');
?>
<?php
   include("dbconfig.php");
   $sql = "SELECT * FROM be_data WHERE usn = '$login_session'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);
      $sql1 = "SELECT * FROM sem_marks WHERE usn = '$login_session'";
      $result1 = mysqli_query($db,$sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      if(count){
      $sem1 = $row["sem1"];
      $sem2 = $row["sem2"];
      $sem3 = $row["sem3"];
      $sem4 = $row["sem4"];
      $sem5 = $row["sem5"];
	  $sem6 = $row["sem6"];
      $sem7 = $row["sem7"];
      $sem8 = $row["sem8"];
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

      $overall = $row["overall"];
      }
      else
      	echo "data error";
   $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
   if($requestMethod == "POST") {
      // username and password sent from form 
      $sql = "SELECT * FROM be_data WHERE usn = '$login_session'";
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
      $branch = mysqli_real_escape_string($db,$_POST['branch']);
      $overall = mysqli_real_escape_string($db,$_POST['overall']);
      if($count==0)
		{ $sql1 = "INSERT INTO be_data VALUES ('$login_session','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$overall','$back','$nob','$yop','$branch') ";
         $sql2 = "INSERT INTO sem_marks VALUES ('$login_session','$sem1o','$sem1m','$sem2o','$sem2m','$sem3o','$sem3m','$sem4o','$sem4m','$sem5o','$sem5m','$sem6o','$sem6m','$sem7o','$sem7m','$sem8o','$sem8m') ";
         }
      else
      	{$sql1= "UPDATE be_data SET sem1 ='$sem1', sem1 = '$sem2', sem3 = '$sem3', sem4 = '$sem4', sem5 = '$sem5', sem6 ='$sem6', sem7 = '$sem7', sem8 = '$sem8',overall = '$overall', back = '$back', nob ='$nob', yop ='$yop', branch='$branch' WHERE usn = '$login_session'";
  		$sql2= "UPDATE sem_marks SET sem1o ='$sem1o', sem2o = '$sem2o', sem3o = '$sem3o', sem4o = '$sem4o', sem5o = '$sem5o', sem6o ='$sem6o', sem7o = '$sem7o', sem8o = '$sem8o', sem1m ='$sem1m', sem2m = '$sem2m', sem3m = '$sem3m', sem4m = '$sem4m', sem5m = '$sem5m', sem6m ='$sem6m', sem7m = '$sem7m', sem8m = '$sem8m' WHERE usn = '$login_session'";}
      $result1 = mysqli_query($db,$sql1);
      $result2 = mysqli_query($db,$sql2);
      if($result1 AND $result2) 
      {    header("location: records2.php");
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
<body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat;" onload="blocking()">

<div class="content-grid mdl-grid mdl-layout mdl-js-layout">
	 <div class="mdl-cell mdl-cell--3-col"></div>
	  <div class="mdl-cell mdl-cell--6-col" >
		<div class="card" style="margin-top:10%; margin-bottom:10%; background-color: rgba(245, 245, 245, 0.5); box-shadow: 10px 10px 5px black;border: 0px;
    border-radius: 5%; ">
			<center><img class="card-img-top" src="images/logo1.png"  alt="Card image cap" style="max-width: 30%; max-height: auto;"></center>
			<div class="card-body" style="text-align: center; " >
					<label style="text-align:center;"><h2>B.E Section</h2> <h3>[Put 0(zero) for both obtained and maximum marks for the semester results not yet received. Data once entered will be frozen.]</h3></label>
					<div class="mdl-layout--large-screen-only">
					<form class="mdl-layout " action="" method="post" name="myform" id="formid" style="text-align: center; font-weight: bolder;">	
					
					<table width="600px;" style="text-align: center; margin-left: 20%;"">
					
						
				    		<tr>
				    			<td><label style="color: black;">Semester</label></td>
				    			<td><label style="color: black;">Marks Obtained</label></td>
				    			<td><label style="color: black;">Maximum Marks</label></td>
				    			
				    		</tr>

				    		<tr>
				    			<td ><label style="color: black;">1</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text1" name="sem1o" value="<?php echo htmlspecialchars($sem1o) ?>" style="color: blue; text-align: center;" onchange="percent()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text2" name="sem1m" value="<?php echo htmlspecialchars($sem1m) ?>" style="color: blue; text-align: center;" onkeyup="percent()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="txtresult" name="sem1" readonly></td>
				    			
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text4" name="sem2m" value="<?php echo htmlspecialchars($sem2m) ?>" style="color: blue; text-align: center;" onkeyup="percent1()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult1" name="sem2" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text6" name="sem3m" value="<?php echo $sem3m ?>" style="color: blue; text-align: center;" onkeyup="percent2()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult2" name="sem3" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text8" name="sem4m" value="<?php echo $sem4m ?>" style="color: blue; text-align: center;" onkeyup="percent3()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult3" name="sem4" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text10" name="sem5m" value="<?php echo $sem5m ?>" style="color: blue; text-align: center;" onkeyup="percent4()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult4" name="sem5" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text12" name="sem6m" value="<?php echo $sem6m ?>" style="color: blue; text-align: center;" onkeyup="percent5()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult5" name="sem6" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text14" name="sem7m" value="<?php echo $sem7m ?>" style="color: blue; text-align: center;" onkeyup="percent6()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult6" name="sem7" readonly></td>
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
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text16" name="sem8m" value="<?php echo $sem8m ?>" style="color: blue; text-align: center;" onkeyup="percent7()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult7" name="sem8" readonly></td>
				    		</tr>
				    	
				    	
				</table>
			
					<label><input type="checkbox" name="chbk" onchange="tot_percent()" required> I agree that all the information entered above is correct. I am solely responsible for any actions caused due the data entered above. It is recommended that you cross check the data you have entered. Also ensure the aggregate computed below is correct.
					</label>

					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
						
							<table>
						
				    		<tr>
				    			
				    			<td><label style="color: black;">Aggregate</label></td>
				    		</tr>
				    		<tr>	
				    			<td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" readonly></td>
				    		</tr>
				    	
				    </table>

				    
				</div>
					
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
					    		<label>Branch</label>
					    		<select name="branch" required>
							    <option value="">Select</option>
							    <option value="CIVIL ENGINEERING" name="branch">CIVIL ENGINEERING</option>
							    <option value="COMPUTER SCIENCE & ENGINEERING" name="branch">COMPUTER SCIENCE & ENGINEERING</option>

							    <option value="ELECTRONICS & COMMUNICATION ENGINEERING" name="branch">ELECTRONICS & COMMUNICATION ENGINEERING</option>
							    <option value="ELECTRONICS & ELECTRICAL ENGINEERINGG" name="branch">ELECTRONICS & ELECTRICAL ENGINEERING</option>
							    <option value="INFORMATION SCIENCE & ENGINEERING" name="branch">INFORMATION SCIENCE & ENGINEERING</option>
							    <option value="MECHANICAL & ENGINEERING" name="branch">MECHANICAL ENGINEERING</option>

							    </select>

							    
			  		</div>			  		

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
					    		<label>Any Active Backlogs?</label>
					    		<select onchange="yesnoCheck(this);" name="back" required>
							    <option value="">Select</option>
							    <option value="YES" name="back">YES</option>
							    <option value="NO" name="back">NO</option>
							    </select>

							    
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
			  			<div id="ifYes" style="display: none;">
							    <label for="nob">No. of backlogs?</label> <input class="mdl-textfield__input" type="text" id="nob" name="nob" value="0"/><br />

			  			</div>
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<input class="mdl-textfield__input" type="text" id="yop" name="yop" pattern= "^201[8 9]$" required>
				    		<label class="mdl-textfield__label" for="yop" style="color: black;">Year of Passing</label>
				    		
			  		</div>
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="continue" >	
					</form>	

				</div>



					<div class="mdl-layout--small-screen-only">

					<form class="mdl-layout" action="" method="post" name="myform" style="text-align: center; font-weight: bolder;">	
				
						<table >
						
				    		<tr>
				    			<td><label style="color: black;text-align: center;">Sem.</label></td>
				    			<td><label style="color: black; text-align: center;">Marks Obtained</label></td>
				    			<td><label style="color: black;text-align: center;">Maximum Marks</label></td>
				    		</tr>

				    		<tr>
				    			<td ><label style="color: black;">1</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text1" name="sem1o" value="<?php echo htmlspecialchars($sem1o) ?>" style="color: blue; text-align: center;" onchange="percent()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text2" name="sem1m" value="<?php echo htmlspecialchars($sem1m) ?>" style="color: blue; text-align: center;" onkeyup="percent()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult" name="sem1" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>

				    		<tr>
				    			<td><label style="color: black;">2</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text3" name="sem2o" value="<?php echo htmlspecialchars($sem2o) ?>" style="color: blue; text-align: center;" onchange="percent1()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text4" name="sem2m" value="<?php echo htmlspecialchars($sem2m) ?>" style="color: blue; text-align: center;" onkeyup="percent1()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult1" name="sem2" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				   
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>

				    		<tr>
				    			<td><label style="color: black;">3</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text5" name="sem3o" value="<?php echo $sem3o ?>" style="color: blue; text-align: center;" onchange="percent2()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text6" name="sem3m" value="<?php echo $sem3m ?>" style="color: blue; text-align: center;" onkeyup="percent2()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult2" name="sem3" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>

				    		<tr>
				    			<td><label style="color: black;">4</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text7" name="sem4o" value="<?php echo $sem4o ?>" style="color: blue; text-align: center;" onchange="percent3()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text8" name="sem4m" value="<?php echo $sem4m ?>" style="color: blue; text-align: center;" onkeyup="percent3()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult3" name="sem4" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>
				    		<tr>
				    			<td><label style="color: black;">5</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text9" name="sem5o" value="<?php echo $sem5o ?>" style="color: blue; text-align: center;"  onchange="percent4()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text10" name="sem5m" value="<?php echo $sem5m ?>" style="color: blue; text-align: center;" onkeyup="percent4()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult4" name="sem5" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>

				    		<tr>
				    			<td><label style="color: black;">6</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text11" name="sem6o" value="<?php echo $sem6o ?>" style="color: blue; text-align: center;" onchange="percent5()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text12" name="sem6m" value="<?php echo $sem6m ?>" style="color: blue; text-align: center;" onkeyup="percent5()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult5" name="sem6" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>
				    		<tr>
				    			<td><label style="color: black;">7</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text13" name="sem7o" value="<?php echo $sem7o ?>" style="color: blue; text-align: center;" onchange="percent6()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text14" name="sem7m" value="<?php echo $sem7m ?>" style="color: blue; text-align: center;" onkeyup="percent6()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult6" name="sem7" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
					
						<table style="text-align: center;">
						
				    		<tr>
				    			<td> <br/></td>
				    			<td> </td>
				    			<td> </td>
				    			<td> </td>
				    		</tr>
				    		<tr>
				    			<td><label style="color: black;">8</label></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text15" name="sem8o" value="<?php echo $sem8o ?>" style="color: blue; text-align: center;" onchange="percent7()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="text" id="Text16" name="sem8m" value="<?php echo $sem8m ?>" style="color: blue; text-align: center;" onkeyup="percent7()" required></td>
				    			<td><input class="mdl-textfield__input txt" type="hidden" id="txtresult7" name="sem8" readonly></td>
				    		</tr>
				    	
				    	</table>
				    
				    
				<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
					<input type="checkbox" name="chbk" onchange="tot_percent()" required> I agree that all the information entered above is correct. I am solely responsible for any actions caused due the data entered above. It is recommended that you cross check the data you have entered. Also ensure the total percentage computed below (It might take sometime to compute be patient) is correct.
				</div>

					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
						
							<table>
						
				    		<tr>
				    			
				    			<td><label style="color: black;">Aggregate</label></td>
				    		</tr>
				    		<tr>	
				    			<td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" readonly></td>
				    		</tr>
				    	
				    </table>
				</div>
				   <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
					    		<label>Any Active Backlogs?</label>
					    		<select onchange="yesnoCheck(this);" name="back" required>
							    <option value="">Select</option>
							    <option value="YES" name="back">YES</option>
							    <option value="NO" name="back">NO</option>
							    </select>

							    
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
			  			<div id="ifYes" style="display: none;">
							    <label for="nob">No. of backlogs?</label> <input class="mdl-textfield__input" type="text" id="nob" name="nob" value="0"/><br />

			  			</div>
			  		</div>

			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label  mdl-cell--middle">
				    		<<input class="mdl-textfield__input" type="text" id="yop" name="yop" pattern= "^201[8 9]$" required>
				    		<label class="mdl-textfield__label" for="yop" style="color: black;">Year of Passing</label>

			  		</div>
				    
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="continue" >	
					</form>	

               </div>

			</div>
		</div>
	</div>	
	 <div class="mdl-cell mdl-cell--3-col">
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
</div>     
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-1.8.3.min"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript">
    	function blocking()
    	{
    		var form = document.getElementsByClassName("txt");
			//var elements = form.elements;
			for (var i = 0, len = form.length; i < len; ++i) {
				var value = form[i].value;
				if (value == 0	){
			    form[i].readOnly = false;
				}
				else
				{	eval(form[i].getAttribute("onkeyup"));
					form[i].readOnly = true;
				}
			}
    	}

    </script>
    <script>
    function yesnoCheck(that) {
        if (that.value == "YES") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>
<script type="text/javascript">
	var first_number1,first_number2,first_number3,first_number4,first_number5,first_number6,first_number7,first_number8,second_number1,second_number2,second_number3,second_number4,second_number5,second_number6,second_number7,second_number8,sumn=0,sumd=0, result8, result1, result2, result3, result4, result5, result6, result7;
  		function roundup(num) {
 			 return Math.ceil(num * 100) / 100;
			}

  		function percent() {

             first_number1 = parseFloat(document.getElementById("Text1").value);
             second_number1 = parseFloat(document.getElementById("Text2").value);
             first_number1 = roundup(first_number1);
             second_number1 = roundup(second_number1);
            if(first_number1==0 || second_number1==0)
            	var result = 0;
            else
            	var result = (first_number1 / second_number1)*100;
            	
            result1 = roundup(result);
            document.getElementById("txtresult").value = result1;
        }
        function percent1() {

             first_number2 = parseFloat(document.getElementById("Text3").value);
             second_number2 = parseFloat(document.getElementById("Text4").value);
             first_number2 = roundup(first_number2);
             second_number2 = roundup(second_number2);
            if(first_number2==0 || second_number2==0)
            	var result = 0;
            else
            	var result = (first_number2 / second_number2)*100;
            result2 = roundup(result);
            document.getElementById("txtresult1").value = result;
        }
        function percent2() {

             first_number3 = parseFloat(document.getElementById("Text5").value);
             second_number3 = parseFloat(document.getElementById("Text6").value);
             first_number3 = roundup(first_number3);
             second_number3 = roundup(second_number3);
            if(first_number3==0 || second_number3==0)
            	var result = 0;
            else
            	var result = (first_number3 / second_number3)*100;
            result3 = roundup(result);
            document.getElementById("txtresult2").value = result;
        }
        function percent3() {

             first_number4 = parseFloat(document.getElementById("Text7").value);
             second_number4 = parseFloat(document.getElementById("Text8").value);
             first_number4 = roundup(first_number4);
             second_number4 = roundup(second_number4);
            if(first_number4==0 || second_number4==0)
            	var result = 0;
            else
            	var result = (first_number4 / second_number4)*100;
            result4 = roundup(result);
            document.getElementById("txtresult3").value = result;
        }
        function percent4() {

             first_number5 = parseFloat(document.getElementById("Text9").value);
             second_number5 = parseFloat(document.getElementById("Text10").value);
             first_number5 = roundup(first_number5);
             second_number5 = roundup(second_number5);
            if(first_number5==0 || second_number5==0)
            	var result = 0;
            else
            	var result = (first_number5 / second_number5)*100;
           result5 = roundup(result); 
            document.getElementById("txtresult4").value = result;
        }
        function percent5() {

             first_number6 = parseFloat(document.getElementById("Text11").value);
             second_number6 = parseFloat(document.getElementById("Text12").value);
             first_number6 = roundup(first_number6);
             second_number6 = roundup(second_number6);
            if(first_number6==0 || second_number6==0)
            	var result = 0;
            else
            	var result = (first_number6 / second_number6)*100;
            result6 = roundup(result);
            document.getElementById("txtresult5").value = result;
        }
        function percent6() {

             first_number7 = parseFloat(document.getElementById("Text13").value);
             second_number7 = parseFloat(document.getElementById("Text14").value);
             first_number7 = roundup(first_number7);
             second_number7 = roundup(second_number7);
            if(first_number7==0 || second_number7==0)
            	var result = 0;
            else
            	var result = (first_number7 / second_number7)*100;
            result7 = roundup(result);
            document.getElementById("txtresult6").value = result;
        }
        function percent7() {

             first_number8 = parseFloat(document.getElementById("Text15").value);
             second_number8 = parseFloat(document.getElementById("Text16").value);
             first_number8 = roundup(first_number8);
             second_number8 = roundup(second_number8);
            if(first_number8==0 || second_number8==0)
            	var result = 0;
            else
            	var result = (first_number8 / second_number8)*100;
            result8 = roundup(result);
            document.getElementById("txtresult7").value = result;
        }
        function tot_percent(){
        	var count=0;
        	var t1 = result1;
			var t2 = result2;
        	var t3 = result3;
        	var t4 = result4;
        	var t5 = result5;
        	var t6 = result6;
        	var t7 = result7;
        	var t8 = result8;
        	if (t1) {sumn=sumn+first_number1; sumd=sumd+second_number1; count=count+1;}
        	if (t2) {sumn=sumn+first_number2; sumd=sumd+second_number2; count=count+1;}
        	if (t3) {sumn=sumn+first_number3; sumd=sumd+second_number3; count=count+1;}
        	if (t4) {sumn=sumn+first_number4; sumd=sumd+second_number4; count=count+1;}
        	if (t5) {sumn=sumn+first_number5; sumd=sumd+second_number5; count=count+1;}
        	if (t6) {sumn=sumn+first_number6; sumd=sumd+second_number6; count=count+1;}
        	if (t7) {sumn=sumn+first_number7; sumd=sumd+second_number7; count=count+1;}
        	if (t8) {sumn=sumn+first_number8; sumd=sumd+second_number8; count=count+1;}
        	//var sum = t1+t2+t3+t4+t5+t6+t7+t8;
        	var result = (sumn/sumd)*100;
        	result = result.toFixed(2);
        	document.getElementById("res").value = result;
        }
</script>
</body>
   
</html>
