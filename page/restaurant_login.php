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
				<!-- KIKA acrescenta sitio com o nome do utilizador mete 1 À sorte para depois se meter pela base de dados -->
    	</div>
		</header>

		<!-- Por bonito KIKA nome maior e assim -->

		<div id="middle">
    	<div id="restaurant">
		<div id="name">Restaurant Name</div>
		<!-- Fotos em slide show -->
      	<img src="../images/kika.jpg">
        <div id="location">Location</div>
		<div id="points">3</div>
		<div id="reviews">Várias reviews....</div>
    	</div>
		</div>

	<!-- Mudar a action para adicionar à base de dados -->
		<form id="review" method="post" action="signup.php" onsubmit="return validateForm();">
      <h1>Your Review</h1>
      <p>
        <input id="rating" type="number" name="rating" min="1" max="5" required/>
      </p>
      <p>
        <input id="review_text" type="text" wname="review_text" placeholder="Write your review here..." required/>
      </p>
      <button type="submit">Submit</button>

    </form>

	</body>
</html>
