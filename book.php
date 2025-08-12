<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body>

    <!-- Header Section -->
     <section class="header">
        <a href="home.php" class="logo">Trekk.in</a>
 
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

     </section>
    <!-- Header Section Ends -->

    <!-- Heading Section -->
    <div class="heading" style="background: url(images/book-header-bg.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>
    <!-- Heading Section Ends -->

    <!-- Booking Section -->
    <section class="booking">
        <h1 class="heading-title">Book Your Favorite Package</h1>
        <form action="book_form.php" class="book-form" method="post">
            <div class="flex">
                <div class="inputBox">
                    <span>Name</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email</span>
                    <input type="email" placeholder="Enter Your Email" name="email">
                </div>
                <div class="inputBox">
                    <span>Phone</span>
                    <input type="number" placeholder="Enter Your Phone Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address</span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                </div>
                <div class="inputBox">
                    <span>When to go</span>
                    <input type="date" placeholder="Enter When to go" name="when">
                </div>
                <div class="inputBox">
                    <span>How many people</span>
                    <input type="number" placeholder="Number of People" name="guests">
                </div>
            </div>

            <input type="submit" value="Submit" class="btn" name="send">

        </form>
    </section>
    <!-- Booking Section Ends -->

    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <!-- Quick Links -->
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <!-- Extra Links -->
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>

            <!-- Contact Info -->
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 87912 97395</a>
                <a href="#"><i class="fas fa-envelope"></i>adityatomar5122@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Dehradun, Uttarakhand, India</a>
            </div>

        </div>

        <!-- Credit Section -->
        <div class="credit">
            <p>Created by <span>Aditya Tomar</span> | All Rights Reserved!</p>
        </div>

    </section>
    <!-- Footer Section Ends -->

    <!-- Swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom js file -->
    <script src="js/script.js"></script>
    
</body>

</html>