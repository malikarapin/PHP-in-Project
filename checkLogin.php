<?php


	require_once 'connect.php';


	//$_POST["strUser"] = "weerachai"; // for Sample
	//$_POST["strUser"] = "weerachai@1";  // for Sample

$username = $_POST['std_id'];
$password = $_POST['std_pwd'];
$query_search = "select * from student where std_id = '".$username."' AND std_pwd = '".$password. "'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 1) { 
 echo "No Such User Found"; 
 }
 else  {
    echo "User Found"; 
}

	
	//mysql_close($conn);


	//echo json_encode($arr);
	
?>
