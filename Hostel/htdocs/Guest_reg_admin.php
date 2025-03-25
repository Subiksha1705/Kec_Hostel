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
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
    font-size: 20px;
}
        a{
    color: black;
    text-decoration: none;
}
a:hover{
    color: red;
    text-decoration: none;
}
a{
    margin: 0px 25px;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    border: 1;
    border-color: gray;
    border-radius: 20px;
    background-color: white; /* Default background color */
    color: black;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease-out; /* Transition for background color change */
    position: relative;
    overflow: hidden;
  }

  .button:hover {
    background-color: red; /* Background color on hover */
    color: white;
  }


.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem ;
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
   
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;
    border: 1px solid;
    margin: .6rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}


.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}


table {
    width: 100%;
}


table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: center;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.Accepted {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
  
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

@media print {
 .table, .table__body {
  overflow: visible;
  height: auto !important;
  width: auto !important;
 }
}

.appbtn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

.appbtn:hover {
    background-color: white;
    color:green /* Darker green */
}
.decbtn {
    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

.decbtn:hover {
    background-color: white;
    color:red /* Darker green */
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
        <table border="1">
            <thead>
            <tr>
                <th style="width:auto"> Name <span class="icon-arrow"></th>
                
                <th> Phone <span class="icon-arrow"></th>
                
                <th> Check_In <span class="icon-arrow"></th>
                <th> Check_Out <span class="icon-arrow"></th>
                <th> Reason <span class="icon-arrow"></th>
                <th> Count <span class="icon-arrow"></th>
                <th> Addit. Req. <span class="icon-arrow"></th>
                <th> Actions <span class="icon-arrow"></th>
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
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td width='20px'>" . $row["Name"] . "</td>";
        
        echo "<td  width='20px'>" . $row["Phone"] . "</td>";
        
        echo "<td  >" . $row["Check_In"] . "</td>";
        echo "<td>" . $row["Check_Out"] . "</td>";
        echo "<td  width='-20xpx'>" . $row["Reason"] . "</td>";
        echo "<td>" . $row["People"] . "</td>";
        echo "<td>" . $row["Requirements"] . "</td>";
        echo '<td>';
        echo '<form method="post">';
        echo '<input type="hidden" name="email" value="' . $row["Email"] . '">';
        echo '<input type="submit" name="approve" value="Approve" class="appbtn"><br>';
        echo '<input type="submit" name="decline" value="Decline"  class="decbtn">';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
    }
   
} else {
    echo "0 results";
}
    
// Close database connection
$conn->close();
?>

            </tbody>
     
    </section>
</main>


</body>


</html>
<script src="header.js"></script>