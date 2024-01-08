<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn and Develop your skills - Kombo co</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;0,700;1,200&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <!-- this is the logo -->
            <a href="index.html"><img src="images/logoz.png"></a>
            <div class="nav-links" id="navLinks">
                <!-- below is a link from font icons of the icon -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a href="<?php header("Location: index.php")?>">HOME</a></li>
                    <li><a href=" about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href=" blog.php">BLOG</a></li>
                    <li><a href=" contact.php">CONTACT</a></li>
                </ul>
            </div>
            <!-- below is the menu icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
     
    </section>


    <!-- about us content -->
    <section class="about-us">
        <div class="about-col">
            <h1>We are the largest Learning institution that offers free education in and around kenya </h1>
        <br>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="images/directions.jpg" >
        </div>
    </section>



<!-- FOOTER -->
<section class="footer">
    <h4>About Us</h4>
    <p>
        We are known by the education community for producing proper graduates
    </p>
    <div class="icons">
        <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made by Kombo.co</p>
</section>

<!-- this will include the code from the js file for the toggle menu actions -->
    <script src="index.js"></script>
</body>
</html>