<!DOCTYPE html>
<html>
	<head>
		<title>Bloom</title>
    <meta charset="utf-8">
		<link rel="stylesheet" href="../css/restaurant_login.css">
	</head>
	<body>
		<header>
    	<div>

    	</div>
		</header>

		<div id="middle">
    	<div id="restaurant">
		<div id="name">Restaurant Name</div>
		<!-- Fotos em slide show -->
      	<img src="../images/kika.png">
        <div id="location">Location</div>
		<div id="points">3</div>
		<div id="reviews">Várias reviews....</div>
    	</div>
		</div>

	<!-- Mudar a action para adicionar à base de dados -->
		<form id="review" method="post" action="signup.php" onsubmit="return validateForm();">
      <h1>Your Review</h1>
			<div class="rating">
				<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
			</div>
      <p>
        <input id="review_text" type="text" wname="review_text" placeholder="Write your review here..." required/>
      </p>
      <button type="submit">Submit</button>

    </form>

	</body>
</html>
