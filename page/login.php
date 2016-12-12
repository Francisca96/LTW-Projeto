<!DOCTYPE html>
<html>
	<head>
		<title>Bloom</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
	</head>
	<body>
		<header>
    	<div>
				<img src="../images/kika.png"/>
				<a id="username" href="profile.php">Francisca Paupério</a>
				<input id="logout" value="Logout" type="button"  onclick="window.location.href='../page/visitor.php';">
    	</div>
		</header>

		<img src="../images/logo.png"/>
		<h1>Expand your possibilities!</h1>
		<div id="middle">
    	<div id="middle-elements">
      	<div id="search-bar">
        	<form action="restaurant_login.php" method="post">
          	<input id="searchLocal" type="text" name="local_search" placeholder="Pesquisar por local..."/>
          	<input id="searchRestaurant" type="text" name="restaurant_search" placeholder="Pesquisar por restaurante..."/>
          	<input type="submit" value="Search">
        	</form>
				</div>
    	</div>
		</div>
	</body>
</html>
