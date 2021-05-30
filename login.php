<?php 
  $uname=$_POST["tf1"]; 
  $pass=$_POST["tf2"]; 
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
  $sql=$mysqli->query("SELECT username,password FROM applications WHERE username='$uname'"); 
  $flag = false;
  while($obj=$sql->fetch_Object()){
    if($obj->username==$uname AND $obj->password==$pass){
      $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
      fwrite($myfile, $uname);
      fclose($myfile);
      $flag = true;
      header( 'Location: after_login.html' ); 
    }
    else {
      // session_start();
      // $_SESSION['errorCode']= "loginError";
      // header( 'Location: error.html' ); 
      echo "pass error";
    }
  }
  if(!$flag){
    header( 'Location: error.php' ); 
  }
  $mysqli->close(); 
  
 ?> 