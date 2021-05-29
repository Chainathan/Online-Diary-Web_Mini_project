<?php   
  $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $table= fread($myfile,filesize("newfile.txt"));
  fclose($myfile);
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
echo "Connected successfully";
  $a="INSERT INTO ".$table." (date,feelings) VALUES(?,?)";
  $sql=$mysqli->prepare($a); 
  $sql->bind_param("ss",$date,$info); 
  $date=$_POST["tf1"]; 
  $info=$_POST["tf2"];  
  $sql->execute(); 
  if($sql==TRUE){ 
   header( 'Location: after_login.html' ); 

  } 
  else {
    echo '<script type="text/javascript">';
   echo ' alert("Sorry for inconvience. \nPlease try again")';
   echo '</script>';
  }
   
  $sql->close(); 
  $mysqli->close(); 
 ?> 