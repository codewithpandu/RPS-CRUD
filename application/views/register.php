<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
  </head>
  <body>
    <div class="login-container">
        <?php echo validation_errors(); ?>
        <?php echo form_open('register/create_account'); ?>
        <h1>Register</h1>
        <div class="form-zone1">
          <input type="email" name="email" placeholder="Email" />
          <input type="password" name="password" placeholder="Password" />
        </div>
        <div class="form-zone3">
          <button type="submit" value="Register">Register</button>
          <p>Sudah Punya Akun? <a href="<?php echo base_url('Login'); ?>">Login sekarang!</a></p>
        </div>
        <?php echo form_close(); ?>
    </div>
  </body>
</html>
