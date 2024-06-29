<?php
include "conn.php"; // Ensure this file connects to your database

// Retrieve POST data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$repass = $_POST["repass"];
$contact = $_POST["contact"];

// SQL query to insert data into 'submit' table
$sql = "INSERT INTO submit (fname, lname, pass, repass, contact, email) 
        VALUES ('$fname', '$lname', '$pass', '$repass', '$contact','$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    echo "New record created successfully";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
