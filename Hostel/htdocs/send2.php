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
        $stmt = $conn->prepare("INSERT INTO pass_data (full_name, roll_no, department, room_no, reason, student_phone, parent_phone, going, addres, outgoing_date, outgoing_time, incoming_date, incoming_time, Email, hostel) 
                                VALUES (:full_name, :roll_no, :department, :room_no, :reason, :student_phone, :parent_phone, :going, :addres, :outgoing_date, :outgoing_time, :incoming_date, :incoming_time, :hemail, :hostel)");

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
        $stmt->bindParam(':hemail', $_POST["hemail"]);
        $stmt->bindParam(':hostel', $_POST["hostel"]);

        // Execute the statement
        $stmt->execute();

        // Close the connection
        $conn = null;

        // Send email
        // Your existing code for sending email
        // ...
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
}
?>
