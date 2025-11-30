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
        <a href="<?= base_url('adminProducts') ?>" class="logo-link">
            <img src="../public/assets/images/site/logo.png" alt="logo" class="store-logo">
        </a>

        <nav class="main-navigation">
            <ul class="nav-list">
                <li><a href="<?= base_url('adminProducts') ?>">Admin Dash</a></li>
                <li><a href="<?= base_url('adminViewCustomer') ?>">View Customers</a></li>
                <li><a href="<?= base_url('adminViewOrders') ?>">View Orders</a></li>
                <!-- <li><a href="<?= base_url('MainPage') ?>#form_contactME">Contact</a></li> CodeIgniter not allowing-->
            </ul>
        </nav>

        <div class="cart-button">
            <?php if(session()->get('isLoggedIn')): ?>
                <span style="color:white; margin-right: 10px;">Hello, <?= session()->get('userFirstName') ?>!</span>
                <a href="<?= base_url('logout') ?>" id="btn-logout">Logout</a>
            <?php else: ?>
                <a href="<?= base_url('login') ?>" id="btn-login">Login</a>
            <?php endif; ?>

            <!-- <a href="<?= base_url('cart') ?>">Cart</a>
            <a href="<?= base_url('wishlist') ?>">&#10084;</a> -->
        </div>
    </div>
</header>
