<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Complaints - College Hostel</title>
  <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <!-- Integrate Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for animations */
    *{
      font-size: 20px;
      font-family: 'Poppins',sans-serif;
    }
    @keyframes fade-in {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
    @keyframes slide-in {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(0); }
    }
    .animate-fade-in {
      animation: fade-in 1s ease-out;
    }
    .animate-slide-in {
      animation: slide-in 1s ease-out;
    }
    /* Parallax scrolling effect */
    .parallax-bg {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    /* Hover animation for buttons */
    .hover-animation:hover {
      transform: translateY(-2px);
      transition: all 0.3s ease;
    }
    @keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 0.7;
    }
    50% {
        transform: scale(1.05);
        opacity: 0.9;
    }
    100% {
        transform: scale(1);
        opacity: 0.7;
    }
}

.animate-bg-pulse {
    animation: pulse 3s infinite;
}


  </style>
</head>
<body class="bg-white">
  <div class="nav-container" style="cla">
    <nav class="navbar">
        <img id="navbar-logo" src="logo.jpg"height="75px" width="75px" alt="KEC" >
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu">
            <li><a href="Notice_admin.php" class="nav-links">Notices</a></li>
            <li><a href="admin_complaint.php" class="nav-links">Complaints</a></li>
            <li><a href="approved_pass_admin.php" class="nav-links">Approve Pass</a></li>
            <li><a href="Guest_reg_admin.php" class="nav-links">Bookings</a></li>
            <li><a href="admin.php" class="nav-links">Profile</a></li>
           
        </ul>
    </nav>
</div>
  <br>
  <!-- Hero Section -->
  <div class="bg-cover bg-center h-80 bg-gray-900 text-white bg-image-url flex items-center animate-bg-pulse" style="background-image: url('hostel.png');">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-semibold">Complaint Forum</h1>
        <p class="text-lg mt-2" style="max-width: 1000px;text-align: center;align-items: center;margin-left: 250px;">"In managing complaints within a hostel, we transform challenges into opportunities for growth, fostering an environment where every concern is heard, valued, and addressed with diligence and care."</p>
    </div>
</div>


  <!-- Main Content Section -->
  <main>
    <!-- Complaints Section -->
    <section class="py-12">
      <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 animate-slide-in">
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

// Fetch complaints from the database
$sql = "SELECT * FROM stcomplaint"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Generate HTML markup for each complaint card
        echo '<div class="complaint bg-white shadow-md rounded-md p-6 animate-fade-in">';
        echo '<h2 class="text-xl font-semibold text-black mb-2"> ' . $row["rollno"] . '</h2>'; // Assuming "id" is the primary key
        echo '<p><strong>Name:</strong> ' . $row["name"] . '</p>';
        echo '<p><strong>Phone Number:</strong> ' . $row["phoneNumber"] . '</p>';
        echo '<p><strong>Email:</strong> ' . $row["email"] . '</p>';
        echo '<p><strong>Hostel:</strong> ' . $row["hostelname"] . '</p>';
        echo '<p><strong>Room Number:</strong> ' . $row["roomno"] . '</p>';
        echo '<p><strong>Complaint type:</strong> ' . $row["complaintType"] . '</p>';
        echo '<p class="text-gray-600 mt-4">' . $row["description"] . '</p>';

        // Add image if complaint has one
        if (!empty($row["photo"])) {
            echo '<img src="' . $row["photo"] . '" alt="Complaint Image" class="mt-4">';
        }
        echo '<form method="post" action="noted.php">';
        echo '<input type="hidden" name="complaint_type" value="' . $row["complaintType"] . '">';
        echo '<input type="hidden" name="complaint_description" value="' . $row["description"] . '">';
        echo '<input type="hidden" name="email" value="' . $row["email"] . '">';
        echo '<button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg mt-4 hover-animation" name="submit">Noted</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo "0 results";
}



// Close connection
$conn->close();
?>

      </div>
    </section>
  </main>
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