<?php
    // Connect to MySQL
    include("connect.php");
	

    // Prepare the SQL statement
     date_default_timezone_set('america/los_angeles');
     $dateS = date('Y-m-d', time());// instead of m/d/Y
    //echo $dateS;
    
	//session_start();
	//$var_value =$_SESSION['var'];
	
	//echo $_SESSION['var'];
	//echo $status;
	//Use this code in main code
	$var ='Inactive';
	// use $_GET['Lights'] instead of -1
	if(1 >= 0){
	$var = 'Active';
	}
	/*if($_GET['Lights'] == 0 || $_GET['Lights'] == NULL || $_GET['Lights'] == ''){
		$var = 'Inactive';
	}
	*/
	$SQL = "INSERT INTO final VALUES ('$dateS','0','1','$var')";     

    // Execute SQL statement
    mysqli_query($connection,$SQL);
	

    // Go to the review_data.php (optional)
    //header("Location: index.php");
?>