<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Customers</title>
    <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>
<body>
    <?php if(isset($adminFirstName)): ?>
        <h2>Hello, <?= $adminFirstName ?>!</h2>
    <?php endif; ?>

    <h1>All Customers</h1>

    <table>
        <tr>
            <th>Customer ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Email</th>

        </tr>

        <?php foreach ($customers as $c): ?>
        <tr>
            <td><?= $c['custNumber'] ?></td>
            <td><?= $c['custLastName'] ?></td>
            <td><?= $c['custFirstName'] ?></td>
            <td><?= $c['custPhone'] ?></td>
            <td><?= $c['custAddressLine1'] ?></td>
            <td><?= $c['custAddressLine2'] ?></td>
            <td><?= $c['custCity'] ?></td>
            <td><?= $c['custPostalCode'] ?></td>
            <td><?= $c['custCountry'] ?></td>
            <td><?= $c['custEmail'] ?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>