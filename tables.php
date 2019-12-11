<?php
    require "init.php";

$sql = "INSERT INTO inventory (inventoryID, parkAvailable) VALUES
    ('1', 'Yes'),
    ('2', 'Yes'),
    ('3', 'Yes'),
    ('4', 'Yes'),
    ('5', 'Yes')
    ";

if(mysqli_query($con, $sql)){
echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

?>