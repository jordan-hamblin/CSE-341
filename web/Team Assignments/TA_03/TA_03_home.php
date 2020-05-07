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
        North America: <input type="checkbox" id="item1" name="items[]" value="na" ><br>
        South America: <input type="checkbox" id="item2" name="items[]" value="sa" ><br>
        Europe: <input type="checkbox" id="item3" name="items[]" value="eu" ><br>
        Africa: <input type="checkbox" id="item4" name="items[]" value="af" ><br>
        Asia: <input type="checkbox" id="item5" name="items[]" value="as" ><br>
        Australia: <input type="checkbox" id="item6" name="items[]" value="au" ><br>
        Antartica: <input type="checkbox" id="item7" name="items[]" value="an" ><br>
        
        Out<textarea></textarea>
        <Input type="submit" name="comment">

    </form>
    <?php
    echo "Is this working";
    ?>
</body>
</html>