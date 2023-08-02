<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
<script type="text/javascript" src="datatables/datatables.js"></script>

    <title>Document</title>
</head>

<body>
    <header>
        <h3>Daftar hadir</h3>
    </header>

    <nav>
    <a class="mb-2"><a href="form_absen.php" type="button" class="btn btn-primary">Tambah Data</a></a>
    </nav>

    <br>

    <div class="table-responsive">
    <table id="dt" class="table align-middle  cell-border stripe hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Nis</th>
            <th>Haritanggal</th>
            <th>Jammasuk</th>
            <th>jampulang</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM absensi1";
        $query = mysqli_query($db, $sql);

        while ($absensi1 = mysqli_fetch_assoc($query)){
            ?>
            <tr>
            
              <td>
                <?php echo $absensi1['nama']; ?>
              </td>
              <td>
              <?php echo $absensi1['nis']; ?>
              </td>
              <td>
              <?php echo $absensi1['haritanggal']; ?>
              </td>
              <td>
              <?php echo $absensi1['jammasuk']; ?>
              </td>
              <td>
              <?php echo $absensi1['jampulang']; ?>
              </td>
              <td>
                <a href="form_edit.php?id_absensi1=<?php echo $absensi1['id_absensi1']; ?>"  type="button" class="btn btn-success btn-m">
                    <i class="fa fa-pencil"></i>
                </a>
                <a href="hapus.php?id_absensi1=<?php echo $absensi1['id_absensi1']; ?>" type="button" class="btn btn-danger btn-m" onClick="return confirm('Serius Bro Mau DI Apus???')">
                    <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php
        }
            ?>
            </tbody>
        </table>
    </div>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>