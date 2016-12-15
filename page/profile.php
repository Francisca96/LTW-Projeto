<?php

include_once('../database/databaseInteraction.php');

session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/profile.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../scripts/profile.js"></script>


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

		<div id="middle">
			<div id="profile">

					<?php if(getUserInfo($_SESSION['username'])['gender'] == "female"){?>
					<img src="../images/woman.png">
					<?php
				}else if($_SESSION['username'] == "FilipeCorreia"){?>

					<img src="../images/filipe.png" height="147px" width="147px">
					<?php
				}else{?>
					<img src="../images/man.png">
					<?php }?>


				<div id="type"><?php echo getUserInfo($_SESSION['username'])['user_type']?></div>
				<div id="name"><?php echo getUserInfo($_SESSION['username'])['name']?></div>
				<div id="email"><?php echo getUserInfo($_SESSION['username'])['email']?></div>

				<div class="editBtn">
					<a data-popup-open="popup-1" href="#">Edit Information</a>
				</div>

				<div class="editBtn">
					<a data-popup-open="popup-2" href="#">Change Password</a>
				</div>


				<div class="editBtn">
					<a data-popup-open="popup-3" href="#">New Restaurant</a>
				</div>

				<div class="editBtn">
					<a data-popup-open="popup-4" href="#">Remove Restaurant</a>
				</div>


				<div class="popup" data-popup="popup-1">
					<div class="popup-inner">

					<form action="../page/change_name.php" method="post">
						<input class="inputField" type="text" id="name" required="required" name="name" placeholder="New Name">
						<input class= "editSubmit" id="submit" type="submit" value ="Change">

					</form>
					<form action="../page/change_email.php" method="post">
						<input class="inputField" type="email" id="email" required="required" name="email" placeholder="New Email">
						<input class= "editSubmit" id="submit" type="submit" value ="Change">
					</form>

					<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
					</div>
				</div>

				<div class="popup" data-popup="popup-2">
					<div class="popup-inner">
					<form action="../page/change_password.php" onsubmit="return validate(this);" method="post">
						<input class="inputField" type="password" minlength="8" id="password" name="password" required="required" placeholder="New Password">
						<input class="inputField" type="password" id="passwordConfirm" name="passwordConfirm" required="required" placeholder="Confirm Password"><br>
						<input id="submit" type="submit" value ="Submit">
					</form>

					<a class="popup-close" data-popup-close="popup-2" href="#">x</a>
					</div>
				</div>

				<div class="popup" data-popup="popup-3">
					<div class="popup-inner">
					<form action="../page/createRestaurant.php" method="post">
						<input class="inputField" type="text" minlength="2" required="required" name="name" placeholder="Restaurant Name">
						<input class="inputField" type="text" required="required" name="location" placeholder="Location">
						<input class="inputField" type="text" required="required" name="description" placeholder="Description">
						<input class="inputField" type="tel" required="required" name="telephone" placeholder="Telephone Number">
						<fieldset name="price">
							<legend> Price: </legend>
							<input type="radio" name="price" value="high"> High
							<input type="radio" name="price" value="medium" checked> Medium
							<input type="radio" name="price" value="low"> Low
						</fieldset>


						<select name="type">
							<option value="Family Restaurant" checked>Family Restaurant</option>
							<option value="Snack Bar">Snack Bar</option>
							<option value="Caffé">Caffé</option>
							<option value="Tea house">Tea house</option>
							<option value="Casual Meals">Casual Meals</option>
							<option value="Bar">Bar</option>
							<option value="Pastry Shop">Pastry Shop</option>
							<option value="Fast Food">Fast Food</option>
							<option value="Bakery">Bakery</option>
							<option value="Deserts">Deserts</option>
							<option value="Pub">Pub</option>
							<option value="Gourmet">Gourmet</option>
							<option value="Winehouse">Winehouse</option>
							<option value="Ice Cream Shop">Ice Cream Shop</option>
							<option value="Food Truck">Food Truck</option>
						</select><br><br>
						<input id="submit" type="submit" value ="Submit">
					</form>

					<a class="popup-close" data-popup-close="popup-3" href="#">x</a>
					</div>
				</div>

				<div class="popup" data-popup="popup-4">
					<div class="popup-inner">
					<form action="../page/signin.php" method="post">
						<input class="inputField" type="text" id="username" name="username" required="required" placeholder="Enter Username">
						<input class="inputField" type="password" id="password" name="password" required="required" placeholder="Enter Password"><br>
						<input id="submit" type="submit" value ="Submit">
					</form>

					<a class="popup-close" data-popup-close="popup-4" href="#">x</a>
					</div>
				</div>




			</div>
		</div>


  		<div id="restaurants">Restaurants</div>
			<!-- Mais a baixo opções como titulo, pode editar dados ou criar restaurante -->
    	<div id="options">
				<div id="title-options">Options</div>
		</div>

      	<div id="edit">
        	<input type="button" value="Edit" onclick="window.location.href='profile_edit.php';">
      	</div>




		<div id="down-part">
			<!-- Lista restaurantes que ja avaliou -->
		</div>
	</body>
</html>
