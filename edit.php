<?php
   include('session1.php');
?>
<?php
    include("dbconfig.php");
    $sql = "SELECT name FROM admin_login WHERE name = '$login_session1'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
    $name = $row["name"];
    // If result matched $myusername and $mypassword, table row must be 1 row
    $count = mysqli_num_rows($result1);
    if($count==1)
    {$redirect='records2.php';}
    else
    {$redirect='records.php';}
    
?>
<html>
   
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Welcome </title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="custom.css">
    <link rel="shortcut icon" href="images/favicon.png">
    <link ref="stylesheet" href="css/material.min.css">
    <link ref="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/material.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script type="text/javascript" src="js/material.min.js"></script>
   <style>
   .navh {
algin:left;}
.dnav{
  border:none;
  width:100%;
}
.car1{
  background-color: transparent;
}
.c1 {
  
  margin-top: 5%;
 }
a { color: #FFFFFF; text-decoration: }
a:hover {color: #DC3D24;}
    @media (max-width: 2000px) {
    .navbar-header {
        float: none;
    }
    .navbar-toggle {
        display: block;
    }

    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin: 7.5px -15px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .navbar-text {
        float: none;
        margin: 15px 0;
    }
    /* since 3.1.0 */
    .navbar-collapse.collapse.in { 
        display: block!important;
    }
    .collapsing {
        overflow: hidden!important;
    }
 </style>
 
   </head>
<body style="background: url(images/back1.png); background-size: cover; background-repeat:  no-repeat; background-attachment: fixed;">
 <div class="navbar navbar-inverse  pull-right" role="navigation" style="width:15%;background-color: transparent;border: none;background: none; " > 
    <div class="navbar-header">
   <a href="admin_home.php"><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--primary " style="background-color: white; box-shadow: 10px 10px 5px black;margin-top:20%; margin-left: -50px;">
              <i class="material-icons" style="color: black;">home</i>
          </button></a>
    </div>
    <div class="navbar-collapse collapse" id="myidname" style="border:none;color: #FFFFFF;">   
      
      <div class="nav navbar-nav  navbar--right" style="color: white; margin-left:50%;" >
        
        <a href="logout1.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </div>
    </div>  

 </div>
<div class="container"  style="color: #DC3D24;">
<div class="row" style="margin-top: 20%; margin-bottom: 20%;">
  <div class="col-sm-6 col-lg-6">
    
      <a href="editp.php"><img class="card-img-top" src="images/password.jpg" alt="Card image cap" style="height: 300px;  border-radius: 10%; box-shadow: 10px 10px 5px black; margin-bottom: 10px;width:500px;" ></a>
    
  </div>
  <div class="col-sm-6 col-lg-6">
    
      <a href="editr.php"><img class="card-img-top" src="images/srec.png" alt="Card image cap" style="height: 300px; border-radius: 10%; box-shadow: 10px 10px 5px black; margin-left:10px;width:500px;"></a>
      
    
  </div>
</div>

</div>  

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>    
</body>
   
</html>