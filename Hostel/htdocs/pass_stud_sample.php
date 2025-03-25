<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass Apply Form</title>
    <!-- Custom CSS link -->
    <link rel="stylesheet" href="Pass_Stud_style.css">
<style id="wpr-lazyload-bg"></style><style id="wpr-lazyload-bg-exclusion"></style>
<noscript>
<style id="wpr-lazyload-bg-nostyle">:root{--wpr-bg-9e624c80-e0b3-47b4-9052-9f49ce4e78b0: url('https://abduldev.com/wp-content/plugins/wp-rocket/assets/img/youtube.png');}</style>
</noscript>
<script type="application/javascript">const rocket_pairs = [{"selector":".rll-youtube-player .play","style":":root{--wpr-bg-9e624c80-e0b3-47b4-9052-9f49ce4e78b0: url('https:\/\/abduldev.com\/wp-content\/plugins\/wp-rocket\/assets\/img\/youtube.png');}","hash":"9e624c80-e0b3-47b4-9052-9f49ce4e78b0"}]; const rocket_excluded_pairs = [];</script></head>
<body>
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
                <a href="C:\HackWave\DashBoard_stud\Dash_Board_Stud.html">Notices</a>
                <a href="#">Apply Pass</a>
                <a href="#">Complaints</a>
                <a href="C:\HackWave\review_stud\review.html">Reviews</a>
                <button class="button">
                    <span>Sign Out</span>
                  </button>  
            </div>
        </div>
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
                

                <form action="send.php" method="POST" class="form">
                    <div class="column">
                        <div class="input-box">
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="full_name" >
                        </div>
                        <div class="input-box">
                            <label>Roll No</label>
                            <input type="text" placeholder="Roll No" name="roll_no" >
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Department</label>
                            <input type="text" placeholder="Department" name="department">
                        </div>
                        <div class="input-box">
                            <label>Room No</label>
                            <input type="number" placeholder="Room No" name="room_no">
                        </div>
                    </div>
                    <div class="input-box">
                        <label>Reason For Going</label>
                        <textarea id="reason" name="reason" cols="50" rows="9"></textarea>
                    </div><br>
                    <div class="column">
                        <div class="input-box">
                            <label>Student Ph. Num.</label>
                            <input type="tel" placeholder="Phone Number" name="student_phone" >
                        </div>
                        <div class="input-box">
                            <label>Parent Ph. Num.</label>
                            <input type="tel" placeholder="Phone Number" name="parent_phone" >
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
                        <input type="text" placeholder="Street" name="addres" >
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Outgoing Date</label>
                            <input type="date" placeholder="Outgoing Date"name="outgoing_date" >
                        </div>
                        <div class="input-box">
                            <label>Outgoing Time</label>
                            <input type="time" placeholder="Outgoing Time"  name="outgoing_time" >
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Incoming Date</label>
                            <input type="date" placeholder="Incoming Date" name="incoming_date" >
                        </div>
                        <div class="input-box">
                            <label>Incoming Time</label>
                            <input type="time" placeholder="Incoming Time" name="incoming_time" >
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>HOD Mail</label>
                            <input type="email" placeholder="Email" name="Email" >
                        </div>
                        <div class="input-box">
                            <label>Hostel</label>
                            <input type="text" placeholder="Hostel Name" name="hostel" >
                        </div>
                    </div>
                    
                    <div class="input-box">
                <label>Email</label>
                <input type="email" placeholder="Email" name="pemail" >
            </div>
            <!-- OTP input field -->
            <div class="input-box">
                <label>Enter OTP</label>
                <input type="text" placeholder="Enter OTP" name="otp" id="otp" >
            </div>
            <!-- Send and Verify OTP buttons -->
            <button type="button" onclick="sendOTP()">Send OTP</button>
            <button type="button" onclick="verifyOTP()">Verify OTP</button>
            <!-- Submit button (disabled until OTP is verified) -->
            <button type="submit" id="submitBtn" disabled>Submit</button>
        </form>
    </div>

   

<!-- Your HTML code for the form continues here -->

    </div>
    <div class="footer">
        <div class="inner-footer">
      
      <!--  for company name and description -->
          <div class="footer-items">
            <h1>KEC HOSTEL</h1>
            <p>Kongu Engineering College, Perundurai.</p>
          </div>
      
      <!--  for quick links  -->
          <div class="footer-items">
            <h3>Quick Links</h3>
            <div class="border1"></div> <!--for the underline -->
              <ul>
                <a href="#"><li>Home</li></a>
                <a href="#"><li>Search</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="#"><li>About</li></a>
              </ul>
          </div>
      
      <!--  for some other links -->
          <div class="footer-items">
            <h3>Get in Touch</h3>
            <div class="border1"></div>  <!--for the underline -->
              <ul>
                
                    <li> <a href="#"><i class="fab fa-instagram"></i></a>Instagram</li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a>FaceBook</li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i></a>Google</li>
                
              </ul>
          </div>
      
      <!--  for contact us info -->
          <div class="footer-items">
            <h3>Contact us</h3>
            <div class="border1"></div>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
              </ul> 
          </div>
        </div>
        
      <!--   Footer Bottom start  -->
        <div class="footer-bottom">
          Copyright &copy; KEC Hostel 2024.
        </div>
      </div>
      </body>
      <script>
        // Function to send OTP
// Function to send OTP via AJAX
function sendOTP() {
    var email = document.getElementsByName("pemail")[0].value;
    
    // Make an AJAX request to the server-side script
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "send_otp.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server
            console.log(xhr.responseText);
        }
    };
    xhr.send("email=" + email); // Send the email as a POST parameter
}

        // Function to verify OTP
        function verifyOTP() {
    // Get the entered OTP
    var otp = document.getElementById("otp").value;

    // Send OTP to the server via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "verify_otp.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server
            var response = xhr.responseText;
            if (response.trim() === "valid") {
                alert("OTP verification successful!");
                document.getElementById("submitBtn").removeAttribute("disabled");
            } else {
                alert("Invalid OTP. Please try again.");
            }
        }
    };
    xhr.send("otp=" + otp);
}

    </script>
</html>



