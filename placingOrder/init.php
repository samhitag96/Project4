<?php
$host = "localhost";
$user = "root";
$password = "doingmybest_2019";
$dbname = "carrental";

$GLOBALS['con'] = mysqli_connect($host, $user, $password, $dbname);

if(!$con){
	die("Error in database connection".mysqli_connect_error());
}
else{
	//echo "<h3> Database connected i hope</h3>";
	return true;
}

?>