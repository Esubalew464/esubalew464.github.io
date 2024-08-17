<?php
// Database connection details
$servername = "sql211.byethost24.com"; // Replace with your server name
$username = "b24_35921885"; // Replace with your MySQL username
$password = "E45rt45rt#"; // Replace with your MySQL password
$dbname = "b24_35921885_home"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $christian_name = $_POST['christian_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Prepare SQL statement to insert data into users table
    $sql = "INSERT INTO users (first_name, middle_name , last_name, christian_name , email, dob, phone, address) VALUES ('$first_name', '$middle_name', '$last_name', '$christian_name','$email', '$dob', '$phone', '$address')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
