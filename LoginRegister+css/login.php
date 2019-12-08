<?php
	session_start();
	require "init.php";
	
	$_SESSION["custname"] = "";
	$username = "";
	$password = "";
	
?>

<html>
<head>
<title>Login</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
	<img src="logo.png" alt="logo">
	
	<div id="form">
		<form action="logincheck.php" method="post">
				<h4>Login<h4>
				<fieldset>
					<p>
						<label for="inputName">Username: </label>
						<input type="text" name="username" id="userName" value="<?php echo $username; ?>">
					</p>
					<p>
						<label for="inputAge">Password:	</label>
						<input type="text" name="password" id="password" value="<?php echo $password; ?>">
					</p>
					
					<input type="submit" class="button" value="Login">
					<input type="reset" class="button" value="Reset">
					</fieldset>
		</form>
	</div>
	
</form>
</body>
</html>

