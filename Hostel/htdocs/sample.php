<!DOCTYPE html>
<html>
<head>
    <title>Guests</title>
    <!--- <link rel="stylesheet" href="Guest_reg_admin_style.css"> --->
    <link href="header.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins");
        /* Existing CSS styles for the table */
main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem rgb(225, 0, 0, 6);
    border-radius: .8rem;
    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem;
    justify-content: space-around;
    display: flex;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;
    margin: .8rem auto;
    border-radius: .6rem;
    overflow: auto;
    overflow: overlay;
}

/* Updated CSS styles for the table */
table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

thead th {
    background-color: #f2f2f2;
    font-weight: bold;
}

tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #ddd;
}

</style>
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
</div><br>
<main class="table" id="customers_table" style="width: 100%;">
    <section class="table__header">
        <h1>Guest Booking's</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
            <img src="images/search.png" alt="">
        </div>

    </section>
    <section class="table__body">
        <table>
            <thead>
            <tr>
                <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                <th> Phone <span class="icon-arrow">&UpArrow;</span></th>
                <th> Alt_Phone <span class="icon-arrow">&UpArrow;</span></th>
                <th> Check_In <span class="icon-arrow">&UpArrow;</span></th>
                <th> Check_Out <span class="icon-arrow">&UpArrow;</span></th>
                <th> Reason <span class="icon-arrow">&UpArrow;</span></th>
                <th> Count <span class="icon-arrow">&UpArrow;</span></th>
                <th> Addit. Req. <span class="icon-arrow">&UpArrow;</span></th>
                <th> Actions <span class="icon-arrow">&UpArrow;</span></th>
            </tr>
            </thead>
            <tbody>
            <?php
// Database credentials
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

// Handle button actions
if (isset($_POST['approve'])) {
    // Handle approve action
    $email = $_POST['email'];
    $message = "Approved";
    $sql = "UPDATE guest SET Actions='approve' WHERE Email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>echo('Record updated successfully')</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} elseif (isset($_POST['decline'])) {
    // Handle decline action
    $email = $_POST['email'];
    $message = "Declined";
    $sql = "UPDATE guest SET Actions='decline' WHERE Email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>echo('Record updated successfully')</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve data from the guest table
$sql = "SELECT * FROM guest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row in a table
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["Phone"] . "</td>";
        echo "<td>" . $row["Alt_Phone"] . "</td>";
        echo "<td>" . $row["Check_In"] . "</td>";
        echo "<td>" . $row["Check_Out"] . "</td>";
        echo "<td>" . $row["Reason"] . "</td>";
        echo "<td>" . $row["People"] . "</td>";
        echo "<td>" . $row["Requirements"] . "</td>";
        echo '<td>';
        echo '<form method="post">';
        echo '<input type="hidden" name="email" value="' . $row["Email"] . '">';
        echo '<input type="submit" name="approve" value="Approve" class="appbtn">';
        echo '<input type="submit" name="decline" value="Decline"  class="decbtn">';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    
// Close database connection
$conn->close();
?>




            </tbody>
        </table>
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