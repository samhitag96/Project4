<?php
    session_start();
?>
<HTML>
    <head>
            <title>Payment Page</title>
            <link rel = "stylesheet" type = "text/css" href = "nerdluv.css">
    </head>
    <body>
        <h3>Confirming Order</h3>
        <div class = "pay">
        <?php
            
            include './common.php'; //used as a query validator in this assignment'
           
            $card_name = $_POST["card_name"];
            $card_num = $_POST["card_number"];
            $security_code = $_POST["security_code"];
            $exp_month = $_POST["exp_month"];
            $exp_year = $_POST["exp_year"];


            if(!validPay($card_name, $card_num, $security_code, $exp_month, $exp_year)){
                echo "Information entered was not acceptable, please re-enter";
            }else{
                
                //$custName = pullCustName($card_name);
                $payType = pullCustPay($card_num);

                $_SESSION["customerName"] = $card_name;//remember to change to reflect login information!
                $_SESSION["payType"]= $payType;
                //require "pullDB.php";

                $carType = $_SESSION["carType"];
               
//////////////////////////
                require 'init.php';
                $queryCustomer = "SELECT custID FROM customer WHERE name like '".$card_name."';";

                $queryInv = "SELECT inventoryID, cost FROM inventory WHERE carType like '".$carType."';";
                $resultCust = mysqli_query($con, $queryCustomer);

                $resultInv = mysqli_query($con, $queryInv);

               
                    if(mysqli_num_rows($resultCust)>0)
                    {
                        
                        $response = array();
                        $code = "found customer";
                        $row = mysqli_fetch_array($resultCust);
                        $custID = $row[0];
                        
                        //if($student_No == $row[0]){
                        /*    $message = "Hello, ". $first_name;
                            array_push($response, array("code"=>$code,"message"=>$message));
                            echo json_encode(array("server_response"=>$response));*/
                        //}
                        
                            $_SESSION["custID"] = $custID;
                        
                        
                    }
                    else
                    {
                        $response = array();
                        $code = "nonexistent";
                        $message = "customer does not exist";
                        array_push($response, array("code"=>$code,"message"=>$message));
                        echo json_encode(array("server_response"=>$response));
                        
                    }

                    if(mysqli_num_rows( $resultInv)>0)
                    {
                        
                        $response = array();
                        $code = "found available car";
                        $row = mysqli_fetch_array($resultInv);
                        $invID = $row[0];
                        $carCost = $row[1];
                        //if($student_No == $row[0]){
                        /*    $message = "Hello, ". $first_name;
                            array_push($response, array("code"=>$code,"message"=>$message));
                            echo json_encode(array("server_response"=>$response));*/
                        //}
                        
                            $_SESSION["invID"] = $invID;
                            $_SESSION["carCost"] = $carCost;
                        
                    }
                    else
                    {
                        $response = array();
                        $code = "nonexistent";
                        $message = "car is not available";
                        array_push($response, array("code"=>$code,"message"=>$message));
                        echo json_encode(array("server_response"=>$response));
                        
                    }
               
                
/////////////////////////
                $orderID = generateReceipt();
                $parkID = genParkID();
                $_SESSION["parkID"] = $parkID;
                $_SESSION["orderID"] = $orderID;
                $custID = $_SESSION["custID"];
                $parkType = $_SESSION["parkType"];
                $parkDate = $_SESSION["parkDate"];
                $parkCost = $_SESSION["parkCost"];
                $totalCost = $parkCost + $carCost;
                $_SESSION["totalCost"] = $totalCost;
                echo "<form method =\"post\" action = \"./recordOrder.php\">
                <strong>$card_name</strong>
                <br>
                <strong>$parkType parking for $parkDate </strong>
                <br>
                <strong>Total cost: $$totalCost</strong>
                ";
               
                echo "<br><br><strong>Please make sure all above information is correct</strong>";
                echo " <br><input type = \"submit\" value = \"Confirm Order\">";
                echo "</form>";
               
            }
            

         ?>
         
             
        </div>
    </body>

</HTML>