<?php 
  $uname=$_POST["tf1"]; 
  $pass=$_POST["tf2"]; 
  $mysqli=new mysqli('localhost','root','','dairy_web_project'); 
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