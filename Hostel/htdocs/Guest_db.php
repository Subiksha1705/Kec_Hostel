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

// Prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO guest (Name, Email, Phone, Alt_Phone, Check_In, Check_Out, Reason, People, Requirements) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssis", $name, $email, $phone, $altphone, $checkin_date, $checkout_date, $reason, $count, $additional);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$altphone = $_POST['altphone'];
$checkin_date = $_POST['checkin-date'];
$checkout_date = $_POST['checkout-date'];
$reason = $_POST['reason'];
$count = $_POST['Count'];
$additional = $_POST['additional'];

// Execute SQL statement
if ($stmt->execute() === TRUE) {
    echo "<script>alert('Successfully Booked'); window.location.href = 'http://localhost/Guest_reg_guest.php';</script>";
    
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
