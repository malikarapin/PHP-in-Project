<?php
require("config.php");

$subject = $_POST ["subject"];

$passcode = $_POST ["pass_Code"];

$timecheck = $_POST ["time_check"];


$strSQL = "SELECT check.Student_Id,check.Date_Time FROM `check` WHERE check.Subject_Name_Eng='".$subject."' 
		and check.Pass_Code='".$passcode."'
		and Date_Time <= '".$timecheck."'
		and check.Student_Id IS NOT NULL";


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

