<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product View</title>
  <link rel="stylesheet" href="css/product.css">
</head>
<body>
  
<ul class="nav ul">
                    <li class="nav_li"><a href="index.php" class="nav_a">Home</a></li>
                    <li class="nav_li"><a href="shop.php" class="nav_a">Shop</a></li>
                    <li class="nav_li"><a href="blog.php" class="nav_a">Blog</a></li>
                    <li class="nav_li"><a href="contact.php" class="nav_a">Contact</a></li>
                    <li class="nav_li"><a href="loggin.php" class="nav_a">My Account</a></li>
                </ul>

  </br>
</br>

  <form action="card.php" method="post">
    <div class="container">
      <div class="product-info">
        <div class="mtopic">
          <p class="topic">W & S jacket</p>
        </div>
        
        <br>
        <img src="image/WONTONSNOWSTORMjacketinblackandcream1smallwithicons_5b706011-1579-447e-9ac7-8a8dcd9a9105_1512x.webp" alt="Product Image">
      </div>
      <div class="product-options">
        <select name="color" id="color">
          <option value="blue">Blue</option>
          <option value="black">Black</option>
          <option value="white">White</option>
          <option value="gray">Gray</option>
        </select>
        <div class="size-buttons">
          <button type="button" id="size-14" name="size" value="14">14</button>
          <button type="button" id="size-15" name="size" value="15">15</button>
          <button type="button" id="size-16" name="size" value="16">16</button>
        </div>
      </div>
      <div class="product-actions">
        <h3>Price <p class="price">45$</p></h3>
        <button type="submit">Add to Cart</button>
        <button type="submit">Buy Now</button>
      </div>
    </div>
  </form>
</br>
</br>
</br>
  <script src="js/script.js"></script>


  <div class="disship">
    <div class="productdis">
        <h3>Discription</h3>
</br>
</br>
        <p>
        Transform your pup into the epitome of style and comfort with our range of dog clothes.
        Crafted with love and precision, our collection combines functionality with fashion, 
        ensuring your furry friend looks and feels their best in every situation. From cozy 
        sweaters perfect for chilly walks in the park to adorable t-shirts for lounging at home,
        we have something for every occasion.  <br><br>Our designs boast vibrant colors, playful patterns,
        and durable materials, ensuring longevity and easy maintenance. Whether your canine 
        companion prefers a casual chic look or a more formal ensemble, our diverse range caters 
        to all tastes and sizes. Not only do our clothes elevate your dog's style game, but they
        also provide practical benefits such as protection from the elements and added warmth during 
        colder months. Treat your four-legged friend to the ultimate wardrobe upgrade and let their 
        personality shine through in every paw-step!</p>

    </div>
    <div class="ship">
        <h3>Shipping detail</h3>
        <div class="delivery-options">
          <div class="option">
              <h2>Standard Delivery</h2>
              <p>Receive your order within 3-5 business days.</p>
              <p class="price">$5.99</p>
          </div>
          <div class="option">
              <h2>Express Delivery</h2>
              <p>Receive your order within 1-2 business days.</p>
              <p class="price">$9.99</p>
          </div>
          <div class="option">
              <h2>Free Shipping</h2>
              <p>Free shipping on orders over $50.</p>
              <p class="price">Free</p>
          </div>
      </div>
    </div>
  </div>
  <br></br></br>
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
            <a href="https://payment-method-sb.netlify.app/" target="_blank">Payment Method</a>
            <a href="https://delivery-status-sb.netlify.app/" target="_blank">Delivery</a>
            <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Return and Exchange</a>
        </div>
        <div class="content_4">
            <h4>Follow Us</h4>
            <a href="https://payment-method-sb.netlify.app/" target="_blank">Facebook</a>
            <a href="https://delivery-status-sb.netlify.app/" target="_blank">Twitter</a>
            <a href="https://codepen.io/sandeshbodake/full/Jexxrv" target="_blank">Instagram</a>
        </div>
    </div>
  
</footer>

</body>
</html>
