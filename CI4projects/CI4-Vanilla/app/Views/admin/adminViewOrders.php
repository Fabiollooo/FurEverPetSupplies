<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders</title>
    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
    <?php if(isset($adminFirstName)): ?>
        <h2>Hello, <?= $adminFirstName ?>!</h2>
    <?php endif; ?>

    <h1>All Orders</h1>

    <table>
        <tr>
            <th>Order Number</th>
            <th>Order Date</th>
            <th>Required Date</th>
            <th>Shipped Date</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Customer Number</th>
        </tr>

        <?php foreach ($orders as $o): ?>
        <tr>
            <td><?= $o['oOrderNumber'] ?></td>
            <td><?= $o['oOrderDate'] ?></td>
            <td><?= $o['oRequiredDate'] ?></td>
            <td><?= $o['oShippedDate'] ?></td>
            <td><?= $o['oStatus'] ?></td>
            <td><?= $o['oComments'] ?></td>
            <td><?= $o['oCustomerNumber'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>