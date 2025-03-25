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

// Calculate the average score of food reviews for each hostel
$sql = "SELECT hostel, AVG(CASE 
                    WHEN poll = 'Good' THEN 5
                    WHEN poll = 'Better' THEN 4
                    WHEN poll = 'Average' THEN 3
                    WHEN poll = 'Worst' THEN 2
                    ELSE 0 END) AS average_score 
        FROM poll_results 
        WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE() 
        GROUP BY hostel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Format the poll results
    $poll_results = '';
    while ($row = $result->fetch_assoc()) {
        $poll_results .= $row['hostel'] . ': ' . round($row['average_score'], 2) . "\n";
    }

    // Fetch admin emails from the database
    $admin_emails = array();
    $sql = "SELECT email FROM admin";
    $admin_result = $conn->query($sql);
    if ($admin_result->num_rows > 0) {
        while ($row = $admin_result->fetch_assoc()) {
            $admin_emails[] = $row['email'];
        }
    }

    // Send email with the average score to each admin
    $subject = "Average Food Review Scores for Today";
    $message = "Here are the average food review scores for today:\n\n" . $poll_results;
    $headers = "From: your_email@example.com";

    foreach ($admin_emails as $email) {
        mail($email, $subject, $message, $headers);
        echo "Average scores sent to: $email<br>";
    }
} else {
    echo "No reviews available for today.";
}

$conn->close();
?>
