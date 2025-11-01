
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
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li><a href="<?= base_url('itemshop')?>">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="cart-button">
        <a href="<?= base_url('cart')?>">Cart</a>
        <a href="<?= base_url('wishlist')?>">&#10084</a>
      </div>
    </div>
  </header>

  <section class="hero-section">
    <div class="container hero-content">
      <h2>Your One-Stop Pet Supply Shop</h2>
      <p>Everything your furry friends need — from food to toys and more.</p>
      <a href="<?= base_url('itemshop')?>" class="btn-shop-now">Shop Now</a>
    </div>
  </section>

  <section id="about" class="about-section">
    <div class="container about-row">
      <div class="about-image">
        <img src="#" alt="Our Story">
      </div>
      <div class="about-text">
        <h3>Our Story</h3>
        <p>We started our pet supply journey to provide quality products for all pets. Our mission is to make every pet happy and healthy.</p>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="container about-row reverse">
      <div class="about-image">
        <img src="#" alt="Our Vision">
      </div>
      <div class="about-text">
        <h3>Our Vision</h3>
        <p>We aim to be the leading online pet shop with a focus on customer satisfaction and premium pet products.</p>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="container about-row">
      <div class="about-image">
        <img src="#" alt="Our Team">
      </div>
      <div class="about-text">
        <h3>Our Team</h3>
        <p>Our passionate team of pet lovers works hard every day to bring the best products and advice for your furry friends.</p>
      </div>
    </div>
  </section>
</body>
