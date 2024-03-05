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
	<link rel="icon" type="image/logo_title" href="assets\images\logo_title.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title ?></title>
	<link href="assets/css/style2.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
				<li><a href="<?php echo base_url('dasbor') ?>">Home</a></li>
				<li><a href="<?php echo base_url('mahasiswa2019') ?>" class="activebar">Data Mahasiswa</a></li>
				<li><a href="<?php echo base_url('dosen') ?>">Data Dosen</a></li>
				<li><a href="<?php echo base_url('jadwal') ?>">Jadwal Kuliah</a></li>
				<li><a href="<?php echo base_url('download') ?>">Download</a> </li>
			</ul>
		</nav>
	
						
		<!-- Page Angkatan -->
		<div class="pagination">
			<a href="mahasiswa2019" style="background-color:#ff8000;">2019</a>
			<a href="mahasiswa2018">2018</a>
			<a href="mahasiswa2017">2017</a>
			<a href="mahasiswa2016">2016</a>
		</div>

		<?php
			if($this->session->userdata('username') == 'admin'){ ?>
			<a href="<?= site_url('CRUD/add') ?>"> <div  class="pagination" >Tambah Data</a></div>
		<?php
		}
		?>		
					
		<table cellspacing="0">
			<thead>
					<td>NO</td>
					<td>NPM </td>
					<td>NAMA MAHASISWA </td>
					<td>SEMESTER </td>
					<td>JENIS KELAMIN </td>
					<td>KONTAK </td>
					<td>ALAMAT </td>
					<?php
						if($this->session->userdata('username') == 'admin'){ 
					?>
						<td >AKSI </td>
					<?php
						}
						?>

			</thead>

			<tbody>
				<?php 
					$no = 1;
					foreach ($mahasiswa2019 as $user) {
				?>

				<tr>
					<td><?= $no++ ?></td>
					<td><?= $user->npm?></td>
					<td><?= $user->nama_mahasiswa ?></td>
					<td><?= $user->semester?></td>
					<td><?= $user->jenis_kelamin ?></td>
					<td><?= $user->kontak ?></td>
					<td><?= $user->alamat ?></td>
					<?php
						if($this->session->userdata('username') == 'admin'){ 
					?>
							<td ><a href="<?= site_url('CRUD/delete/' . $user->npm) ?>"><i class="material-icons">delete</i></a></td>

						<?php
						}
						?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>

		<?php echo $this->session->flashdata('message'); ?>

		<!-- Footer -->
		<footer>Copyright © 2019 - Informatic Center</footer>
	</section>

</body>

</html>