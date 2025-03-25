<?php
// Establish database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "gatepass";

$connection = mysqli_connect($servername, $username, $password, $database);
$upload_directory = 'uploads/';

// Check if the uploads directory exists, if not, create it
if (!file_exists($upload_directory)) {
    mkdir($upload_directory, 0777, true);
}


// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $total_rooms = $_POST['total_rooms'];
    $capacity = $_POST['capacity'];

    // Check if image is uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = basename($_FILES['image']['name']);
        $image_path = $upload_directory . $image_name;
        
        // Move uploaded file to designated directory
        if(move_uploaded_file($image_tmp_name, $image_path)) {
            // Prepare SQL query
            $query = "INSERT INTO home (name, description, total_rooms, capacity, image) VALUES (?, ?, ?, ?, ?)";
            
            // Prepare statement
            $stmt = mysqli_prepare($connection, $query);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ssiis", $name, $description, $total_rooms, $capacity, $image_path);

            // Execute statement
            mysqli_stmt_execute($stmt);

            // Check if insertion was successful
            if(mysqli_stmt_affected_rows($stmt) > 0) {
                echo "<script>alert('Record inserted successfully.')</script>";
            } else {
                echo "Error: " . mysqli_error($connection);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "Error uploading file.";
    }
}

// Close database connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="file"] {
        margin-bottom: 20px;
    }
    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Add New Item</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="total_rooms">Total Rooms:</label>
        <input type="number" id="total_rooms" name="total_rooms" required>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
