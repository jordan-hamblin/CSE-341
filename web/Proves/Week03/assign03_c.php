<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
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

    <?php
    
        $address = isset($_GET['address']) ? htmlspecialchars($_GET['address']) : "";
        
        
        echo "<p>Ordered Items: " . "</p>";
        foreach ($_SESSION['finalItems'] as $item){
        echo "$item<br>";
        
        
        echo "<p>Address: " . $address . "</p>";
?>
        
        <button type="button">Confirm</button>
</body>

</html>




