<?php
include 'config.php';  // Include database connection

// SQL query to retrieve all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);  // Execute the query

if ($result->num_rows > 0) { // Check if there are results
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>"; // Create an HTML table
    while ($row = $result->fetch_assoc()) { // Loop through each record
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>"; // Close the table
} else {
    echo "No users found"; // If no users exist, display a message
}

/*Explanation
•	Retrieves all users from the database.
•	Uses a while loop to display each user in an HTML table.
•	If no users exist, it shows "No users found".*/

?>
