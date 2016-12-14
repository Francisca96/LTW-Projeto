<!DOCTYPE html>
<html>
	<head>
	<title>AlaDine</title>
    <meta charset="utf-8">
    <!--link rel="stylesheet" href="../css/reg_owner.css"-->
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

    <!-- <script src=""></script> -->
    <form id="form" method="post" action="../page/createRestaurant.php" onsubmit="return validateForm();">
      <h1>Add Restaurant</h1>
      <p>
        <input id="restaurant-name" type="text" name="restaurant-name" placeholder="Name" required/>
      </p>
      <p>
        <input id="restaurant-description" type="text" name="restaurant-description" placeholder="Description" required/>
      </p>
	    <p>
        <input id="restaurant-location" type="text" name="restaurant-location" placeholder="Location" required/>
      </p>
	  <p>
        <input id="restaurant-type" type="text" name="restaurant-type" placeholder="Type" required/>
      </p>
		<button type="submit">Submit</button>
    </form>
  </body>
</html>