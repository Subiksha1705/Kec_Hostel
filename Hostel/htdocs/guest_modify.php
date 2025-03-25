<html>
    <head>
      <link rel="stylesheet" href="guest.css">
      <link rel="stylesheet" href="footer.css">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
            <h1>GIRLS HOSTEL</h1>
            <span class="background">
                <section class="gallery">
                  <section class="img-card">
                      <img src="h1.jpg" alt="" />
                  </section>
            
                  <section class="img-card">
                      <img src="h2.jpg" alt="" />
                  </section>
            
                  <section class="img-card">
                      <img src="h3.jpg" alt="" />
                  </section>
            
                  <section class="img-card">
                      <img src="h4.jpg" alt="" />
                  </section>
            
                  <section class="img-card">
                      <img src="h5.jpg" alt="" />
                  </section>
                </section>
              </span>
              <h2>Our Mission and Vission</h2>
              <br><br>
              <div class="container">
                <div class="box" onmouseover="animate(this)">
                  <h3 style="text-align: center; font-size: 25px";>MISSION</h3><br><br>
                  <p style="text-align: center; font-size: 20px;"> 
                    To be a centre of excellence for development and
                    dissemination of knowledge in Applied science,
                    Technology, Engineering and Management for
                    the Nation and beyond.</p>
                </div>
                <div class="box" onmouseover="animate(this)">
                  
                  <h3 style="text-align: center; font-size: 25px";>VISSION</h3><br><br>
                  <p style="text-align: center; font-size: 20px;"> 
                    We are committed to value based Education, Research and
Consultancy in Engineering and Management and
to bring out technically competent, ethically strong and
quality professionals to keep our Nation ahead in the
competitive knowledge intensive world.</p>
                </div>
              </div>
              <br>
              <h4>OUR HOSTELS</h4>
              <main style="box-sizing: border-box;" class="main">
        
                <section class="card-area">
                <?php
// Assuming you have already established a database connection
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "gatepass";
$connection = mysqli_connect($servername, $username, $password, $database);
// Query to fetch data from the database
$query = "SELECT * FROM home"; // Replace your_table_name with the actual name of your table
$result = mysqli_query($connection, $query);

// Check if query executed successfully
if ($result) {
    // Loop through the fetched rows
    while ($row = mysqli_fetch_assoc($result)) {
        // Start of card-section
        echo '<section class="card-section">';

        // Start of card
        echo '<div class="card">';

        // Start of flip-card
        echo '<div class="flip-card">';
        echo '<div class="flip-card__container">';

        // Start of card-front
        echo '<div class="card-front">';
        echo '<div class="card-front__tp card-front__tp--ski">';
        echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" class="card-front__icon">';
        echo '<g>';
        echo '<path d="M58.8,54.5L38.5,19.3c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1L14.8,54.5c-0.4,0.6-0.4,1.4,0,2c0.4,0.6,1,1,1.7,1h40.6c0.7,0,1.4-0.4,1.7-1C59.2,55.9,59.2,55.1,58.8,54.5z M36.8,24.3l5.8,10c-0.5-0.2-1.1-0.3-1.7-0.3c-2.5,0-3.7,1.5-4.6,2.5c-0.7,0.9-1,1.1-1.5,1.1s-0.8-0.2-1.5-1.1c-0.6-0.7-1.3-1.5-2.4-2.1L36.8,24.3z M20,53.5l8.9-15.4c0.5,0,0.7,0.3,1.4,1.1c0.8,1,2.1,2.5,4.6,2.5s3.7-1.5,4.6-2.5c0.7-0.9,1-1.1,1.5-1.1c0.5,0,0.8,0.2,1.5,1.1c0.8,1,2.1,2.5,4.5,2.5l6.8,11.8H20z"/>';
        echo '<path d="M14.7,51.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H6.4l9.1-15.7c0.6,0.6,1.5,1.3,2.9,1.3c1.8,0,2.8-1.2,3.3-1.8c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.5,0.6,1.5,1.8,3.3,1.8c1.1,0,2-0.9,2-2c0-1.1-0.9-2-1.9-2c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1.5-1.8-3.3-1.8c-1.8,0-2.8,1.2-3.3,1.8c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.2-0.3-0.4-0.5-0.6l5.7-9.9l3.8,6.6c0.6,1,1.8,1.3,2.7,0.7c1-0.6,1.3-1.8,0.7-2.7L25,13.2c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1l-8.4,14.5c-0.1,0.1-0.2,0.3-0.3,0.4L1.2,48.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2C1,50,1,50,1,50.1c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.3,0.1,0.5,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0H14.7z"/>';
        echo '<path d="M40.7,12.3h3.1l-2.2,2.2c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l2.2-2.2v3.1c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3.1l2.2,2.2c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2h3.1c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5h-3.1l2.2-2.2c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L49,7.2V4c0-0.8-0.7-1.5-1.5-1.5S46,3.2,46,4v3.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l2.2,2.2h-3.1c-0.8,0-1.5,0.7-1.5,1.5S39.9,12.3,40.7,12.3z"/>';
        echo '</g>';
        echo '</svg>';
        echo '<p class="card-front__text-price">';
        echo $row['name']; // Assuming 'name' is the column name in your database for the name of the item
        echo '</p>';
        echo '</div>';
        echo '<div class="card-front__bt">';
        echo '<p class="card-front__text-view card-front__text-view--ski">';
        echo 'View me';
        echo '</p>';
        echo '</div>';
        echo '</div>';

        // Start of card-back
        echo '<div class="card-back">';
    echo '<img src="' . $row['image'] . '" alt="" width="250px" height="240px">'; // Assuming the column name in your table is 'image'
    echo '</div>'; 
        // Start of inside-page
        echo '<div class="inside-page">';
        echo '<div class="inside-page__container">';
        echo '<h3 class="inside-page__heading inside-page__heading--ski">';
        echo $row['description']; // Assuming 'description' is the column name in your database for the description of the item
        echo '</h3>';
        echo '<p class="inside-page__text">';
        echo 'Total Number of rooms : ' . $row['total_rooms'] . ' rooms'; // Assuming 'total_rooms' is the column name in your database for the total number of rooms
        echo 'Accommodation : ' . $row['capacity'] . ' capacity'; // Assuming 'capacity' is the column name in your database for the accommodation capacity
        echo '</p>';
        echo '<a href="#" class="inside-page__btn inside-page__btn--ski">View Gallery</a>';
        echo '</div>';
        echo '</div>';

        // End of card-section
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
} else {
    // Error handling if the query fails
    echo "Error: " . mysqli_error($connection);
}

// Close database connection
mysqli_close($connection);
?>
 </section>
          </main>
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
        <script>
            function animate(element) {
              element.style.transform = 'scale(1.05)';
              setTimeout(() => {
                element.style.transform = 'scale(1)';
              }, 300);
            }
          </script>
</html>