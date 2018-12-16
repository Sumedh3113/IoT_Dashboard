<?php
header('Content-Type: application/json');

require_once('connect.php');

     $id = $_POST["ids"];
	 
	// $f = '45';
	// $t = '65';
	//echo $from."  \n";
	//echo  $to ; 
	
	
	$sql = "SELECT * FROM final WHERE id = '$id'";
//	"SELECT * FROM final WHERE Lights BETWEEN '" . $from . "' AND  '" . $to . "'";
	
	//
	
	$result= mysqli_query($connection, $sql);
    //	or die (mysql_error ());
	
	
	$data = array();
	
	foreach ($result as $row) {
	$data[] = $row;
	}
	
	

	//On page 1
	session_start();
	$_SESSION['varname'] = $data;
	//printing these values is needed to generate the graph
	//print json_encode($data);
	header("Location: ids.html")
	
?>
