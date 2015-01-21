<?php

//$db_host = 'localhost';
//$db_name = 'acsmdb';
//$db_user = 'root';
//$db_pass = '';

/* Connect to an ODBC database using driver invocation */
$db_host = 'localhost';
$db_name = 'acsmdb';
$db_user = 'root';
$db_pass = 'acsm';

try {
    // If you change db server system, change this too!

    $conn=mysql_connect($db_host,$db_user,$db_pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้"); // เชื่อมต่อ ฐานข้อมูล
    mysql_select_db($db_name,$conn); // เลือกฐานข้อมูล
    mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย
    echo "Connected to database";
}
catch (PDOException $e) {
    echo $e->getMessage();
}




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
	
	mysql_close($conn);

	
	//echo json_encode($arr);
	
?>
