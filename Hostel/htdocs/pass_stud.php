<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass Apply Form</title>
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="Pass_Stud_style.css">
        <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style id="wpr-lazyload-bg"></style><style id="wpr-lazyload-bg-exclusion"></style>
<noscript>
<style id="wpr-lazyload-bg-nostyle">:root{--wpr-bg-9e624c80-e0b3-47b4-9052-9f49ce4e78b0: url('https://abduldev.com/wp-content/plugins/wp-rocket/assets/img/youtube.png');}</style>
</noscript>
<script type="application/javascript">const rocket_pairs = [{"selector":".rll-youtube-player .play","style":":root{--wpr-bg-9e624c80-e0b3-47b4-9052-9f49ce4e78b0: url('https:\/\/abduldev.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png');}","hash":"9e624c80-e0b3-47b4-9052-9f49ce4e78b0"}]; const rocket_excluded_pairs = [];</script></head>
<body>
<div class="nav-container">
    <nav class="navbar"style="font-family:'Poppins',sans-serif;font: size 20px;">
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
    <div class="content" style="display: flex;font-family: Arial, Helvetica, sans-serif">
        <div style="width: 70%;">
            <img src="side_image.jpg">
        </div>
        <div>
            <div class="square_pos">
                <div class="square" style="z-index: -1;"></div>
            </div>
            <div class="container">
                <h2>OutPass Form</h2>

                <form action="send.php" method="POST" class="form" enctype="multipart/form-data">
                    <div class="column">
                        <div class="input-box">
                            <label>Roll No</label>
                            <input type="text" placeholder="Roll No" name="rollno" id="rollno" required onchange="fetchData(this.value)">
                        </div>
                        <div class="input-box">
                            <label>Name</label>
                            <input type="text" placeholder="Name" name="Name" id="Name" readOnly required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Department</label>
                            <input type="text" placeholder="Department" name="Department" readOnly id="Department" required>
                        </div>
                        <div class="input-box">
                            <label>Room No</label>
                            <input type="number" placeholder="Room Number" name="room_no" readOnly id="room_no" required>
                        </div>
                    </div>
                    <div class="input-box addres">
                        <label>Email</label>
                        <input type="email" placeholder="Fill your email address" name="email" readOnly id="email" required>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Student Ph. Num.</label>
                            <input type="tel" placeholder="Phone Number" name="PhoneNumber" readOnly id="PhoneNumber" required>
                        </div>
                        <div class="input-box">
                            <label>Parent Ph. Num.</label>
                            <input type="tel" placeholder="Parent's/Guardian's phone number" readOnly name="Parents_ph_num" id="Parents_ph_num" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>HOD Mail</label>
                            <input type="email" placeholder="Email" name="hemail" id="hemail" readOnly required>
                        </div>
                        <div class="input-box">
                            <label>Hostel</label>
                            <input type="text" placeholder="Hostel Name" name="hostel" id="hostel" required readOnly>
                        </div>
                    </div>
                    <div class="going">
                        <p>Going</p>
                        <div class="going-option">
                            <div class="going">
                                <input type="radio" id="check-self" name="going" checked>
                                <label for="check-self">Self Going</label>
                            </div>
                            <div class="going">
                                <input type="radio" id="check-parents" name="going">
                                <label for="check-parents">Parents</label>
                            </div>
                            <div class="going">
                                <input type="radio" id="check-guardian" name="going">
                                <label for="check-guardian">Guardian</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-box addres">
                        <label> Address</label>
                        <input type="text" placeholder="Street" name="addres" required>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Outgoing Date</label>
                            <input type="date" placeholder="Outgoing Date" name="outgoing_date" required>
                        </div>
                        <div class="input-box">
                            <label>Outgoing Time</label>
                            <input type="time" placeholder="Outgoing Time" name="outgoing_time" required>
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Incoming Date</label>
                            <input type="date" placeholder="Incoming Date" name="incoming_date" required>
                        </div>
                        <div class="input-box">
                            <label>Incoming Time</label>
                            <input type="time" placeholder="Incoming Time" name="incoming_time" required>
                        </div>
                    </div>
                    <div class="input-box">
                        <label>Reason For Going</label>
                        <textarea id="reason" name="reason" cols="50" rows="9"></textarea>
                    </div> 

            
            <button type="submit" id="submitBtn" >Submit</button>
        </form>
    </div></div>
            
        </div></div>
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
    function fetchData(rollno) {
    fetch('fetch_pass.php?rollno='+rollno)
        .then(response => response.json())
        .then(data => {
            document.getElementById('Name').value = data.Name;
            document.getElementById('Department').value = data.Department;
            document.getElementById('PhoneNumber').value = data.PhoneNumber; 
            document.getElementById('Parents_ph_num').value = data.Parents_ph_num; 
            document.getElementById('email').value = data.email;
            document.getElementById('hostel').value = data.hostel; 
            document.getElementById('room_no').value = data.room_no;

            fetch('fetch_hod_email.php?department=' + data.Department)
                        .then(response => response.json())
                        .then(hodData => {
                            document.getElementById('hemail').value = hodData.email;
                        })
                        .catch(error => console.error('Error fetching HOD email:', error));
        })
        .catch(error => console.error('Error fetching data:', error));
}

        // Function to send OTP
// Function to send OTP via AJAX


    </script>
<script src="header.js"></script>
</html>