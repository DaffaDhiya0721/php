<?php
if ($jabatan2 == 'Kepala Sekolah') {
    $gaji = 5000000
  } else if ($jabatan2 == 'Wakasek') {
    $gaji = 4000000
  } else if ($jabatan2 == 'Guru') {
    $gaji = 3000000
  } else if ($jabatan2 == 'Karyawan') {
    $gaji = 2000000
  } else {
    $gaji = 0
  }
?> <?php
if ($sk2 == 'Tetap') {
    $bonus = 1000000
  } else ($sk2 == 'Kontrak') {
    $bonus = 0
  }
?>