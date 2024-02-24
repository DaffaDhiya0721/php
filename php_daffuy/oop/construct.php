<?php

class contoh{

        public function __construct(){
            echo "Assalaamualaikum Ukhti <br>";
        }

        public function perkenalan(){
            echo "Nama saya Fakhri <br>";
        }

        public function __destruct(){
            echo "Hallo Tan";
        }
}
$cetak = new contoh();

echo $cetak->perkenalan();
?>