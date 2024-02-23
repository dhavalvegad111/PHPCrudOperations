<?php
include "connection.php";

$id = $_GET["id"];
$sql = "DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php");
  $msg = "Data deleted successfully.";
} else {
  $msg = "Failed to delete: " . mysqli_error($conn);
}
?>
