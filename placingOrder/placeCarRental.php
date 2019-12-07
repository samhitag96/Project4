<?php
    session_start();

?>
<HTML>
    <head>
            <title>Payment</title>
            <link rel = "stylesheet" type = "text/css" href = "nerdluv.css">
    </head>
    <body>
       
        <div class = "pay">
        <h3>Place Order - Car Rental</h3>
        
        <form method = "post" action="./orderParking.php">
        <br><br>
            <strong>Please select type of car you'd like: </strong>
            <select name = "carType">
                <option>Sedan</option>
                <option>SUV</option>
                <option>Luxury</option>
            </select>
           
            
            <br><br>
            <input type = "submit" value = "Continue to parking">
        </form>         
        </div>
    </body>

</HTML>