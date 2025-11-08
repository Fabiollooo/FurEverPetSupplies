<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="<?= base_url('assets/styles/style.css') ?>">
</head>


<div class="container">
<h2>Your Cart</h2>

    <?php if (empty($products)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <div class="cart-container">
            <?php foreach ($products as $product): ?>
                <div class="cart-item">
                    <div class="cart-details">
                        <p class="cart-name"><?= $product['prodDescription'] ?></p>
                        <p class="cart-price">€<?= $product['prodSalePrice'] ?></p>
                        <form action="<?= base_url('cart/remove') ?>" method="post">
                            <input type="hidden" name="product_id" value="<?= $product['prodCode'] ?>">
                            <button type="submit" class="btn-remove">Remove</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php 
            $total = 0;
            foreach ($products as $product) {
                $total += $product['prodSalePrice'];
            }
        ?>
        <hr>
        <div class="cart-total">
            <p><strong>Total: €<?= number_format($total, 2) ?></strong></p>
        </div>
    <?php endif; ?>

</div>
<!-- FIX: Buttons get progressivly mis-aligned for some random reason ;( -->

</body>
</html>

