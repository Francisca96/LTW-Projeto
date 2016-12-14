<?php

include_once('../database/databaseInteraction.php');

function calculateScore($restaurant_id) {

	$reviews = getRestaurantReviews($restaurant_id);
	$count = 0;
	$score = 0;
	for($i = 0; $i < sizeof($reviews); $i++){
		$score += $reviews[$i]['value'];
		$count += 1;
	}
	$media = $score/$count;
	return $media;

}


$restaurant_name=$_POST['restaurant_search'];
$restaurant_localation=$_POST['local_search'];

$restauranttmpname = getRestaurantByName($restaurant_name);
$restauranttmplocation = getRestaurantByLocation($restaurant_localation);


if($restauranttmpname != NULL)
{
	$restaurant_id = $restauranttmpname['id'];
	$restaurant_name = $restauranttmpname['name'];
	$restaurant_location = $restauranttmpname['location'];
	$restaurant_type = $restauranttmpname['type'];
	$restaurant_description = $restauranttmpname['description'];
	$restaurant_score = calculateScore($restaurant_id);
	$restaurant_reviews = getRestaurantReviews($restaurant_id);

}
else if($restauranttmplocation != NULL)
	{
		$restaurant_id = $restauranttmplocation['id'];
		$restaurant_name = $restauranttmplocation['name'];
		$restaurant_location = $restauranttmplocation['location'];
		$restaurant_type = $restauranttmplocation['type'];
		$restaurant_description = $restauranttmplocation['description'];
		$restaurant_score = calculateScore($restaurant_id);
		$restaurant_reviews = getRestaurantReviews($restaurant_id);
	}
	else
	{
	header('Location: visitor.php');
	}



?>
<!DOCTYPE html>
<html>

	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
		<link rel="stylesheet" href="../css/restaurant_visitor.css">
	</head>

	<body>
		<table class="logo">
			<caption style="color:white; font-size:20px; font-weight:lighter;" align="bottom">AlaDine</caption>
			<tr><td><a href="visitor.php"><img src="../images/logo_white.png" alt="owner" height="70px" width="70px"></a></td></tr>
		</table>
		<header>
			<nav id="menu">
				<ul>
					<li><a>Visitor</a></li>
					<li style="float:right; background-color:gray;"><a href="main.php">Login/Register</a></li>
				</ul>
			</nav><br>
		</header>

		<div id="middle">
    	<div id="restaurant">
			<div id="name"><?php echo $restaurant_name ?></div>
				<!-- Fotos em slide show -->
      	<img src="../images/kika.png">
        <div id="location"><?php echo 'Location: '.$restaurant_location ?></div>
		<div id="type"><?php echo 'Type: '.$restaurant_type ?></div>
		<div id="description"><?php echo 'Description: '.$restaurant_description ?></div>
		<div id="points"><?php echo 'Score: '.$restaurant_score ?></div>
		<div id="reviews">
		<?php
			for($i = 0; $i < sizeof($restaurant_reviews); $i++){
			?>
			<div id="review_username"><?php echo 'Username: '.$restaurant_reviews[$i]['username']?></div>
			<div id="review_value"><?php echo 'Score: '.$restaurant_reviews[$i]['value'] ?></div>
			<div id="review_text"><?php echo 'Review: '.$restaurant_reviews[$i]['text'] ?></div>
		<?php
			}
		?>
		</div>
    	</div>
		</div>
		<div id="text">You must Login to do a review</div>
	</body>
</html>
