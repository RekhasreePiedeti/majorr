<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/logo_title" href="assets\images\logo_title.png">
	<title>Informatic Center</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url('assets/css/home2.css') ?>">
	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>

<body class="containers">
	<!-- Section Navigation -->
	<section class="menu">
		<nav>
			<ul>
				<div class="heading">
					<li><a href="#home"><img src="assets\images\logo_title.png" style="width: 60px;"></a></li>
				</div>
				<li><a href="about"><input type="button" class="buttonMenu" value="About" /></a><a href="login"><input type="button" class="buttonMenu" value="Login" /></a>
				</li>
			</ul>
		</nav>
	</section>
	
	<!-- Section Home -->
	<section id="home">
		<div>
			<img src="assets\images\background-homes.jpg" style="width:100%; -webkit-filter:brightness(50%); margin: 70px 0px 0px 0px;">
		</div>
		<section class="home">
			<p class="caption_title"><img src="assets\images\logo.png" height="270px"></p>
			<p class="caption_title">INFORMATIC CENTER </p>
			<p class="caption_desc">FROM WEST JAVA FOR INDONESIA TO THE WORLD THROUGH SDGS</p>
		</section>
	</section>

	<!-- Section Grid Menu -->
	<section class="grid-menu">
		<!-- mahasiswa -->
		<div class="mahasiswa">
			<div>
				<img src="assets\images\data_mahasiswa.png">
			</div>
			<div class="mahasiswa_desc">
				<h3>Data Mahasiswa</h3>
				<h2>Data Mahasiswa Aktif Program Studi Teknik Informatika FMIPA Universitas Padjadjaran</h2>
				<a href="mahasiswa2019"><button type="submit" class="submit1" value="Data Mahasiswa">MORE INFO</button></a>
			</div>
		</div>
		
		<!-- Dosen -->
		<div class="dosen">
			<div>
				<img src="assets\images\data_dosen.png">
			</div>
			<div class="dosen_desc">
				<h3>Data Dosen</h3>
				<h2>Data Dosen Program Studi Teknik Informatika FMIPA Universitas Padjadjaran</h2>
				<a href="dosen"><button type="submit" class="submit2" value="Data Dosen">MORE INFO</button></a>
			</div>
		</div>

		<!-- Jadwal -->
		<div class="jadwal">
			<div>
				<img src="assets\images\jadwal.png">
			</div>
			<div class="jadwal_desc">
				<h3>Jadwal</h3>
				<h2>Data Mata Kuliah Program Studi Teknik Informatika FMIPA Universitas Padjadjaran</h2>
				<a href="jadwal"><button type="submit" class="submit1" value="Jadwal">MORE INFO</button></a>
			</div>
		</div>

		<!-- Download -->
		<div class="download">
			<div>
				<img src="assets\images\download.png">
			</div>
			<div class="download_desc">
				<h3>Download</h3>
				<h2>Data Materi Kuliah Program Studi Teknik Informatika FMIPA Universitas Padjadjaran</h2>
				<a href="download"><button type="submit" class="submit2" value="Download">MORE INFO</button></a>
			</div>
		</div>
	</section>

	<!-- Section Footer -->
	<section>
		<footer class="footer_sp">
			<p>Developed & Designed by Alvin, Fauzan, Rizky</p>
			<p>Copyright © 2019 - Informatic Center</p>
		</footer>
	</section>
</body>
</html>
