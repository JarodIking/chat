<?php



require_once "database.php";

$name;
// get data from ajax
if(isset($_POST['name'])){
    $name = $_POST['name'];

}




// send data to database
$stmt = $con->prepare("INSERT INTO chat.group(`name`) VALUES(?)");
$stmt->bindValue(1, $name);
$stmt->execute();