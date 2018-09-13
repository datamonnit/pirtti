<?php
$servername = "paja.esedu.fi";
$username = "juho.pirila";
$password = "nakki";
$database = "juho.pirila";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Virhe yhditäminenäsäsäsässsä " . $conn->connect_error);
}
?>
