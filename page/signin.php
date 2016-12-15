<?php

  include_once('../database/connection.php');
  include_once('../database/databaseInteraction.php');

  $username=$_POST['username'];
  $password=$_POST['password'];
  $correctPass = getPassword($username);
  
  
  if (strlen($username) != 0 && password_verify($password, $correctPass)){
	
	session_start();
	
    $userInfo = getUserInfo($username);

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $userInfo['name'];

       header("Location: ../page/login.php");

  }
  else{
	  
    header("Location: ../page/main.php");
	
  }

?>
