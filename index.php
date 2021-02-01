<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Opros</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="shortcut icon" href="https://cdn4.iconfinder.com/data/icons/multimedia-75/512/multimedia-43-512.png">
</head>
<body>
    <div class="scene">
        <div data-speed="10" class="layer layer-0"></div>
        <div data-speed="40" class="layer layer-1"></div>
        <div data-speed="80" class="layer layer-2"></div>


    </div>
<header>
  
    <div class="container">
        <div class="header">
            <div class="title-block">
                <h1 class="title">Type your comment and click Post.</h1>
            </div>

        </div>

        <div class="content-wrapper">
            <div class="content">
                <br>
               
                <br>
               
                     <div class="form">
        
        <form class="fro" action="?" method="POST">
            <input class="fro" id="data" type="text" name="name" placeholder="Enter your name"> <br>
            <input class="fro" id="data" type="text" name="email" placeholder="Enter your email"> <br>
            <textarea class="fro" name="text" cols="50" rows="10" placeholder="What do you wanna write?"></textarea> <br>
            <input class="input_l" type="submit" value="Post" id="btn" name="ok">
        </form>
        <hr>
        <br>
        <?php include "table.php" ?>
    </div>
                </form>
            </div>

</header>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="script.js"></script>
</body>
</html>