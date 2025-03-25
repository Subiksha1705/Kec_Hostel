<?php
session_start();
echo "<script>alert('Session started successfully.')</script>";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the email address from the POST data
    $email = $_POST["email"];
    echo "<script>alert('hey')></script>";
        // Generate a random OTP
    $otp = generateOTP();
    storeOTPInSession($otp);
    // Send the email with the OTP
    $to = $email;
    $subject = "Your OTP";
    $message = "Your OTP is: " . $otp;
    $headers = "From: sanmathisedhu06@gmail.com";
   
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {    
        echo "Failed to send email.";
    }
}

// Function to generate OTP
function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $otp;
}
function storeOTPInSession($otp) {
    $_SESSION['otp'] = $otp;
}

