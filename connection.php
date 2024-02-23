<?php
error_reporting(0);
session_start();
$host = "localhost";
$username = "root";
$password = "";
database = "php_crud2_db";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully.";
