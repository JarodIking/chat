<?php 
    session_start();

    echo $_SESSION['username'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/css.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>

    <script src="core/loadgroups.js"></script>
</head>

<body>
    <div class="container">
        <p class='title'>CHAT GROEPEN</p>
        <button class="createGrp" id="makeGrp">chat aanmaken</button>
        <div id="groups">


        </div>

    </div>
</body>
</html>