<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">

  
</head>

<body>
   <main class="product-section">
    <div class="container">
      <section class="product-section">
        <h2 class="section-title">Our Products</h2>
        <div class="product-grid">
          <?php foreach ($products as $p): ?>
            <div class="product-card">
              <img src="../public/assets/images/products/thumbs/<?= $p['prodPhoto'] ?>" class="product-image" alt="<?= $p['prodDescription'] ?>">
              <h3 class="product-name"><?= $p['prodDescription'] ?></h3>
              <p class="product-price">€<?= $p['prodSalePrice'] ?></p>

              <div class="product-buttons">
                <form action="<?= base_url('cart/add') ?>" method="post">
                  <input type="hidden" name="product_id" value="<?= $p['prodCode'] ?>">
                  <button type="submit" class="btn-add-to-cart">Add to Cart</button>
                </form>

                <form action="<?= base_url('wishlist/add') ?>" method="post">
                  <input type="hidden" name="product_id" value="<?= $p['prodCode'] ?>">
                  <button type="submit" class="btn-add-to-wishlist">♡</button>
                </form>

                <a href="<?= base_url('itemshop/view') ?>?code=<?= $p['prodCode'] ?>" class="btn-view-product">View</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        
        <?php if ($totalPages > 1): ?>
        <div class="pagination">
          <?php if ($currentPage > 1): ?>
            <a href="?page=<?= $currentPage - 1 ?><?= isset($category) ? '&category=' . $category : '' ?>">Previous</a>
          <?php endif; ?>

          <span>Page <?= $currentPage ?> of <?= $totalPages ?></span>

          <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?= $currentPage + 1 ?><?= isset($category) ? '&category=' . $category : '' ?>">Next</a>
          <?php endif; ?>
        </div>
        <?php endif; ?>

      </section>
    </div>
  </main>
  <!-- Add the possible item view limiter/ items viewed per page -->
   <!-- Add a possible msg saying "Successfully added the item to cart/wishlist"-->

</body>
</html>
