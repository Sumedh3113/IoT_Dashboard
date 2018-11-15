<?php
header('Content-Type: application/json');

require_once('connect.php');

	$sql = "SELECT * FROM sensordata ";
	$result = mysqli_query($connection, $sql) or die (mysql_error ());
	
	$data = array();

	foreach ($result as $row) {
	$data[] = $row;
	}

	// while ($row = mysqli_fetch_array ($result)){
	
	//printing these values is needed to generate the graph
	print json_encode($data);
	
?>
