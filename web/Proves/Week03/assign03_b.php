<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul>
            <li><a href="assign03.php">Browse</a></li>
            <li><a href="assign03_a.php">Shopping Cart</a></li>
            <li><a href="assign03_b.php">Checkout</a></li>
            <li><a href="assign03_c.php">Confirmation</a></li>
        </ul>
    </header>

    <form action="assign03_c.php" method="GET">
        Address: <input type="text" name="address" id="address" required><br>
        <input type="submit" id="submit" value="Submit">
    </form>





        

</body>

</html>




