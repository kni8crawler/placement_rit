<?php
   include("dbconfig.php");
   session_start();
   
   $user_check = $_SESSION['user1'];
   $usnn = $_SESSION['usnn'];
   
   $ses_sql = mysqli_query($db,"select name from admin_login where name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session1 = $row['name'];
   
$ses_sql1 = mysqli_query($db,"select usn from login where usn = '$usnn' ");
   
   $row1 = mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);
   $usnn = $row1['usn'];
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

   if(!isset($_SESSION['user1'])){
      header("location:../admin.php");
   }
?>