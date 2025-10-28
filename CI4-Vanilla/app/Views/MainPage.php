<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="styles.css">

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background-color: #fff;
  color: #333;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
}

/* Header */
.site-header {
  background-color: #2b6777;
  color: white;
  padding: 15px 0;
}

.header-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.store-logo {
  font-size: 28px;
  font-weight: 700;
}

.nav-list {
  display: flex;
  gap: 25px;
  list-style: none;
}

.nav-list a {
  color: white;
  text-decoration: none;
  font-weight: 500;
}

.nav-list a:hover {
  text-decoration: underline;
}

.cart-button a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}

/* Hero Section */
.hero-section {
  background: url('images/hero-pets.jpg') center/cover no-repeat;
  color: white;
  text-align: center;
  padding: 100px 20px;
}

.hero-content h2 {
  font-size: 36px;
  margin-bottom: 15px;
}

.hero-content p {
  font-size: 18px;
  margin-bottom: 25px;
}

.btn-shop-now {
  background-color: #52ab98;
  color: white;
  padding: 12px 24px;
  text-decoration: none;
  border-radius: 6px;
  font-weight: 600;
}

.btn-shop-now:hover {
  background-color: #3a8d7a;
}

/* Product Section */
.product-section {
  padding: 60px 0;
  background-color: #f8f8f8;
}

.section-title {
  text-align: center;
  margin-bottom: 40px;
  font-size: 28px;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
}

.product-card {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  text-align: center;
  padding: 20px;
  transition: transform 0.2s ease;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
}

.product-name {
  margin-top: 15px;
  font-size: 18px;
  font-weight: 600;
}

.product-price {
  color: #2b6777;
  font-size: 16px;
  margin: 10px 0;
}

.btn-add-to-cart {
  display: inline-block;
  background-color: #52ab98;
  color: white;
  padding: 8px 16px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 500;
}

.btn-add-to-cart:hover {
  background-color: #3a8d7a;
}

/* Footer */
.site-footer {
  background-color: #2b6777;
  color: white;
  padding: 20px 0;
  text-align: center;
}

.footer-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.social-links {
  display: flex;
  gap: 15px;
  list-style: none;
}

.social-links a {
  color: white;
  text-decoration: none;
}

.social-links a:hover {
  text-decoration: underline;
}

  </style>
</head>

<body>
  <header class="site-header">
    <div class="container header-container">
      <h1 class="store-logo">IMG</h1>
      <nav class="main-navigation">
        <ul class="nav-list">
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="cart-button">
        <a href="#">Cart</a>
      </div>
    </div>
  </header>

  <section class="hero-section">
    <div class="container hero-content">
      <h2>Your One-Stop Pet Supply Shop</h2>
      <p>Everything your furry (or scaly) friends need — from food to toys and more.</p>
      <a href="#" class="btn-shop-now">Shop Now</a>
    </div>
  </section>

<main class="product-section">
  <div class="container">
    <h2 class="section-title">Our Products</h2>
    <div class="product-grid">
      <?php foreach ($products as $p): ?>
        <div class="product-card">
          <img src="/uploads/<?= $p['prodPhoto'] ?>" class="product-image" alt="<?= $p['prodDescription'] ?>">
          <h3 class="product-name"><?= $p['prodDescription'] ?></h3>
          <p class="product-price">€<?= $p['prodSalePrice'] ?></p>
          <a href="#" class="btn-add-to-cart">Add to Cart</a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>





  

  <footer class="site-footer">
    <div class="container footer-container">
      <p>&copy; 2025 Furever Pet Supplies . All rights reserved.</p>
      <ul class="social-links">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">X</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
