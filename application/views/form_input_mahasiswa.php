<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
   <link rel="stylesheet" href="<?php echo base_url('css/styles.css'); ?>" type="text/css">
</head>
<body>
    <div class="form-container">
        <h2>Form Input Data Mahasiswa</h2>
        <?php echo form_open('mahasiswa/save'); ?>
            <div class="form-group">
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim">
            </div>
            <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas">
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi :</label>
                <input type="text" name="prodi" id="prodi">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
                <input type="reset" value="Batal">
            </div>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
