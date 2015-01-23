<?php
$db_host = 'localhost';
$db_name = 'acsmdb';
$db_user = 'root';
$db_pass = 'acsm';

try {
    // If you change db server system, change this too!

    $conn=mysql_connect($db_host,$db_user,$db_pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
    mysql_select_db($db_name,$conn); // เลือกฐานข้อมูล
    mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย
    //echo "Connected to database";
    mysql_close($conn);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>