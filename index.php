<?php 
    session_start();

    if($_POST){
        if($_POST['username'] !== ''){
            $_SESSION['username'] = $_POST['username'];
            header('location: groepen.php');
        } else {
            echo "<script>alert('please enter a name')</script>";
        }
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
</head>
<body>
    <form method="POST" class="container">
        <input type="text" name="username" id="input" placeholder="Enter name here.">
        <br>
        <input type="submit" value="Send" id="btn">
    
    </form>
</body>
</html>