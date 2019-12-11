<?php
	session_start();
    require "init.php";


    $sql = "SELECT * FROM inventory";
    if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
         echo "<h1>Available Parking Spaces</h1>";
        while($row = mysqli_fetch_array($result)){
                echo  $row['inventoryID'];
        }
        // Free result set
    //    mysqli_free_result($result);
    } else{
        echo "No parking spaces are left!";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

<html>
<head>
    <h1>Parking Inventory</h1>
</head>

<body>

    <p>
        Select Rental options:
    </p>

    <form action="cart.php" method="post">
        <fieldset>
            <legend>Select Parking Space: $40</legend>            
            <label for="parking">Parking Number:</label>
            <select name="parkNum">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </fieldset>
        <fieldset>


            <legend>Select Parking Type</legend>            
            <label><input type="radio" name="parktype" value="VIP"> VIP: $20 </label>            
            <label><input type="radio" name="parktype" value="Regular"> Regular</label>
        </fieldset>
        <fieldset>
            <legend>Select Car Rental: $100</legend>            
            <label><input type="radio" name="cartype" value="suv">SUV</label>            
            <label><input type="radio" name="cartype" value="honda">Honda</label>
            <label><input type="radio" name="cartype" value="Compact">Compact</label>            
            <label><input type="radio" name="cartype" value="luxury">luxury</label>
            <label><input type="radio" name="cartype" value="none">none</label>
        </fieldset>
        <fieldset>
            <legend>Would you like to Rent Space Accommodation? :$80</legend>            
            <label><input type="radio" name="rent" value="yes">Yes</label>            
            <label><input type="radio" name="rent" value="no">No</label>
        </fieldset>


   <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</body>

</html>
