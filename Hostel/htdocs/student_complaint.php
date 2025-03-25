<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="x-icon" href="keclogo.png">
    <title>Complaint Portal</title>
    <script src="header.js"></script>
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }


        .section {
            position: relative;
            display: flex;
            justify-content: end;
            align-items: end;
            min-height: 100vh;
            width: 40%;
        }
        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
        }
        .blob:nth-child(2) {
            filter: blur(50px);
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            height: 500px;
            background: #250821;
        }

        .content {
            max-width: 60%;
            margin: 0 auto;
            margin-left: 10px;
            color: white;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
     

/*form*/
.comp
{
    height: auto;
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
}
.comp .image
{
    width: 50%;
	margin: auto;
}
form {
        background-color: #f0f0f0; /* Grey background color */
        padding: 20px;
        border-radius: 10px;
        width: 600px;
        margin: 0 auto;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #45a049; 
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049; 
    }

    /* Optional: Add more styling for specific input types, if needed */
    input[type="text"]:focus,
    input[type="tel"]:focus,
    select:focus,
    textarea:focus {
        border: 2px solid #3498db;
        outline: none;
    }

    /* Adjustments for smaller screens */
    @media(max-width: 600px) {
        form {
            width: 100%;
        }
    }
    .nav-container {
    width: 100%;
}

.navbar {
    display: grid;
    grid-template-columns: 0.2fr auto 1fr;
    align-items: center;
    height: 80px;
    width: 100%;
    max-width: 1720px;
    margin: 0 auto;
    background: white; 
}

#navbar-logo {
    justify-self: start;
    margin-left: 20px;
}

#navbar-logo {
    cursor: pointer;
}

.nav-menu {
    display: grid;
    grid-template-columns: repeat(5, auto);
    list-style: none;
    text-align: center;
    width: 70%;
    justify-self: end;
    align-items: center;
}

.nav-links {
    text-decoration: none;
    color: rgb(16, 3, 47);
    text-align: center;
    font-size: 20px;
    font: bold;
    cursor: pointer;
}

.nav-links:hover {
    color: red;
    transition: all 0.2s ease-out;
}

.menu-toggle .bar {
    width: 25px;
    height: 3px;
    margin: 5px auto;
    transition: all 0.3s ease-in-out;
    background: rgb(16, 3, 47);
} 

@media screen and (max-width: 768px) {
    .nav-container {
        position: relative;
    }

    .nav-menu {
        display: grid;
        grid-template-columns: auto;
        background: red;
        margin: 0;
        width: 100%;
        position: absolute;
        font-style: italic;
        top: 80px;
        left: -100%;
        opacity: 0;
        transition: all 0.3s ease;
    }

    #navbar-logo {
        margin-left: 20px;
    }

    .nav-menu.active {
        background: white;
        left: 0;
        opacity: 1;
        transition: all 0.5s ease;
    }

    .nav-links {
        text-align: center;
        line-height: 30px;
        width: 100%;
        display: table;
        cursor: pointer;
    }

    .nav-links:hover {
        color: red;
        transition: all 0.4s ease-out;
    }

    .navbar {
        width: 100%;
    }

    #mobile-menu {
        position: absolute;
        top: 20%;
        right: 5%;
        transform: translate(5%, 20%);
    }

    .menu-toggle .bar {
        display: block;
        cursor: pointer;
    }

    .menu-toggle:hover {
        cursor: pointer;
    }

    #mobile-menu.is-active .bar:nth-child(2) {
        opacity: 0;
    }

    #mobile-menu.is-active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    #mobile-menu.is-active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
}


    </style>
</head>
<body>
<div class="nav-container">
    <nav class="navbar">
        <img id="navbar-logo" src="logo.jpg" alt="KEC" height="75px" width="75px">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-menu" style="cursor:pointer;">
            <li><a href="Notices_stud.php" class="nav-links">Notices</a></li>
            <li><a href="#" class="nav-links">Complaints</a></li>
            <li><a href="pass_stud.php" class="nav-links">Apply Pass</a></li>
            <li><a href="review_stud.php" class="nav-links">Reviews</a></li>
            <li><a href="main_home.html" class="nav-links" style="color:red;">Sign Out</a></li>
           
        </ul>
    </nav>
</div><br>
    <div class="container">
        <div class="content">
            <p> Registering complaints isn't just about pointing out problems; it's the first step towards creating a nurturing and thriving hostel environment. Your feedback shapes a better tomorrow for everyone – where each concern addressed is a step closer to a harmonious and comfortable living space for all.</p><br><br>
            <button><a href="#sectionOne" style="text-decoration: none;color: #fff;">Register Compliant</a></button>
        </div>
        <div class="section">
            <div class="blob">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                    <defs>
                      <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color: rgb(254, 0, 82);"></stop>
                        <stop offset="100%" style="stop-color: rgb(251, 2, 128);"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="url(#gradient)">
                        <animate attributeName="d"
                            dur="10000ms"
                            repeatCount="indefinite"
                            values="M448.5,320.5Q418,391,350.5,415.5Q283,440,207,448Q131,456,117,380Q103,304,104.5,250.5Q106,197,118.5,120.5Q131,44,203.5,73.5Q276,103,355.5,98.5Q435,94,457,172Q479,250,448.5,320.5Z;
                            M448.5,326.5Q432,403,355,406Q278,409,219,407.5Q160,406,155.5,346Q151,286,139.5,246Q128,206,146,153.5Q164,101,217.5,117Q271,133,349.5,117Q428,101,446.5,175.5Q465,250,448.5,326.5Z;
                            M403,322.5Q423,395,348,389Q273,383,227.5,375Q182,367,115,345Q48,323,83,262.5Q118,202,124,122Q130,42,204.5,63Q279,84,346,99Q413,114,398,182Q383,250,403,322.5Z;
                            M448.5,320.5Q418,391,350.5,415.5Q283,440,207,448Q131,456,117,380Q103,304,104.5,250.5Q106,197,118.5,120.5Q131,44,203.5,73.5Q276,103,355.5,98.5Q435,94,457,172Q479,250,448.5,320.5Z">
                       </animate>
                    </path>
                  </svg>
            </div>
    
            <div class="blob">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                    <defs>
                      <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color: rgb(254, 0, 82);"></stop>
                        <stop offset="100%" style="stop-color: rgb(251, 2, 128);"></stop>
                      </linearGradient>
                    </defs>
                    <path fill="url(#gradient)">
                        <animate attributeName="d"
                            dur="10000ms"
                            repeatCount="indefinite"
                            values="M448.5,320.5Q418,391,350.5,415.5Q283,440,207,448Q131,456,117,380Q103,304,104.5,250.5Q106,197,118.5,120.5Q131,44,203.5,73.5Q276,103,355.5,98.5Q435,94,457,172Q479,250,448.5,320.5Z;
                            M448.5,326.5Q432,403,355,406Q278,409,219,407.5Q160,406,155.5,346Q151,286,139.5,246Q128,206,146,153.5Q164,101,217.5,117Q271,133,349.5,117Q428,101,446.5,175.5Q465,250,448.5,326.5Z;
                            M403,322.5Q423,395,348,389Q273,383,227.5,375Q182,367,115,345Q48,323,83,262.5Q118,202,124,122Q130,42,204.5,63Q279,84,346,99Q413,114,398,182Q383,250,403,322.5Z;
                            M448.5,320.5Q418,391,350.5,415.5Q283,440,207,448Q131,456,117,380Q103,304,104.5,250.5Q106,197,118.5,120.5Q131,44,203.5,73.5Q276,103,355.5,98.5Q435,94,457,172Q479,250,448.5,320.5Z">
                       </animate>
                    </path>
                  </svg>
            </div>
        </div>
        </div><br><br>
        <div class="complaint">
            <a name='sectionOne' />
            <div class="comp">
                <div class="image">
                    <img src="complaint1.png" alt="complaint" style="width: 100%;">
                </div>
                <div class="complaint">

<form action="store_complaint.php" method="POST" enctype="multipart/form-data" id="complaintForm">
    <label for="rollno">Roll No:</label><br>
    <input type="text" id="rollno" name="rollno" placeholder="Enter Roll No" required onchange="fetchData(this.value)"><br><br>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" placeholder="Enter Name" readonly><br><br>

    <label for="phoneNumber">Phone Number:</label><br>
    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number" readonly><br><br>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" placeholder="Enter Email Address" readonly><br><br>

    <label for="hostelName">Hostel Name:</label><br>
    <input type="text" id="hostelName" name="hostelName" placeholder="Hostel Name" readonly><br><br>

    <label for="roomNumber">Room Number:</label><br>
    <input type="text" id="roomNumber" name="roomNumber" placeholder="Enter Room Number" readonly><br><br>

    <label for="complaintType">Complaint Type:</label><br>
    <select id="complaintType" name="complaintType" required>
        <option value="" disabled selected>Select Complaint Type</option>
        <option value="electricity">Electricity</option>
        <option value="plumbing">Plumbing</option>
        <option value="cleaning">Cleaning</option>
        <option value="food">Food</option>
        <option value="others">Others</option>
    </select><br><br>

    <label for="complaintDescription">Complaint Description:</label><br>
    <textarea id="complaintDescription" name="complaintDescription" rows="4" placeholder="Enter Complaint Description" required></textarea><br><br>

    <label for="photo">Photo (JPG format):</label><br>
    <input type="file" id="photo" name="photo" accept="image/jpeg" required><br><br>

    <button type="submit">Submit Complaint</button>
</form>



                </div>
            </div><br><br><br>
            <footer class="footer-distributed">

<div class="footer-left">
    <h3>KEC<span>Hostels</span></h3>

    <p class="footer-links">
        <a href="Notices_stud.php">Notices</a>
        |
        <a href="pass_stud.php">Apply Pass</a>
        |
        <a href="#">Complaints</a>
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
        fetch('fetch_student_data.php?rollno=' + rollno)
            .then(response => response.json())
            .then(data => {
                document.getElementById('name').value = data.name;
                document.getElementById('phoneNumber').value = data.phoneNumber;
                document.getElementById('email').value = data.email;
                document.getElementById('hostelName').value = data.hostelName;
                document.getElementById('roomNumber').value = data.roomNumber;
            })
            .catch(error => console.error('Error fetching data:', error));
    }
</script>


        </html>