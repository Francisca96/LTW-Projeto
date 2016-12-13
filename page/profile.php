<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/profile.css">
	</head>

	<body>
		<table class="logo">
			<caption style="color:white; font-size:20px; font-weight:lighter;" align="bottom">AlaDine</caption>
			<tr><td><a href="visitor.php"><img src="../images/logo_white.png" alt="owner" height="70px" width="70px"></a></td></tr>
		</table>
		<header>
			<nav id="menu">
				<ul>
					<li><a href="profile.php">Francisca Paupério</a></li>
					<li style="float:right; background-color:gray;"><a href="visitor.php">Logout</a></li>
				</ul>
			</nav><br>
		</header>

		<div id="middle">
    	<div id="profile">
      	<img src="../images/kika.png">
				<div id="type">Owner</div>
        <div id="name">Francisca Paupério</div>
        <div id="email">franciscapauperio@gmail.com</div>
    	</div>
		</div>

<!-- Meter funçao changePassword -->

		<div class="overlayChangePassword">
    	<div id="overlay-changePassword">
      	<div id="changePassword"></div>
        	<form id="form" method="post" action="../actions/change_password.php" onsubmit="return changePassword();">
        		<a id="password" href="profile_edit.php">Change password</a>
        	</form>
    	</div>
		</div>

		<div id="down-part">
			<!-- Lista restaurantes que ja avaliou -->
  		<div id="restaurants">Restaurants</div>
			<!-- Mais a baixo opções como titulo, pode editar dados ou criar restaurante -->
    	<div id="options">
				<div id="title-options">Options</div>
      	<div id="edit">
        	<input type="button" value="Edit" onclick="window.location.href='profile_edit.php';">
      	</div>
    		<div>
      		<input type="button" value="Create restaurant">
    		</div>
			</div>
		</div>
	</body>
</html>
