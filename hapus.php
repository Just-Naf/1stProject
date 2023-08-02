<?php

include("config.php");

if( isset($_GET['id_absensi1']) ){

    // ambil id dari query string
    $id_absensi1 = $_GET['id_absensi1'];
    // buat query hapus
    $sql = "DELETE FROM absensi1 WHERE id_absensi1=$id_absensi1";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_absen.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>