<?php
	$dbhost = 'localhost';
	$dbuser = 'a0670558_tovars';
	$dbpass = 'root';
	$dbname = 'a0670558_tovars';
	$dblink = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	if ($dblink->connect_errno) {
		printf("Failed to connect to database");
		exit();
	}
	
	$result = $dblink->query("SELECT * FROM otz");
	$data = array();
	
	while ( $row = $result->fetch_assoc())  {
		$data[]=$row;
	}
	
	echo json_encode($data);
?>