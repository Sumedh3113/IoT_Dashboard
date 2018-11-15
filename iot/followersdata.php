<?php
//setting header to json
//i.e we are going to output the data in json format
header('Content-Type: application/json');

//database

//database
require_once('connect.php');
	$sql = "SELECT userid, facebook, twitter, googleplus FROM followers";

	//execute the data
	$result = mysqli_query($connection, $sql) or die (mysql_error ());
//query to get data from the table



//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

print json_encode($data);

?>