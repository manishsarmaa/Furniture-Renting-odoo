<?php
include "conn.php";

$contry = $_POST["contry"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["c_address"]; // Corrected to match the name in the HTML form
$c_state_country = $_POST["c_state_country"];
$c_postal_zip = $_POST["c_postal_zip"];
$c_email_address = $_POST["c_email_address"];
$c_phone = $_POST["c_phone"];
$c_order_notes = $_POST["c_order_notes"];

// Use mysqli_real_escape_string to sanitize input (optional but recommended)
$contry = mysqli_real_escape_string($conn, $contry);
$fname = mysqli_real_escape_string($conn, $fname);
$lname = mysqli_real_escape_string($conn, $lname);
$address = mysqli_real_escape_string($conn, $address); // Corrected variable name
$c_state_country = mysqli_real_escape_string($conn, $c_state_country);
$c_postal_zip = mysqli_real_escape_string($conn, $c_postal_zip);
$c_email_address = mysqli_real_escape_string($conn, $c_email_address);
$c_phone = mysqli_real_escape_string($conn, $c_phone);
$c_order_notes = mysqli_real_escape_string($conn, $c_order_notes);

// Construct the SQL query with correct column names
$sql = "INSERT INTO billing (contry, fname, lname, address, c_state_country, c_postal_zip, c_email_address, c_phone, c_order_notes) 
        VALUES ('$contry', '$fname', '$lname', '$address', '$c_state_country', '$c_postal_zip', '$c_email_address', '$c_phone', '$c_order_notes')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
