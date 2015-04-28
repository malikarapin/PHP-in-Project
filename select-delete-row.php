<?php
require("config.php");

$TeacherId = $_POST["TeacherId"];

$Subject = $_POST["Subject"];

$PassCode = $_POST["PassCode"];

$DateTime = $_POST["DateTime"];




$strSQL = mysql_query("DELETE FROM `check` WHERE
		`check`.Teacher_Id='".$TeacherId."'and
		`check`.Subject_Name_Eng='".$Subject."'and
		`check`.Pass_Code='".$PassCode."'and
		`check`.Date_Time='".$DateTime."'")or die(mysql_error());



if (mysql_affected_rows() > 0) {
	echo "1";
}
else {
	echo "0";
}
?>