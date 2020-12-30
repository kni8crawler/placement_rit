<?php
   include('session.php');
?>
<?php
   include("dbconfig.php");
    $sql = "SELECT name FROM records WHERE usn = '$login_session'";
    $x=session_id();
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
    $name = $row["name"];
    // If result matched $myusername and $mypassword, table row must be 1 row
    $sql1 = "SELECT usn FROM be_data WHERE usn = '$login_session'";  
    $result1 = mysqli_query($db,$sql1);
    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
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
      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myidname" style="border: none;background: none;">   
    <h4 style="color: white"> Welcome <br/><span class="glyphicon glyphicon-user"></span > <?php echo $name ?></h4>
        </button> 
        
    </div>
    <div class="navbar-collapse collapse" id="myidname" style="border:none;color: #FFFFFF;">   
      
      <div class="nav navbar-nav  navbar--right" style="color: white; margin-left:50%;" >
        
        <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
      </div>
    </div>  

 </div>
<div class="container"  style="color: #DC3D24;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   
    <div class="carousel-inner  c1">
      <div class="item active">
        <img src="images/1.png" alt="c1" style="width:100%; height:500px;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="c2" style="width:100%; height:500px;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="c3" style="width:100%; height:500px;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    
  </div>
<div class="row" style="margin-top: 3%; ">
  <div class="col-sm-6 col-lg-9">
    <div class="card car1">
      <a href="<?php echo $redirect ?>"><img class="card-img-top" src="images/aca1.jpg" alt="Card image cap" style="height: 340px;"></a>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="row">
    <div class="card car1">
      <a href="jobs.php"><img class="card-img-top" src="images/emp1.jpg" alt="Card image cap" style=""></a>
     </div> 
    </div>
    <div class="row">
    <div class="card car1">
      <a href="test_area.php"><img class="card-img-top" src="images/test.jpg" alt="Card image cap" style=""></a>
     </div> 
    </div>
  </div>
</div>
<div class="row" style="margin-top: 3%; ">
  <div class="col-sm-6 col-lg-6">
    <div class="card car1">
      <a href="gallery.php" target="_blank"><img class="card-img-top" src="images/gal.jpg" alt="Card image cap" style="height: 300px;"></a>
    </div>
  </div>
  <div class="col-sm-6 col-lg-6">
    <div class="card car1">
      <a href="pdfgen.php" target="_blank"><img class="card-img-top" src="images/doc.jpeg" alt="Card image cap" style="height: 300px;"></a>
      
    </div>
  </div>
</div>

</div>  
<script type="text/javascript">
  $('.carousel').carousel('cycle')
</script>
     
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>    
</body>
   
</html>