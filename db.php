<?php


$mysqli = new mysqli("localhost", "root", "1234", "test", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
   //echo "<span style='color:red;'>Connect successfully ". $mysqli->host_info . "</span>\n";
}


?>