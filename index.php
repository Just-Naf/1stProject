<!DOCTYPE html>
<html>
    
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>


    <body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">
      <img src="1.png" width="30" height="30" class="d-inline-block align-top">
      Absensi Kegiatan Siswa PKL | SMK N TEMBARAK   
    </a>
</nav>
<div class="p-3 mb-2 bg-dark text-white">

    <header>
    <div class="p-3 mb-2 bg-info text-white">
        <h1 class="container-" class="mt-3">Absensi Kegiatan Siswa PKL</h1>
        <h3 class="container-fluid" >SMK N TEMBARAK</h3>
    </header>
    <div>
    <div class="container-fluid">
        <h1 class="mt-3"> </h1>
      <figure>
        <blockquote class="blockquote">
          <p>silahkan pilih data yang akan dilihat</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Buku Absensi <cite title="Source Title">hehe</cite>
        </figcaption>
      </figure>

    <nav>
        
        <ul>
            <li class="mb-2"><a href="form_absen.php" type="button" class="btn btn-primary">Absensi</a></li>
            <li><a href="list_absen.php" type="button" class="btn btn-success">Daftar Hadir</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "presensi siswa baru berhasil!";
            } else {
                echo "Presensi gagal!";
            }
        ?>
    </p>
    <?php endif;
 ?>
            </div>
        </div>
    </body>
</div>
</html>