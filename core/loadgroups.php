<?php

require_once "database.php";



// get data from database
    $stmt = $con->prepare("
        SELECT
            *
        FROM
            chat.group
    ");
    $stmt->execute();

// convert data too json for AJAX
    $groups = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($groups);



    