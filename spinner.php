<?php

require("config.php");

$student_Id = $_POST["student"];




$strSQL = mysql_query("SELECT regist_data.Subject_Name_Eng,regist_data.Subject_Code FROM regist_data WHERE Student_Id='$student_Id'")or die(mysql_error());



if ($value = mysql_fetch_array($strSQL) > 0) {

	while($e = mysql_fetch_assoc($strSQL)){
		
	$output[]=$e;
	}
}

print(json_encode($output));

mysql_close();

?>