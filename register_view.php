<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/logo_title" href="assets\images\logo_title.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?></title>
  <link href="<?php echo base_url() ?>assets/css/style2.css" rel="stylesheet">
  <script>
    window.alert("Selamat Datang di Web Alvin, Fauzan, dan Rizky");
  </script>
</head>

<body>
  <div align="center">
    <font size="5">
      <h1>R E G I S T E R</h1>
    </font>
  </div>

  <!-- Form Login -->
  <div class="register">
    <h1>Create your Account</h1>
    <?php
    // Cetak session
    if ($this->session->flashdata('sukses')) {
      echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('sukses') . '</p>';
    }
    // Cetak error
    echo validation_errors('<p class="warning" style="margin: 10px 20px;">', '</p>');
    ?>

    <form action="<?php echo base_url('register/add') ?>" method="post">
      <p>
        <label for="nama">Name</label>
        <input type="text" name="nama" id="nama" placeholder="Please Input Your Name" value="<?= set_value('name') ?>" required>
        <small class='text-danger'><?php echo form_error('nama'); ?></small>
      </p>
      <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Please Input Your Email" value="<?= set_value('email') ?>" required>
        <small class='text-danger'><?php echo form_error('email'); ?></small>
      </p>
      <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Please Input Your Username" value="<?= set_value('username') ?>" required>
        <small class='text-danger'><?php echo form_error('username'); ?></small>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Please Input Your Password" value="<?= set_value('password') ?>" required>
        <small class='text-danger'><?php echo form_error('password'); ?></small>
      </p>
      <p>
        <label for="passconf">Password Confirmation</label>
        <input type="password" name="passconf" id="passconf" placeholder="Please Input Your Password Confirmation" value="<?= set_value('passconf') ?>" required>
        <small class='text-danger'><?php echo form_error('passconf'); ?></small>
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Register Now" class="full">
      </p>
      <p>
        <center><label for="register">Already have an account? <a href="<?php echo base_url('login') ?>"> Log In </a></center>
      </p>
    </form>
    
    <footer>Copyright © 2019 - Informatic Center</footer>
  </div>
</body>
</html>