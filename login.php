<?php 
  $uname=$_POST["tf1"]; 
  $pass=$_POST["tf2"]; 
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
}else
echo "Enter Correct details!";
  $sql=$mysqli->query("SELECT username,password FROM applications WHERE username='$uname'"); 
  while($obj=$sql->fetch_Object()){
    if($obj->username==$uname AND $obj->password==$pass){
      $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
      fwrite($myfile, $uname);
      fclose($myfile);
      header( 'Location: after_login.html' ); 
    }
    else {
      echo " Something you wrote wrote. Please Try Again";
    }
  }
  $mysqli->close(); 
  
 ?> 