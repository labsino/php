<?php
$host = "localhost";  // The database server (usually "localhost" for local development)
$username = "root";   // The database username (default in XAMPP is "root")
$password = "";       // The database password (default in XAMPP is empty)
$dbname = "mydatabase";  // The name of the database we created

// Create connection to MySQL database
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error); // If the connection fails, stop execution and display an error
}

// Explanation
// The script connects to the MySQL database using the mysqli extension.
// If the connection fails, it stops the execution using die() and shows an error message.
?>

