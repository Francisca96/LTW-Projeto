<?php
    session_start();
	
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
	
	
    $newPassword=htmlspecialchars($_POST['password']);
    $correctPass=getPassword($_SESSION['username']);
	

	$newPass = password_hash($newPassword, PASSWORD_DEFAULT);
		
	if (changeUserPassword($_SESSION['username'],$newPass) == 1){
		header('Location: profile.php');
    }
    else{
		echo 'Something went wrong trying to change your passsword';
	}

 ?>