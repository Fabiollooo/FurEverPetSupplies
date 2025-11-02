<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/style.css') ?>">
</head>

<header class="site-header">
    <div class="container header-container">
        <img src="../public/assets/images/site/logo.png" alt="logo" class="store-logo">

        <nav class="main-navigation">
            <ul class="nav-list">
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="#">Shop</a></li>
            <!-- <li><a href="#">About</a></li> -->
            <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="cart-button">
            <a href="<?= base_url('cart')?>">Cart</a>
            <a href="<?= base_url('wishlist')?>">&#10084</a>
        </div>
    </div>
</header>
  <!-- Plan to add the inheriting html at a later stafe -->


<div class="container">
<h2>Your Cart</h2>

<?php
if (empty($products)) {
    echo "<p>Your cart is empty.</p>";
} else {
    echo '<div class="cart-container">';
    foreach ($products as $product) {
        echo '<div class="cart-item">';
        //echo '<img src="' . base_url('uploads/'.$product['prodPhoto']) . '" alt="' . $product['prodDescription'] . '" class="cart-image">';
        echo '<div class="cart-details">';
        echo '<p class="cart-name">' . $product['prodDescription'] . '</p>';
        echo '<p class="cart-price">€' . $product['prodSalePrice'] . '</p>';
        //Add possible quantity as the user may want to purchase more that only one item

        
        //Remove btn
        echo '<form action="' . base_url('cart/remove') . '" method="post">';
        echo '<input type="hidden" name="product_id" value="' . $product['prodCode'] . '">';
        echo '<button type="submit" class="btn-remove">Remove</button>';
        echo '</form>';
        echo '</div></div>';
    }
    echo '</div>';

    $total = 0;
    foreach ($products as $product) {
        $total += $product['prodSalePrice'];
    }
    echo '<hr>';
    echo '<div class="cart-total"><p><strong>Total: €' . number_format($total, 2) . '</strong></p></div>';
}
?>
</div>
</body>
</html>

