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
$carType = $_SESSION["carType"];
$totalCost = $_SESSION["totalCost"]; //remember to change this later to include actual total cost!

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
      /*  $response = array();
        $code = "reg_true";
        $message = "Parking registered";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
*/

        
        
    }

    $insert = "INSERT INTO orders VALUES ('".$orderID."','".$payType."', '".$totalCost."' ,'".$custID."' ,'".$parkID."','".$invID."')";
   
    

    $result = mysqli_query($con, $insert);

  
    if(!$result){
    
        $response = array();
        $code = "reg_false";
        $message = "something went wrong in pushing to Orders";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    }
    else{
       /* $response = array();
        $code = "reg_true";
        $message = "payment completed";
        array_push($response, array("code"=>$code,"message"=>$message));
        echo json_encode(array("server_response"=>$response));
    */
        echo "<strong>Thank you for your order!</strong>
        <p>Confirmation #: $orderID

        <br><br>

        Placed an order for a $carType car, and $parkType parking for $parkDate
        <br><br>
        Total cost of order: $$totalCost    
        </p>
        
        ";



    }

    
?>