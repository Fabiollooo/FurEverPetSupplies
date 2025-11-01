<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">

  
</head>

<body>
  <header class="site-header">
    <div class="container header-container">
      <img src="../public/assets/images/site/logo.png" alt="logo" class="store-logo">

      <nav class="main-navigation">
        <ul class="nav-list">
          <li><a href="<?= base_url('MainPage')?>">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="cart-button">
        <a href="<?= base_url('cart')?>">Cart</a>
        <a href="<?= base_url('wishlist')?>">&#10084</a> 
        <!-- Note for self: this 'code' is a HTML entity for a heart -->
      </div>
    </div>
  </header>

    <section class="hero-section">
        <div class="container hero-content">
        <h2>Your One-Stop Pet Supply Shop</h2>
        <p>Everything your furry friends need — from food to toys and more.</p>
        <!-- <a href="#" class="btn-shop-now">Shop Now</a> -->
        <!-- Note for self: Home will be like a short portfolio abt the company, and the "Shop Now" button will bring the use to the "Our product" which is displayed on home bc ive completely forgot abt this approach when i started coding. Nice.-->
        <!-- Add maybe like a img series as a div here -->
        </div>
    </section>

    <!-- <section>
    Small section here containing like filter, searches etc
    </section> -->





  <main class="product-section">
    <div class="container">
      <h2 class="section-title">Our Products</h2>
      <div class="product-grid">
        <?php
        foreach ($products as $p) {
            echo '<div class="product-card">';
            echo '<img src="/uploads/' . $p['prodPhoto'] . '" class="product-image" alt="' . $p['prodDescription'] . '">';
            echo '<h3 class="product-name">' . $p['prodDescription'] . '</h3>';
            echo '<p class="product-price">€' . $p['prodSalePrice'] . '</p>';

            echo '<form action="' . base_url('cart/add') . '" method="post" style="display:inline-block;">';
            echo '<input type="hidden" name="product_id" value="' . $p['prodCode'] . '">';
            echo '<button type="submit" class="btn-add-to-cart">Add to Cart</button>';
            echo '</form>';

            echo '<form action="' . base_url('wishlist/add') . '" method="post" style="display:inline-block;">';
            echo '<input type="hidden" name="product_id" value="' . $p['prodCode'] . '">';
            echo '<button type="submit" class="btn-add-to-wishlist">♡</button>';
            echo '</form>';

            echo '</div>';
        }
        ?>
      </div>
    </div>
  </main>
  <!-- Add the possible item view limiter/ items viewed per page -->
   <!-- Add a possible msg saying "Successfully added the item to cart/wishlist"-->





  

  <footer class="site-footer">
    <div class="container footer-container">
      <p>&copy; 2025 Furever Pet Supplies . All rights reserved</p>
      <ul class="social-links">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">X</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
