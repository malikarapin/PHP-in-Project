<?php
require("config.php");


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

	/**
		$arr['StatusID'] // (0=Failed , 1=Complete)
		$arr['MemberID'] // MemberID
		$arr['Error' // Error Message
	*/

	mysql_close($objConnect);
	
	echo json_encode($arr);

?>
