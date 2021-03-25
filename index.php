<?php 
    session_start();

    $int;
    if($_POST){
        if($_POST['username'] !== ''){
            $_SESSION['username'] = $_POST['username'];

            $int = rand(1, 9);

            switch($int){
                case 1:
                    $_SESSION['colour'] = "black";
                    break;
                case 2:
                    $_SESSION['colour'] = "green";
                    break;
                case 3:
                    $_SESSION['colour'] = "yellow";
                    break;
                case 4:
                    $_SESSION['colour'] = "blue";
                    break;
                case 5:
                    $_SESSION['colour'] = "red";
                    break;
                case 6:
                    $_SESSION['colour'] = "pink";
                    break;
                case 7:
                    $_SESSION['colour'] = "purple";
                    break;
                case 8:
                    $_SESSION['colour'] = "brown";
                    break;
                case 9:
                    $_SESSION['colour'] = "hotpink";
                    break;
                default:
                    $_SESSION['colour'] = "black";
                    break;
            }
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