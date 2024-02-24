<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
</head>
<body>
    <form action="proses-latihan1.php" method="POST">
        <h1>Form Pendaftaran</h1>
        <div>
            <label>Nama</label> <br>
            <input type="text" name="nama">
        </div>
        <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="Pria"> Pria <br>
        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita  
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kategori Olahraga</label> <br>
        <input type="radio" name="kategori" value="Renang"> Berenang <br>
        <input type="radio" name="kategori" value="Sepak Bola"> Sepak Bola <br>
        <input type="radio" name="kategori" value="Bulu Tangkis"> Bulu Tangkis <br>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pilihan Kelas</label> <br>
            <input type="checkbox" id="kelas1" name="kelas[]" value="Pemula">
        <label for="kelas1">Pemula</label> <br>
            <input type="checkbox" id="kelas2" name="kelas[]" value="Menengah">
        <label for="kelas2">Menengah</label> <br>
            <input type="checkbox" id="kelas3" name="kelas[]" value="Lanjutan">
        <label for="kelas3">Lanjutan</label>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kemampuan Fisik</label> <br>
        <textarea name="kemampuan" cols="30" rows="4"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Metode Pembayarab</label> <br>
        <select name="metode">
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
    </form>
</body>
</html>