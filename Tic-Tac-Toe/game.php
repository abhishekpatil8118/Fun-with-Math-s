<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<title>Tik Tak Toe</title>
<link rel="stylesheet" href="style.css">
</head>
<body onload="setRandomTileOrder(12); setTiles();">
    
    <div class="text-center text-uppercase mt-5">
        <h1>Tik Tac Toe</h1>
        <p><strong>Test your Skill:Match the three pairs of 'O' or 'X' to win game.</strong></p>
        <a href="../home.php" style="padding-right: 50px;"><span class='glyphicon glyphicon-home'></span>Home</a>
        <a href="../setting.php" style="padding-right: 50px;"><span class='glyphicon glyphicon-cog'></span>Setting</a>
        <a href="../feedback.php" style="padding-right: 50px;"><span class='glyphicon glyphicon-star-empty'></span>Rate Us..</a>
        <a href="../logout.php"><span class='glyphicon glyphicon-log-out'></span>Log Out</a>
        <br><br>
        <button class="btn-success buttons" style="font-size:20px;" onclick="document.location.reload(true)">Reset</button>
    </div>
 
    <div id="gameboard" class="">
        <br>
        <div id="board">
        </div>

        <div class="row">
            <div class="col-6 mt-4" style="margin-left: 25px;">
                <sapn id="startGame" class=""></span>
                <!-- <button id="reset" class="btn btn-warning"><a style="text-decoration: none;" href="game.html">Reset</a></button> -->
            </div>
            
            <div class="col-6 mt-4">
                <!-- <button id="endGame" class="btn btn-danger"> End Game </button> -->
            </div>
            <div class="col-2 mx-auto">
                <!-- <button id="startGame" class="btn btn-success">Start Game</button> -->
                <!-- <button id="reset" class="btn btn-warning"><a style="text-decoration: none;" href="game.html">Reset</a></button> -->
            </div>
        </div>
    </div>
    <script src="js.js"></script>
</body>
</html>