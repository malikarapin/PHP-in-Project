<?php
require ("config.php");



$teacher_Id = $_POST ["teacid"];
$datetime = $_POST ["datetime"];
$quessubject = $_POST ["subject"];
$question = $_POST ["question"];
$answer1 = $_POST ["ans1"];
$answer2 = $_POST ["ans2"];
$answer3 = $_POST ["ans3"];
$answer4 = $_POST ["ans4"];
$count_time = $_POST ["conttime"];






$questionteacher = mysql_query ("INSERT INTO `question` 
(Teacher_Id,Subject_Name_Eng,Proposition,Result1,Result2,Result3,Result4,Date_Time,Count_time)
VALUES('$teacher_Id','$quessubject','$question','$answer1','$answer2','$answer3','$answer4','$datetime','$count_time')")or die(mysql_error());
		
?>