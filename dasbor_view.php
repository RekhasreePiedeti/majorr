<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

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
    /* News */
    .news1 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 250px;
    margin: auto;
    border-radius: 5px;
    padding: 20px;
    }

    .news1 img {
    width: 200px;
    border-radius: 5px 5px 0 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    margin-bottom: 10px;
    }

    .news1_desc {
    margin-top: 0px;
    }

    .news1 h3 {
    text-transform: uppercase;
    }

    .news1 p {
    font-family: 'Candara';
    color: #393636;
    font-size: 15px;
    }

    .news1:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .news2 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 250px;
    margin: auto;
    border-radius: 5px;
    padding: 20px;
    }

    .news2 img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
    border-radius: 5px 5px 0 0;
    margin-top: 5px;
    margin-bottom: 45px;
    }

    .news2_desc {
    margin-top: 0px;
    }

    .news2 h3 {
    text-transform: uppercase;
    }

    .news2 p {
    font-family: 'Candara';
    color: #393636;
    font-size: 15px;
    }

    .news2:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .news3 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 250px;
    margin: auto;
    border-radius: 5px;
    padding: 20px;
    }

    .news3 img {
    width: 250px;
    border-radius: 5px 5px 0 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    margin-bottom: 10px;
    }

    .news3_desc {
    margin-top: 0px;
    }

    .news3 h3 {
    text-transform: uppercase;
    }

    .news3 p {
    font-family: 'Candara';
    color: #393636;
    font-size: 15px;
    }

    .news3:hover {
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
    <header>Hai
      <?php echo ucfirst($this->session->userdata('username')); ?>
      | <a href="<?php echo base_url('login/logout') ?>" title="Logout"><input type="button" class="buttonMenu"
          value="Logout"></a>
    </header>

    <!-- Navigasi Bar -->
    <nav>
      <ul>
        <li><a href="<?php echo base_url('dasbor') ?>" class="activebar">Home</a></li>
        <li><a href="<?php echo base_url('mahasiswa2019') ?>">Data Mahasiswa</a></li>
        <li><a href="<?php echo base_url('dosen') ?>">Data Dosen</a></li>
        <li><a href="<?php echo base_url('jadwal') ?>">Jadwal Kuliah</a></li>
        <li><a href="<?php echo base_url('download') ?>">Download </a></li>
      </ul>
    </nav>

    <div align="center">
      <h1> Welcome to Informatic Center</h1>
      <h2> Pusat Layanan Informasi Dari Program Studi Teknik Informatika Universitas Padjadjaran</h2>
    </div>
    <br>

    <!-- News -->
    <section class="grid-menu">
      <div class="news1">
        <img src="assets\images\news1.jpeg">
        <div class="news1_desc">
          <h3><b>Mahasiswa Informatika Berkompetisi dalam Huawei ICT Competition 2019</b></h3>
          <p>6 mahasiswa Teknik Informatika telah mengikuti Huawei ICT Competition 2019 yang diselenggarakan di Grha
            Saba UGM pada tanggal 26-28 November 2019. Tim dibagi menjadi 2 kelompok dalam bidang Network Track...</p>
            <a href="http://informatika.unpad.ac.id/new/mahasiswa-informatika-berpartisipasi-dalam-huawei-ict-competition-2019/"
              style="font-weight: Bold;">View More</a>
        </div>
      </div>

      <div class="news2">
        <img src="assets\images\news3.jpg">
        <div class="news2_desc">
          <h3><b>Pertemuan dengan Alumni dan Pengguna Teknik Informatika</b></h3>
          <p>Pada tanggal 24 November 2019 telah dilakukan pertemuan dengan alumni Teknik Informatika Unpad dan pengguna
            alumni. Pertemuan diisi dengan sosialisasi visi misi dan pembahasan kontribusi alumni dalam bidang akademik
            dan non akademik...</p>
            <a href="http://informatika.unpad.ac.id/new/pertemuan-dengan-alumni-dan-pengguna-teknik-informatika/"
              style="font-weight: Bold;">View More</a>
        </div>
      </div>

      <div class="news3">
        <img src="assets\images\news2.jpeg">
        <div class="news3_desc">
          <h3><b>Dua Dosen Ilmu Komputer Berpartisipasi dalam Seminar Millenials Career in Digital Era</b></h3>
          <p>Dua dosen Departemen Ilmu Komputer, Dr. Asep Sholahuddin dan Mira Suryani, M.Kom, telah berpartisipasi
            sebagai pembicara utama dan moderator dalam acara Seminar berjudul “Millenials Career in Digital Era” yang
            diselenggarakan...</p>
            <a href="http://informatika.unpad.ac.id/new/seminar-millenials-career-in-digital-era/"
              style="font-weight: Bold;">View More</a>
        </div>
      </div>

      <div class="news3">
        <img src="assets\images\news4.jpg">
        <div class="news3_desc">
          <h3><b>Rapat Inisiasi DTS-Kemkominfo</b></h3>
          <p>Pada tanggal 25 November 2019 telah dilaksanakan Rapat Inisiasi Program Digital Telent Scouting Kementerian
            Komunikasi dan Informatika untuk pelaksanaan tahun 2020. Rapat dipimpin Dekan, dihadiri Wakil Dekan, dan
            diikuti oleh dosen Teknik Informatika dan juga dosen lain yang diundang...</p>
            <a href="http://informatika.unpad.ac.id/new/rapat-inisiasi-dts-kemkominfo/"
              style="font-weight: Bold;">View More</a>
          </div>
      </div>

      <div class="news3">
        <img src="assets\images\news5.jpg">
        <div class="news3_desc">
          <h3><b>International Campus Recruitment dari Perusahaan Jepang Marimo</b></h3>
          <p>Pada hari Jumat 8 November 2019 telah dikasanakan Campus Recruitment bagi para alumni dan mahasiswa tingkat
            akhir Teknik Informatika yang berminat bekerja di perusahaan Marimo Global Technology (MGT) di pusatnya...
          </p>
          <a href="http://informatika.unpad.ac.id/new/campus-recruitment-dari-perusahaan-jepang-marimo/"
            style="font-weight: Bold;">View More</a>
        </div>
      </div>

      <div class="news3">
        <img src="assets\images\news6.jpg">
        <div class="news3_desc">
          <h3><b>Alumni Informatika Unpad di Tokopedia (Kunjungan Industri 2019)</b></h3>
          <p>Kegiatan kemahasiwaan dan alumni berupa kunjungan industri ke “Tokopedia” dan “Dana” telah dilaksanakan
            pada Rabu 6 November 2019. Para mahasiswa Teknik Informatika angkatan 2016, didampingi oleh dosen Aditya
            Pradana, M.Eng., dan Mira Suryani, M.Kom., telah...</p>
            <a href="http://informatika.unpad.ac.id/new/alumni-informatika-unpad-di-tokopedia-kunjungan-industri-2019/"
              style="font-weight: Bold;">View More</a>
        </div>
      </div>
    </section>

    <?php echo $this->session->flashdata('message'); ?>

    <!-- Footer -->
    <footer>Developed & Designed by Fauzan, Alvin, Rizky</footer>
  </section>
</body>

</html>