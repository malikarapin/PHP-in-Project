<?php
require("config.php");

$selectSubject = $_POST ["subject"];



$selectQuestionStudent = mysql_query("SELECT `question`.Proposition,
		`question`.Result1,
		`question`.Result2,
		`question`.Result3,
		`question`.Result4 
		FROM `question`
		WHERE `question`.Subject_Name_Eng='".$selectSubject."'
		
		
		ORDER BY `question`.Question_Id DESC
		LIMIT 1")or die(mysql_error());
		

if ($value = mysql_num_rows ( $selectQuestionStudent ) > 0) {

	while ( $e = mysql_fetch_assoc ( $selectQuestionStudent ) ) {

		
		$output[] = $e;
		//echo (json_encode($e));
	}
	echo (json_encode($output));
}
?>