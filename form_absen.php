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
        <form method="POST" action="proses_absensi.php">
          <input type="hidden" value="Kirim" name="kirim">
        <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
              <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Ahmad Subarjo"">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nis" class="col-sm-2 col-form-label">Nis:</label>
              <div class="col-sm-10">
                <input required type="text"name="nis" class="form-control" id="nis" placeholder="1234"">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="haritanggal" class="col-sm-2 col-form-label">Hari Tanggal</label>
              <div class="col-sm-10">
                <input  class="date" type="date" name="haritanggal" id="haritanggal">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jammasuk" class="col-sm-2 col-form-label">Jam Masuk</label>
              <div class="col-sm-10">
                <input required class="form-control" name="jammasuk" id="jammasuk" rows="3"></input>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jampulang" class="col-sm-2 col-form-label">Jam Pulang</label>
              <div class="col-sm-10">
                <input required class="form-control" name="jampulang" id="jampulang" rows="3"></input>
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
                <i class="fa fa-floppy-o" aria-hidden="true"></i>Tambahkan
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