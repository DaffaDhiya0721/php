<?php
if (isset ($_POST['simpan'])){
    $nama = $_POST ['nama'];
    $tanggal = $_POST ['tanggal_lahir'];
    $jenis = $_POST ['jk'];
    $biaya = $_POST ['biaya'];
    $jurusan = $_POST ['jurusan'];
    $harga = 0;

    if ($jurusan == 'RPL') {
        $harga = 2500000;
    } elseif ($jurusan == "TKRO") {
        $harga = 3000000;
    } elseif ($jurusan == "TBSM") {
        $harga = 3500000;
    } else {
        $harga = "tidak tersedia";
    }

    $total = $harga + $biaya;

    echo "<br><br><br>";
    echo "=============>>Struk Register<<============<br>";
    echo "<td>Nama<td> : $nama <br>";
    echo "Tanggal Lahir : $tanggal <br>";
    echo "Jenis Kelamin : $jenis <br>";
    echo "Biaya Register : $biaya <br>";
    echo "Jurusan : $jurusan <br>";
    echo "Biaya Jurusan : $harga <br>";
    echo "Total Pembayaran : $total <br>";
}
?>