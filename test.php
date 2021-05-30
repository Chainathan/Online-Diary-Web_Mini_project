<?php
// $servername = "mysql-32686-0.cloudclusters.net";
// $username = "admin";
// $password = "bKw1Lywo";
// $dbname   = "onlinediary";
// $dbServerPort = "32686";
// Create connection
$servername = "sql210.epizy.com";
$username = "epiz_28745165";
$password = "S5gdf4htarK8xl";
$dbname   = "epiz_28745165_onlinediary";
$dbServerPort = "3306";

$mysqli = mysqli_connect($servername, $username, $password, $dbname, $dbServerPort);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "success";
}
?>