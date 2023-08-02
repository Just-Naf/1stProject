<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Absensi Kegiatan Siswa PKL | SMK N TEMBARAK</title>
</head>

<body>
    <header>
        <h3>Daftar hadir</h3>
    </header>

    <nav>
        <a href="form_absen.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="3">
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

        while($absensi1= mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$absensi1['nama']."</td>";
            echo "<td>".$absensi1['nis']."</td>";
            echo "<td>".$absensi1['haritanggal']."</td>";
            echo "<td>".$absensi1['jammasuk']."</td>";
            echo "<td>".$absensi1['jampulang']."</td>";
            echo "<td>";
            echo "<a href='form_edit.php?id_absensi1=".$absensi1['id_absensi1']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_absensi1=".$absensi1['id_absensi1']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?> 

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>