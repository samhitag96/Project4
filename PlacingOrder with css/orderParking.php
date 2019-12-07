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
    <ul>
  <li><a href="login.php">Home</a></li>
  <li><a href="inventory.php">Inventory</a></li>
  <li><a href="placeCarRental.php">Place Car Rental</a></li>
  <li><a href="#orderParking.php">Place Parking Order</a></li>
  <li style="float:right"><a class="active" href="shoppingCart.php">Shopping Cart</a></li>
</ul>
       
        <div class = "pay">
        <h3>Place Order - Parking</h3>
        <div id = "container-four">
        <form method = "post" action="./pay.php">
        <br><br>
        <div id = "container">
          <div id = "center">
            <strong>Please select the type of parking you'd like: </strong>
            <select name = "parkType">
                <option>VIP</option>
                <option>Regular</option>
            </select>
            </div>
            </div>
            <br><br>
            <div id = "container-three">
            <input type = "date" name = "parkingDate">
            </div>
            <br><br>
            <div id = "center3">
            <input type = "submit" value = "Continue to pay">
           </div>
        </form>
        </div>         
        </div>
    </body>

</HTML>