<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link rel="stylesheet" href="style.css">
    <script src="java.js"></script>
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

   <form id="form1" action="assign03_a.php" method="GET">              
        Gun: <input type="checkbox" id="item1" name="items[]" value="Gun: $500" onchange="price()"><br>
        Bullets: <input type="checkbox" id="item2" name="items[]" value="Bullets: $50" onchange="price()"><br>
        Target: <input type="checkbox" id="item3" name="items[]" value="Target: 10" onchange="price()"><br>
        Tannerite: <input type="checkbox" id="item4" name="items[]" value="Tannerite: $20" onchange="price()"><br>
        Total: <input type="number" name="total" id="total" value="0" onchange="totl()" readonly><br>

        <input type="reset" name="reset" id="reset" value="Clear">
        <input type="submit" id="submit" value="View Shopping Cart" onclick="subm();">
    </form>

</body>

</html>




