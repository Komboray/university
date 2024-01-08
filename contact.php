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
    <section class="sub-header3">
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
        <h1>Contact Us</h1>
     
    </section>



    <!-- CONTACT US -->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7976.992722706568!2d36.962471!3d-1.47496615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f9ff19c865f6d%3A0xfdf5065055290599!2sKitengela%2C%20Athi%20River!5e0!3m2!1sen!2ske!4v1685519402877!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <!-- I need an icon here -->
                <i class="fa fa-home"></i>
                <span>
                    <h5>JABALI ROAD, ABC Building</h5>
                    <p>Kenya, Kitengeli, Kj</p>
                </span>
            </div>
            <div>
                <!-- I need an icon here -->
                <i class="fa fa-Phone"></i>
                <span>
                    <h5>+254727238639</h5>
                    <p>Monday to Saturday, 10AM to 5pm</p>
                </span>
            </div>
            <div>
                <!-- I need an icon here -->
                <i class="fa fa-home"></i>
                <span>
                    <h5> <a href="mailto:mbithiraymond@gmail.com">mbithiraymond@gmail.com</a> </h5>
                    <p>Email Us your problems or any query</p>
                </span>
            </div>
        </div>
    </div>
    <div>
        <div class="contact-col">

            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                <input type="text" placeholder="Enter your Name" required
                name="name">
                <input type="email" placeholder="Enter your Email address" name="email" required>
                <input type="text" placeholder="Enter your Subject" name="subject" required>
                <textarea name="message" id="message" rows="8" placeholder="Messsage" required></textarea>
                <button type="submit" class="hero-btn red-btn" onclick = "return mess();">Send Message</button>
            </form>
        </div>
    </div>
<!-- //let us open the application and try to send the details -->
<!-- //we have not placed the project on the xampp server  -->
</section>
<?php
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == 'POST'){
 $name = filter_input(INPUT_POST, "name",  FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST, "email",  FILTER_SANITIZE_SPECIAL_CHARS);
 $subject = filter_input(INPUT_POST, "subject",  FILTER_SANITIZE_SPECIAL_CHARS);
 $message = filter_input(INPUT_POST, "message",  FILTER_SANITIZE_SPECIAL_CHARS);


 $sql = "INSERT INTO contact_emails (name, email, subject, message)
         VALUES('$name', '$email', '$subject', '$message')";

$contact_result = mysqli_query($conn, $sql);
header("Location: contact.php");
exit;





}

?>


<!-- FOOTER -->
<section class="footer">
    <h4>About Us</h4>
    <p>
        We are known by the education community for producing proper graduates
    </p>
    <div class="comment-box">
       <h3>Leave a comment</h3>
       <form action="" class="comment-form">
        <input type="text" placeholder="Enter Name">
        <input type="text" placeholder="Enter Name">
        <textarea name="" id="" rows="5" placeholder="Your comment"></textarea>
        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
    </form>         
    </div>
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