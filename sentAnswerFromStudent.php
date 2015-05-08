<?php
require("config.php");

$subject = $_POST ["subject"];

$studentID = $_POST ["studentID"];

$datatime = $_POST ["datetime"];

$answer = $_POST ["answer"];



$questionteacher = mysql_query ("INSERT INTO `question`
		(Student_Id,Subject_Name_Eng,answer,Date_Time)
		VALUES
		('$studentID','$subject','$answer','$datatime')")or die(mysql_error());


?>