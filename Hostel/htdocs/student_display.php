<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Content</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<h2>Database Content</h2>

<!-- Apply inline CSS to set table width to 100% -->
<table style="width: 100%;">
    <tr>
        <th>Member</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Department</th>
        <th>Year</th>
        <th>Phone Number</th>
        <th>Parent's Phone Number</th>
        <th>Email</th>
        <th>Hostel</th>
        <th>Room No</th>
        <th>Photo</th>
    </tr>
    <!-- PHP code to generate table rows -->
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

    // Fetch data from the database
    $sql = "SELECT * FROM student"; // Assuming 'student' is your table name
    $result = $conn->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Member"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Roll_No"] . "</td>";
            echo "<td>" . $row["Department"] . "</td>";
            echo "<td>" . $row["Year"] . "</td>";
            echo "<td>" . $row["PhoneNumber"] . "</td>";
            echo "<td>" . $row["Parents_ph_num"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["hostel"] . "</td>";
            echo "<td>" . $row["room_no"] . "</td>";
            echo "<td><img src='" . $row["photo"] . "' height='50' width='50'></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11'>0 results</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>
</table>

</body>
</html>
