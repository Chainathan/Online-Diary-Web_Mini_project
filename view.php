<?php 

  $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
  $table= fread($myfile,filesize("newfile.txt"));
  fclose($myfile);

  $date=$_POST["tf1"];
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
  $a="SELECT * FROM ".$table." WHERE date='".$date."'";
  $sql=$mysqli->query($a);
 	//$obj=$sql->fetch_assoc();
  //echo sizeof($obj); 
 ?> 
<html>
<body>
<head><title> Online Personal Diary </title>
<style>
body {
  background-image:url("pic2.jpg");
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: bold;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #f44336;
  border-radius: 8px;
} 
p{
  font-size: 34px;color:black;font-weight: bold;
}
textarea.oblique {
  font-style: oblique;
  font-size: 24px;
  background-color:#ffcccc;
  color:black;
  font-weight: bold;
  border-radius: 8px;
}
.lg {
  background-color: #3399ff;
  float: right;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
</style>
</head>
<body>
  <center>
    <br>
    <br>
    <form action="create.php" method="POST">
      <p>We are Feeling Lucky to Remind your Memories.</p>
      <br>
      <input
        type="button"
        value="Dashboard"
        class="lg"
        onclick="window.location.href='after_login.html';"
      />
      <input
        type="button"
        value="Logout"
        class="lg"
        onclick="window.location.href='index.html';"
      />
      <br>
      <?php 
        while($obj=$sql->fetch_Object()){
          echo '<textarea rows="9" cols="75" name="tf2" class="oblique" >'.$obj->feelings.'</textarea><br/>';
        }
      ?>
      <br><br><br>
    </form>
  </center>
</body>
</html>

<?php
$mysqli->close(); 
?>