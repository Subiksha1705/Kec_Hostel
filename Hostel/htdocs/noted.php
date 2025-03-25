<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Load PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complaint_type']) && isset($_POST['complaint_description']) && isset($_POST['email'])) {
    // Sanitize the input data
    $complaintType = htmlspecialchars($_POST['complaint_type']);
    $complaintDescription = htmlspecialchars($_POST['complaint_description']);
    $email = htmlspecialchars($_POST['email']);
    
    // Compose the email message
    $subject = "Your complaint has been noted!";
    $message = "Thank you for your complaint. We have noted it.\n\n";
    $message .= "Complaint Type: " . $complaintType . "\n";
    $message .= "Complaint Description: " . $complaintDescription . "\n";
    
    
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
        $mail->addAddress($email); // Recipient's email address
        // You can add more recipients if needed

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Send email
        $mail->send();
       
        echo "<script>alert('Your Request has been submitted successfully'); window.location.href = 'http://localhost/admin_complaint.php';</script>";

    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>