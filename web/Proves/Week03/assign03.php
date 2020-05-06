<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Processing</title>
</head>
<body>
    <h1>Confirm Order</h1>
<?php
    $first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : "";
    $last = isset($_POST['last']) ? htmlspecialchars($_POST['last']) : "";
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : "";
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "";
    $total = isset($_POST['total']) ? htmlspecialchars($_POST['total']) : "";
    $card = isset($_POST['card']) ? htmlspecialchars($_POST['card']) : "";
    $credit_card = isset($_POST['credit_card']) ? htmlspecialchars($_POST['credit_card']) : "";
    $exp_date = isset($_POST['exp_date']) ? htmlspecialchars($_POST['exp_date']) : "";

    $items = isset($_POST['items']) ? $_POST['items'] : Array();

    echo "<p>First Name: " . $first_name . "</p>";
    echo "<p>Last Name: " . $last . "</p>";
    echo "<p>Address: " . $address . "</p>";
    echo "<p>Phone Number: " . $phone . "</p>";
    echo "<p>Ordered Items: " . "</p>";
    foreach ($items as $item){
        echo "$item<br>";
    }
    echo "<p>Total Cost: $" . $total . "</p>";
    echo "<p>Credit Card Type: " . $card . "</p>";
    echo "<p>Credit Card Number: " . $credit_card . "</p>";
    echo "<p>Credit Card Expiration Date: " . $exp_date . "</p>";
?>

    <form id="form2" action="assign03_a.php" method="POST">
        Confirm Purchase<input type="submit" id="submit1" value="Submit"><br>
    </form>
    <form id="form3" action="assign03_b.php" method="POST">
        Confirm Purchase<input type="submit" id="submit2" value="Cancel"><br>
    </form>


</body>
</html>




