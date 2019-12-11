<?php
    session_start();

require "init.php";

//inventory

$parkType = $_SESSION["ptype"];
$carType = $_SESSION["ctype"];
$totalCost = $_SESSION["total"]; 
$rent = $_SESSION["rtype"];
$parknumberid = $_SESSION["pnum"];

//get customerID
$custID = $_SESSION["id"];


$sql = "UPDATE inventory SET parkingType=?, carType=?, rentSpace=? WHERE inventoryID=?";
    if($stmt = mysqli_prepare($con, $sql)){
        mysqli_stmt_bind_param($stmt, "ssss", $param_type, $param_car, $param_rent, $param_id);
            
        // Set parameters
        $param_type = $parkType;
        $param_car = $carType;
        $param_rent = $rent;
        $param_id = $parknumberid;
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_close($stmt);
        }
    }


 
    $insert = "INSERT INTO orders (cost, customer_ID, inventory_ID) VALUES 
    ('".$totalCost."','".$custID."', '".$parknumberid."')";
   

    $result = mysqli_query($con, $insert);

  
    if(!$result){
    
        $response = array();
        $code = "reg_false";
        $message = "something went wrong in pushing to Orders";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }
    else{

    }
    mysqli_close($con);

?>

<html>
<head>
    <h1>Check Out</h1>
</head>

<body>

<form action="index.php" method="post">
<p>Here are the current items in your cart:</p>
    <ol>
        <li><em>Parking Space:</em> <?php echo $_SESSION["pnum"]?></li>
        <li><em>Parking Type:</em> <?php echo $_SESSION["ptype"]?></li>
        <li><em>Car Type:</em> <?php echo $_SESSION["ctype"]?></li>
        <li><em>Space rental:</em> <?php echo $_SESSION["rtype"]?></li>
    </ol>

</body>
    <input type="submit" value="finished">
</html>
