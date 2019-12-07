<?php
    session_start();
    $_SESSION["carType"] = $_POST["carType"];
?>
<HTML>
    <head>
            <title>Payment</title>
            <link rel = "stylesheet" type = "text/css" href = "nerdluv.css">
    </head>
    <body>
       
        <div class = "pay">
        <h3>Place Order - Parking</h3>
        
        <form method = "post" action="./pay.php">
        <br><br>
            <strong>Please select the type of parking you'd like: </strong>
            <select name = "parkType">
                <option>VIP</option>
                <option>Regular</option>
            </select>
            <br><br>
            <input type = "date" name = "parkingDate">
            
            <br><br>
            <input type = "submit" value = "Continue to pay">
        </form>         
        </div>
    </body>

</HTML>