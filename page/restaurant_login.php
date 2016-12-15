<?php

include_once('../database/databaseInteraction.php');
session_start();

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
		<link rel="stylesheet" href="../css/restaurant_login.css">
	</head>

	<body>

		<header>
			<nav id="menu">
				<ul>
					<a href="login.php"><img id="logo1" src="../images/logo_white.png" height="70px" width="70px"></a>
						<li><a id="login" href="profile.php"><?php echo $_SESSION['name']?></a></li>
					<li style="float:right; background-color:gray;"><a href="main.php">Logout</a></li>
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


		<h1>Your opinion:</h1>
		<form id="review" method="post" action="makereview.php?id=<?php echo $restaurant_id?>" onsubmit="return validateForm();">
			<div class="rating">
				<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
			</div>
			<p>
				<textarea name="textarea" cols="70" rows="10" placeholder="Write your review here..."></textarea>
			</p>
			<p>
			<input id="newscore" type="number" min="1" max="5" style="width:10%;" name="newscore" placeholder="Score" required/>
			</p>
			<button type="submit">Submit</button>
		</form>

		<br><h1>Reviews:</h1>
		<div id="reviews">
		<?php
			for($i = 0; $i < sizeof($restaurant_reviews); $i++){
		?>
			<div id="oneReview">
				<div id="review_username"><?php echo $restaurant_reviews[$i]['username']?></div>
				<div id="review_value"><?php echo 'Score: '.$restaurant_reviews[$i]['value'] ?></div>
				<div id="review_text"><?php echo 'Review: '.$restaurant_reviews[$i]['text'] ?></div>
			</div>
		<?php
			}
		?>
		</div>
	</body>
</html>
