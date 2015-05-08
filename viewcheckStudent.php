<?php
require("config.php");

$subject = $_POST ["subject"];
$username = $_POST["student"];

$strSQL1 = mysql_query("SELECT `subject`.Teacher_Name_Thai
		FROM `subject`
		WHERE `subject`.Subject_Name_Eng='".$subject."'
		ORDER BY `subject`.Teacher_Name_Thai ASC
		 LIMIT 1")
		or die(mysql_error());


/* if ($value = mysql_num_rows ( $strSQL1 ) > 0) {

	while ( $e = mysql_fetch_assoc ( $strSQL1 ) ) {

		$output1 = $e;
		foreach ( $output1 as $value1 ) {
			
			echo $value1;
		}
	}

} */




$strSQL = mysql_query("SELECT `check`.Student_Id ,`check`.Date_Time 
		FROM `check` 
		WHERE `check`.Subject_Name_Eng='".$subject."' 
		and `check`.Student_Id ='".$username."' ")
		or die(mysql_error());

if ($value = mysql_num_rows ( $strSQL ) > 0) {
	
	while ( $e = mysql_fetch_assoc ( $strSQL ) ) {
		
		$output[] = $e;
	}				
	echo (json_encode($output));
}


?>
	




