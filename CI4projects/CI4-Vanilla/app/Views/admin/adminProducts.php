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
                <button>Edit</button>
                <button class="delete-btn">Delete</button>
                <!-- Buttons are not functionable yet -->
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<!-- I plan to add like a Admin dashboard where he has the options to view customer/orders/staff/products -->


