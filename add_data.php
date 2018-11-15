<?php
    // Connect to MySQL
    include("connect.php");

    // Prepare the SQL statement
      date_default_timezone_set('Europe/Athens');
     $dateS = date('m/d/Y h:i:s', time());
    echo $dateS;
    $SQL = "INSERT INTO kaustya VALUES ('$dateS','".$_GET["Lights"]."')";     

    // Execute SQL statement
    mysqli_query($connection,$SQL);

    // Go to the review_data.php (optional)
   // header("Location: index.php");
?>