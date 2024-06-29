<?php

include "conn.php";


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$message = $_POST["message"];


$sql = "INSERT INTO contact (fname, lname, email, message) VALUES ('$fname', '$lname', '$email', '$message')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }


  $conn->close();
?>