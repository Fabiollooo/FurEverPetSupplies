<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">

  
</head>

<body>
    <section class="hero-section">
        <div class="container hero-content">
        <h2>Your One-Stop Pet Supply Shop</h2>
        <p>Everything your furry friends need — from food to toys and more.</p>
        <!-- Note for self: Home will be like a short portfolio abt the company, and the "Shop Now" button will bring the use to the "Our product" which is displayed on home bc ive completely forgot abt this approach when i started coding. Nice.-->
        <!-- Add maybe like a img series as a div here -->
        </div>
    </section>

    <!-- <section>
    Small section here containing like filter, searches etc
    </section> -->

    <!-- 
        Section here like to "clear" the filter.
    -->

  <main class="product-section">
    <div class="container">
      <div class="product-grid">

      <section class="product-section">
          <h2 class="section-title">Our Products</h2>
          <div class="product-grid">
              <?php foreach ($products as $p): ?>
                  <div class="product-card">
                      <img src="../public/assets/images/products/thumbs/<?= $p['prodPhoto'] ?>" 
                          class="product-image" 
                          alt="<?= $p['prodDescription'] ?>">
                      <h3 class="product-name"><?= $p['prodDescription'] ?></h3>
                      <p class="product-price">€<?= $p['prodSalePrice'] ?></p>

                      <form action="<?= base_url('cart/add') ?>" method="post" style="display:inline-block;">
                          <input type="hidden" name="product_id" value="<?= $p['prodCode'] ?>">
                          <button type="submit" class="btn-add-to-cart">Add to Cart</button>
                      </form>

                      <form action="<?= base_url('wishlist/add') ?>" method="post" style="display:inline-block;">
                          <input type="hidden" name="product_id" value="<?= $p['prodCode'] ?>">
                          <button type="submit" class="btn-add-to-wishlist">♡</button>
                      </form>
                  </div>
              <?php endforeach; ?>
          </div>
      </section>

      </div>
    </div>
  </main>
  <!-- Add the possible item view limiter/ items viewed per page -->
   <!-- Add a possible msg saying "Successfully added the item to cart/wishlist"-->

</body>
</html>
