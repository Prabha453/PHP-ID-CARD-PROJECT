<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["uid"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');
?>