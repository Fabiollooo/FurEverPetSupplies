<?php if(!empty($message)): ?>
    <div style="color: green; margin-bottom: 10px;"><?= $message ?></div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('../assets/styles/style.css') ?>">
  <title>Login / Register</title>
</head>
<body>

<div class="wrapper">
  <input type="checkbox" id="switch">

  <div class="form-container">
    <div class="forms">
      

      <!-- Login Form -->
      <form action="<?= base_url('login/authenticate') ?>" method="post">
        <div class="checkbox-group">
          <label style="color: white; font-weight: normal; cursor: pointer;">
            <input type="checkbox" name="isStaff" value="1" style="margin-right: 5px;">Staff login</label>
        </div>



        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
        <label for="switch" class="mini-switch">No account? Register</label>

        
      </form>

      <!-- Register Form -->
      <form action="<?= base_url('register/create') ?>" method="post">
        <h2>Register</h2>

        <label>First Name</label>
        <input type="text" name="custFirstName" required>

        <label>Surname</label>
        <input type="text" name="custLastName" required>

        <label>Email</label>
        <input type="email" name="custEmail" required>

        <label>City</label>
        <input type="text" name="custCity" required>

        <label>Country</label>
        <input type="text" name="custCountry" required>

        <label>Phone</label>
        <input type="text" name="custPhone" required>

        <label>Address Line 1</label>
        <input type="text" name="custAddressLine1" required>

        <label>Postal Code</label>
        <input type="text" name="custPostalCode" required>

        <label>Password</label>
        <input type="password" name="custPassword" required>

        <button type="submit">Register</button>
        <label for="switch" class="mini-switch">Have an account? Login</label>
      </form>

    </div>
  </div>
</div>

</body>
</html>

