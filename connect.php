<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';

try {
    // If you change db server system, change this too!
	
    $conn=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());


mysql_select_db($db_name,$conn); // ���͡�ҹ������
    mysql_query("SET NAMES utf8"); // ��˹� charset ���ҹ������ ������ҹ������
    //echo "Connected to database";
    mysql_close($conn);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>