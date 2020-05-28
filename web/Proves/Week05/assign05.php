<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="java.js"></script>
    <title>Document</title>
</head>
<body>
    <form method="POST"> 
		Document Name<input type="text" id="document" name="document"><br /><br />

        <label for="action">Choose an Action:</label>

        <select name="action" id="action">
            <option value="display">Display</option>
            <option value="delete">Delete</option>
            <option value="insert">Insert</option>
        </select>
        
        <div id="content">
            <textarea id="document_content" name="document_content">Document Content:</textarea>
        </div>

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
        $action = $_POST["action"];
    }   
    
    require "db_connect.php";
    $db = get_db();

    try {
            if ($action == "display")
            {
                $statement = $db->prepare('Select DISTINCT document_content from document WHERE upper(document_name) = upper(:document)');
                $statement->bindValue(':document', $document, PDO::PARAM_STR);
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo "<p>";
                    echo $row["document_content"];
                    echo "</p>";
                }
            }
            
            if ($action =="delete")
            {
                $statement = $db->prepare('Delete from document WHERE upper(document_name) = upper(:document)');
                $statement->bindValue(':document', $document, PDO::PARAM_STR);
                $statement->execute();
                echo "<p>";
                echo "Document deleted";
                echo "</p>";
            }
            
            // if ($action =="insert")
            // { 
            //     $statement = $db->prepare('INSERT INTO document (owner_id, document_name, document_content) Values (1, :document, 'jadsjdas')'); 
            //     $statement->bindValue(':document', $document, PDO::PARAM_STR);
            //     $statement->execute();
            // }

        } catch (Exception $ex) {
            echo "$ex";
        }
?>
</body>
</html>