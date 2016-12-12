<!DOCTYPE html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bloom</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <img src="../images/bloom_main.png" alt="Site Logo">
    <div id="username">
		  <input type="text" name="username" placeholder="username">
    </div>
    <div id="password">
      <input type="password" name="password" placeholder="password">
    </div>
    <div id="buttons">
      <input type="button" value="Sing up" id="signUpBtn"  onclick="window.location.href='register.php';">
      <input type="button" value ="Login" id="loginBtn" onclick="window.location.href='../login.php';">
    </div>
	<form id="form" method="post" action="../signin.php">
                <input id="username" type="text" name="Username" placeholder="Username" required/>
                <input id="password" type="password" name="Password" placeholder="Password" required/>
                <input type="submit" value="Iniciar sessão"/>
    </form>
    <div id="visitor">
      <a href="visitor.php">Access as a visitor</a>
    </div>
  </body>
</html>
