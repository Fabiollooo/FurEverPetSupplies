<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/style.css') ?>">
</head>

<?php if (empty($products)): ?>
    <p>Your wishlist is empty.</p>
<?php else: ?>
    <div class="cart-container">
        <?php foreach ($products as $product): ?>
            <div class="cart-item">
                <div class="cart-details">
                    <p class="cart-name"><?= $product['prodDescription'] ?></p>
                    <p class="cart-price">€<?= $product['prodSalePrice'] ?></p>

                    <form action="<?= base_url('cart/add') ?>" method="post" style="display:inline-block; margin-right:10px;">
                        <input type="hidden" name="product_id" value="<?= $product['prodCode'] ?>">
                        <button type="submit" class="btn-add-to-cart">Add to Cart</button>
                    </form>

                    <form action="<?= base_url('wishlist/remove') ?>" method="post" style="display:inline-block;">
                        <input type="hidden" name="product_id" value="<?= $product['prodCode'] ?>">
                        <button type="submit" class="btn-remove">Remove</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- FIX: Buttons get progressivly mis-aligned for some random reason ;( -->

</body>
</html>
