<?php
// $servername = "it.esedu.fi";
// $username = "pirtti";
// $password = "p1rtt1onp4r4s!";
// $database = "pirttidb";

$servername = "localhost";
$username = "root";
$password = "";
$database = "pirttil";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Kantaan ei pysty yhdistämään" . $conn->connect_error);
}
?>