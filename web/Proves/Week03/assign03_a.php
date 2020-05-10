<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
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
    <h1>Shopping Cart</h1>
    
<?php
    $total = isset($_GET['total']) ? htmlspecialchars($_GET['total']) : "";

    $items = isset($_GET['items']) ? $_GET['items'] : Array();

    
    $_SESSION['finalItems'] = $items;
    
    
    echo "<p>Ordered Items: " . "</p>";
    foreach ($items as $item){
        echo "$item<br>";
    }
    echo "<p>Total Cost: $" . $total . "</p>";
    
?>

</body>
</html>




