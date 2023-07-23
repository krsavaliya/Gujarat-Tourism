<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get email and password from form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Query database for matching email and password
$sql = "SELECT * FROM register WHERE email='$email' AND pass='$password'";
$result = $conn->query($sql);

// If a match is found, redirect to home page
if ($result->num_rows > 0) {
    header("Location: home.php");
    exit();
} else {
    // If no match is found, display error message
    echo "Invalid email or password.";
}

$conn->close();
