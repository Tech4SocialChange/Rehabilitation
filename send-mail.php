<?php
$msg="";
if(isset($_POST['name']) && isset($_POST['lon']) && isset($_POST['lat']) && isset($_POST['details']) && isset($_POST['type']))
{
	$from_add = "info@kolorob.net"; 
	$to_add = ["taw_khan@yahoo.com", "tawk1994han@gmail.com"];

	if($_POST['type']=="earthquack"){

	}
	elseif($_POST['type']=="buildingcollapse"){

	}
	elseif($_POST['type']=="eviction"){
		
	}

	$subject = "Emergency ". $_POST['type'] ." from " . $_POST['name'];
	$message = $_POST['name'] . "is having a " . $_POST['type'] . " emergency at lon/lat-" . $_POST['lon'] .", " .$_POST['lat'] . ". " . $_POST["details"] ;
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= 'From: Website <info@kolorob.net>' . "\r\n";

	
	foreach ($to_add as $to) {
		mail($to,$subject,$message,$headers);
	}
	echo "1";	
}
