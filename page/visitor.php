<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/visitor.css">
	</head>

	<body>

		<header>
			<nav id="menu">
				<ul>
					<a href="visitor.php"><img id="logo1" src="../images/logo_white.png" height="70px" width="70px"></a>
					<li id="visitor">Visitor</li>
					<li style="float:right; background-color:gray;"><a href="main.php">Login/Register</a></li>
				</ul>
			</nav><br>
		</header>

		<h1>Expand your possibilities!</h1>
  	<div id="middle-elements">
  		<div id="search-bar">
		<form action="restaurant_visitor.php" method="post" action="restaurant_visitor.php">
      		<input id="searchLocal" type="text" name="local_search" placeholder="Search by location..."/>
        	<input id="searchRestaurant" type="text" name="restaurant_search" placeholder="Search by restaurant..."/>
			<input id="searchBtn" type="submit" value="Search">
      	</form>
			</div>
		</div>
	</body>
</html>
