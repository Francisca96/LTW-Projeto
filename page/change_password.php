<?php
    session_start();
	
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
	
	
    $actual_password=htmlspecialchars($_POST['password']);
	
    $correctPass=getPassword($_SESSION['username']);
	
	
    if(password_verify($actual_password, $correctPass)){
      $newPassword = $_POST['newpassword'];
	  
      $confNewPassword = $_POST['new_password_confirm'];
	  
	  
      if(strlen($newPassword)<8){
          echo 'Password is too short. Please choose a new one.';
      }
	  
      else if($newPassword == $confNewPassword){
		
        $newPass = password_hash($newPassword, PASSWORD_DEFAULT);
		
        if (changeUserPassword($_SESSION['email'],$newPass) == 1){
          header('Location: profile.php');
        }
        else{
          echo 'Something went wrong trying to change your passsword';
        }
      }
      else{
        echo 'New Passwords don´t match';
      }
    }
    else{
      echo 'Actual password is incorrect.';
    }
 ?>