<?php
$db_host = 'localhost';
$db_name = 'acsmdb';
$db_user = 'root';
$db_pass = 'acsm';

try {
    // If you change db server system, change this too!

    $conn=mysql_connect($db_host,$db_user,$db_pass) or die("�������ö�������Ͱҹ��������"); // �������� �ҹ������
    mysql_select_db($db_name,$conn); // ���͡�ҹ������
    mysql_query("SET NAMES utf8"); // ��˹� charset ���ҹ������ ������ҹ������
    //echo "Connected to database";
    mysql_close($conn);
}
catch (PDOException $e) {
    echo $e->getMessage();
}
?>