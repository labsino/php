<?php
include 'config.php';  // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Check if the form was submitted
    $id = $_POST["id"];  // Get the user ID from the form
    $name = $_POST["name"];  // Get the new name
    $email = $_POST["email"];  // Get the new email

    // SQL query to update user information
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!-- HTML Form to update user data -->
<form method="post">
    <input type="number" name="id" placeholder="Enter User ID" required><br>
    <input type="text" name="name" placeholder="Enter New Name" required><br>
    <input type="email" name="email" placeholder="Enter New Email" required><br>
    <button type="submit">Update</button>
</form>
<!--
Explanation
•	UPDATE users SET name='$name', email='$email' WHERE id=$id updates the name and email for a specific user.
•	The form allows the user to enter the id, name, and email to modify.
-->