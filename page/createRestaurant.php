<?php
	session_start();
	
	include_once('../database/databaseInteraction.php');
	

	$restaurantName=$_POST['restaurant-name'];
	$description=$_POST['restaurant-description'];
	$location=$_POST['restaurant-location'];
	$type=$_POST['restaurant-type'];
	
	echo 'NOME RESTAURANTE: '.$_POST['restaurant-name'];
	echo $description;
	
	if($restaurantName && $description && $location && $type)
	{
		if(strlen($restaurantName)<4)
		{
			echo 'Restaurant name should be bigger.';
		}
		if(putRestaurant($restaurantName,$location,$type,$description)==0)
		{
			header('Location: profile.php');
		}
		else {
			echo 'falhou insert';
		}
	}
	
?>