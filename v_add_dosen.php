<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data</title>
    <link href="<?php echo base_url() ?>assets/css/add2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>
    <div class="m-5">
        <div class=" container mb-5">

            <div>
                <h1>Tambah Data Dosen</h1>
            </div>
            <br>

            <div class="card col-lg-6">
                <div class="card-body p-5">
                    <form action="<?= base_url('CRUD1/add') ?>" method="post">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="<?= set_value('nip') ?>">
                            <small class='text-danger'><?php echo form_error('nip'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama Dosen</label>
                            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?= set_value('nama_dosen') ?>">
                            <small class='text-danger'><?php echo form_error('nama_dosen'); ?></small>

                        </div>
       
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>">
                            <small class='text-danger'><?php echo form_error('jenis_kelamin'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak" id="kontak" value="<?= set_value('kontak') ?>">
                            <small class='text-danger'><?php echo form_error('kontak'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat') ?>">
                            <small class='text-danger'><?php echo form_error('alamat'); ?></small>

                        </div>
                        <div class="text-right">
                            <button type="submit"><a href="<?= base_url('dosen') ?>" style="color: black;">Cancel</a></button><br><br>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
       
    </div>
    </div>

</body>

</html>