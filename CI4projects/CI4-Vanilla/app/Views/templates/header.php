<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">

  
</head>

<header class="site-header">
    <div class="container header-container">
      <img src="../public/assets/images/site/logo.png" alt="logo" class="store-logo">

      <nav class="main-navigation">
        <ul class="nav-list">
          <li><a href="<?= base_url('/') ?>">Home</a></li>
          <li><a href="<?= base_url('itemshop')?>">Shop</a></li>
          <!-- <li><a href="#">About</a></li> -->
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="cart-button">
        <a href="<?= base_url('loginform')?>" id="btn-login">Login</a>

        <a href="<?= base_url('cart')?>">Cart</a>
        <a href="<?= base_url('wishlist')?>">&#10084</a>
      </div>
    </div>
  </header>