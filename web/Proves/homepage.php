<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="index.html">Assignments</a></li>
        </ul>
        <div id="format">
            <div id="left">
                <img src="vertical.jpg" alt="An American Flag">
            </div>

            <div id="right">
            <p>
                I love Fredom!<br>
                America is just a fantastic place. The opportunities offerered in this great country are nearly unbelievable. 
                The economic potential is just astounding. And for the most part the American people are among the best people on 
                the planet! Yes God certainly did bless the United States of America.<br>
            </p>
            <?php
                echo "Today is " . date("Y/m/d") . "<br>";
            ?>
            <p>
                This is the time to stand up for what you believe in!<br>
                "Multitudes, multitudes in the valley of decision: for 
                the day of the Lord is near in the valley od decision"<br>
                -Joel 3:14
            </p>
        </div>
        </div>
    </header>
</body>

</html>