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
      $sql1 = "SELECT * FROM sem_marks_sgpa WHERE usn = '$login_session'";
      $result1 = mysqli_query($db,$sql);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      if(count){
      
      $sem1o = $row1["sem1"];
      $sem2o = $row1["sem2"];
      $sem3o = $row1["sem3"];
      $sem4o = $row1["sem4"];
      $sem5o = $row1["sem5"];
	  $sem6o = $row1["sem6"];
      $sem7o = $row1["sem7"];
      $sem8o = $row1["sem8"];
	  
      $overall = $row["overall"];
      $sem1p = $row1["sem1p"];
      $sem2p = $row1["sem2p"];
      $sem3p = $row1["sem3p"];
      $sem4p = $row1["sem4p"];
      $sem5p = $row1["sem5p"];
	  $sem6p = $row1["sem6p"];
      $sem7p = $row1["sem7p"];
      $sem8p = $row1["sem8p"];
	  
      $overall1 = $row["overall1"];


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
      $branch = mysqli_real_escape_string($db,$_POST['branch']);
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
      if($count==0)
		{ $sql1 = "INSERT INTO be_data VALUES ('$login_session','$sem1o','$sem2o','$sem3o','$sem4o','$sem5o','$sem6o','$sem7o','$sem8o','$overall','$back','$nob','$yop','$branch', '$sem1p','$sem2p','$sem3p','$sem4p','$sem5p','$sem6p','$sem7p','$sem8p', '$overall1') ";
         //$sql2 = "INSERT INTO sem_marks_sgpa VALUES ('$login_session','$sem1o','$sem2o','$sem3o','$sem4o','$sem5o','$sem6o','$sem7o','$sem8o', $sem1p','$sem2p','$sem3p','$sem4p','$sem5p','$sem6p','$sem7p','$sem8p') ";
         }
      else
      	{$sql1= "UPDATE be_data SET sem1 ='$sem1o', sem2 = '$sem2o', sem3 = '$sem3o', sem4 = '$sem4o', sem5 = '$sem5o', sem6 ='$sem6o', sem7 = '$sem7o', sem8 = '$sem8o',overall = '$overall', back = '$back', nob ='$nob', yop ='$yop', branch='$branch', sem1p ='$sem1p', sem2p = '$sem2p', sem3p = '$sem3p', sem4p = '$sem4p', sem5p = '$sem5p', sem6p ='$sem6p', sem7p = '$sem7p', sem8p = '$sem8p', overall1 = '$overall1' WHERE usn = '$login_session'";
  		//$sql2= "UPDATE sem_marks_sgpa SET sem1o ='$sem1o', sem2o = '$sem2o', sem3o = '$sem3o', sem4o = '$sem4o', sem5o = '$sem5o', sem6o ='$sem6o', sem7o = '$sem7o', sem8o = '$sem8o', sem1p ='$sem1p', sem2p = '$sem2p', sem3p = '$sem3p', sem4p = '$sem4p', sem5p = '$sem5p', sem6p ='$sem6p', sem7p = '$sem7p', sem8p = '$sem8p' WHERE usn = '$login_session'";
  		}
      $result1 = mysqli_query($db,$sql1);
      //$result2 = mysqli_query($db,$sql2);
      if($result1) 
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
					<label style="text-align:center;"><h2>B.E Section</h2> <h3>[Put 0(zero) for SCGPA and percentage of the semester results that have not yet received. Data once entered will be frozen.]</h3></label>
					<div class="mdl-layout--large-screen-only">
					<form class="mdl-layout " action="" method="post" name="myform" id="formid" style="text-align: center; font-weight: bolder;">	
					
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
					
					<label><input type="checkbox" name="chbk" onchange="tot_percent()" required> I agree that all the information entered above is correct. I am solely responsible for any actions caused due the data entered above. It is recommended that you cross check the data you have entered. Also ensure the aggregate computed below is correct.
					</label>

					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
						
							<table>
						
				    		<tr>
				    			
				    			<td><label style="color: black;">Final SGPA</label></td>
				    			<td><label style="color: black;">Aggregate Percentage</label></td>
				    		</tr>
				    		<tr>	
				    			<td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" readonly></td>
				    			<td><input class="mdl-textfield__input" type="text" id="res1" name="overall1" value="<?php echo $overall1 ?>" style="color: blue;" readonly></td>
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
				    		<input class="mdl-textfield__input" type="text" id="yop" name="yop" pattern= "^20[1 2][0 8 9]$" required>
				    		<label class="mdl-textfield__label" for="yop" style="color: black;">Year of Passing</label>
				    		
			  		</div>
			  		<div style = "font-size:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					<input type="submit" value="Submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  mdl-cell--middle"  style="font-family: 'Orbitron',sans-serif;font-weight: bold; color:white; background-color: #000000;margin-top:10px; border-radius: 10px;" id="submit" name="continue" >	
					</form>	

				</div>



					<div class="mdl-layout--small-screen-only">

					<form class="mdl-layout" action="" method="post" name="myform" style="text-align: center; font-weight: bolder;">	
				
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
				    
				    
				<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
					<input type="checkbox" name="chbk" onchange="tot_percent()" required> I agree that all the information entered above is correct. I am solely responsible for any actions caused due the data entered above. It is recommended that you cross check the data you have entered. Also ensure the total percentage computed below (It might take sometime to compute be patient) is correct.
				</div>

					<div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--middle">
						
							<table>
						
				    		<tr>
				    			
				    			<td><label style="color: black;">Final SCGPA</label></td>
				    			<td><label style="color: black;">Aggregate Percentage</label></td>
				    		</tr>
				    		<tr>	
				    			<td><input class="mdl-textfield__input" type="text" id="res" name="overall" value="<?php echo $overall ?>" style="color: blue;" readonly></td>
				    			<td><input class="mdl-textfield__input" type="text" id="res1" name="overall1" value="<?php echo $overall1 ?>" style="color: blue;" readonly></td>
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

        function tot_percent(){
        	
        	var t1 = parseFloat(document.getElementById("Text1").value);
			var t2 = parseFloat(document.getElementById("Text3").value);
        	var t3 = parseFloat(document.getElementById("Text5").value);
        	var t4 = parseFloat(document.getElementById("Text7").value);
        	var t5 = parseFloat(document.getElementById("Text9").value);
        	var t6 = parseFloat(document.getElementById("Text11").value);
        	var t7 = parseFloat(document.getElementById("Text13").value);
        	var t8 = parseFloat(document.getElementById("Text15").value);
        	var t9 = parseFloat(document.getElementById("Text2").value);
			var t10 = parseFloat(document.getElementById("Text4").value);
        	var t11 = parseFloat(document.getElementById("Text6").value);
        	var t12 = parseFloat(document.getElementById("Text8").value);
        	var t13 = parseFloat(document.getElementById("Text10").value);
        	var t14 = parseFloat(document.getElementById("Text12").value);
        	var t15 = parseFloat(document.getElementById("Text14").value);
        	var t16 = parseFloat(document.getElementById("Text16").value);
        	var count=0, sumn=0, count1=0, sumn1= 0;
        	if (t1) {sumn=sumn+t1; count=count+1;}
        	if (t2) {sumn=sumn+t2; count=count+1;}
        	if (t3) {sumn=sumn+t3; count=count+1;}
        	if (t4) {sumn=sumn+t4; count=count+1;}
        	if (t5) {sumn=sumn+t5; count=count+1;}
        	if (t6) {sumn=sumn+t6; count=count+1;}
        	if (t7) {sumn=sumn+t7; count=count+1;}
        	if (t8) {sumn=sumn+t8; count=count+1;}
         	if (t9) {sumn1=sumn1+t9; count1=count1+1;}
        	if (t10) {sumn1=sumn1+t10; count1=count1+1;}
        	if (t11) {sumn1=sumn1+t11; count1=count1+1;}
        	if (t12) {sumn1=sumn1+t12; count1=count1+1;}
        	if (t13) {sumn1=sumn1+t13; count1=count1+1;}
        	if (t14) {sumn1=sumn1+t14; count1=count1+1;}
        	if (t15) {sumn1=sumn1+t15; count1=count1+1;}
        	if (t16) {sumn1=sumn1+t16; count1=count1+1;}
 
        	//var sum = t1+t2+t3+t4+t5+t6+t7+t8;
        	var result = (sumn/count);
        	result = result.toFixed(2);
        	document.getElementById("res").value = result;
        	var result1 = (sumn1/count1);
        	result1 = result1.toFixed(2);
        	document.getElementById("res1").value = result1;
        }
</script>
</body>
   
</html>
