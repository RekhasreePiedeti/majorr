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
      <h1> W E L C O M E !</h1>
    </font>
  </div>

  <!-- Form Login -->
  <div class="login">
    <h1>Sign In</h1>
    <?php
    // Cetak session
    if ($this->session->flashdata('sukses')) {
      echo '<p class="warning" style="margin: 10px 20px;">' . $this->session->flashdata('sukses') . '</p>';
    }
    // Cetak error
    echo validation_errors('<p class="warning" style="margin: 10px 20px;">', '</p>');
    ?>

    <form action="<?php echo base_url('login') ?>" method="post">
      <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Please Input Your Username" required>
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Please Input Your Password" required>
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Submit" class="full">
      </p>
      <p>
        <center><label for="register">Need an account? <a href="<?php echo base_url('register') ?>"> Register Now </a></center>
      </p>
    </form>
    
    <footer>Copyright © 2019 - Informatic Center</footer>
  </div>
</body>
</html>