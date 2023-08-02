<!DOCTYPE html>
<html>
<head>
    <title>Absensi Kegiatan Siswa PKL | SMK N TEMBARAK</title>
</head>

<body>
    <header>
        <h3>Absensi Kegiatan Siswa PKL</h3>
    </header>

    <form action="proses_absensi.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="nis">Nis: </label>
            <input type="int" name="nis" placeholder="angka" />
        </p>
        <p>
            <label for="haritanggal">Haritanggal: </label>
            <input type="date" name="haritanggal">
        </p>
        <p>
            <label for="jammasuk">Jammasuk: </label>
            <input type="time" name="jammasuk" />
        </p>
        <p>
            <label for="jampulang">Jampulang: </label>
            <input type="time" name="jampulang"  />
        </p>
        <p>
            <input type="submit" value="Kirim" name="kirim" />
        </p>

        </fieldset>

    </form>

    </body>
</html>