<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>UTS</title>
  </head>
  <body>
    <a href="https://assalaam.id/berita/jajaran-dinas-pendidikan-kunjungi-tk-assalaam"><img src="download.png" class="rounded mx-auto d-block" alt=""></a>
    <center><h3>PENGGAJIHAN</h3></center>
    <center><h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3></center>
    <!-- CONTENT -->
<div class="card mt-5 ml-5 mr-5 border-success text-dark">
  <div class="card-header">
    <h5>Data Penggajihan</h5>
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label><h5>No</h5></label>
    <input type="text" class="form-control" name="no" value="No"> 
  </div>
  <div class="form-group">
    <label><h5>Nama</h5></label>
    <input type="text" class="form-control" name="nama" value="Masukan Nama">
  </div>
  <div class="form-group mt-3">
    <label><h5>Unit Pendidikan</h5></label>
    <select class="form-control" name="unit">
      <option selected>Pilih Unit Pendidikan</option>
      <option>TK</option>
      <option>SD</option>
      <option>SMP</option>
      <option>SMA</option>
      <option>SMK</option>
    </select>
  </div>
  <div class="form-group">
    <label><h5>Tanggal Gaji</h5></label>
    <input type="date" class="form-control" name="tgl_gaji">
  </div>
  <div class="form-group">
  <center><label><h1>GAJI</h1></label></center>
  </div>
  <div class="form-group mt-3">
    <label><h5>Jabatan</h5></label>
    <select class="form-control" name="jabatan">
      <option selected>Pilih Jabatan</option>
      <option>Kepala Sekolah</option>
      <option>Wakasek</option>
      <option>Guru</option>
      <option>Karyawan</option>
    </select>
  </div>
  <div class="form-group">
    <label><h5>Lama Kerja</h5></label>
    <input type="text" class="form-control" name="lk" value="Lama Kerja">
  </div>
  <div class="form-group mt-3">
    <label><h5>Status Kerja</h5></label>
    <select class="form-control" id="exampleFormControlSelect1" name="sk">
      <option selected>Pilih Status Kerja</option>
      <option>Tetap</option>
      <option>Kontrak</option>
    </select>
  </div>
  <div class="form-group">
  <center><label><h1>POTONGAN</h1></label></center>
  </div>
  <div class="form-group">
    <label><h5>BPJS</h5></label>
    <input type="text" class="form-control" name="bpjs" value="BPJS">
  </div>
  <div class="form-group">
    <label><h5>Pinjaman</h5></label>
    <input type="text" class="form-control" name="pinjaman" value="Pinjaman">
  </div>
  <div class="form-group">
    <label><h5>Tabungan</h5></label>
    <input type="text" class="form-control" name="tabungan" value="Tabungan">
  </div>
  <div class="form-group">
    <label><h5>Lainnya</h5></label>
    <input type="text" class="form-control" name="lainnya" value="Lainnya">
  </div>
  <center><button type="submit" class="btn btn-outline-dark" name="proses">Proses</button></center>
  </div>
</div>
</form>
<!-- /CONTENT -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--ja
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['proses'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $lk = $_POST['lk'];
    $sk = $_POST['sk'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
  
    class hasil{
  
      public function penggajihan($no2, $nama2, $unit2, $tgl_gaji2, $jabatan2, $lk2, $sk2, $bpjs2, $pinjaman2, $tabungan2, $lainnya2){
?>
<?php
        $gaji = 0;
        switch ($jabatan2) {
            case 'Kepala Sekolah':
                $gaji = 5000000;
                break;
            case 'Wakasek':
                $gaji = 4000000;
                break;
            case 'Guru':
                $gaji = 3000000;
                break;
            case 'Karyawan':
                $gaji = 2000000;
                break;
            default:
                $gaji = 0;
        }
        ?>
        <?php
  
        $bonus = 0;
        switch ($sk2) {
            case 'Tetap':
                $bonus = 1000000;
                break;
            case 'Kontrak':
                $bonus = 0;
                break;
            default:
                $bonus = 0;
        }
  ?> <?php
        $total = ($gaji + $bonus - $bpjs2 - $pinjaman2 - $tabungan2 - $lainnya2);
        
  ?>
<center>
    <div class="card border-success mt-5 mb-3 text-white bg-dark" style="max-width: 40rem;">
      <div class="card-header"><h3>Penggajihan Sukses !</h3></div>
      <div class="card-body">
        <h3 class="card-title"> STRUK GAJI</h3>
        <table>
          <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo $no2 ?></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama2; ?></td>
          </tr>
          <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo $unit2 ?></td>
          </tr>
          <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><?php echo $tgl_gaji2 ?></td>
          </tr>
          <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan2 ?></td>
          </tr>
          <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $gaji ?></td>
          </tr>
          <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo $lk2 ?></td>
          </tr>
          <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo $sk2 ?></td>
          </tr>
          <tr>
          <td>Bonus</td>
            <td>:</td>
            <td><?php echo $bonus ?></td>
          </tr>
          <tr>
            <td>BPJS</td>
            <td>:</td>
            <td><?php echo $bpjs2 ?></td>
          </tr>
          <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo $pinjaman2 ?></td>
          </tr>
          <tr>
            <td>Tabungan</td>
            <td>:</td>
            <td><?php echo $tabungan2 ?></td>
          </tr>
          <tr>
            <td>Lainnya</td>
            <td>:</td>
            <td><?php echo $lainnya2 ?></td>
          </tr>
          <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?php echo $total ?></td>
          </tr>
        </table>
      </div>
    </div>

  <?php
  }
  }
    $cetak = new hasil();

    echo $cetak->penggajihan($no, $nama, $unit, $tgl_gaji, $jabatan, $lk, $sk, $bpjs, $pinjaman, $tabungan, $lainnya,);
      
}
?>
</center>
