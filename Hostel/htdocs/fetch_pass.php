<?php
// Database connection parameters
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

// Fetch student data based on the provided roll number
if (isset($_GET['rollno'])) {
    $rollno = $_GET['rollno'];
    // Prepare and execute SQL statement to fetch student data
    $stmt = $conn->prepare("SELECT Name, Department, PhoneNumber, Parents_ph_num, email, hostel, room_no FROM student WHERE Roll_No = ?");
    $stmt->bind_param("s", $rollno);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if student data exists
    if ($result->num_rows > 0) {
        // Fetch student data and return as JSON
        $row = $result->fetch_assoc();
        $formattedRow = array(
            "Name" => $row["Name"],
            "Department" => $row["Department"],
            "PhoneNumber" => $row["PhoneNumber"],
            "Parents_ph_num" => $row["Parents_ph_num"],
            "email" => $row["email"],
            "hostel" => $row["hostel"],
            "room_no" => $row["room_no"]
        );
        echo json_encode($formattedRow);
    } else {
        // No student found with the provided roll number
        echo json_encode(array('error' => 'No student found with the provided roll number'));
    }
} else {
    // Roll number not provided
    echo json_encode(array('error' => 'Roll number not provided'));
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
