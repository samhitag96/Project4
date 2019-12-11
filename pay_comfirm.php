<?php
    session_start();
    require "init.php";

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
            $totalCost = $_SESSION["total"];

            if(!validPay($card_name, $card_num, $security_code, $exp_month, $exp_year)){
                echo "Information entered was not acceptable, please re-enter";
                echo "<a href = \"./checkout.php\"></a>";
            }else{
                
                $payType = pullCustPay($card_num);
                
            }
               
                
/////////////////////////
    
                echo "<form method =\"post\" action = \"./recordOrder.php\">
                <strong>$card_name</strong>
            
                <strong>Total cost: $$totalCost</strong> ";
               
                echo "<br><br><strong>Please make sure all above information is correct</strong>";
                echo " <br><input type = \"submit\" value = \"Confirm Order\">";
                echo "</form>";
               
            
            

         ?>
         
             
        </div>
    </body>

</HTML>