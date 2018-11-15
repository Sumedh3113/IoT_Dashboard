<?php
$connection = mysqli_connect('localhost', 'id7721592_sensor', 'Sumedh@92','id7721592_sensor_data');
if(!$connection){
die("Database Connection Failed" . mysqli_error($connection));
}
//echo "Connected successfully";
$select_db = mysqli_select_db($connection, 'id7721592_sensor_data');
if(!$select_db)
{
    die("Database Selection Failed" . mysqli_error($connection));
}
else{
   // echo "Connected database successfully";
    
}
?>