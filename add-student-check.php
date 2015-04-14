<?php


require("config.php");
//Student_Id
$student_Id = $_POST["studentid"];
//Date_Time
$datetime = $_POST["datetime"];
//Subject
$subject = $_POST["subject"];
//Passcode
$passcode = $_POST["passcode"];


$strSQL = mysql_query ("INSERT INTO `check`
		(Student_Id,Date_Time,Subject_Name_Eng,Pass_Code)
		VALUES('$student_Id','$datetime','$subject','$passcode')")
		or die(mysql_error());


?>