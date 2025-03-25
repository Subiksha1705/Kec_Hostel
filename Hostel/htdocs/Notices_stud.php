<html>
    <head>
        <title>Dash Board</title>
        <link rel="stylesheet" href="Dash_Board_Stud_Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--  The Tailwind CSS CDN link in your HTML file -->
        <link href="https://cdn.tailwindcss.com" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    </head>
    <body>
    <div class="nav-container"style="font-family:'Poppins',sans-serif;font: size 20px;">
    <nav class="navbar">
        <img id="navbar-logo" src="logo.jpg" alt="KEC" height="75px" width="75px">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu">
            <li><a href="#" class="nav-links" style="color:red">Notices</a></li>
            <li><a href="student_complaint.php" class="nav-links">Complaints</a></li>
            <li><a href="pass_stud.php" class="nav-links">Apply Pass</a></li>
            <li><a href="review_stud.php" class="nav-links">Reviews</a></li>
            <li><a href="main_home.html" class="nav-links" style="color:red">Sign Out</a></li>
           
        </ul>
    </nav>
</div><br>
      <div class="slider" style="width: 100%;">
        <div class="myslides" style="display: inline-block;position: relative;">
            <img  src="guest.jpg" width="100%" height="60%">
            <div class="overlay-text" style="width: 25%;">
                
                <h1 style="font-family: 'Times New Roman', Times, serif; font-size:60px;">Get Day to Day Updates</h1>
                <p style="font-size: 32px; font-family: Arial, Helvetica, sans-serif;">"Thoughts shared, connections made."</p>
                <a href="#"><button class="more_btn">More</button></a>
            </div>
        </div>
        <div class="myslides" style="display: inline-block;position: relative;">
            <img  src="bhavani.jpg" width="100%" height="60%">
            <div class="overlay-text" style="width: 25%;">
                
                <h1 style="font-family: 'Times New Roman', Times, serif; font-size:40px;">Announcements: where information meets attention</h1>
                <p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">" Messages regarding hostel rules, regulations, and updates from the hostel administration."</p>
                <a href="#"><button class="more_btn">More</button></a>
            </div>
        </div>
        <div class="myslides" style="display: inline-block;position: relative;">
            <img  src="hostel.png" width="100%" height="60%">
            <div class="overlay-text" style="width: 25%;">
                
                <h1 style="font-family: 'Times New Roman', Times, serif; font-size:60px;">Lost and Found</h1>
                <p style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;">"Items reported missing or found within the hostel premises."</p>
                <a href="#"><button class="more_btn">More</button></a>
            </div>
        </div>
      </div>
      <br><br>
      <!---Main Content-->

    </div>
      <div>
        <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;text-align: center;">A board of notices, a canvas of <br>communication.</h1>
      </div>
    <div class="anime2" style="z-index: -1;" >
        <div class="lol">
            <div class="circle"></div>
            <div class="pulse"></div>
        </div>
    </div>
      <div class="card-container" style="display: inline-flex;padding-left:20px">
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

// SQL query to fetch data from the notice table
$sql = "SELECT * FROM notice"; 

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $eventName = $row["Event_Name"];
        $description = $row["description"];
        $date=$row["Date"];
        $imageURL = $row["Poster"]; 

        // Output the HTML for the card with the fetched data including the image
        echo "<div class='card'>";
        echo "<img src='$imageURL'>"; // Output the image
        echo "<div class='card-content'>";
        echo "<h1>$eventName</h1>";
        echo "<p>On $date</p>";
        echo "$description";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
</div>
      <br><br><br>
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
    <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000); // Change image every 4 seconds
        }
        </script>
</html>
<script src="header.js"></script>