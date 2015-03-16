<?php

require("config.php");


$origLat = 7.894736;//app
$origLon = 98.352592;//app
$dist = 0.0155342798; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
$query = "SELECT Subject_Name_Eng,Latitude, longitude, 3956 * 2 *
ASIN(SQRT( POWER(SIN(($origLat - abs(Latitude))*pi()/180/2),2)
+COS($origLat*pi()/180 )*COS(abs(Latitude)*pi()/180)
*POWER(SIN(($origLon-longitude)*pi()/180/2),2)))
as distance FROM `check` WHERE
longitude between ($origLon-$dist/abs(cos(radians($origLat))*69))
and ($origLon+$dist/abs(cos(radians($origLat))*69))
and Latitude between ($origLat-($dist/69))
and ($origLat+($dist/69))
having distance < $dist ORDER BY distance limit 1;";
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_assoc($result)) {
	echo $row['Subject_Name_Eng']." > ".$row['distance']."<BR>";
	
}
	
	?>