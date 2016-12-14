<?php
    
	session_start();
    include_once('../database/actions/connection.php');
    include_once('../database/actions/user.php');
    
	$newEmail=$_POST['newemail'];
	
    if (changeUserEmail($_SESSION['username'],$newEmail) == 1){
      header('Location: ../pages/profile.php');
    }
    else{
      echo 'Something went wrong trying to change your email';
    }

 ?>