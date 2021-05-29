<?php
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
}
echo "Connected successfully";
?>