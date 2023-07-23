<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// SQL statement to insert form data into database
$sql = "INSERT INTO php (name, email) VALUES ('$name', '$email')";

// Execute SQL statement and check for errors
if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
