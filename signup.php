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
  $sql=$mysqli->prepare("INSERT INTO applications(Name,username,password) VALUES (?,?,?)"); 
  $sql->bind_param("sss",$name,$uname,$pass); 
  $name=$_POST["tf1"];
  $uname=$_POST["tf2"]; 
  $pass=$_POST["tf3"];   
  $cpass=$_POST["tf4"];
  $sql1=$sql->execute(); 
  if($sql1==TRUE AND $pass==$cpass){ 
   $a="CREATE TABLE ".$uname." (date VARCHAR(10) PRIMARY KEY ,feelings TEXT)";
   $table=$mysqli->query($a);
   if($table==TRUE){
    header( 'Location: index.html' ) ; 
   }
   else{
    echo "Table is not created".$mysqli->error;
   }
  } 
  else {
    echo 'its not working once check the password.';
  }
  $sql->close(); 
  $mysqli->close(); 
 
 ?> 