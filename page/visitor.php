<!DOCTYPE html>
<html>
	<head>
		<title>Bloom</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/visitor.css">
	</head>
	<body>
		<!-- <img id= "logo" src="../images/logo.png"/> -->
    <div>
			<input id="logReg" value="Login/Register" type="button"  onclick="window.location.href='../main.php';">
    </div>
		<img id= "logo" src="../images/logo.png"/>
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
