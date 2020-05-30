<?php
   include('php/Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from login_details where Uname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Uname'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: ./login.php");
      die();
   }
?>