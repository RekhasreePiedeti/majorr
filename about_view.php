<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/logo_title" href="assets\images\logo_title.png">
  <title><?php echo $title ?></title>
  <link href="<?php echo base_url() ?>assets/css/style2.css" rel="stylesheet">
  <style>
    header {
    background-color: #FFD51E;
    padding: 10px 20px;
    text-align: center;
    border-radius: 10 10 0px 0px;
    font-size: 12px;
    margin-top: 10px;
    }

    .about {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 250px;
    margin: auto;
    border-radius: 5px;
    padding: 20px;
    }

    .about img {
    width: 250px;
    border-radius: 5px 5px 0 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    margin-bottom: 10px;
    }

    .about_desc {
    margin-top: 0px;
    text-align: center;
    }

    .about h3 {
    text-transform: uppercase;
    }

    .about p {
    font-size: 15px;
    }

    .about:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      width: 80%;
      background-color: #FFF;
      min-width: 300px;
      max-width: 1366px;
      margin-right: 126px;
      border-radius: 0 0 10px 10px;
      min-height: 200px;
    }

    .grid-menu {
    display: grid;
    grid-gap: 0px;
    grid-template-columns: auto auto auto;
    background-color: #FFF;
    padding: 20px;
    }
  </style>
</head>

<body>
  <section class="container">
    <header> </header>
    <div align="center">
      <h1>About Us</h1>
    </div>

    <section class="grid-menu">
      <div class="about">
        <img src="assets\images\fauzan.png" style="width: 230px;">
        <div class="about_desc">
          <h3><b>Fauzan Akmal Hariz</b></h3>
          <p>140810180005</p>
        </div>
      </div>

      <div class="about">
        <img src="assets\images\alvin.png">
        <div class="about_desc">
          <h3><b>Alvin</b></h3>
          <p>140810180013</p>
        </div>
      </div>

      <div class="about">
        <img src="assets\images\anu.png">
        <div class="about_desc">
          <h3><b>Rizky Anugerah</b></h3>
        <p>140810180049</p>
        </div>
      </div>
    </section>

    <?php echo $this->session->flashdata('message'); ?>

    <!-- Footer -->
    <footer>Developed & Designed by Fauzan, Alvin, Rizky</footer>
  </section>
</body>

</html>