<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';

try {
    // If you change db server system, change this too!
	
    $conn=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());


mysql_select_db($db_name,$conn); // เลือกฐานข้อมูล
    mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย
    //echo "Connected to database";
    mysql_close($conn);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>