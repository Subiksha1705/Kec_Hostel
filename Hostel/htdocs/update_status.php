<?php
// Database credentials
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gatepass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Phone = $_POST["Phone"];
    $action = $_POST["action"];

    // Update the database using Phone as the identifier
    $sql = "UPDATE guest SET Actions = '$action' WHERE Phone = '$Phone'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}

?>
