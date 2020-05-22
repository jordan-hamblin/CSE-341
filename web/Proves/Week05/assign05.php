<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require "db_connect.php";
    $db = get_db();

    try {
            $statement = $db->prepare('Select DISTINCT document_name from document');
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo $row["document_name"];
            
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
?>
</body>
</html>