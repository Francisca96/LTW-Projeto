<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/register.css">
	</head>

	<body>
		<table class="logo">
			<caption style="color:white; font-size:20px; font-weight:lighter;" align="bottom">AlaDine</caption>
			<tr><td><a href="visitor.php"><img src="../images/logo_white.png" alt="owner" height="70px" width="70px"></a></td></tr>
		</table>
		<header>
    	<nav id="menu">
				<ul>
					<li><a>Sign up</a></li>
  				<li id="logReg"><a href="main.php">Login</a></li>
				</ul>
    	</nav><br>
		</header>

		<table class="owner">
			<caption align="bottom"><input type="checkbox" name="user" value="Owner">Owner</caption>
			<tr><td><a href="reg_owner.php"><img src="../images/owner.png" alt="owner" height="110px" width="120px"></a></td></tr>
		</table>
		<table class="reviewer">
			<caption align="bottom"><input type="checkbox" name="user" value="Reviewer">Reviewer</caption>
			<tr><td><a href="reg_reviewer.php"><img src="../images/reviewer.png" alt="reviewer" height="110px" width="120px"></a></td></tr>
		</table>
  </body>
</html>
