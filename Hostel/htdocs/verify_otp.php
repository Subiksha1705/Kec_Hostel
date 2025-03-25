<?php
session_start();

// Function to verify OTP
function verifyOTP($userOTP) {
    // Get the stored OTP from the session
    $storedOTP = isset($_SESSION['otp']) ? $_SESSION['otp'] : null;
    // Compare the entered OTP with the stored OTP
    return $userOTP === $storedOTP;
}

// Check if the entered OTP is valid
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['otp'])) {
    $userOTP = $_POST['otp'];
    if (verifyOTP($userOTP)) {
        echo "valid";
    } else {
        echo "invalid";
    }
}
?>
