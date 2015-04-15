<?php
require("config.php");

$subject = $_POST ["subject"];

$teacherId = $_POST ["teacherid"];




$strSQL = "SELECT check.Date_Time,check.Pass_Code FROM `check` WHERE check.Subject_Name_Eng='".$subject."' 
		and check.Teacher_Id='".$teacherId."'";


$objQuery = mysql_query($strSQL)or die(mysql_error());


$intNumField = mysql_num_fields($objQuery);
$resultArray = array();
while($obResult = mysql_fetch_array($objQuery))
{
	$arrCol = array();
	for($i=0;$i<$intNumField;$i++)
	{
	$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
	}
	array_push($resultArray,$arrCol);
}

mysql_close($objConnect);

echo json_encode($resultArray);
?>

