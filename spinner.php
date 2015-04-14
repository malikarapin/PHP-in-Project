<?php
require("config.php");

$subject = $_POST ["subject"];
$username = $_POST["student"];



$strSQL = mysql_query("SELECT `check`.Date_Time,`check`.Student_Id FROM `check` WHERE `check`.Subject_Name_Eng='".$subject."' and `check`.Student_Id ='".$username."' ")or die(mysql_error());


if ($value = mysql_num_rows ( $strSQL ) > 0) {
	
	while ( $e = mysql_fetch_assoc ( $strSQL ) ) {
		
		$output[] = $e;
		foreach ( $output as $value1 ) {
			
			
		}
		
	}
	echo (json_encode($output));
	
}
	
?>