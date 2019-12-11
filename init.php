<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db";

$GLOBALS['con'] = mysqli_connect($host, $user, $password, $dbname);

if(!$con){
	die("Error in database connection".mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS customer (
	customerID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(50) UNIQUE,
	password VARCHAR(255)
	)";
	mysqli_query($con, $sql);

$sql = "CREATE TABLE IF NOT EXISTS inventory (
	inventoryID int(5),
    parkingType enum('VIP', 'Regular'),
	carType varchar(50),
    rentSpace enum('Yes', 'No'),
    parkAvailable enum('Yes', 'No')
	)";
	mysqli_query($con, $sql);
	
$sql = "CREATE TABLE IF NOT EXISTS order (
	orderID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    inventory_ID int,
    customer_ID int,
    paymentType varchar(50),
    cost decimal(10,2)
	)";
    mysqli_query($con, $sql);

$sql = "CREATE TABLE IF NOT EXISTS orders (
   orderID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    inventory_ID int,
    customer_ID int,
    paymentType varchar(50),
    cost decimal(10,2)
    )";
    mysqli_query($con, $sql);

?>