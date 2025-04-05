<?php
include 'config.php'; // Include database connection settings

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Check if the form was submitted via POST
    $name = $_POST["name"];  // Get the name input from the form
    $email = $_POST["email"];  // Get the email input from the form
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);  // Encrypt the password before storing it

    // SQL query to insert a new user
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Show an error if the query fails
    }
}
?>

<!-- HTML Form to insert user data -->
<form method="post">
    <input type="text" name="name" placeholder="Enter Name" required><br>
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button type="submit">Register</button>
</form>
<!--Explanation
•	include 'config.php'; connects to the database.
•	$_SERVER["REQUEST_METHOD"] == "POST" ensures the form was submitted before executing the SQL query.
•	password_hash($_POST["password"], PASSWORD_BCRYPT); encrypts the password for security.
•	The SQL INSERT INTO users (...) VALUES (...) command adds a new user to the database.
•	If the query is successful, it prints "New user registered successfully", otherwise, it shows an error.
-->
