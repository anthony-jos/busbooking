<?php

// Database configuration
$host = 'localhost'; // Database server hostname
$user = 'root'; // Database username
$password = ''; // Database password
$dbname = 'bus'; // Database name

// Create database connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
// echo "Connected successfully";


?>
