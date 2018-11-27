<?php
    // Connect to MySQL
    include("connect.php");
	

    	//Use this code in main code
	
	//$SQL = "Update led VALUES ('".$_GET["status"]."')";  
        $SQL = "UPDATE `led` SET `status` = ('".$_GET["status"]."')";

    // Execute SQL statement
    mysqli_query($connection,$SQL);
	
                                
    // Go to the review_data.php (optional)
    //header("Location: index.php");
?>