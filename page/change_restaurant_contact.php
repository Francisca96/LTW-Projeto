<?php
    
	session_start();
    include_once('../database/connection.php');
    include_once('../database/databaseInteraction.php');
    
	$newContact=$_POST['telephone'];
	$restaurant_id=$_GET['id'];
	
    if (changeRestaurantContact($restaurant_id,$newContact) == 1){
		header('Location: ../page/restaurant_login.php');
    }
    else{
      echo 'Something went wrong trying to change your restaurant contact';
    }
 ?>