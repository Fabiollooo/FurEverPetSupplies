<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/style.css') ?>">
</head>


<div class="container">
 <h2>Your Wishlist</h2>

    <?php
    if (empty($products)) {
        echo "<p>Your wishlist is empty.</p>";
    } else {
        echo '<div class="cart-container">';
        foreach ($products as $product) {
            echo '<div class="cart-item">';
            //echo '<img src="' . base_url('uploads/'.$product['prodPhoto']) . '" alt="' . $product['prodDescription'] . '" class="cart-image">';
            //figure out the story with images on products !
            echo '<div class="cart-details">';
            echo '<p class="cart-name">' . $product['prodDescription'] . '</p>';
            echo '<p class="cart-price">€' . $product['prodSalePrice'] . '</p>';

            // Add to Cart btn
            echo '<form action="' . base_url('cart/add') . '" method="post" style="display:inline-block;margin-right:10px;">';
            echo '<input type="hidden" name="product_id" value="' . $product['prodCode'] . '">';
            echo '<button type="submit" class="btn-add-to-cart">Add to Cart</button>';
            echo '</form>';

            // Remove btn
            echo '<form action="' . base_url('wishlist/remove') . '" method="post" style="display:inline-block;">';
            echo '<input type="hidden" name="product_id" value="' . $product['prodCode'] . '">';
            echo '<button type="submit" class="btn-remove">Remove</button>';
            echo '</form>';

            echo '</div></div>';
        }
        echo '</div>';
    }
    ?>

</div>
</body>
</html>
