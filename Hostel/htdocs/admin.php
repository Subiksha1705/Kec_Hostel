<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_add.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" type="x-icon" href="keclogo.png">
    <script src="admin.js"></script>
    <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">

    <title>Admin Portal</title>
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
        <ul class="nav-menu">
            <li><a href="Notice_admin.php" class="nav-links">Notices</a></li>
            <li><a href="admin_complaint.php" class="nav-links">Complaints</a></li>
            <li><a href="approved_pass_admin.php" class="nav-links">Approve Pass</a></li>
            <li><a href="Guest_reg_admin.php" class="nav-links">Bookings</a></li>
            <li><a href="admin.php" class="nav-links">Profile</a></li>
            
        </ul>
    </nav>
</div>
    <div class="container">
        <div class="blur"></div>
        <div class="text">
        <div class="sign">
  <h2>Admin Portal</h2>
  <a href="Login.html">
  <button class="login-button" style="background: red;border:2px; padding: 10px 30px;border-radius: 50px;color: white;font: bold;font-size: 20px;">Sign Out</button></a>
  </a>
</div>

            <p style="font-size: 20px;"> "Efficient system is the cornerstone of fostering a secure and comfortable home away from home."</p><br>
            <button class="add-button"><a style="text-decoration: none;color: #fff;" href="#sectionOne">Add Members</a></button><br>
            <button class="add-button"><a style="text-decoration: none;color: #fff;" href="modify_guest.php">Modify Guest</button>&nbsp;&nbsp;
            <button class="add-button"><a style="text-decoration: none;color: #fff;" href="hod.php">Add HOD</a></button><br>
            <div class="button-container">
                <button style="background-color: #4CAF50;color: #fff;border: none;padding: 10px 20px;font-size: 16px;border-radius: 20px;cursor: pointer;"><a style="text-decoration: none;color: #fff;" href="#sectionTwo">View Students</a></button> &nbsp;&nbsp;&nbsp;
                <button style="background-color: #4CAF50;color: #fff;border: none;padding: 10px 20px;font-size: 16px;border-radius: 20px;cursor: pointer;"><a style="text-decoration: none;color: #fff;" href="admin_display.php">View Admin</a></button>
            </div>
        </div>
        <div class="blobs">
            <div class="blob large">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FA4D56" d="M63.7,-23.8C70.9,1.5,57.1,30.5,35.8,44.9C14.5,59.4,-14.2,59.3,-33.2,45.5C-52.2,31.8,-61.5,4.4,-54.3,-20.9C-47.2,-46.1,-23.6,-69.2,2.3,-70C28.3,-70.8,56.5,-49.2,63.7,-23.8Z" transform="translate(100 100)" />
                </svg>
            </div>
            <div class="blob">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FA4D56" d="M70.4,-17.3C77.9,0.1,61.3,30.8,38.5,45.7C15.6,60.6,-13.5,59.7,-31.9,45.9C-50.3,32.1,-58,5.4,-50.9,-11.5C-43.8,-28.4,-21.9,-35.5,4.8,-37C31.5,-38.6,63,-34.6,70.4,-17.3Z" transform="translate(100 100)" />
                  </svg>
            </div>
        </div>
    </div>
    <div class="fcontainer">
        <a name='sectionOne' />
        <div class="options">
            <div class="option selected" onclick="showOption(1)">Student</div>
            <div class="option" onclick="showOption(2)">Admin</div>
        </div>

        <div class="content">
            <div class="form active" id="option1">
               <form action="student_add.php" method="POST" enctype="multipart/form-data">
               <label for="member">Member:</label>
                <input type="text" id="member" name="member" placeholder="Member" readonly value="Student">

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">

                <label for="rollno">Roll No:</label>
                <input type="text" id="rollno" name="rollno" placeholder="Enter your roll number">

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

                <label for="rollno">Year:</label>
                <input type="text" id="year" name="year" placeholder="Year of study">

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">

                <label for="parentPhone">Parent's/Guardian's Phone Number:</label>
                <input type="tel" id="parentPhone" name="parentPhone" placeholder="Enter parent's/guardian's phone number">

                <label for="email">Email ID:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">

                <label for="hostel">Hostel Name:</label>
                <select id="hostel" name="hostel">
                    <option value="amaravathi">Amaravathi</option>
                                <option value="bharathi">Bharathi</option>
                                <option value="dheeran">Dheeran</option>
                                <option value="ilango">Ilango</option>
                                <option value="kamban">Kamban</option>
                                <option value="ponnar">Ponnar</option>
                                <option value="sankar">Sankar</option>
                                <option value="valluvar">Valluvar</option>
                </select>

                <label for="roomNo">Room No:</label>
                <input type="text" id="roomNo" name="roomNo" placeholder="Enter your room number">

                <label for="photo">Passport Size Photo (.jpg or .jpeg):</label>
                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg">

                <button class="b" type="submit">Submit</button>
                </form>
            </div>

            <div class="form" id="option2">
                <!-- Add fields for Option 2 as needed -->
                    <form action="admin_add.php" method="POST" enctype="multipart/form-data">
                    <label for="member">Member:</label>
                    <input type="text" id="member" name="member" placeholder="Member" readonly value="Admin">
    
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
    
                    <label for="department">Department:</label>
                    <select id="department" name="department">
                    <option value="civil">Civil Engineering</option>
                    <option value="mech">Mechanical Engineering</option>
                    <option value="mechatronics">Mechatronics Engineering</option>
                    <option value="Automobile">Automobile Engineering</option>
                    <option value="chemical">Chemical Engineering</option>
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
    
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
    
                    <label for="email">Email ID:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
    
                    <label for="hostel">Hostel Name:</label>
                    <select id="hostel" name="hostel">
                        <option value="amaravathi">Amaravathi</option>
                                <option value="bharathi">Bharathi</option>
                                <option value="dheeran">Dheeran</option>
                                <option value="ilango">Ilango</option>
                                <option value="kamban">Kamban</option>
                                <option value="ponnar">Ponnar</option>
                                <option value="sankar">Sankar</option>
                                <option value="valluvar">Valluvar</option>
                    </select>
    
                    <label for="roomNo">Room No:</label>
                    <input type="text" id="roomNo" name="roomNo" placeholder="Enter your room number">
    
                    <label for="photo">Passport Size Photo (.jpg or .jpeg):</label>
                    <input type="file" id="photo" name="photo" accept=".jpg, .jpeg">
    
                    <button class="b" type="submit" onclick="validateForm()">Submit</button>
            </div>
        </div>
    </div>


    <div>
    <a name='sectionTwo' />
    <h2 style="text-align: center;">Student Details</h2><br>
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

</div>
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