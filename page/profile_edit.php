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
        	<form id="form" method="post" action="../page/change_password.php" onsubmit="return changePassword();">
        		<input id="password" type="password" name="password" placeholder="Actual Password" required/>
         		<input id="new_password" type="password" name="new_password" placeholder="New Password" required/>
         		<input id="new_password_confirm" type="password" name="new_password_confirm" placeholder="Repeat your new Password" required/>
          	<input type="submit" value="Confirm"/>
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
        	<input type="button" value="Edit">
      	</div>
    		<div>
      		<input type="button" value="Create restaurant" id="edit"  onclick="window.location.href='profile_edit.php';">
    		</div>
			</div>
		</div>
	</body>
</html>
