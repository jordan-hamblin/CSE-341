<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="TA_03.php" method="POST">
        Name: <input type="text" name="name" id="name" required><br>
        Email: <input type="text" name="email" id="email" required><br> 
        Major<br>
        CS<input type="radio" name="major" id="cs" value="cs"><br>
        WDD<input type="radio" name="major" id="wdd" value="wdd"><br>
        CIT<input type="radio" name="major" id="cit" value="cit"><br>
        CE<input type="radio" name="major" id="ce" value="ce"><br>
        Out<textarea>Comments(in)</textarea>
    </form>
    <?php
    echo "Is this working;
    
    
?>
</body>
</html>