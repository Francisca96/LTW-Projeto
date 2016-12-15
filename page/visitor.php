<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/visitor.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="../scripts/searchVisitor.js"></script>
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
		<div class="search-box">
			<input type="text" autocomplete="off" placeholder="Search restaurant..." />
        <div class="result"></div>
		</div>

	</body>
</html>
