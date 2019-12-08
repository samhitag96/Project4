<?php
    session_start();
?>
<?php echo '<link href="styles.css" rel="stylesheet" type="text/css" />'; ?>
<HTML>
    <head>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
            <title>Payment</title>
            
    </head>
    <body>
    <img src="logo.png" alt="logo">
        <div class = "pay">
        <h3>Place Car Rental Order </h3>
        <form method = "post" action="./orderParking.php">
        <br><br>
            <strong>Please select type of car you'd like: </strong>
            <br><br>
            <div id = "container">
            <div class = "select-wrap">
            <select name = "carType" class = "select-box">
                <option class = "option">Sedan</option>
                <option class = "option">SUV</option>
                <option class = "option">Luxury</option>
            </select>
             <div class = "select-point">v</div>
</div>
</div>
            
            <br><br>
            <input type = "submit" value = "Continue to parking">
        </form>         
        </div>
    </body>

</HTML>