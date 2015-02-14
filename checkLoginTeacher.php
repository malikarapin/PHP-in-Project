<?php
$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$objConnect=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());
	//$objConnect = mysql_connect("http://acsm.ictte-project.com","project3_acsm","1ASdb7rv");
	
$objDB = mysql_select_db("project3_acsm")or die(mysql_error());

	//$objDB = mysql_select_db("project3_acsm");
	//echo "Connected to database";
	//$_POST["strUser"] = "weerachai"; // for Sample
	//$_POST["strUser"] = "weerachai@1";  // for Sample

	$strUsername = $_POST["teacher_id"];
	$strPassword = $_POST["teacher_pwd"];

	$strSQL= mysql_query("SELECT * FROM teacher WHERE teacher_id = '".$strUsername."' AND teacher_pwd = '".$strPassword. "'")or die(mysql_error());
	//$strSQL = "select * from student where std_id = '".$username."' AND std_pwd = '".$password. "'";

	//$objQuery = mysql_query($strSQL);
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

	/**
		$arr['StatusID'] // (0=Failed , 1=Complete)
		$arr['MemberID'] // MemberID
		$arr['Error' // Error Message
	*/

	mysql_close($objConnect);
	
	echo json_encode($arr);

?>
