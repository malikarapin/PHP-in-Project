<?php

	$objConnect = mysql_connect("localhost","root","acsm");
	$objDB = mysql_select_db("acsmdb");

	//$_POST["strUser"] = "weerachai"; // for Sample
	//$_POST["strUser"] = "weerachai@1";  // for Sample

	$strUsername = $_POST["strUser"];
	$strPassword = $_POST["strPass"];
	$strSQL = "SELECT * FROM student WHERE 1 
		AND std_id = '".$strUsername."'  
		AND std_pwd = '".$strPassword."'  
		";

	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	$intNumRows = mysql_num_rows($objQuery);
	if($intNumRows==0)
	{
		$arr['StatusID'] = "0"; 
		$arr['MemberID'] = "0"; 
		$arr['Error'] = "Incorrect Username and Password";	
	}
	else
	{
		$arr['StatusID'] = "1"; 
		$arr['MemberID'] = $objResult["MemberID"]; 
		$arr['Error'] = "";	
	}

	/**
		$arr['StatusID'] // (0=Failed , 1=Complete)
		$arr['MemberID'] // MemberID
		$arr['Error' // Error Message
	*/
	
	mysql_close($objConnect);
	
	echo json_encode($arr);
?>
