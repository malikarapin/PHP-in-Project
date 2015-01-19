<?php
$db_host = 'localhost';
$db_name = 'acsmdb';
$db_user = 'root';
$db_pass = '';

try {
    // If you change db server system, change this too!
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
    echo "Connected to database";
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>