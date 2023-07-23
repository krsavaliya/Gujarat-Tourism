<?php
$redirect_url = "http://localhost/webt/Tourisam/home.php";
// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$database = "tourism";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input data
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];

// Prepare SQL query
$sql = "SELECT firstname, lastname, gender, birthdate, email, pass FROM register WHERE email = '$email' AND birthdate = '$birthdate'";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Check if there are any matching rows
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);

        // echo "Your Password is:" . $row["pass"] . "<br>";
        echo "<script>alert('Your Password is:{$row["pass"]}'); window.location.href = '{$redirect_url}';</script>";
    }
} else {
    echo "No matching rows found.";
}

// Close database connection
mysqli_close($conn);
