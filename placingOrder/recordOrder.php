<?php
    session_start();


require "init.php";

include './common.php';

//$tempCustId = generateRandNum();

//$tempCost = generateRandNum();

$parkID = $_SESSION["parkID"];
$orderID = $_SESSION["orderID"];
$custID = $_SESSION["custID"];
$parkType = $_SESSION["parkType"];
$parkDate = $_SESSION["parkDate"];
$parkCost = $_SESSION["parkCost"];
$invID = $_SESSION["invID"];
$payType = $_SESSION["payType"];

$totalCost = $_SESSION["totalCost"]; //remember to change this later to include actual total cost!
echo $invID;
echo $custID;
echo "<br>";
echo $parkType;
echo "<br>";
echo $parkDate;
echo "<br>";
echo "park id $parkID";
echo "<br>";
echo $parkCost;
echo "<br>";
echo $payType;
echo "<br>";
echo $totalCost;
echo "<br>";
    //$insert = "INSERT INTO receipt (order_id, cust_id, inv_id, totalCost) VALUES ('".$orderID."','".$tempCustId."', '".$tempInvID."' ,'".$tempCost."')";
   // $insertOrder = "INSERT INTO orders (orderID, paymentType, cost, customerID, parking_id, inventory_id) VALUES ('".$orderID."','".$payType."', '".$totalCost."' ,'".$custID."' ,'".$parkID."' ,'".$invID."' )";
    
    $insertPark = "INSERT INTO parking (parkingID, parkingType, parkCost, parkingDate) VALUES ('".$parkID."','".$parkType."', '".$parkCost."' ,'".$parkDate."')";
    $resultPark = mysqli_query($con, $insertPark);
    if(!$resultPark){
    
        $response = array();
        $code = "reg_false";
        $message = "something went wrong in pushing to parking";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }
    else{
        $response = array();
        $code = "reg_true";
        $message = "Parking registered";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));

    }

    $insert = "INSERT INTO orders VALUES ('".$orderID."','".$payType."', '".$totalCost."' ,'".$custID."' ,'".$parkID."','".$invID."')";
   
    

    $result = mysqli_query($con, $insert);

    echo $result;
    if(!$result){
    
        $response = array();
        $code = "reg_false";
        $message = "something went wrong in pushing to Orders";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }
    else{
        $response = array();
        $code = "reg_true";
        $message = "payment completed";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));

    }

    
?>