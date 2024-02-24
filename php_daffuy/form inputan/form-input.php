<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input type="text" name="nama" placeholder="Masukan Nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input type="text" name="alamat" placeholder="Masukan Alamat">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>

<?php
$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];

    if ($nama) {
        echo "<strong>Nama : </strong> {$nama} <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat : </strong> {$alamat} <br>";
    }
?>