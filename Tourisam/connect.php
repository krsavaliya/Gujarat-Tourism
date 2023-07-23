<?php
$redirect_url = "http://localhost/webt/Tourisam/home.php";
$current_date = date('Y-m-d');
$user_input_date = $_POST['birthdate'];
$diff = date_diff(date_create($user_input_date), date_create($current_date));
// Check if the user input date is at least 18 years old
if ($diff->y < 18) {
    // Show alert box
    echo "<script>alert('You must be at least 18 years old to proceed.'); window.location.href = '{$redirect_url}';</script>";
} else {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tourism";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    // SQL statement to insert form data into database
    $sql = "INSERT INTO register (firstname, lastname, gender, birthdate, email, pass) VALUES ('$firstname', '$lastname', '$gender', '$birthdate', '$email','$pass')";

    // Execute SQL statement and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href = '{$redirect_url}';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close database connection
    $conn->close();
}
