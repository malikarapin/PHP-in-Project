<?php

//$db_host = 'localhost';
//$db_name = 'acsmdb';
//$db_user = 'root';
//$db_pass = '';

/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=acsmdb;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection to Database';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


/*

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
	
	mysql_close($dsn);

	
	//echo json_encode($arr);
	
?>
