<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mamba_data";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
