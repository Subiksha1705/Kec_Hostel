<?php
// Database connection
$servername = "localhost:3307"; // Your MySQL server name
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "gatepass"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch student data based on roll number
if (isset($_GET['roll-number'])) {
    $rollNumber = $_GET['roll-number'];
    $sql = "SELECT Name, room_no, Email FROM student WHERE Roll_No = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rollNumber);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $studentData = array(
            'name' => $row['Name'],
            'room-number' => $row['room_no'],
            'email' => $row['Email']
        );
        echo json_encode($studentData);
    } else {
        // No data found for the given roll number
        echo json_encode(null);
    }

    $stmt->close();
} else {
    // Roll number parameter not provided
    echo json_encode(null);
}

$conn->close();
?>
