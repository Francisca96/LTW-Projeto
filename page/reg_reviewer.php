<!DOCTYPE html>
<html>
	<head>
		<title>Bloom</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reg_reviewer.css">
	</head>
	<body>
    <!-- <script src=""></script> -->
    <form id="form" method="post" action="signup.php" onsubmit="return validateForm();">
      <h1>Sign up:</h1>
      <p>
        <input id="firstName" type="text" name="firstName" placeholder="First name" required/>
      </p>
      <p>
        <input id="lastName" type="text" name="lastName" placeholder="Last name" required/>
      </p>
	    <p>
        <input id="username" type="text" name="username" placeholder="Username" required/>
      </p>
      <p>
        <input id="password" type="password" name="password" placeholder="Password" required/>
      </p>
      <p>
        <input id="passwordConfirm" type="password" name="passwordConfirm" placeholder="Repeat your Password" required/>
      </p>
      <button type="submit">Submit</button>
			<input type="button" value = "Login" id="loginBtn" onclick="window.location.href='main.php';">
    </form>
  </body>
</html>
