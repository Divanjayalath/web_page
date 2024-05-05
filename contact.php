<?php
    session_start();
    if(isset($_SESSION["logged_user"])){
        $email = $_SESSION["logged_user"];
    }else{
        $email = "Login";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <div class="main_containar">
        <div class="sub_con_1">
            <div class="nav_cont">
                <ul class="nav ul">
                    <li class="nav_li"><a href="index.php" class="nav_a">Home</a></li>
                    <li class="nav_li"><a href="shop.php" class="nav_a">Shop</a></li>
                    <li class="nav_li"><a href="blog.php" class="nav_a">Blog</a></li>
                    <li class="nav_li"><a href="contact.php" class="nav_a">Contact</a></li>
                    <li class="nav_li"><a href="loggin.php" class="nav_a"><?php echo $email?></a></li>
                </ul><br>
            </div>

            <div class="body_con">
                <div class="row"><p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507113.5464419079!2d79.348840713501!3d6.791188393126914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24fb43be5dd4b%3A0xa11c4dcaed866512!2sBest%20Care%20Kennels!5e0!3m2!1sen!2slk!4v1714718689294!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p></div>
                <div class="row">
                    <div class="contact-form">
                        <h1>Contact Us</h1>
                        <form action="submit" method="post">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Your Name">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Your Email">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
              
        </div>
        <div class="sub_con_2">
        <footer class="clr">
        <div class="footer-container container">
            <div class="content_1">
                <img src="img/12362586-pethub-logo copy.jpg" alt="logo">
                <p>The customer is at the heart of our<br>unique business model</p>
                <img src="img/card.png" alt="cards">
            </div>
            <div class="content_2">
                <h4>SHOPPING</h4>
                <a href="#sellers">Clothing Store</a>
                <a href="#sellers">Food</a>
                <a href="#sellers">Cosmetics</a>
            </div>
            <div class="content_3">
                <h4>SHOPPING</h4>
                <a href="./contact.html">Contact Us</a>
                <a href="https://payment-method-sb.netlify.app/" target="_blank">Payment Method</a>
                <a href="https://delivery-status-sb.netlify.app/" target="_blank">Delivery</a>
                <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Return and Exchange</a>
            </div>
            <div class="content_4">
                <h4>NEWLETTER</h4>
                <p>Litter<br><br>Dry Food<br><br>Wet Food<br><br>Treats<br><br>Supplements</p>
            </div>
            <div class="content_4">
                <h4>contact us</h4>
                <p>Email: info@petfood.com<br>Phone: 123-456-7890</p>
            </div>
        </div>
      
    </footer>
        </div>
    </div>
</body>
</html>