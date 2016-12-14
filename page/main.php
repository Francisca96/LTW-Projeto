
<!-- <?php
	session_start();
?> -->

<!DOCTYPE html>
<html>
  <head>
    <title>AlaDine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <img id="logo" src="../images/logo.png" height="150px" width="150px">
    <div class="sitename">AlaDine</a></div>
    <form action="../page/signin.php" method="post">
	  <input class="username" type="text" id="username" name="username" required="required" placeholder="username"><br>
      <input class="password" type="password" id="password" name="password" required="required" placeholder="password"><br><br>
      <input id="signUpBtn" type="button" value="Sign up" onclick="window.location.href='register.php';">
      <input id="loginBtn" type="submit" value ="Login"><br><br><br>
      <a id="visitor" href="visitor.php">Access as a visitor</a>
      <ul id="txtHint">
    </form>
  </body>
</html>
