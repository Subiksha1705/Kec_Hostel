<?php
// Database connection
$servername = "localhost:3307";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "gatepass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$hostel = $_POST['hostel'];
$rating = $_POST['poll'];

// Check if current time is within the polling period (8:30 PM to 8:30 AM next day)
$current_time = strtotime(date('H:i:s'));
$start_time = strtotime(date('Y-m-d') . ' 20:30:00');
$end_time = strtotime(date('Y-m-d', strtotime('+1 day')) . ' 08:30:00');

if ($current_time >= $start_time || $current_time <= $end_time) {
    // Insert poll into database
    $sql = "INSERT INTO poll_reviews (hostel, poll) VALUES ('$hostel', '$rating')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Poll submitted successfully.');</script>";
    } else {
        echo "<script>alert('Error submitting poll.');</script>";
    }
} else {
    echo "<script>alert('The poll is not active at the moment.');</script>";
    // Calculate the time to wait until 8:30 PM next day
    $tomorrow = strtotime(date('Y-m-d', strtotime('+1 day')) . ' 08:30:00');
    $time_to_wait = $tomorrow - time();
    
    // Wait until the specified time
    sleep($time_to_wait);
    
    // Redirect to send_poll_results.php
    header("Location: send_poll_results.php");
    exit;
}

$conn->close();
?>