<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_absensi  = $_POST['id_absensi1'];
    $nama        = $_POST['nama'];
    $nis         = $_POST['nis'];
    $haritanggal = $_POST['haritanggal'];
    $jammasuk    = $_POST['jammasuk'];
    $jampulang   = $_POST['jampulang'];

    // buat query update
    $sql = "UPDATE `absensi1` SET `nama`='$nama',`nis`='$nis',`haritanggal`='$haritanggal',
            `jammasuk`='$jammasuk',`jampulang`='$jampulang' WHERE id_absensi1 = '$id_absensi'";
    $query = mysqli_query($db, $sql);

    // print_r($sql);
    // die();

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list_absen.php
        header('Location: list_absen.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>