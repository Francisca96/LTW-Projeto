<!DOCTYPE html>
<html>
	<head>
		<title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reg_owner.css">
	</head>

	<body>
		<table class="logo">
			<caption style="color:white; font-size:20px; font-weight:lighter;" align="bottom">AlaDine</caption>
			<tr><td><a href="visitor.php"><img src="../images/logo_white.png" alt="owner" height="70px" width="70px"></a></td></tr>
		</table>
		<header>
    	<nav id="menu">
				<ul>
					<li><a href="register.php">Sign up</a></li>
  				<li id="logReg"><a href="main.php">Login</a></li>
				</ul>
    	</nav><br>
		</header>

		<table class="owner">
			<tr><td><a><img src="../images/owner.png" alt="owner" height="110px" width="120px"></a></td></tr>
		</table>

    <!-- <script src=""></script> -->
    <form id="form" method="post" action="signupowner.php" onsubmit="return validateForm();">
      <h1>Sign up:</h1>
      <p>
        <input id="name" type="text" name="name" placeholder="Name" required/>
      </p>
      <p>
        <input id="email" type="email" name="email" placeholder="Email" required/>
      </p>
	    <p>
        <input id="username" type="text" name="username" placeholder="Username" required/>
      </p>
	  <p>
        <input id="gender" type="text" name="gender" placeholder="Gender" required/>
      </p>
      <p>
        <input id="password" type="password" name="password" placeholder="Password" required/>
      </p>
      <p>
        <input id="passwordConfirm" type="password" name="passwordConfirm" placeholder="Repeat your Password" required/>
      </p>
		<a id="type" name="type" value="owner" />
		<button type="submit">Submit</button>
    </form>
  </body>
</html>
