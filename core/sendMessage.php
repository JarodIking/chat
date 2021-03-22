<?php 
session_start();

$user = $_SESSION['username'];
$group = $_SESSION['group'];

echo $user;

require_once "database.php";
$msg;
// get data from ajax
if($_POST){
    echo "hi";

    $msg = $_POST['message'];
    $user = $_SESSION['username'];

    var_dump($user);
    var_dump($msg);
    var_dump($group);

    // send data to database
    $stmt = $con->prepare("INSERT INTO chat.message(`name`, `colour`, `message`, `group_id`) VALUES(?, ?, ?, ?)");
    $stmt->bindValue(1, $user);
    $stmt->bindValue(2, "black");
    $stmt->bindValue(3, $msg);
    $stmt->bindValue(4, $group);
    $stmt->execute();
}








?> 