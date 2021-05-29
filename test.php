<?php
$servername = "sql200.ultimatefreehost.in";
$username = "ltm_28743444";
$password = "testtest";
$dbname   = "ltm_28743444_onlinediary";
$dbServerPort = "3306";
$servername = "mysql-32686-0.cloudclusters.net";
$username = "admin";
$password = "bKw1Lywo";
$dbname   = "onlinediary";
$dbServerPort = "32686";
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "success";
}
?>