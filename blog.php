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
    <link rel="stylesheet" href="css/blog.css">
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

           
            <div class="container">
                <article class="blog-post ">
                    <h2 class="algn">How to Remove Ticks from Your Dog:</h2>
                    <p>Get ready: Put on gloves and get a pair of tweezers with a fine tip first. Steer clear of bare hands since some ticks can spread disease via skin contact.

Find the Tick: Examine your dog's coat thoroughly, paying close attention to the areas around the head, ears, and belly. Because ticks are little and easy to miss, make sure you examine closely.

Remove the Tick: Using the tweezers, grasp the tick as near to the skin as you can, then draw it straight out while using constant, moderate pressure. To stop the tick from injecting poison, avoid compressing its body.

Clean the Area: To avoid infection, use antiseptic or soap and water to clean the bite site after the tick has been removed.

How to Get Rid of the Tick: To ensure safe disposal, kill the tick by placing it in a sealed container or a tiny amount of rubbing alcohol.

Keep an eye on your dog: In the days after the tick is removed, watch out for symptoms in your dog, such as redness, swelling, or lethargic behavior, that indicate an illness or infection. If you see any signs, call your veterinarian.</p>
                    <img src="https://www.preventivevet.com/hs-fs/hubfs/Where%20to%20check%20for%20ticks%20on%20dogs%20with%20tick%20and%20microscope.jpg?width=600&height=503&name=Where%20to%20check%20for%20ticks%20on%20dogs%20with%20tick%20and%20microscope.jpg" alt="Blog Image 1" width="500px " height="400px" class="algn" style="margin-left:30%";>
                </article>
                <article class="blog-post">
                    <h2 class="algn">Why Do Dogs Eat Grass</h2>
                    <p>Dogs eating grass is a common behavior and can be a normal part of their lives.

Instructions:

Observe Your Dog: Make note of the quantity and frequency of grass your dog consumes. While occasional grass-eating may not be a problem, frequent intake may point to a more serious problem.

Assure Safety: If your dog consumes grass on a regular basis, check sure the grass is free of chemicals, as fertilizers and pesticides can be dangerous to dogs.

Examine Environment and food: When a dog's food is deficient in fiber, it may lead to him eating grass. Examine their food and think about incorporating more ingredients high in fiber.

Track Your Health: After your dog consumes grass, keep an eye out for symptoms of digestive distress, such as vomiting or diarrhea. See your veterinarian if these symptoms recur regularly.</p>
                    <img src="https://images.ctfassets.net/82d3r48zq721/3P6OMAvnUfTJDAFi6fx1Re/0b7c2f6a4fb45dbf0126f43e87475da2/Dog-Eats-Grass.jpg?w=800&q=50" alt="Blog Image 2" width="500px " height="400px" style="margin-left:30%;">
                </article>
                <article class="blog-post">
                    <h2 class="algn">How to Feed Your Cat:</h2>
                    <p>Feeding your cat properly is key to their overall health and well-being.

Instructions:

Pick High-Quality Food: Depending on your cat's age, size, and health, choose a premium commercial cat food. Seek for options where the main ingredient is actual meat.

Set Up a Mealtime Routine: Establish regular feeding schedules for your cat to help them maintain a steady weight and establish a routine.

Regulated Areas: Measure food portions as directed by the manufacturer or your veterinarian. This aids in the prevention of obesity and other illnesses.

Fresh Water: Make sure your cat has access to clean, fresh water at all times. Cats may not drink enough water because they are sensitive to contaminated or stagnant water.

Treat Content: Treats should not account for more than 10% of your cat's diet. Don't use them as your main source of sustenance; save them for training or prizes.

Observe Your Cat's Mass: Pay attention to your cat's weight and overall health. Obesity or abrupt weight fluctuations might cause health issues. See your veterinarian if there are any noticeable changes.

By following these instructions, you can help ensure your pets stay healthy and happy. Let me know if you need further information.</p>
                    <img src="https://assets-au-01.kc-usercontent.com/ab37095e-a9cb-025f-8a0d-c6d89400e446/e0efe971-4402-48b0-b786-960b6d01cc6e/article-common-feeding-mistakes-and-foods-to-avoid-for-cat.jpg" alt="Blog Image 2" width="500px " height="400px" style="margin-left:30%;">
                </article>
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