<?php
    
	session_start();
    include_once('../database/actions/connection.php');
    include_once('../database/actions/user.php');
    
	$newName=$_POST['newname'];
	
    if (changeUserName($_SESSION['username'],$newName) == 1){
      header('Location: ../pages/profile.php');
    }
    else{
      echo 'Something went wrong trying to change your email';
    }
 ?>