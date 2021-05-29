<?php 
   
  $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $table= fread($myfile,filesize("newfile.txt"));
  fclose($myfile);

  $mysqli=new mysqli('localhost','root','','dairy_web_project'); 
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