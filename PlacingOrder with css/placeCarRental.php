<?php
    session_start();
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
        <h3>Place Order - Car Rental</h3>
        
        <form method = "post" action="./orderParking.php">
        <br><br>
        <div id = "container">
          <div id = "center">
            <strong>Please select type of car you'd like: </strong>
            
            <select name = "carType">
                <option>Sedan</option>
                <option>SUV</option>
                <option>Luxury</option>
            </select>
           </div>
           </div>
           <div id = "container-two">
           <div id = "sedan">
           <img src = "sedan.png" alt = "sedan">
           <div id = text> <caption> Sedan</caption></div>
           </div>

           <div id = "luxury">
           <img src = "luxury.png" alt = "luxiry">
           <div id = text> <caption> Luxury</caption></div>
           </div>

           <div id = "suv">
           <img src = "suv.png" alt = "suv">
           <div id = text> <caption> SUV</caption></div>
           </div>
           </div>
            <br><br>
            <div id = "center2">
            <input type = "submit" value = "Continue to parking">
             </div>
        </form>         
        </div>
    </body>

</HTML>