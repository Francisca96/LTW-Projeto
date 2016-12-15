<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
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

		<h1>Expand your possibilities!</h1>
		<div id="middle">
      <div id="search-bar">
      	<form action="restaurant_login.php" method="post">
        	<input id="searchLocal" type="text" name="local_search" placeholder="Pesquisar por local..."/>
        	<input id="searchRestaurant" type="text" name="restaurant_search" placeholder="Pesquisar por restaurante..."/>
					<input id="searchBtn" type="submit" value="Search">
        </form>
			</div>
		</div>
	</body>
</html>
