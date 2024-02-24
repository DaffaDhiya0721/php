<?php
//buat class
class Manusia{

        //buat property/atribut
        public $nama = "Bintang";
        public $nama2 = "Reza";

        //buat method / function
        public function makan(){
            echo "$this->nama Suka Makan Ayam";
        }
        public function minum(){
            echo "$this->nama2 Suka Minum Power F";
        }
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>