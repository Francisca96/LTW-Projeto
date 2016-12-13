<?php

  include_once('../database/databaseInteraction.php');
  include_once('../database/connection.php');

  $username=$_POST['Username'];
  $password=$_POST['Password'];
  $correctPass = getPassword($username);


  if (strlen($username) != 0 && password_verify($password, $correctPass)){
	
	session_start();
	
    $userInfo = getUserInfo($username);

    $_SESSION['username'] = $username;
    $_SESSION['name'] = $userInfo['name'];
    $_SESSION['id'] = $userInfo['id'];

    header('Location: login.php');
  }
  else{
    echo "Username or Password incorrect";
	
  }

?>
