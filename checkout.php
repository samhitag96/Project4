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
        <h3>Place Order</h3>
        
        <?php
            require "./init.php";
            include "./common.php";

       echo "<form method = \"post\" action=\"./pay_comfirm.php\">

            <br>
            <br>
            <div>
            <strong> Cardholder Name: </strong><br>
            <input type = \"text\" value = \"Cardholder Name\" name = \"card_name\"><br><br>

            <strong> Card Number (no dashes): </strong><br>
            <input type = \"text\" name = \"card_number\" maxlength = \"16\"><br><br>

            <div id = \"securityCode\">
            <strong> Security Code: </strong><br>
            <input type = \"password\" name = \"security_code\" maxlength = \"3\" pattern= \"[0-9]*\">
            </div><br><br>
            <strong> Expiration Date: </strong><br>
            <select name = \"exp_month\" value = \"MM\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
            <select name = \"exp_year\" value = \"YY\">
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
            </select>
            <br><br>
            </div>
            <input type = \"submit\" value = \"Submit Payment\">
        </form> ";  
        ?>        
        </div>
    </body>

</HTML>