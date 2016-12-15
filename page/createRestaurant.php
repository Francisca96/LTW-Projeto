<?php
	session_start();
	
	include_once('../database/connection.php');
	include_once('../database/databaseInteraction.php');
	

	$restaurantName=$_POST['name'];
	$description=$_POST['description'];
	$location=$_POST['location'];
	$tel=$_POST['telephone'];
	$price=$_POST['price'];
	$type=$_POST['type'];


	
	putRestaurant($restaurantName,$location,$type,$description,$tel,$price);
	$restaurant = getRestaurantByName($restaurantName);
	$restaurantid = $restaurant['id'];
	putOwnerRestaurant($restaurantid,$_SESSION['username']);
	header('Location: ../page/profile.php');
	
?>