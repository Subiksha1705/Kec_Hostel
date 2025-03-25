<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Database</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
            text-align: center;
            margin-top: 20px;
        }
        form {
            margin-bottom: 20px;
            align-items: center;
            margin-left: 450px;
            margin-top: 100px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="submit"],
        select {
            width: 600px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>Add HODs</h2>
<form method="post">
<label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="civil">Civil</option>
                    <option value="mech">Mechanical</option>
                    <option value="mechatronics">Mechatronics</option>
                    <option value="Automobile">Automobile</option>
                    <option value="chemical">Chemical</option>
                    <option value="foodtech">Food Technology</option>
                    <option value="eee">EEE</option>
                    <option value="ece">ECE</option>
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="csd">CSD</option>
                    <option value="mba">MBA</option>
                    <option value="mca">MCA</option>
                    <option value="ctpg">CT-PG</option>
                    <option value="ctug">CT-UG</option>
                    <option value="me">ME</option>
                    <option value="mtech">M.Tech</option>
                </select>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<br><br><br><br>
<?php
// Database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "gatepass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted, insert data into database
if(isset($_POST['submit'])){
    $department = $_POST['department'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO hod (Department, Name, email) VALUES ('$department', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Display contents of the database
$sql = "SELECT * FROM hod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Contents of the Database:</h2>";
    echo "<table border='1'><tr><th>Department</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Department"]."</td><td>".$row["Name"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
