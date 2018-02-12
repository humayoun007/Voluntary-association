<?php

//oop way

$mysqli = new mysqli("localhost", "root", "", "test", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
   //echo "<span style='color:red;'>Connect successfully ". $mysqli->host_info . "</span>\n";
}


//Procedural way

//$mysqli = mysqli_connect("localhost","root","","test");
//// Check connection
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}


?>