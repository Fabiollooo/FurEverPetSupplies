<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('../assets/styles/style.css') ?>">

  <title>Basic Form</title>

</head>
<body>
    <div class="form-login">
        <h2><center>VERY ADVANCED FORM</center></h2>

      <form action="<?= base_url('login/authenticate') ?>" method="post">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pass">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Submit</button>
    </form>
    </div>

</body>
</html>
