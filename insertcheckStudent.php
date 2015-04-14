<?php
require ("config.php");

$student_Id = $_POST ["studentid"];
$datetime = $_POST ["datetime"];
$Latitude = $_POST ["latitude"];
$longitude = $_POST ["longitude"];
$subject = $_POST ["subject"];
$passcode = $_POST ["pass_code"];

$strSQL = mysql_query ( "SELECT check.Pass_Code
		FROM `check` 
		WHERE check.Subject_Name_Eng='$subject'
		ORDER BY `check`.Check_Id DESC ,
		`check`.Teacher_Id DESC,
		`check`.Subject_Name_Eng DESC 
		 LIMIT 1" ) or die ( mysql_error () );



if ($value = mysql_num_rows ( $strSQL ) > 0) {
	
	while ( $e = mysql_fetch_assoc ( $strSQL ) ) {
		
		$output = $e;
		foreach ( $output as $value1 ) {
		}
	}
	
	if ($passcode == $value1) {
		
	
		$origLat = $Latitude;// 7.894736;//app
		$origLon = $longitude;//98.352592;//app
		$dist = 0.0155342798; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
		$query = "SELECT Subject_Name_Eng,Latitude, longitude, 3956 * 2 *
		ASIN(SQRT( POWER(SIN(($origLat - abs(Latitude))*pi()/180/2),2)
		+COS($origLat*pi()/180 )*COS(abs(Latitude)*pi()/180)
		*POWER(SIN(($origLon-longitude)*pi()/180/2),2)))
		as distance 
		FROM `check` 
		WHERE
		longitude between ($origLon-$dist/abs(cos(radians($origLat))*69))
		and ($origLon+$dist/abs(cos(radians($origLat))*69))
		and Latitude between ($origLat-($dist/69))
		and ($origLat+($dist/69))
		having distance < $dist ORDER BY distance limit 1;";
		$result = mysql_query($query) or die(mysql_error());
		
		while($row = mysql_fetch_assoc($result)) {
			
			//echo $row['distance']."<BR>";
			//echo $row['Subject_Name_Eng']." > ".$row['distance']."<BR>";
			foreach ( $row as $valuelatloncheck ) {
			}
			//echo $valuelatloncheck;
		}
		if ($value9 = $valuelatloncheck > 0) {
			$strSQLinsertstudent = mysql_query ("INSERT INTO `check` (Student_Id,Latitude,longitude,Date_Time,Subject_Name_Eng,Pass_Code) VALUES('$student_Id','$Latitude','$longitude','$datetime','$subject','$passcode')")or die(mysql_error());
			echo "Check successful";
		}else {
			echo "Check unsuccessful";
	}
	
	} else {
		echo "Check unsuccessful";
	}
}else {	
	echo "Check unsuccessful";
	}






// lso notice that distance are expressed in terms of radius.

// $strSQL = mysql_query ("INSERT INTO `check` (Student_Id,Latitude,longitude,Date_Time,Subject_Name_Eng,Pass_Code) VALUES('$student_Id','$Latitude','$longitude','$datetime','$subject','$passcode')")or die(mysql_error());

/* 	<!-- //echo "Check successful";
	//echo "Check unsuccessful"; -->
	
	<!-- $strSQLlat = mysql_query ( "SELECT check.Latitude
			FROM `check`
			WHERE check.Subject_Name_Eng='$subject'
			ORDER BY `check`.Check_Id DESC ,
			`check`.Subject_Name_Eng DESC
			LIMIT 1" ) or die ( mysql_error () );
	
			while ( $vcheck1 = mysql_fetch_assoc ( $strSQLlat ) ) {
				
			$outputlat = $vcheck1;
			foreach ( $outputlat as $valuelat ) {
			}
			//echo ($valuelat);
			}
	
			$strSQLlon = mysql_query ( "SELECT check.longitude
					FROM `check`
					WHERE check.Subject_Name_Eng='$subject'
					ORDER BY `check`.Check_Id DESC ,
					`check`.Subject_Name_Eng DESC
					LIMIT 1" ) or die ( mysql_error () );
	
					while ( $vcheck2 = mysql_fetch_assoc ( $strSQLlon ) ) {
						
					$outputlon = $vcheck2;
					foreach ( $outputlon as $valuelon ) {
					}
					//echo ($valuelon);
					}
					--> */
	
	
	
?>








