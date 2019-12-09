<?php
	session_start();
	require "init.php";
	
	if(isset($_POST["name"])){
		$name = $_POST["name"];
		$_SESSION["custname"] = $name;
		$username = $_POST["username"];
		$password = $_POST["password"];
		signUp($con, $name, $username, $password);
	}	
	else if(!isset($_POST["name"]) && isset($_POST["username"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		login($con, $username, $password);
	}
	
	
	function signUp($con, $name, $username, $password){
		$query1 = 'INSERT INTO customer (name, username, password) VALUES(\'' . $name . '\',\'' . $username . '\',\'' . $password . '\')';    
		$result = mysqli_query($con, $query1);
		if ($result){
			header("Location: inventory.php");
		}
	}
	
	function login($con, $username, $password){
		$query2 = "SELECT name FROM customer WHERE username = '".$username."' AND password = '".$password."';";
		$result = mysqli_query($con, $query2);

		if($result){
			//echo "queried";
		}
		if(mysqli_num_rows($result)>0){		
			$row = mysqli_fetch_array($result);
			$_SESSION["custname"] = $row[0];	
			header("Location: inventory.php");			
		}
		else{
	
		}
	}
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>

	<body>		
		<form action="login.php" method="post">
			<h2><span>Incorrect login</span></h2>
			<h3>Please try again</h3>
			<input type="submit" name= "submit" class="button" value="Back to Login">
		</form>
	</body>
</html>
