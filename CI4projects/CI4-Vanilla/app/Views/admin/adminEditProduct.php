<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products</title>
    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
    <h2>Edit Product: <?= $product['prodCode'] ?></h2>

    <form action="<?= site_url('adminProducts/update/'.$product['prodCode']) ?>" method="post">
        <label>Description</label>
        <input type="text" name="prodDescription" value="<?= $product['prodDescription'] ?>" required>

        <label>Category</label>
        <input type="text" name="prodCategory" value="<?= $product['prodCategory'] ?>" required>

        <label>Supplier</label>
        <input type="text" name="prodSupplier" value="<?= $product['prodSupplier'] ?>" required>

        <label>Qty in Stock</label>
        <input type="number" name="prodQtyInStock" value="<?= $product['prodQtyInStock'] ?>" required>

        <label>Buy Cost</label>
        <input type="number" step="0.01" name="prodBuyCost" value="<?= $product['prodBuyCost'] ?>" required>

        <label>Sale Price</label>
        <input type="number" step="0.01" name="prodSalePrice" value="<?= $product['prodSalePrice'] ?>" required>

        <button type="submit">Update Product</button>
        <a href="<?= site_url('adminProducts') ?>">Cancel</a>
    </form>
</body>
</html>
