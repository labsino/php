<?php
include 'config.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Check if form was submitted
    $id = $_POST["id"];  // Get user ID from the form

    // SQL query to delete user
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) { // Execute and check if successful
        echo "User deleted successfully";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}
?>

<!-- HTML Form to delete a user -->
<form method="post">
    <input type="number" name="id" placeholder="Enter User ID to Delete" required><br>
    <button type="submit">Delete</button>
</form>
<!--Explanation
•	The SQL DELETE FROM users WHERE id=$id removes a user based on the id entered in the form.
•	The form allows the user to specify the id of the user to delete.
-->
