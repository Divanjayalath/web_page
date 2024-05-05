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
        $email = "Login";
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
    <link rel="stylesheet" href="css/style.css">
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
                
            </div>
            <div class="body_dev">
                <br>
                <p class="p1">Do you want to buy me a toy?</p><br>
                <a href="shop.php"><button class="button">shop now</button></a>
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