<?php
// Database credentials
$servername = "localhost:3307";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "gatepass"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $hostel = $_POST["hostel"];

    // Prepare SQL statement
    $sql = "INSERT INTO users (email, password, role, hostel) VALUES ('$email', '$password', '$role', '$hostel')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
