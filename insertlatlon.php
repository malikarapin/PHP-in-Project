<?php

$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$objConnect=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());
//$objConnect = mysql_connect("http://acsm.ictte-project.com","project3_acsm","1ASdb7rv");

$objDB = mysql_select_db("project3_acsm")or die(mysql_error());

$lat = $_POST["latitude1"];
$lon = $_POST["longitude2"];

$dlat = (double)$lat;
$dlon = (double)$lon;



/*** Insert ***/
$strSQL = "INSERT INTO check (latitude,longitude)
		VALUES (
			'".$dlat."',
			'".$dlon."',
			)
		";
$objQuery = mysql_query($strSQL);

if(!$objQuery){
	$arr['StatusID']="0";
	$arr['Error'] = "Cannot save data";
}else{
	$arr['StatusID']="1";
	$arr['Error']="";
}
mysql_close($objConnect);
echo json_encode($arr);
?>