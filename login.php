  <html>
      <head>
          <title>Login</title>
          <meta charset="utf-8">
          <link rel="stylesheet" href="">
      <body>
        <form method="post" action="signin.php" onsubmit="return validateForm();" >
          <h1>Login</h1>
          <p>
            <label>Username:
				        <input type="text" name="username" >
				    </label>
          </p>
          <p>
            <label>Password:
			          <input type="password" name="password" >
			      </label>
          </p>
          <input type="submit" name="submit" value="Login">
        </form>
      </body>
  </html>