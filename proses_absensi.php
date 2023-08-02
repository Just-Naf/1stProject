<?php

include("config.php");

// cek apakah tombol kirim sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $nama        = $_POST['nama'];
    $nis         = $_POST['nis'];
    $haritanggal = $_POST['haritanggal'];
    $jammasuk    = $_POST['jammasuk'];
    $jampulang   = $_POST['jampulang'];

    // buat query
    $sql = "INSERT INTO `absensi1`(id_absensi1, nama, nis, haritanggal, jammasuk, jampulang) 
            VALUES (NULL, '$nama','$nis','$haritanggal','$jammasuk','$jampulang')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("absen berhasil...");
}

?>