<?php

require("config.php");

$teacher_Id = $_POST["studentid"];
$datetime = $_POST["datetime"];
$Latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$subject = $_POST["subject"];
$passcode = $_POST["passcode"];


	$strSQL = mysql_query ("INSERT INTO `check` (Teacher_Id,Latitude,longitude,Date_Time,Subject_Name_Eng,Pass_Code)
	VALUES('$teacher_Id','$Latitude','$longitude','$datetime','$subject','$passcode')")or die(mysql_error());

echo $teacher_Id,$Latitude,$longitude,$datetime;
?>