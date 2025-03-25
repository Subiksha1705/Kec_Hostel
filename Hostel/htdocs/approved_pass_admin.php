<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Pass</title>
    <link rel="stylesheet" href="approved_pass_style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
</head>
<body>
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
        <div class="filter-section">
          <img src="filter.png" width="30px" height="50%">
        <label for="hostel-filter">Hostel</label>
        <select id="hostel-filter" class="input-box">
            <option value="all">All Hostels</option>
            <option value="Bhavani">Bhavani</option>
            <option value="Amaravathi">Amaravathi</option>
            <option value="Kaveri">Kaveri</option>
        </select>&nbsp; &nbsp; &nbsp;
        <label for="roll-filter">Roll No</label>
        <input type="text" id="roll-filter" class="input-box">
    </div>
    
    <table class="content-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Department</th>
            <th>Room No</th>
            <th>Reason</th>
            <th>Stud Phn</th>
            <th>Parent Phn</th>
            <th>Going</th>
            <th>Address</th>
            <th>Outgoing_date</th>
            <th>Outgoing_time</th>
            <th>Incoming_date</th>
            <th>Incoming_time</th>
            <th>HOD</th>
            <th>Hostel</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
            // Database connection
            $servername = "localhost:3307";
            $username = "root";
            $password = "";
            $dbname = "gatepass";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data
            $sql = "SELECT id,full_name,roll_no,department,room_no,reason,student_phone,parent_phone,going,addres,outgoing_date,outgoing_time,incoming_date,incoming_time,Email,hostel,Process FROM pass_data";
            $result = $conn->query($sql);

            // Output data in table rows
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["roll_no"] . "</td>";
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["room_no"] . "</td>";
                    echo "<td>" . $row["reason"] . "</td>";
                    echo "<td>" . $row["student_phone"] . "</td>";
                    echo "<td>" . $row["parent_phone"] . "</td>";
                    echo "<td>" . $row["going"] . "</td>";
                    echo "<td>" . $row["addres"] . "</td>";
                    echo "<td>" . $row["outgoing_date"] . "</td>";
                    echo "<td>" . $row["outgoing_time"] . "</td>";
                    echo "<td>" . $row["incoming_date"] . "</td>";
                    echo "<td>" . $row["incoming_time"] . "</td>";
                    echo "<td>" . $row["Email"] . "</td>";
                    echo "<td>" . $row["hostel"] . "</td>";
                    echo "<td>" . $row["Process"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }

            $conn->close();
        ?>
        </tbody>
      </table><br><br><br><br><br>
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
<script>
 document.addEventListener('DOMContentLoaded', function() {
    const hostelFilter = document.getElementById('hostel-filter');
    const rollFilter = document.getElementById('roll-filter');

    hostelFilter.addEventListener('change', filterTable);
    rollFilter.addEventListener('input', filterTable);

    function filterTable() {
        const selectedHostel = hostelFilter.value.trim().toLowerCase();
        const rollQuery = rollFilter.value.trim().toLowerCase();

        const tableRows = document.querySelectorAll('.content-table tbody tr');

        tableRows.forEach(row => {
            const hostelCell = row.cells[15]; // Index of Hostel column
            const rollCell = row.cells[2]; // Index of Roll No column

            const hostelText = hostelCell.textContent.trim().toLowerCase();
            const rollText = rollCell.textContent.trim().toLowerCase();

            const hostelMatch = selectedHostel === 'all' || hostelText === selectedHostel;
            const rollMatch = rollText.includes(rollQuery);

            if (hostelMatch && rollMatch) {
                row.style.display = ''; // Show row if it matches the filters
            } else {
                row.style.display = 'none'; // Hide row if it doesn't match the filters
            }
        });
    }
});



</script>
</html>
<script src="header.js"></script>