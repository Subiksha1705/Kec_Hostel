<?php
// Database connection parameters
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "gatepass";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $hostelName = $_POST['hostelName'];
    $roomNumber = $_POST['roomNumber'];
    $complaintType = $_POST['complaintType'];
    $complaintDescription = $_POST['complaintDescription'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO stcomplaint (rollno, name, phoneNumber, email, hostelname, roomno, complaintType, description, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        // Error handling for SQL preparation
        echo "Prepare failed: " . $conn->error;
        exit; // Stop script execution
    } 
    // Bind parameters
    $bind_result = $stmt->bind_param("sssssssss", $rollno, $name, $phoneNumber, $email, $hostelName, $roomNumber, $complaintType, $complaintDescription, $target_file);
    if ($bind_result === false) {
        // Error handling for binding parameters
        echo "Bind parameters failed: " . $stmt->error;
        exit; // Stop script execution
    } 

    // Handle image upload
    $targetDir = "uploads/";
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true); // Creates the directory recursively
    }
    
    $target_file = $targetDir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check !== false) {
        $a=1;
    } else {
        echo "<script>alert('File is not an image.')</script><br>";
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        echo "<scrpit>alert('Sorry, your file is too large.')</script><br>";
        exit; // Stop script execution
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "jpeg") {
        echo "<script>alert('Sorry, only JPG and JPEG files are allowed')</script><br>";
        exit; // Stop script execution
    }

    // Move uploaded file to destination directory
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $a=1;
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script><br>";
        exit; // Stop script execution
    }

    // Execute SQL statement
    if ($stmt->execute()) {
        $timestamp = date('Y-m-d H:i:s');
        echo "<script>alert('Complaint submitted successfully at: " . $timestamp . "')</script><br>";
    } else {
        echo "Error executing statement: " . $stmt->error;
        exit; // Stop script execution
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>

