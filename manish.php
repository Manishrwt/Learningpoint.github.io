<?php

// Database connection
$hostname="localhost:3306/manish";
$dbusername="root";
$dbpassword="";
$dbname="manish";

$conn = new mysqli($hostname,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
    die("Failed to connect:".$conn->connect_error);
}
else{
    echo "<h1>Connection established successfully</h1>";
}

?>
