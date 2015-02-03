<?php


$db_host = 'acsm.ictte-project.com';
$db_name = 'project3_acsm';
$db_user = 'project3_acsm';
$db_pass = '1ASdb7rv';


$conn=mysql_connect($db_hos,$db_user,$db_pass)or die(mysql_error());

mysql_select_db("project3_acsm")or die(mysql_error());

$result = mysql_query("SELECT * FROM student")or die(mysql_error());


if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["student"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $stdent = array();
        $stdent["std_id"] = $row["std_id"];
        $stdent["std_pwd"] = $row["std_pwd"];

 
        // push single product into final response array
        array_push($response["student"], $stdent);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}

?> 