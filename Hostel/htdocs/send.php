<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    try {
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $dbname = "gatepass";

        // Connect to the database
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO pass_data (full_name, roll_no, department, room_no, reason, student_phone, parent_phone, going, addres, outgoing_date, outgoing_time, incoming_date, incoming_time,Email,hostel) 
                                VALUES (:full_name, :roll_no, :department, :room_no, :reason, :student_phone, :parent_phone, :going, :addres, :outgoing_date, :outgoing_time, :incoming_date, :incoming_time, :hemail,:hostel)");

        // Bind parameters
        $stmt->bindParam(':full_name', $_POST["Name"]);
        $stmt->bindParam(':roll_no', $_POST["rollno"]);
        $stmt->bindParam(':department', $_POST["Department"]);
        $stmt->bindParam(':room_no', $_POST["room_no"]);
        $stmt->bindParam(':reason', $_POST["reason"]);
        $stmt->bindParam(':student_phone', $_POST["PhoneNumber"]);
        $stmt->bindParam(':parent_phone', $_POST["Parents_ph_num"]);
        $stmt->bindParam(':going', $_POST["going"]);
        $stmt->bindParam(':addres', $_POST["addres"]);
        $stmt->bindParam(':outgoing_date', $_POST["outgoing_date"]);
        $stmt->bindParam(':outgoing_time', $_POST["outgoing_time"]);
        $stmt->bindParam(':incoming_date', $_POST["incoming_date"]);
        $stmt->bindParam(':incoming_time', $_POST["incoming_time"]);
        $stmt->bindParam(':Email', $_POST["hemail"]);
        $stmt->bindParam(':hostel', $_POST["hostel"]);

        // Execute the statement
        $stmt->execute();

        
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage(); // Print any errors
    }

    // Close the connection
    $conn = null;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Load PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST["Name"];
    $roll_no = $_POST["rollno"];
    $department = $_POST["Department"];
    $room_no = $_POST["room_no"];
    $reason = $_POST["reason"];
    $student_phone = $_POST["PhoneNumber"];
    $parent_phone = $_POST["Parents_ph_num"];
    $going = $_POST["going"];
    $address = $_POST["addres"];
    $outgoing_date = $_POST["outgoing_date"];
    $outgoing_time = $_POST["outgoing_time"];
    $incoming_date = $_POST["incoming_date"];
    $incoming_time = $_POST["incoming_time"];
    $to=$_POST["hemail"];
    $Hostel=$_POST["hostel"];

    // Compose email message
    $message = "Full Name: $full_name\n";
    $message.="\n";
    $message .= "Roll No: $roll_no\n";
    $message .= "Department: $department\n";
    $message .= "Room No: $room_no\n";
    $message .= "Reason: $reason\n";
    $message .= "Student Phone: $student_phone\n";
    $message .= "Parent Phone: $parent_phone\n";
    $message .= "Going: $going\n";
    $message .= "Address: $address\n";
    $message .= "Outgoing Date: $outgoing_date\n";
    $message .= "Outgoing Time: $outgoing_time\n";
    $message .= "Incoming Date: $incoming_date\n";
    $message .= "Incoming Time: $incoming_time\n";
    $message .= "Hostel: $Hostel\n";
    $message .= file_get_contents('http://localhost/allow_deny.html');

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);
    

    try {
        // Server settings
        // Server settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'sanmathisedhu06@gmail.com'; // SMTP username
$mail->Password = 'cpptvkjbekyyifsy'; // SMTP password
$mail->SMTPSecure = 'tls'; // Use TLS encryption
$mail->Port = 587; // TCP port to connect to


        // Recipients
        $mail->setFrom('sanmathisedhu06@gmail.com'); // Sender's email address and name
        $mail->addAddress($to); // Recipient's email address
        // You can add more recipients if needed

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Approval Form Submission';
        $mail->Body = $message;

        // Send email
        $mail->send();
       
        echo "<script>alert('Your Request has been submitted successfully'); window.location.href = 'http://localhost/success.html';</script>";

    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>
