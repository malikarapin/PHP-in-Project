<?php
require("config.php");


$teacher_name = $_POST["Teacher_Name_Thai"];


$strSQL = mysql_query("SELECT subject.Subject_Code,subject.Subject_Name_Eng FROM subject WHERE Teacher_Name_Thai='$teacher_name'")or die(mysql_error());


if ($value = mysql_num_rows($strSQL) > 0) {
	
	while($e = mysql_fetch_assoc($strSQL)){
		
	$output[]=$e;
	}
}



print(json_encode($output));
mysql_close();
?>