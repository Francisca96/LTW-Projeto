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
	$restaurant_phone = $restauranttmpname['phone'];
	$restaurant_price = $restauranttmpname['price'];
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
		$restaurant_phone = $restauranttmplocation['phone'];
		$restaurant_price = $restauranttmplocation['price'];
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

		<header>
			<nav id="menu">
				<ul>
					<a href="visitor.php"><img id="logo1" src="../images/logo_white.png" height="70px" width="70px"></a>
					<li id="visitor">Visitor</li>
					<li style="float:right; background-color:gray;"><a href="main.php">Login/Register</a></li>
				</ul>
			</nav><br>
		</header>

			<div id="name"><?php echo $restaurant_name ?></div><br><br>
			<div id="restaurant">
				<div>
      		<img src="../images/restaurant.png" id="image">
				</div>
				<div id="bi">
        	<li><div id="location"><?php echo 'Location: '.$restaurant_location ?></div></li>
					<li><div id="type"><?php echo 'Type: '.$restaurant_type ?></div></li>
					<li><div id="description"><?php echo 'Description: '.$restaurant_description ?></div></li>
					<li><div id="price"><?php echo 'Price: '.$restaurant_price ?></div></li>
					<li><div id="phone"><?php echo 'Phone: '.$restaurant_phone ?></div></li>
					<li><div id="points"><?php echo 'Score: '.$restaurant_score ?></div></li>
				</div>
			</div>

			<div id="text">You must <a href="main.php">login</a> to do a review</div>

			<div id="reviews">
			<?php
				for($i = 0; $i < sizeof($restaurant_reviews); $i++){
			?>
				<div id="oneReview">
					<div id="review_username"><?php echo $restaurant_reviews[$i]['username']?></div><br>
					<div id="review_value"><?php echo 'Score: '.$restaurant_reviews[$i]['value'] ?></div>
					<div id="review_text"><?php echo 'Review: '.$restaurant_reviews[$i]['text'] ?></div>
				</div>
			<?php
				}
			?>


  		</div>

	</body>
</html>
