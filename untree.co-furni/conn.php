<?php

$conn = mysqli_connect("localhost","root","","storedata");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>