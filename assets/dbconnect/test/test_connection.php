<?php
include '../db_config.php';

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
echo "Connected to database successfully!";
