<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_absensi1']) ){
    header('Location: list_absen.php');
}

//ambil id dari query string
$id_absensi1 = $_GET['id_absensi1'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM absensi1 WHERE id_absensi1=$id_absensi1";
$query = mysqli_query($db, $sql);
$absensi1 = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            Buku Tahunan
          </a>
        </div>
      </nav>
    <div class="container-fluid">
        <form method="POST" action="proses_edit.php">
        <input type="hidden" name="id_absensi1" value="<?php echo $absensi1['id_absensi1'] ?>" />
        <input type="hidden" value="Simpan" name="simpan" />
        <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
              <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Ahmad Subarjo"  value="<?php echo $absensi1['nama'] ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nis" class="col-sm-2 col-form-label">Nis:</label>
              <div class="col-sm-10">
                <input required type="text"name="nis" class="form-control" id="nis" placeholder="1234" value="<?php echo $absensi1['nis'] ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="haritanggal" class="col-sm-2 col-form-label">Hari Tanggal</label>
              <?php echo $absensi1['haritanggal'] ?>
              <div class="col-sm-10">
                <input  class="date" type="date" name="haritanggal" id="haritanggal" value="<?php echo $absensi1['haritanggal'] ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jammasuk" class="col-sm-2 col-form-label">Jam Masuk</label>
              <div class="col-sm-10">
                <input required class="form-control" name="jammasuk" id="jammasuk" rows="3" value="<?php echo $absensi1['jammasuk'] ?>"></input>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jampulang" class="col-sm-2 col-form-label">Jam Pulang</label>
              
              <div class="col-sm-10">
                <input required class="form-control" name="jampulang" id="jampulang" rows="3" value="<?php echo $absensi1['jampulang'] ?>"></input>
              </div>
            </div>
            <div class="mb-3 row mt-4">
              <div class="col">
              <?php
              if(isset($_GET['ubah'])){
              ?>
                <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan
                </button>
                <?php
              } else {
              ?>
                  <button type="submit" name="aksi" value="add" class="btn btn-primary">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>Simpan Perubahan
                </button>
              <?php
              } 
              ?>
              <a href="index.php" type="button" class="btn btn-danger">
              <i class="fa fa-reply" aria-hidden="true"></i> Batal
              </a>
              </div>     
              </div>
            </div>
            </form>
        </div>
</body>
</html>