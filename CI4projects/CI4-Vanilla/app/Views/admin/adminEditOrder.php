<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
    <?php if(isset($adminFirstName)): ?>
        <h2>Hello, <?= $adminFirstName ?>!</h2>
    <?php endif; ?>

    <h1>Edit Order #<?= $order['oOrderNumber'] ?></h1>

    <form method="post" action="<?= site_url('adminViewOrders/update/'.$order['oOrderNumber']) ?>">
        <div style="margin: 10px 0;">
            <label>Order Date:</label>
            <input type="date" name="oOrderDate" value="<?= $order['oOrderDate'] ?>" style="padding: 5px;">
        </div>

        <div style="margin: 10px 0;">
            <label>Required Date:</label>
            <input type="date" name="oRequiredDate" value="<?= $order['oRequiredDate'] ?>" style="padding: 5px;">
        </div>

        <div style="margin: 10px 0;">
            <label>Shipped Date:</label>
            <input type="date" name="oShippedDate" value="<?= $order['oShippedDate'] ?>" style="padding: 5px;">
        </div>

        <div style="margin: 10px 0;">
            <label>Status:</label>
            <select name="oStatus" style="padding: 5px;">
                <option value="Pending" <?= $order['oStatus'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="Processing" <?= $order['oStatus'] == 'Processing' ? 'selected' : '' ?>>Processing</option>
                <option value="Shipped" <?= $order['oStatus'] == 'Shipped' ? 'selected' : '' ?>>Shipped</option>
                <option value="Delivered" <?= $order['oStatus'] == 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                <option value="Cancelled" <?= $order['oStatus'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
            </select>
        </div>

        <div style="margin: 10px 0;">
            <label>Customer Number:</label>
            <input type="text" name="oCustomerNumber" value="<?= $order['oCustomerNumber'] ?>" style="padding: 5px;">
        </div>

        <div style="margin: 10px 0;">
            <label>Comments:</label><br>
            <textarea name="oComments" style="width: 300px; height: 100px; padding: 5px;"><?= $order['oComments'] ?></textarea>
        </div>

        <button type="submit" class="edit-btn">Update Order</button>
        <a href="<?= site_url('adminViewOrders') ?>" style="margin-left: 10px;">Cancel</a>
    </form>
</body>
</html>