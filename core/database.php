<?php 
$user = 'root';
$pass = 'Jarod6985!';
$con = new PDO('mysql:host=localhost;dbname=chat', $user, $pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






?>