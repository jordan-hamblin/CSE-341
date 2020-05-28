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
		Document Name<input type="text" id="document" name="document"><br /><br />

        <label for="action">Choose an Action:</label>

        <select name="action" id="action">
            <option value="display" name="display">Display</option>
            <option value="delete" name="delete">Delete</option>
            <option value="insert" name="insert">Insert</option>
        </select>
		
        <input type="submit" value="Perform requested action" name="show_document">
	</form>
<?php
    if(isset($_POST['document']))
	{
        $document = $_POST["document"];
        // $document += "%";
    }
    
    if(isset($_POST['action']))
	{
        $document = $_POST["action"];
    }
    
    require "db_connect.php";
    $db = get_db();

    try {
            if ($action == "display"){
                $statement = $db->prepare('Select DISTINCT document_content from document WHERE upper(document_name) = upper(:document)');
                $statement->bindValue(':document', $document, PDO::PARAM_STR);
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo "<p>";
                    echo $row["document_content"];
                    echo "</p>";
                }
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
?>
</body>
</html>