<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product View</title>
  
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/card.css">

</head>
<body>
  
<ul class="nav ul">
                    <li class="nav_li"><a href="index.php" class="nav_a">Home</a></li>
                    <li class="nav_li"><a href="shop.php" class="nav_a">Shop</a></li>
                    <li class="nav_li"><a href="blog.php" class="nav_a">Blog</a></li>
                    <li class="nav_li"><a href="contact.php" class="nav_a">Contact</a></li>
                    <li class="nav_li"><a href="loggin.php" class="nav_a">My Account</a></li>
                </ul>

  <div class="container"> 
  <div class="forimg">
  <div class="product-info">
        <div class="mtopic">
          <p class="topic">W & S jacket</p>
        </div>
        
        <br>
        <img src="image/WONTONSNOWSTORMjacketinblackandcream1smallwithicons_5b706011-1579-447e-9ac7-8a8dcd9a9105_1512x.webp" alt="Product Image">
      </div>
    <div class="pricetag">
        <h3>Price 45$</h3>
</div>
</div>

<div class="forform">
        <form action="process.php" method="POST">
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <label for="full_name">Full Name:</label>
                        <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
                    </div>
                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="inputBox">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" placeholder="Enter city" required>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="state">State:</label>
                            <input type="text" id="state" name="state" placeholder="Enter state" required>
                        </div>
                        <div class="inputBox">
                            <label for="zip_code">Zip Code:</label>
                            <input type="text" id="zip_code" name="zip_code" placeholder="12345" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <label for="card_name">Name On Card:</label>
                        <input type="text" id="card_name" name="card_name" placeholder="Enter card name" required>
                    </div>
                    <div class="inputBox">
                        <label for="card_number">Credit Card Number:</label>
                        <input type="text" id="card_number" name="card_number" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="inputBox">
                        <label for="exp_month">Exp Month:</label>
                        <select id="exp_month" name="exp_month" required>
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <!-- Add other months here -->
                        </select>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <label for="exp_year">Exp Year:</label>
                            <select id="exp_year" name="exp_year" required>
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <!-- Add other years here -->
                            </select>
                        </div>
                        <div class="inputBox">
                            <label for="cvv">CVV:</label>
                            <input type="text" id="cvv" name="cvv" placeholder="123" required>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Proceed to Checkout" class="submit_btn">
        </form>
    </div>
  <footer>
    <div class="footer-container fcontainer">
        <div class="content_1">
            <img src="image/12362586-pethub-logo.jpg" alt="logo">
            <p>The customer is at the heart of our<br>unique business model</p>
            <img src="image/cards.png" alt="cards">
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
            <a href="" target="_blank">Payment Method</a>
            <a href="" target="_blank">Delivery</a>
            <a href="" target="_blank">Return and Exchange</a>
        </div>
        <div class="content_4">
            <h4>Follow Us</h4>
            <a href="" target="_blank">Facebook</a>
            <a href="" target="_blank">Twitter</a>
            <a href="" target="_blank">Instagram</a>
        </div>
    </div>
  
</footer>

</body>
</html>
