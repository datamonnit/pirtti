<?php

include 'config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Kantaan ei pysty yhdistämään" . $conn->connect_error);
}
