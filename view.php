<?php


require("config.php");



mysql_query("SET NAMES UTF8");
$result = mysql_query("SELECT * FROM regist_data")or die(mysql_error());


if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["student"] = array();
 
while($e=mysql_fetch_assoc($result)){
	

	$output[]=$e;
	
	}
       

 
   
function jsonRemoveUnicodeSequences($struct) {
   //return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
print(json_encode($output));
//print jsonRemoveUnicodeSequences($output);

mysql_close();}
?>