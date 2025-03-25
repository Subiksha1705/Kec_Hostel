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

// Fetch HOD email based on the provided department
if (isset($_GET['department'])) {
    $department = $_GET['department'];
    
    // Prepare and execute SQL statement to fetch HOD email
    $stmt = $conn->prepare("SELECT email FROM hod WHERE department = ?");
    $stmt->bind_param("s", $department);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if HOD email exists
    if ($result->num_rows > 0) {
        // Fetch HOD email and return as JSON
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        // No HOD found for the provided department
        echo json_encode(array('error' => 'No HOD found for the provided department'));
    }
} else {
    // Department not provided
    echo json_encode(array('error' => 'Department not provided'));
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
