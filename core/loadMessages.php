<?php 
session_start();

require_once "database.php";


$groupId = $_SESSION['group'];
        
$stmt = $con->prepare("SELECT * FROM chat.message WHERE group_id = ?");
$stmt->bindValue(1, $groupId);
$stmt->execute();

$messages = $stmt->fetchAll(PDO::FETCH_OBJ);

echo json_encode($messages);



?>