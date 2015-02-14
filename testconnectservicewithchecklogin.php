<?php

require_once("libraries/nusoap.php");   // ------------------------------------ Class ในการเรียกใช้ ไม่ต้องไปปรับแก้อะไร ------------------------------

$proxyhost = '';$proxyport ='';

$client = new nusoapclient("http://passport.phuket.psu.ac.th/authentication/authentication.asmx",false,$proxyhost, $proxyport);

$client->soap_defencoding = 'utf-8';


$strUsername = $_POST["std_id"];
$strPassword = $_POST["std_pwd"];

$params = array(
		'username' => [$strUsername],
		'password' => [$strPassword],
);





$result = $client->call('GetUserDetails', $params, 'http://tempuri.org/', 'http://tempuri.org/GetUserDetails', false, false, 'rpc', 'literal');


$err = $client->getError();
echo $err;


if($result==0)
	{
		$arr['std_id'] = "0"; 
		$arr['std_pwd'] = "0"; 
		$arr['Error'] = "Incorrect Username and Password";	
	}
	else
	{
		$arr['std_id'] = "username"; 
		$arr['std_pwd'] = "password"; 
		$arr['Error'] = "Connect OK";	
	}
	echo json_encode($result);


?>
