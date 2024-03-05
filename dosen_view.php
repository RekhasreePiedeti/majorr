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
				<li><a href="<?php echo base_url('mahasiswa2019') ?>">Data Mahasiswa</a></li>
				<li><a href="<?php echo base_url('dosen') ?>" class="activebar">Data Dosen</a></li>
				<li><a href="<?php echo base_url('jadwal') ?>">Jadwal Kuliah</a></li>
				<li><a href="<?php echo base_url('download') ?>">Download</a> </li>
			</ul>
		</nav>

		<?php
			if($this->session->userdata('username') == 'admin'){ ?>
			<a href="<?= site_url('CRUD1/add') ?>"> <div  class="pagination" >Tambah Data</a></div>
		<?php } ?>

		<table cellspacing="0">
			<thead>
				<tr>
					<td>NO</td>
					<td>NIP </td>
					<td>NAMA DOSEN</td>
					<td>JENIS KELAMIN </td>
					<td>KONTAK </td>
					<td>ALAMAT </td>
					<?php
					if($this->session->userdata('username') == 'admin'){ 
					?>
						<td >AKSI </td>
					<?php  }  ?>
				</tr>
			</thead>

			<tbody>
				<?php 
					$no = 1;
					foreach ($dosen as $user) {
				?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $user->nip?></td>
					<td><?= $user->nama_dosen?></td>
					<td><?= $user->jenis_kelamin?></td>
					<td><?= $user->kontak?></td>
					<td><?= $user->alamat?></td>
					<?php
						if($this->session->userdata('username') == 'admin'){ 
					?>
							<td ><a href="<?= site_url('CRUD1/delete/' . $user->nip) ?>"><i class="material-icons">delete</i></a></td>

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