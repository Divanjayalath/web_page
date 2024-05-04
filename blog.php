<?php
    session_start();
    if(isset($_SESSION["logged_user"])){
        $email = $_SESSION["logged_user"];
    }else{
        $email = "Login First";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/blog.css">
</head>
<body>
    <div class="main_containar">
        <div class="sub_con_1">
            <div class="nav_cont">
                <ul class="nav ul">
                    <li class="nav_li"><a href="index.php" class="nav_a">Home</a></li>
                    <li class="nav_li"><a href="#" class="nav_a">Shop</a></li>
                    <li class="nav_li"><a href="blog.php" class="nav_a">Blog</a></li>
                    <li class="nav_li"><a href="contact.php" class="nav_a">Contact</a></li>
                    <li class="nav_li"><a href="loggin.php" class="nav_a"><?php echo $email?></a></li>
                </ul><br>
            </div>

           
            <div class="container">
                <article class="blog-post ">
                    <h2 class="algn">My First Blog Post</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <img src="https://www.natural-treats.co.uk/cdn/shop/articles/sydney-rae-ouYxSsETHHs-unsplash.jpg?v=1700665008&width=1500 " alt="Blog Image 1" width="500px " height="400px" class="algn" style="margin-left:30%";>
                </article>
                <article class="blog-post">
                    <h2 class="algn">Second Blog Post</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <img src="https://www.natural-treats.co.uk/cdn/shop/articles/laura-beth-snipes-PlUJM2sPwis-unsplash.jpg?v=1701079906&width=1500" alt="Blog Image 2" width="500px " height="400px" style="margin-left:30%;">
                </article>
            </div>
              
        </div>

        
        <div class="sub_con_2">
            <footer>
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>About Us</h3>
                        <p class="pk">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                    </div>
                    <div class="footer-column">
                        <h3>Contact Us</h3>
                        <p class="pk">Email: info@petfood.com<br>Phone: 123-456-7890</p>
                    </div>
                    <div class="footer-column">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>