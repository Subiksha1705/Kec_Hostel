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
        $stmt = $conn->prepare("UPDATE pass_data SET Process=:process WHERE roll_no=:r_no");
        // Bind parameters
        $stmt->bindParam(':process', $_POST["response"]);
        $stmt->bindParam(':r_no', $_POST["ro_no"]);
        $stmt->execute();
        $affected_rows = $stmt->rowCount();
        
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
    $response = $_POST["response"];
    $msg = $_POST['additionalInfo'];
    $to=$_POST["Email"];
    $from=$_POST["YourEmail"];

    $message = "Status: $response\n";
    $message .= "Message Paased : $msg";
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
         echo "<script>alert('Email Send Successfully');</script>";
     } catch (Exception $e) {
         echo "<script>alert('Email sending failed. Error: {$mail->ErrorInfo}');</script>";
     }
 }
 ?>
 
