<?php
   include("dbconfig.php");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select usn from login where usn = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usn'];
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
   }
?>