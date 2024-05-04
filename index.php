<?php
    session_start();
    if(isset($_SESSION["logged_user"])){
        $email = $_SESSION["logged_user"];
        echo "<script>
        document.getElementById('btn-logout').classList.add('show');
        </script>";
    }else{
        echo "<script>
        document.getElementById('btn-logout').classList.add('show');
        </script>";
        $email = "Login First";
    }

    if(isset($_POST["logout"])){
        session_destroy();
        echo "<script>
        location.replace('index.php');
        </script>";

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/style.css">
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
                    <li class="nav_li">
                        <form method="POST">
                        <input type="submit" value="Logout" id="btn-logout" class="sample" name="logout">
                        </form>
                    </li>
                </ul><br>

                <?php
                
                if(isset($_SESSION["logged_user"])){
                    echo "<script>
                    document.getElementById('btn-logout').classList.add('show');
                    </script>";
                }else{
                    echo "<script>
                    document.getElementById('btn-logout').classList.add('hide');
                    </script>";
                }?>
                <h2 style="margin-left:670px">ILOVEPET</h2>
            </div>
            <div class="body_dev">
                <p class="p1">Hi There!</p><br>
                <p class="p1">Do you want to buy me a toy?</p><br>
                <button class="button">shop now</button>
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