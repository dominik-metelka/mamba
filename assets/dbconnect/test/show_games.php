<?php
include '../db_config.php';

$sql = "SELECT id, name, price, genres FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Game: " . $row["name"] . " - Price: " . $row["price"] . " - Genres: " . $row["genres"] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();
