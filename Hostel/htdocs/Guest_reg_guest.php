<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=DM+Mono:wght@400;500&display=swap');


html, body {
  margin: 0;
  padding: 0;
  color: #131212;
}

.container {
background-color: grey;
  text-align: center;
  color: #000;
  width: 100%;
  min-height: 100vh;
  background-image: url(https://www.kongu.ac.in/facilities/accommodation/bhavani.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-blend-mode: multiply;
  color: #fff;
}

h1 {
  font-size: 5rem;
  font-weight: bold;
  font-family: 'Cormorant Garamond', serif;
  color: #000;
}

h2 {
  font-size: 1.6rem;
  font-weight: bold;
  margin-top: 1em;
  font-family: 'Cormorant Garamond', serif;
}
.overlay-box{
    border-radius: 20px;
    width: 500px;
    height: auto;
    background-color: rgb(205, 202, 198);
}
.empty-space {
  width: 100%;
  min-height: 90vh;
 background-image: url(register.jpg);
 background-size: cover;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #635f5f;
  background-blend-mode: multiply;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="number"],
textarea {
    width: 400px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #45a049;
}
.column{
    display: flex;
    justify-content: space-between;
}
#registration-form{
    background-color: #fff;
    padding: 10px;
    border-radius: 22px;
}
.intro {
  font-size: 1.2rem;
  padding: 0.5rem;
  max-width: 70ch;
  line-height: 1.5;
  color: beige;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem;
}

.scroll {
  height: 700px;
  background-image:url(https://www.kongu.ac.in/facilities/accommodation/valluvar.jpg);
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  flex-direction: row;
  gap: 1.6em;
}

.content {
  display: flex;
  max-width: 360px;
  background-color: #fffaf2;
  flex-direction: column;
  align-items: center;
  border-radius: 0.5rem;
  -webkit-box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
  -moz-box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
  box-shadow: 0px 29px 38px -15px rgba(0,0,0,0.43);
}

.text {
  font-size: 1.2rem;
  padding: 0.3rem 0.8rem;
}



.img {
  width: 90%;
  height: 220px;
  margin-top: 20px;
  border-radius: 0.3rem;;
  background-color: lightgrey;
  background-size: cover;
  background-position: center;
}

.review_box {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #000;
  }

  .testimonial-card {
    max-width: 400px;
    padding: 20px;
    margin: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .testimonial-card:hover {
    transform: translateY(-10px);
  }

  .testimonial-image {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
  }

.scroll-two {
  height: 1200px;
  background-image:url(background.jpg);
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  flex-direction: row;
  gap: 1.6em;
}
h3 {
    display: inline;
  }

  h4 {
    display: inline;
    margin-left: 5px; /* Adjust as needed */
    font-weight: 1em; /* Optional: Adjust font weight as needed */
  }
  body{
    margin: 0px 0px;
    overflow-x: hidden;
  }
  a{
      color: black;
      text-decoration: none;
  }
  a:hover{
      color: red;
      text-decoration: none;
  }
  .nav a{
      margin: 0px 25px;
  }
  .nav{
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #fbfbfd;
  }
  
  .nav .button {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 20px;
      background-color: red; /* Default background color */
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease-out; /* Transition for background color change */
      position: relative;
      overflow: hidden;
    }
  
    .button:hover {
      background-color: navy; /* Background color on hover */
      color: white;
    }
    </style>
</head>
<body>
<div class="nav" style="margin: 0px 75px;">
                <div style="display: flex;">
                    <div>
                        <img src="logo.jpg" height="75px" width="75px">
                    </div>
                    <div style="padding-top: 5px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        <p style="font-size: 28px;"><b>Kec</b>Hostel</p>
                    </div>
                </div>
                <div style="padding-top: 23px; font-family:Arial, Helvetica, sans-serif; font-size: 20px;font-weight: 400;" class="nac_link">
                    <a href="#">Home</a>
                    <a href="Facilities.html">Facilities</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="chatbot.html">Chat-bot</a>
                    <button class="button">
                        <span><a href="Guest_reg_guest.php">Register as Guest</a></span>
                      </button>  
                </div>
            </div>
  
  <div class="container">
    <div class="overlay-box">
        <h1>Welcome, </h1>
        <p class="intro" style="color: #000;">Welcome to our little slice of paradise! Take a deep breath, relax, and soak 
            <br>in the warm hospitality of our hostel.
          </p>
    </div>
  </div>

<!-- Hostel registeration-->
  <div class="empty-space">
    <form id="registration-form" action="Guest_db.php" method="post">
        <h3 style="text-align:center">Guest Booking Form</h3>
        <div class="column">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Full Name" name="name" required>
            </div> &nbsp; &nbsp; &nbsp; 
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email" required>
            </div>
        </div><br>

        <div class="column">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" placeholder="Phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="phone">Alternate Phone</label>
                <input type="tel" placeholder="Phone" name="altphone" required>
            </div>
        </div><br>

       <div class="column">
        <div class="form-group">
            <label for="checkin-date">Check-in Date</label>
            <input type="date" placeholder="Checkin-Date" name="checkin-date" required>
        </div>
        <div class="form-group">
            <label for="checkout-date">Check-out Date</label>
            <input type="date" placeholder="Checkout-Date" name="checkout-date" required>
        </div>
       </div><br>

       <label for="Reason">Reason for Visit</label>
       <textarea rows="6" cols="60" name="reason" required></textarea><br>

       <div class="column">
        <div class="form-group">
            <label for="People">No.of People</label>
            <input type="number" placeholder="People" name="Count" required>
        </div>
        <div class="form-group">
            <label for="additional">Additional Req.(if any)</label>
            <input type="text" placeholder="Requirements" name="additional" >
        </div>
       </div><br><br>
        <button type="submit">Submit</button>
    </form>
  </div>
    
  <div class="container scroll">
  <div class="review_box">
  <?php
  // Assuming you have already connected to your database
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

  // Retrieve testimonials from the database
  $sql = "SELECT Media,Name,Description,Hostel FROM review";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<div class="testimonial-card">';
      echo '<img src="' . $row["Media"] . '" alt="Testimonial Image" class="testimonial-image">';
      echo '<h3>' . $row["Name"] . ' <h4>(' . $row["Hostel"] . ')</h4></h3>';

      echo '<p>' . $row["Description"] . '</p>';
      echo '</div>';
    }
  } else {
    echo "0 results";
  }

  // Close connection
  $conn->close();
  ?>
</div>
  </div>
  </div>
  <footer class="footer-distributed">

<div class="footer-left">
    <h3>KEC<span>Hostels</span></h3>

    <p class="footer-links">
        <a href="#">Notices</a>
        |
        <a href="#">Apply Pass</a>
        |
        <a href="#">Complaints</a>
        |
        <a href="#">Review</a>
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