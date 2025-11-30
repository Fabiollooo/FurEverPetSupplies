<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products</title>
    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
    <?php if(isset($adminFirstName)): ?>
        <h2>Hello, <?= $adminFirstName ?>!</h2>
    <?php endif; ?>

    <h1>All Products</h1>
    <!-- <a href="<?= site_url('logout') ?>">Logout</a> -->



    <table>
        <tr>
            <th>Code</th>
            <th>Description</th>
            <th>Category</th>
            <th>Supplier</th>
            <th>Qty</th>
            <th>Buy Cost</th>
            <th>Sale Price</th>
            <th class="action-col">Actions</th>
        </tr>

        <?php foreach ($products as $p): ?>
        <tr>
            <td><?= $p['prodCode'] ?></td>
            <td><?= $p['prodDescription'] ?></td>
            <td><?= $p['prodCategory'] ?></td>
            <td><?= $p['prodSupplier'] ?></td>
            <td><?= $p['prodQtyInStock'] ?></td>
            <td><?= $p['prodBuyCost'] ?></td>
            <td><?= $p['prodSalePrice'] ?></td>
            <td class="action-col">
                <a href="<?= site_url('adminProducts/edit/'.$p['prodCode']) ?>">
                    <button class="edit-btn">Edit</button>
                </a>
                    <div class="sale-dropdown">
                        <button class="sale-btn">Sale ▼</button>
                        <div class="sale-options">
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=10">10% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=20">20% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=30">30% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=40">40% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=50">50% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=60">60% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=70">70% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=80">80% Off</a>
                            <a href="<?= site_url('adminProducts/sale/'.$p['prodCode']) ?>?discount=90">90% Off</a>
                        </div>
                    </div>
                <a href="<?= site_url('adminProducts/delete/'.$p['prodCode']) ?>" onclick="return confirm('Are you sure you want to delete this product?')">
                    <button class="delete-btn">Delete</button>
                   
                </a>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<!-- I plan to add like a Admin dashboard where he has the options to view customer/orders/staff/products -->


