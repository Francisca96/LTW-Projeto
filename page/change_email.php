<?php
    
	session_start();
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
    
	$newEmail=$_POST['email'];
	
    if (changeUserEmail($_SESSION['username'],$newEmail) == 1){
      header('Location: ../page/profile.php');
    }
    else{
      echo 'Something went wrong trying to change your email';
    }

 ?>