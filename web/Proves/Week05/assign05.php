<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST"> 
		First Name<input type="text" id="first_name" name="first_name"><br /><br />
		Last Name<input type="text" id="last_name" name="last_name"><br /><br />	
		Document Name<input type="text" id="document" name="document"><br /><br />
		<input type="submit" value="Show the document" name="show_document">
	</form>
<?php
    if(isset($_POST['document']))
	{
        $document = $_POST["document"];
        // $document += "%";
    }
    require "db_connect.php";
    $db = get_db();

    try {
            $statement = $db->prepare('Select DISTINCT document_name from document WHERE upper(document_name) = upper(:document)');
            $statement->bindValue(':document', $document, PDO::PARAM_STR);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo "<p>";
                echo $row["document_name"];
                echo "</p>";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
?>
</body>
</html>