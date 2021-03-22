<?php

//use Svg\Tag\Group;
session_start();

require_once "core/database.php";

   
    if(isset($_GET['id'])){
        $groupId = $_GET['id'];
        $_SESSION['group'] = $groupId;
    
        $stmt1 = $con->prepare("SELECT * FROM chat.group WHERE idGroup = ?");
        $stmt1->bindValue(1, $groupId);
        $stmt1->execute();

        $group = $stmt1->fetchObject();

        var_dump($group);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/css.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src='core/loadMessages.js'></script>
</head>
<body>
    <div class="container">
    <?php 
        echo "<div>Groep: $group->name</div>";
        echo "<div>Jouw naam: $user</div>";
     ?>
     <br><br>
    <div id="messages">


    </div>
    </div>
    <form method="post" class="msgBox">
        <input type="text" name="message" id="messageInput" class="msg">
        <br>
        <button type="button" class="sendMsg" id='sendMsg'>send message</button>
    </form>
</body>
</html>