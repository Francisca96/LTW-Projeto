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
		<table class="logo">
			<caption style="color:white; font-size:20px; font-weight:lighter;" align="bottom">AlaDine</caption>
			<tr><td><a href="visitor.php"><img src="../images/logo_white.png" alt="owner" height="70px" width="70px"></a></td></tr>
		</table>
		<header>
			<nav id="menu">
				<ul>
					<li><a href="profile.php"><?php echo $_SESSION['name']?></a></li>
					<li style="float:right; background-color:gray;"><a href="visitor.php">Logout</a></li>
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
