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

// Fetch data from database
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 1500px;
    margin: 20px auto;
    padding: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    table-layout: fixed;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #f2f2f2;
}

th, td {
    padding: 12px 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    word-wrap: break-word;
}

th {
    font-weight: bold;
}

img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

img:hover {
    transform: scale(1.1);
}

@media only screen and (max-width: 768px) {
    table {
        font-size: 14px;
    }

    th, td {
        padding: 10px 6px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Member</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Hostel</th>
                        <th>Room Number</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result && $result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["Member"]."</td>";
                                echo "<td>".$row["Name"]."</td>";
                                echo "<td>".$row["Department"]."</td>";
                                echo "<td>".$row["PhoneNumber"]."</td>";
                                echo "<td>".$row["email"]."</td>";
                                echo "<td>".$row["hostel"]."</td>";
                                echo "<td>".$row["room_no"]."</td>";
                                echo "<td><img src='".$row["photo"]."' alt='User Photo'></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No data found</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
