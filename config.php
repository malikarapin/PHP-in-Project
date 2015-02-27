<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$objConnect=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());

mysql_query("SET NAMES UTF8");
$objDB = mysql_select_db("project3_acs")or die(mysql_error());


?>