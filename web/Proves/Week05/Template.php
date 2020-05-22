<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	// function listDocument($db, $query)
	// {
	// 	foreach ($db->query($query) as $row)
	// 	{
	// 		echo '<p>';
	// 		echo '<b>';
	// 		echo $row['book'];
	// 		echo ' ';
	// 		echo $row['chapter'];
	// 		echo ':';
	// 		echo $row['verse'];
	// 		echo '</b>';
	// 		echo ' Contains: ';
	// 		echo $row['content'];
	// 		echo '<p/>';
	// 	}
	// }
	try {
		$statement = $db->prepare('Select DISTINCT excercise_name from excercise_log ORDER BY excercise_name');
		$statement->execute();
		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		  $excercise_name = $row['excercise_name'];
		  echo "<option value='$excercise_name'> $excercise_name</option>";
		}
	  } catch (Exception $ex) {
		echo "$ex";
	  }​
	
	​
	echo '<p><b>Resources:</b><p/>';
	$query = 'SELECT document_name FROM "document" ';
	listDocument($db, $query);
	echo '<br /><br />';
	​
	
	​
	if(isset($_POST['document']))
	{
		$document = $_POST["document"];
		$query = 'SELECT doucment_name FROM "document" WHERE document = \'' . $document . '\'';
		listDocument($db, $query);
	}
	?> 
</body>
</html>







Select DISTINCT document_name from document WHERE upper(document_name) = upper('To do list');