
<?php
include("connect.php");

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
    <section class="sub-header2">
        <!-- the sub-header picture is in the css side under course css -->
        <nav>
            <!-- this is the logo -->
            <a href="index.html"><img src="images/logoz.png"></a>
            <div class="nav-links" id="navLinks">
                <!-- below is a link from font icons of the icon -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a href=" about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href=" blog.php">BLOG</a></li>
                    <li><a href=" contact.php">CONTACT</a></li>
                </ul>
            </div>
            <!-- below is the menu icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Our courses</h1>
     
    </section>


    <!-- Course content -->
    
    <section class="about-us">
        <div class="about-col">
            <h1>We are the largest Learning institution that offers free education in and around kenya </h1>
        <br>
            <a href="signup.php" class="hero-btn red-btn">SIGN UP AT THE ACADEMY</a>
        </div>
        <div class="about-col">
            <img src="images/lib.jpg" >
        </div>
    
        <!-- COURSE COURSE COURSE COURSE COURSE COURSE COURSE COURSE COURSE COURSE -->
    <section class="course">
        <h1>Courses We Offer</h1>
        <!-- small text in p tag -->
        <p>
            We offer a variety of many courses that take a student through a process that encourages learners of different ages
        </p>
        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>
                    Learn intermediate skills that will make you a better all round developer and security analyst. 
                </p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>
                    Learn about the core essentials in your degree that will make you sharp and ready for the market, not forgetting that it will make you a worthwhile employee of the business ventures that you embark on 
                </p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>
                    Learn proper fernished skills that will let you grow as a developer . 
                </p>
            </div>
        </div>
    </section>

    <!-- FACILITIES -->
<section class="facilities">
    <h1>Our Facilities</h1>
    <p>We offer a large range of facilities that are used to encourage the students to challenge themselves with mordern technology</p>

    <div class="row">
       <div class="facilities-col">
         <img src="images/pexels-ron-lach-10638065.jpg">
         <h3> World Class Library </h3>
         <p>The books and newspapers that you can get here are from a century of documentation from world class writter like charles darwin, Socher Legger</p>
       </div>
       <div class="facilities-col">
        <img src="images/people in board.jpeg">
        <h3> Largest books store </h3>
        <p>The books and newspapers that you can get here are from a century of documentation from world class writter like charles darwin, Socher Legger</p>
      </div>
      <div class="facilities-col">
        <img src="images/pexels-element-digital-1370298.jpg">
        <h3> The best designed library </h3>
        <p>The books and newspapers that you can get here are from a century of documentation from world class writter like charles darwin, Socher Legger</p>
      </div>

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