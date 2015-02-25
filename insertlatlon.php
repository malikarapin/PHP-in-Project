<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';



$sdt = $_POST["std_id"];
$lat = $_POST["latitude"];
$lon = $_POST["longitude"];

/* $tsdt = strval($sdt); */
$tlat = floatval($lat);
$tlon = floatval($lon);

/* 
mysql_query("set NAMES utf8"); */

$objConnect = mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());


$objDB = mysql_select_db("project3_acsm",$objConnect)or die(mysql_error());



$strSQL = "INSERT INTO check (check_id,latitude,longitude) VALUES('$sdt','$tlat','$tlon')";
$objQuery = mysql_query($strSQL);


if(!$objQuery){
	$arr['StatusID']="0";
	$arr['Error'] = "Cannot save data";
}else{
	$arr['StatusID']="1";
	$arr['Error']="";
}


echo json_encode($arr);

/*  mysql_close($objConnect); */
?>