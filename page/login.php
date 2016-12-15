<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../scripts/search.js"></script>
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

		<h1>Expand your possibilities!</h1>
		<div class="search-box">
			<input type="text" autocomplete="off" placeholder="Search restaurant..." />
        <div class="result"></div>
		</div>
	</body>
</html>
