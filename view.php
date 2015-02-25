<?php


$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$conn=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());

mysql_select_db("project3_acsm")or die(mysql_error());
mysql_query("SET NAMES UTF8");
$result = mysql_query("SELECT * FROM subject")or die(mysql_error());


if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["student"] = array();
 
while($e=mysql_fetch_assoc($result)){
	
	/* $place_detail = array();
	
	$place_detail["id"]=$e["id"];
	$place_detail["place_name"]=$e["place_name"];
	$place_detail["address"]=$e["address"];
	$place_detail["phone"]=$e["phone"];
	$place_detail["latitude"]=$e["latitude"];
	$place_detail["longitude"]=$e["longitude"]; */
	
	$output[]=$e;
	
	}
       

 
   
function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);

mysql_close();}
?>