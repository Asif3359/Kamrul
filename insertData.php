<?php

include 'connectDB.php';
// Create database

$sql = "INSERT INTO kamrul.users (name, email) VALUES ('John Doe','jone@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();