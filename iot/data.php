<?php
//setting header to json
header('Content-Type: application/json');

//database
require_once('connect.php');
	$sql = "SELECT * FROM score ";
	$result = mysqli_query($connection, $sql) or die (mysql_error ());


// fetching the result in array format
//while ($row = mysqli_fetch_array ($result)){

//echo $row['score'];	
//}

//loop through the returned data
$data = array();

foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
//$result->close();

//close connection
//$mysqli->close();

//now print the data
print json_encode($data);
//*/
?>
