<?php
	session_start();
	require "init.php";
	
	$name = "";
	$username = "";
	$password = "";
	$_SESSION["custname"] = "";
	$_SESSION["username"] = "";
	$_SESSION["password"] = "";
	
	
?>

<html>
<head>
<title>Signup</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
		<img src="logo.png" alt="logo">
		<div id="form">
			<form action="logincheck.php" method="post">
				<h4>New User Signup</h4>
				<fieldset>
					<p>
						<label for="inputName">Name: <span><sup>*</sup></span>	</label>
						<input type="text" name="name" id="userName" value="<?php echo $name; ?>">
					</p>
					<p>
						<label for="inputUserName">Username: <span><sup>*</sup></span>	</label>
						<input type="text" name="username" id="userName" value="<?php echo $username; ?>">
					</p>
					<p>
						<label for="inputAge">Password: <span><sup>*</sup></span>	</label>
						<input type="text" name="password" id="password" value="<?php echo $password; ?>">
					</p>
					
					<input type="submit" class="button" value="Sign Up">
					<input type="reset" class="button" value="Reset">
				</fieldset>
				<hr>
				<h3>- OR -</h3>
				<h4>Login with existing account <a href="login.php">here </a> </h4>
			</form>
			</div>
		
	</body>
</html>