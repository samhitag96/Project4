<?php
    session_start();
    $_SESSION["carType"] = $_POST["carType"];
?>
<HTML>
    <head>
            <title>Payment</title>
            <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
    <img src="logo.png" alt="logo">
        <div class = "pay">
        <h3>Place Parking Order</h3>
        
        <form method = "post" action="./pay.php">
        <br><br>
            <strong>Please select the type of parking you'd like: </strong>
            <br><br>
            <div id = "container">
            <div class = "select-wrap">
            <select name = "parkType" class = "select-box">
                <option>VIP</option>
                <option>Regular</option>
            </select>
            <div class = "select-point">v</div>
</div>
</div>
            <br><br>
            <input type = "date" name = "parkingDate" class ="select-box">

            
            <br><br>
            <input type = "submit" value = "Continue to pay">
        </form>         
        </div>
    </body>

</HTML>