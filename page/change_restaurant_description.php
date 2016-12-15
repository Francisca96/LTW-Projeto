<?php
    
	session_start();
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
    
	$newDescription=$_POST['description'];
	$restaurant_id=$_GET['id'];
	
    if (changeRestaurantDescription($restaurant_id,$newDescription) == 1){
		header('Location: ../page/restaurant_login.php');
    }
    else{
      echo 'Something went wrong trying to change your restaurant description';
    }
 ?>