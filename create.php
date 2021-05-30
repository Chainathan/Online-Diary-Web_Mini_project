<?php   
  $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $table= fread($myfile,filesize("newfile.txt"));
  fclose($myfile);
  $servername = "sql210.epizy.com";
  $username = "epiz_28745165";
  $password = "S5gdf4htarK8xl";
  $dbname   = "epiz_28745165_onlinediary";
  $dbServerPort = "3306";

  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);

  // Check connection
  if (!$mysqli) {
      die("Connection failed: " . mysqli_connect_error());
  }
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