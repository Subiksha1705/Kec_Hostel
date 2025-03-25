<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Feedback Form</title>
    <link rel="stylesheet" href="review_stud_style.css">
    <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
<div class="nav-container">
    <nav class="navbar" style="font-family:'Poppins',sans-serif;font: size 20px;">
        <img id="navbar-logo" src="logo.jpg" alt="KEC" height="75px" width="75px">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu">
            <li><a href="Notices_stud.php" class="nav-links">Notices</a></li>
            <li><a href="student_complaint.php" class="nav-links">Complaints</a></li>
            <li><a href="pass_stud.php" class="nav-links">Apply Pass</a></li>
            <li><a href="review_stud.php" class="nav-links">Reviews</a></li>
            <li><a href="main_home.html" class="nav-links" style="color:red">Sign Out</a></li>
           
        </ul>
    </nav>
</div><br>
   
    <div class="container" >
        <h2>Hostel Feedback Form</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="subject">Feedback Subject:</label>
            <input type="text" id="subject" name="subject" required>
            
            <label for="message">Feedback Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

                <div>
                    <label for="image">Upload Image:</label>
                    <input type="file" id="image" name="image" accept="image/*">
                </div><br>
                <div>
                <label for="subject">Hostel</label>
<select name="Hostels" style="border-radius: 10px;padding: 8px;">
    <option value="AllHostels">All Hostels</option>
    <option value="Bhavani">Bhavani</option>
    <option value="Amaravathi">Amaravathi</option>
    <option value="Kaveri">Kaveri</option>
</select>

                </div>
            
            <br><br>
            <button type="submit" class="btn">Submit Feedback</button>
        </form>
    </div>
    <footer class="footer-distributed">

<div class="footer-left">
    <h3>KEC<span>Hostels</span></h3>

    <p class="footer-links">
        <a href="Notices_stud.php">Notices</a>
        |
        <a href="pass_stud.php">Apply Pass</a>
        |
        <a href="student_complaint.php">Complaints</a>
        |
        <a href="review_stud.php">Review</a>
    </p>

    <p class="footer-company-name">Copyright © 2024 <strong>KEC Hostel</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Perundurai</span><br>
            Erode</p>
    </div>
    
    <div>
        <i class="fa fa-phone"></i>
        <p>9842823432</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the Website</span>
        <strong>KEC Hostel</strong>
        "Discover comfort and convenience at our college hostel website, 
        where students find their home away from 
        home with seamless booking and essential amenities."
    </p>
    <div class="footer-icons">
        <a href="https://www.facebook.com/konguengineeringcollegeperundurai"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/konguengineeringcollege/"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="https://twitter.com/KonguOfficial"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/c/konguengineeringcollege"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
</body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO review (Name, Email, Subject, Description, Media,Hostel) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $subject, $message, $imagePath, $hostel);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $hostel = $_POST['Hostels'];

    // Handle image upload
    $targetDir = "uploads/";
    if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true); // Creates the directory recursively
    }

    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.')</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<srcipt>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $imagePath = $targetFile;

            // Execute SQL statement
            $stmt->execute();
            echo "<script>alert('Feedback submitted successfully!')</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
</html>
<script src="header.js"></script>
