<?php
	include_once('../database/databaseInteraction.php');
	
	function makeReview(){
	
	$review_critic=htmlspecialchars($_POST['criticReview']);
	$score=htmlspecialchars($_POST['score']);
	$id_restaurant=htmlspecialchars($_POST['id']);
	//$username= VER COMO BUSCAR UTILIZADOR
	if($review_critic && $score)
	{
		if(strlen($review_critic)<20)
		{
			include_once('restaurantlogin.php');
			return 'Too short. Please give a bigger critic.';
		}
		if($score<1 || $score>5)
		{
			include_once('restaurantlogin.php');
			return 'Invalid score to the restaurants. Select a new score.';
		}
		if(putReview($id_restaurant, $username, $review_critic, $score)==0) //Para já ainda não tem acesso ao utilizador depois é preciso atualizar parâmetro
		{
			return 'Review made.';
		}
		else{
			include_once('restaurantlogin.php');
			return 'The user already made a review to this restaurant.';
		}
	}
	}
?>