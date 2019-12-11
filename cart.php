
<?php
	session_start();
    require "init.php";

    $parkingnumber = $_POST["parkNum"];
    $_SESSION["pnum"] = $parkingnumber;

    $parkingtype = $_POST["parktype"];
    $_SESSION["ptype"] = $parkingtype;

    $car = $_POST["cartype"];
    $_SESSION["ctype"] = $car;

    $renting = $_POST["rent"];
    $_SESSION["rtype"] = $renting;

        $basecost = 40.00;

        if($car == "none"){
            $ctypecost = 00.00;
        } else {
            $ctypecost = 100.00;
        }
        if($parkingtype == "Regular"){
            $ptypecost= 00.00;
        }
        if($parkingtype == "VIP"){
            $ptypecost = 20.00;
        }
        if($renting == "yes"){
            $rcost = 80.00;
        } else {
            $rcost = 00.00;
        }

        $totalCost = $basecost + $ctypecost + $ptypecost + $rcost;
echo $basecost;
echo $ctypecost;
echo $ptypecost;
echo $rcost;

echo $totalCost;

$_SESSION["total"] = $totalCost;


?>

<html>
<head>
    <h1>Check Out</h1>
</head>

<body>

<form action="checkout.php" method="post">
<p>Here are the current items in your cart:</p>
    <ol>
        <li><em>Parking Space:</em> <?php echo $_SESSION["pnum"]?></li>
        <li><em>Parking Type:</em> <?php echo $_SESSION["ptype"]?></li>
        <li><em>Car Type:</em> <?php echo $_SESSION["ctype"]?></li>
        <li><em>Space rental:</em> <?php echo $_SESSION["rtype"]?></li>
    </ol>

</body>
    <input type="submit" value="pay">
</html>


