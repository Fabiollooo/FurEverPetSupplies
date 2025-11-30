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
        <h1 class="section-title" style="font-size: 3em">Our Products</h1>
        
        <section class="categories-section">
        <h2 class="categories-title">Shop by Category</h2>
        <div class="categories-grid">
          <a href="itemshop?category=Accessories"><div class="category-card" id="accessory">Accessories</div></a>
          <a href="itemshop?category=Birds"><div class="category-card" id="bird">Birds</div></a>
          <a href="itemshop?category=Cats"><div class="category-card" id="cat">Cats</div></a>
          <a href="itemshop?category=Dogs"><div class="category-card" id="dog">Dogs</div></a>
          <a href="itemshop?category=Fish"><div class="category-card" id="fish">Fish</div></a>
          <a href="itemshop?category=PetFood"><div class="category-card" id="petfood">Pet Food</div></a>
          <a href="itemshop?category=Reptile"><div class="category-card" id="reptile">Reptile</div></a>
          <a href="itemshop?category=Toys"><div class="category-card" id="toys">Toys</div></a>
          <a href="itemshop?category=Treats"><div class="category-card" id="treats">Treats</div></a>
        </div>
      </section>

      <form method="get" action="<?= base_url('itemshop') ?>" class="search-form">
        <input type="text" name="search" placeholder="Search products..." 
                   value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" 
                   class="search-input">
            <button type="submit" class="search-btn">Search</button>
            <?php if(isset($_GET['search']) && !empty($_GET['search'])): ?>
                <a href="<?= base_url('itemshop') ?>" class="clear-search">Clear</a>
            <?php endif; ?>
        </form>



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
 


</body>
</html>
