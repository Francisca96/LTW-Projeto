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

function showPrice($price) {

	if($price = "low")
		$media = "$";
	else if ($price = "medium")
		$media = "$$";
	else 
		$media = "$$$";
	
	return $media;
}



$restaurant_name=$_GET['name'];


$restauranttmpname = getRestaurantByName($restaurant_name);

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
else{
	header('Location: login.php');
}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
		<link rel="stylesheet" href="../css/restaurant_login.css">
		<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../scripts/restaurant_login.js"></script>
	</head>

	<body>

		<header>
			<nav id="menu">
				<ul>
					<a href="login.php"><img id="logo1" src="../images/logo_white.png" height="70px" width="70px"></a>
						<li><a id="login" href="profile.php"><?php echo $_SESSION['name']?></a></li>
					<li style="float:right; background-color:gray;"><a href="signout.php">Logout</a></li>
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
				<li><div id="price"><?php echo 'Price: '.showPrice($restaurant_price) ?></div></li>
				<li><div id="phone"><?php echo 'Phone: '.$restaurant_phone ?></div></li>
				<li><div id="points"><?php echo 'Score: '.$restaurant_score ?></div></li>
			</div>
		</div>
		
			<?php 
				
				if(getOwners($restaurant_id)['ownerName'] == $_SESSION['username']){ ?>
				<div class="editBtn">

					<a class="loginBtn" data-popup-open="popup-1" href="#">Edit Restaurant</a>

				</div>
				
				<div class="popup" data-popup="popup-1">
					<div class="popup-inner">

					<form action="../page/change_restaurant_name.php<?php echo "?id=" . $restaurant_id ?>" method="post">
						<input class="inputField" type="text" id="name" required="required" name="name" placeholder="New Name">
						<input class= "editSubmit" id="submit" type="submit" value ="Change">

					</form>
					<form action="../page/change_restaurant_description.php<?php echo "?id=" . $restaurant_id ?>" method="post">
						<input class="inputField" type="text" id="desc" required="required" name="description" placeholder="New Description">
						<input class= "editSubmit" id="submit" type="submit" value ="Change">
					</form>
					
					<form action="../page/change_restaurant_contact.php<?php echo "?id=" . $restaurant_id ?>" method="post">
						<input class="inputField" type="tel" id="tel" required="required" name="telephone" placeholder="New Telephone Number">
						<input class= "editSubmit" id="submit" type="submit" value ="Change">
					</form>


					<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
					</div>
				</div>
				
				
				<?php } ?>


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
