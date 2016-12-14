<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../scripts/main.js"></script>
  </head>
  <body>
    <img id="logo" src="../images/logo.png" height="150px" width="150px">
    <div class="sitename">AlaDine</a></div>

	<div class="userBtns">

	<a class="loginBtn" data-popup-open="popup-1" href="#">Sign In</a>
	<a class="loginBtn" data-popup-open="popup-2" href="#">Register</a>

	</div>

	<div class="guestBtn">
		<a class="loginBtn" href="../page/visitor.php"> Enter as Guest</a>
	</div>

	<div class="popup" data-popup="popup-1">
		<div class="popup-inner">
		<form action="../page/signin.php" method="post">
			<input class="inputField" type="text" id="username" name="username" required="required" placeholder="Enter Username"><br>
			<input class="inputField" type="password" id="password" name="password" required="required" placeholder="Enter Password"><br><br>
			<input id="submit" type="submit" value ="Submit">
		</form>

		<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
		</div>
	</div>

	<div class="popup" data-popup="popup-2">
		<div class="popup-inner">
		<form action="../page/signin.php" method="post">
			<input class="inputField" type="text" id="name" name="name" required="required" placeholder="Your Name"><br>
			<input class="inputField" type="email" id="email" name="email" required="required" placeholder="Your Email"><br><br>
			<input class="inputField" type="text" id="username" name="username" required="required" placeholder="Your Username"><br><br>
			<fieldset name="gender">
				<legend> Your Gender </legend>
				<input type="radio" name="gender" value="male" checked> Male<br>
				<input type="radio" name="gender" value="female"> Female<br>
				<input type="radio" name="gender" value="other"> Other
			</fieldset>
			<input class="inputField" type="password" id="password" name="password" required="required" placeholder="Enter Password"><br><br>
			<input class="inputField" type="password" id="passwordConfirm" name="passwordConfirm" required="required" placeholder="Confirm Password"><br><br>
			<input id="submit" type="submit" value ="Submit">
		</form>

		<a class="popup-close" data-popup-close="popup-2" href="#">x</a>
		</div>
	</div>

  </body>
</html>
