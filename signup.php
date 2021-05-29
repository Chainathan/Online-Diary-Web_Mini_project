<?php 
  $mysqli=new mysqli('localhost','root','','dairy_web_project'); 
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