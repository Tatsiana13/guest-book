<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/multimedia-75/512/multimedia-43-512.png">
    <link rel="stylesheet" href="guest.css">

</head>

<body class="bg">

    <div class="form">
        <h2>Type your comment and click Post.</h2>
        <form action="?" method="POST">
            <input id="data" type="text" name="name" placeholder="Enter your name"> <br>
            <input id="data" type="text" name="email" placeholder="Enter your email"> <br>
            <textarea name="text" cols="50" rows="10" placeholder="What do you wanna write?"></textarea> <br>
            <input type="submit" value="Post" id="btn" name="ok">
        </form>
        <hr>
        <br>
        <?php include "table.php" ?>
    </div>
</body>

</html>