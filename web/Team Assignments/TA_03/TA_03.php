<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TA_03 php stuff</title>
</head>
<body>
    <h1>Team Activity</h1>
<?php
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $email = isset($_POST['last']) ? htmlspecialchars($_POST['email']) : "";
    $major = isset($_POST['major']) ? htmlspecialchars($_POST['major']) : "";
    
    //$items = isset($_POST['items']) ? $_POST['items'] : Array();

    echo "<p>Name: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Major: " . $major . "</p>";
    echo "<p>Phone Number: " . $phone . "</p>";
    echo "<p>Ordered Items: " . "</p>";
    // foreach ($items as $item){
    //     echo "$item<br>";
    // }
    
?>

</body>
</html>




