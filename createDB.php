<?php

include 'connectDB.php';

$sql = "CREATE DATABASE IF NOT EXISTS kamrul";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}