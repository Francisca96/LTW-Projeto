<?php

include_once('../database/connection.php');
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

function showPrice($price) {

	if($price = "low")
		$media = "$";
	else if ($price = "medium")
		$media = "$$";
	else 
		$media = "$$$";
	
	return $media;
}
	
	global $db;
    $stmt = $db->prepare("SELECT * FROM restaurant WHERE name LIKE ?");
    $stmt->execute(array($_REQUEST['query']));
    $result = $stmt->fetchAll();
	$length = sizeof($result);

	
	for($i = 0; $i < $length; $i++){ ?>
		<div class="restaurant">
			<ul>
				<h3> <a href="../page/restaurant_visitor.php?name=<?php echo $result[$i]['name'] ?>"><?php echo $result[$i]['name'] ?></a></h3>
				<h3> Score: <?php echo calculateScore($result[$i]['id']); ?></h3>
				<h3> Price: <?php echo showPrice($result[$i]['price']); ?></h3><br>
			</ul>
		</div>
		
	<?php }
	
	

?>