<?php 

  $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $table= fread($myfile,filesize("newfile.txt"));
  fclose($myfile);

  $date=$_POST["tf1"];
  $mysqli=new mysqli('localhost','root','','dairy_web_project'); 
  $a="SELECT * FROM ".$table." WHERE date='".$date."'";
  $sql=$mysqli->query($a);
  	$obj=$sql->fetch_assoc();
    echo '<html>';
    echo '<body>';
    echo '<head><title> Online Personal Diary </title>';
    echo '<style>';
    echo 'body {background-image:url("pic2.jpg");}';
    echo '.button {background-color: #4CAF50;';
    echo 'border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: bold;';
    echo 'display: inline-block;font-size: 20px;margin: 4px 2px;cursor: pointer;background-color: #f44336;';
    echo 'border-radius: 8px;} ';
    echo 'p{font-size: 34px;color:black;font-weight: bold;}';
    echo 'textarea.oblique {font-style: oblique;font-size: 24px;background-color:#ffcccc;';
    echo 'color:black;font-weight: bold;border-radius: 8px;}';
    echo '</style></head><body><center><br><br>';
    echo '<form action="create.php" method="POST">';
    echo '<p>We are Feeling Lucky to Remind your Memories.</p><br>';
    echo '<textarea rows="18" cols="75" name="tf2" class="oblique" >'.$obj["feelings"].'</textarea><br><br><br>';
    echo '</form></center></body></html>';

  $mysqli->close(); 
 
 ?> 