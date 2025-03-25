<?php
// Database connection
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

// Fetch student data based on roll number
if (isset($_GET['rollno'])) {
    $rollno = $_GET['rollno'];
    $sql = "SELECT Name, PhoneNumber, email, hostel, room_no FROM student WHERE Roll_No = ?";
    
    // Using prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rollno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data of the first row (assuming roll number is unique)
        $row = $result->fetch_assoc();
        // Adjust the keys to match the column names exactly
        $formattedRow = array(
            "name" => $row["Name"],
            "phoneNumber" => $row["PhoneNumber"],
            "email" => $row["email"],
            "hostelName" => $row["hostel"],
            "roomNumber" => $row["room_no"]
        );
        echo json_encode($formattedRow);
    } else {
        echo json_encode(["error" => "No student found with the provided roll number"]);
    }
} else {
    echo json_encode(["error" => "Roll number not provided"]);
}


$stmt->close();
$conn->close();
?>
