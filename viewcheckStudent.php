<?php
require("config.php");

$subject = $_POST ["subject"];
$username = $_POST["student"];



//$strSQL = mysql_query("SELECT `check`.Date_Time,`check`.Latitude ,`check`.longitude FROM `check` WHERE `check`.Subject_Name_Eng='".$subject."' and `check`.Student_Id =".$username." ")or die(mysql_error());


$strSQL = mysql_query("SELECT `check`.Date_Time FROM `check` WHERE `check`.Subject_Name_Eng='".$subject."' and `check`.Student_Id =".$username." ")or die(mysql_error());


//$strSQL1 = mysql_query("SELECT `check`.Date_Time FROM `check` WHERE `check`.Subject_Name_Eng='".$subject."' and `check`.Teacher_Id != '".NULL."' ORDER BY `check`.Subject_Name_Eng ASC ")or die(mysql_error());


if ($value = mysql_num_rows ( $strSQL ) > 0) {
	
	while ( $e = mysql_fetch_assoc ( $strSQL ) ) {
		
		$output[] = $e;

		
	}
	echo (json_encode($output));
	
}


/*if ($value1 = mysql_num_rows ( $strSQL1 ) > 0) {
	
	while ( $e1 = mysql_fetch_assoc ( $strSQL1 ) ) {
		
		$output1 = $e1;

		
				foreach ( $output1 as $value5 ) {
					
	
	}
echo (json_encode($output1));
	
	}	
}*/

?>
	




