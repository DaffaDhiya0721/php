<?php
function persegi(){
    $sisi = 5;
    $luas = $sisi * $sisi;
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";
    echo "Sisi : $sisi <br>";
    echo "Luasnya : $luas <br>";
}

function persegiPanjang(){
    $panjang = 5;
    $lebar = 4;
    $luas = $panjang * $lebar;
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : panjang x lebar <br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luas : $luas <br>";
}

function lingkaran(){
    $jariJari = 15;
    $luas = 3.14 * $jariJari * $jariJari;
    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Rumus : π x Jari-jari x Jari-jari <br>";
    echo "Jari-jari : $jariJari <br>";
    echo "π : 3,14 <br>";
    echo "Luas : $luas <br>";
}

function segitiga(){
    $alas = 6;
    $tinggi = 9;
    $luas = 0.5 * $alas * $tinggi;
    $jariJari = 15;
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : 1/2 x Alas x Tinggi <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luas : $luas <br>";

}
persegi();
persegiPanjang();
lingkaran();
segitiga();
?>