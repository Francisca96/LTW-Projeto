<?php
    
	session_start();
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
    
	$newName=$_POST['name'];
	$restaurant_id=$_GET['id'];
	
    if (changeRestaurantName($restaurant_id,$newName) == 1){
		header('Location: ../page/restaurant_login.php');
    }
    else{
      echo 'Something went wrong trying to change your restaurant name';
    }
 ?>