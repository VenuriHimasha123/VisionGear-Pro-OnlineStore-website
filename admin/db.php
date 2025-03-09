<?php
// db.php
$host = 'localhost';
$username = 'root';  // Your MySQL username
$password = '';  // Your MySQL password
$database = 'online_store_db';  // The name of the database

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
