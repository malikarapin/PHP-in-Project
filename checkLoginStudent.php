<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$objConnect=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());


$objDB = mysql_select_db("project3_acsm")or die(mysql_error());



	$strUsername = $_POST["std_id"];
	$strPassword = $_POST["std_pwd"];

	$strSQL= mysql_query("SELECT * FROM student WHERE std_id = '".$strUsername."' AND std_pwd = '".$strPassword. "'")or die(mysql_error());
	


	$objResult = mysql_fetch_array($strSQL);
	$intNumRows = mysql_num_rows($strSQL);
	if($intNumRows==0)
	{
		$arr['std_id'] = "0"; 
		$arr['std_pwd'] = "0"; 
		$arr['Error'] = "Incorrect Username and Password";	
	}
	else
	{
		$arr['std_id'] = "1"; 
		$arr['std_pwd'] = $objResult["MemberID"]; 
		$arr['Connect'] = "Connect OK";	
	}



	mysql_close($objConnect);
	
	echo json_encode($arr);

?>
