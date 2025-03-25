<html>
    <head>
        <title>Dash Board</title>
        <link rel="stylesheet" href="./Notice_admin_style.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">

    </head>
    <body>
    <div class="nav-container">
    <nav class="navbar">
        <img id="navbar-logo" src="logo.jpg" height="75px" width="75px" alt="KEC" >
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu" style="font-family: 'Poppins',sans-serif;">
            <li><a href="Notice_admin.php" class="nav-links">Notices</a></li>
            <li><a href="admin_complaint.php" class="nav-links">Complaints</a></li>
            <li><a href="approved_pass_admin.php" class="nav-links">Approve Pass</a></li>
            <li><a href="Guest_reg_admin.php" class="nav-links">Bookings</a></li>
            <li><a href="admin.php" class="nav-links">Profile</a></li>
            
        </ul>
    </nav>
</div>
<br>

       <div style="display: flex; justify-content: space-evenly;">
        <div style="margin-left: 15px;" class="side_img"></div>
        <div>
           <br><br><br><br>
            <div class="notice_form">
                <div class="container">
                    <div class="title">Disseminate bulletins</div>
                    <form action="#" method="post" enctype="multipart/form-data">>
                      <div class="user__details">
                        <div class="input__box">
                          <span class="details">Full Name</span>
                          <input type="text" placeholder="E.g: John Smith" name="name" required><br>
                        </div>
                        <div class="input__box">
                          <span class="details">Email</span>
                          <input type="email" placeholder="johnsmith@kongu.edu" name="email" required>
                        </div><br>
                        <div class="input__box">
                          <span class="details">Phone Number</span>
                          <input type="tel"  name="Ph_number" required>
                        </div><br>
                        <div class="input__box">
                          <span class="details">Event Name</span>
                          <input type="text"  name="event_name" required>
                        </div><br>
                        <div class="input__box">
                            <span class="details">Upload Poster</span>
                            <input type="file"  name="poster" required>
                          </div><br>
                          <div class="input__box">
                            <span class="details">Date</span>
                            <input type="date"  name="date" required>
                          </div><br>
                        <div class="input__box">
                          <span class="details">Event Description</span>
                          <textarea name="desc" rows="5" cols="50"></textarea>
                        </div><br>
                      </div>
    
                      <div class="button">
                        <button type="submit" class="submit_btn">Publish</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
  </div><br><br>
      <h1 style="color:greay;font-size:50px;padding-left:500px">Recent Posts</h1>  
        <?php
// Assuming you have a database connection established
$servername = "localhost:3307"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "gatepass"; // Change this to your dtabase name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to check if a date is in the future
function isFutureDate($date) {
    return (strtotime($date) > time());
}

// Function to securely handle file uploads
function handleFileUpload($file) {
    $targetDir = "uploads/"; // Directory where files will be stored

    // Create the directory if it doesn't exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        return $targetFile;
    }

    // Check file size (optional)
    if ($file["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.')</script>";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can customize this)
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<script>('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
    } else {
        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $targetFile; // Return the path to the uploaded file
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['Ph_number'];
    $eventName = $_POST['event_name'];
    $poster = handleFileUpload($_FILES['poster']);
    $date = $_POST['date'];
    $description = $_POST['desc'];

    // Check if the date is a future date
    if (!isFutureDate($date) && !($uploadOk == 1)) {
        echo "<script>alert('Error: Please enter a future date.')</script>";
    } else {
        // SQL to insert data into the database
        $sql = "INSERT INTO notice (name, email, Phonenumber, event_name, poster, date, description) VALUES ('$name', '$email', '$phoneNumber', '$eventName', '$poster', '$date', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<?php
// Assuming you have a database connection established
$servername = "localhost:3307"; // Change this if your database is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "gatepass"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch recent posts
$sql = "SELECT * FROM notice ORDER BY email DESC LIMIT 5"; // Assuming 'id' is the primary key

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["Name"];
        $email = $row["Email"];
        $phoneNumber = $row["PhoneNumber"];
        $eventName = $row["Event_Name"];
        $poster = $row["Poster"];
        $date = $row["Date"];
        $description = $row["description"];

        // Format the date
        $formattedDate = date("M d, Y", strtotime($date));

        // Display the post with extra styles
        echo "<div class='post' style='display:flex;gap:6px'>";
        echo "<div><img src='$poster' alt='Event Poster' class='post-image' style='align-item:center;'></div>";
        echo "<div style='align-item:center;'><br><br><br><h3 class='post-title'>$eventName</h3><hr>";
        echo "<p class='post-meta'>Posted by $name on $formattedDate</p>";
        
        echo "<p class='post-description'>$description</p>";
        // Add delete button
        echo "<a href='delete_post.php?post_id=$email' onclick='return confirm(\"Are you sure you want to delete this post?\")'><i class='fa fa-trash' style='color:red'></i></a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
 <footer class="footer-distributed">

<div class="footer-left">
    <h3>KEC<span>Hostels</span></h3>

    <p class="footer-links">
        <a href="Notice_admin.php">Notices</a>
        |
        <a href="approved_pass_admin.php">Approve Pass</a>
        |
        <a href="admin_complaint.php">Complaints</a>
        |
        <a href="ad_review.php">Review</a>
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
    </html>
    <script src="header.js"></script>