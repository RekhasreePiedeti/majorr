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
                <h1>Tambah Data jadwal</h1>
            </div>
            <br>

            <div class="card col-lg-6">
                <div class="card-body p-5">
                    <form action="<?= base_url('CRUD2/add') ?>" method="post">
                        <div class="form-group">
                            <label for="id_matkul">ID matkul</label>
                            <input type="text" class="form-control" name="id_matkul" id="id_matkul" value="<?= set_value('id_matkul') ?>">
                            <small class='text-danger'><?php echo form_error('id_matkul'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_matkul">Nama Matkul</label>
                            <input type="text" class="form-control" name="nama_matkul" id="nama_matkul" value="<?= set_value('nama_matkul') ?>">
                            <small class='text-danger'><?php echo form_error('nama_matkul'); ?></small>

                        </div>
       
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" class="form-control" name="hari" id="hari" value="<?= set_value('hari') ?>">
                            <small class='text-danger'><?php echo form_error('hari'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="text" class="form-control" name="waktu" id="waktu" value="<?= set_value('waktu') ?>">
                            <small class='text-danger'><?php echo form_error('waktu'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="sks">Sks</label>
                            <input type="text" class="form-control" name="sks" id="sks" value="<?= set_value('sks') ?>">
                            <small class='text-danger'><?php echo form_error('sks'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="kurikulum">Kurikulum</label>
                            <input type="text" class="form-control" name="kurikulum" id="kurikulum" value="<?= set_value('kurikulum') ?>">
                            <small class='text-danger'><?php echo form_error('kurikulum'); ?></small>

                        </div>
						<div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" name="semester" id="semester" value="<?= set_value('semester') ?>">
                            <small class='text-danger'><?php echo form_error('semester'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="<?= set_value('nip') ?>">
                            <small class='text-danger'><?php echo form_error('nip'); ?></small>

                        </div>
                        <div class="text-right">
                            <button type="submit"><a href="<?= base_url('jadwal') ?>" style="color: black;">Cancel</a></button><br><br>
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