<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbNaam = "roi_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbNaam);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>