<?php
//buat class
class BangunDatar{

        //buat property/atribut
        public $Persegi = "Menghitung Luas Persegi";
        public $Lingkaran = "Menghitung Luas Lingkaran";
        public $Segitiga = "Menghitung Luas Segitiga";
        public $PersegiPanjang = "Menghitung Luas Persegi Panjang";
        
        //buat method / function
        public function Persegi(){
            $sisi = 5;
            $luas = $sisi * $sisi;
            echo "<h3>$this->Persegi</h3>";
            echo "Rumus : sisi x sisi <br>";
            echo "Sisi : $sisi <br>";
            echo "Luas : $luas <br>";
        }
        public function PersegiPanjang(){
            $panjang = 5;
            $lebar = 4;
            $luas = $panjang * $lebar;
            echo "<h3>$this->PersegiPanjang</h3>";
            echo "Rumus : panjang x lebar <br>";
            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";
            echo "Luas : $luas <br>";
        }
        public function Lingkaran(){
            $jariJari = 15;
            $luas = 3.14 * $jariJari * $jariJari;
            echo "<h3>$this->Lingkaran</h3>";
            echo "Rumus : π x Jari-jari x Jari-jari <br>";
            echo "Jari-jari : $jariJari <br>";
            echo "π : 3,14 <br>";
            echo "Luas : $luas <br>";
        }
        public function Segitiga(){
            $alas = 6;
            $tinggi = 9;
            $luas = 0.5 * $alas * $tinggi;
            $jariJari = 15;
            echo "<h3>$this->Segitiga</h3>";
            echo "Rumus : 1/2 x Alas x Tinggi <br>";
            echo "Alas : $alas <br>";
            echo "Tinggi : $tinggi <br>";
            echo "Luasnya : $luas <br>";
        
        }
}

//buat object
$cetak = new BangunDatar();

echo $cetak->Persegi();
echo "<br><hr>";
echo $cetak->PersegiPanjang();
echo "<br><hr>";
echo $cetak->Lingkaran();
echo "<br><hr>";
echo $cetak->Segitiga();
?>