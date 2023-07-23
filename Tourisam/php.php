<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourism";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get form data
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert data into Users table
    $sql = "INSERT INTO Users (firstname, lastname, email, birthdate, gender, password) 
                VALUES ('$firstname', '$lastname', '$email', '$birthdate', '$gender', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Data added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
