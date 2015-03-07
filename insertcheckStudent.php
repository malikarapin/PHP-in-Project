<?php

require("config.php");

$student_Id = $_POST["studentid"];
$datetime = $_POST["datetime"];
$Latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$subject = $_POST["subject"];


	$strSQL = mysql_query ("INSERT INTO `check` (Student_Id,Latitude,longitude,Date_Time,Subject_Name_Eng)
	VALUES('$student_Id','$Latitude','$longitude','$datetime','$subject')")or die(mysql_error());

echo $student_Id,$Latitude,$longitude,$datetime;
?>