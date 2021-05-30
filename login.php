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