<?php
    
	session_start();
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
    
	$newName=$_POST['name'];
	
    if (changeUserName($_SESSION['username'],$newName) == 1){
		$_SESSION['name'] = $newName;
		header('Location: ../page/profile.php');
    }
    else{
      echo 'Something went wrong trying to change your email';
    }
 ?>