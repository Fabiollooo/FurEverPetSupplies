<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
 <link rel="stylesheet" href="../assets/styles/style.css">
  
</head>

<body>
<main class="product-section">
    <div class="container" >
    <center>
        <div class="product-detail">
            <h1><?= $product['prodDescription'] ?></h1>
            <p>Category: <?= $product['prodCategory'] ?></p>
            <p>Product Code: <?=$product['prodCode']?></p>
            <p>Cost: €<?= $product['prodBuyCost'] ?></p>
            

            <img src="../assets/images/products/thumbs/<?= $product['prodPhoto'] ?>" 
                 alt="<?= $product['prodDescription'] ?>">

            <form action="<?= base_url('cart/add') ?>" method="post">
                <input type="hidden" name="product_id" value="<?= $product['prodCode'] ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
    </center>    
    </div>
</main>
</body>
