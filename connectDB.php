<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "localizarteDB";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $db_name);

session_start();


// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}else{
  //echo "Connected successfully";
}

?>
