<?php

	session_start();
	include_once('../database/databaseInteraction.php');
		
	$review_critic=$_POST['newreview_text'];
	$score=$_POST['newscore'];
	$id_restaurant=htmlspecialchars($_GET["id"]);
	$username= $_SESSION['username'];
	
	if($review_critic && $score)
	{
		if(strlen($review_critic)<5)
		{
			header('Location: ../page/restaurant_login.php');
			echo 'Too short. Please give a bigger critic.';
		}
		if($score<1 || $score>5)
		{
			header('Location: ../page/restaurant_login.php');
			echo 'Invalid score to the restaurants. Select a new score.';
		}
		if(putReview($id_restaurant, $username, $review_critic, $score)==0) //Para já ainda não tem acesso ao utilizador depois é preciso atualizar parâmetro
		{
			header('Location: ../page/restaurant_login.php');
			echo 'Review made.';
		}
		else{
			header('Location: ../page/restaurant_login.php');
			echo 'The user already made a review to this restaurant.';
		}
	}
?>