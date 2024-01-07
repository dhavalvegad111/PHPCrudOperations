<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_crud2_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully.";
