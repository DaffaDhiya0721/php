<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="pendaftaran">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="pendaftaran">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Data Ortu <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- /NAVBAR -->

<!-- CONTENT -->
<div class="card mt-5 ml-5 mr-5 border-white bg-dark text-white">
  <div class="card-header">
    Form Pendaftaran
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label>Nama Depan</label>
    <input type="text" class="form-control" name="nama_depan" value="Masukan Nama Depan Kamu"> 
  </div>
  <div class="form-group">
    <label>Nama Belakang</label>
    <input type="text" class="form-control" name="nama_belakang" value="Masukan Nama Belakang Kamu">
  </div>
  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir">
  </div>
    <label>Jenis Kelamin</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-laki" checked>
  <label class="form-check-label">
    Laki-laki
  </label>
</div>
<div class="form-check mt-2">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="Perempuan">
  <label class="form-check-label">
    Perempuan
  </label>
</div>
  <div class="form-group mt-3">
    <label>Agama</label>
    <select class="form-control" name="agama">
      <option selected>Pilih Agama</option>
      <option>Islam</option>
      <option>Kristen Katolik</option>
      <option>Kristen Protestan</option>
      <option>Budha</option>
      <option>Konghucu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
  </div>
  <div class="form-group">
    <label>Asal Sekolah</label>
    <input type="text" class="form-control" name="asal_sekolah" value="Dimana Asal Sekolah Kamu">
  </div>
  <div class="form-group mt-3">
    <label>Jurusan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
      <option selected>Pilih Jurusan</option>
      <option>Rekayasa Perangkat Lunak (RPL)</option>
      <option>Teknik dan Bisnis Sepeda Motor (TBSM)</option>
      <option>Teknik Kendaraan Ringan dan Otomotif (TKRO)</option>
    </select>
  </div>
  <button type="submit" class="btn btn-outline-light" name="daftar">Daftar</button>
  </div>
</div>
</form>
<!-- /CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php
if(isset($_POST['daftar'])){

$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];

class hasil{

    public function pendaftaran($nama_depan2,$nama_belakang2,$tanggal_lahir2,$jenis_kelamin2,$agama2,$alamat2,$asal_sekolah2,$jurusan2){
?>
<center>
<div class="card border-success mt-5 mb-3 text-white bg-dark" style="max-width: 40rem;">
  <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
  <div class="card-body">
    <h5 class="card-title">Pendaftaran Sukses !</h5>
    <table>
      <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td><?php echo $nama_depan2 ?></td>
      </tr>
      <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><?php echo $nama_belakang2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $tanggal_lahir2 ?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $jenis_kelamin2 ?></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $agama2 ?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat2 ?></td>
      </tr>
      <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td><?php echo $asal_sekolah2 ?></td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $jurusan2 ?></td>
      </tr>
    </table>
  </div>
</div>
</center>
<?php
    

$cetak = new hasil();
    }
  }
echo $cetak->pendaftaran($nama_depan,$nama_belakang,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$asal_sekolah,$jurusan);
}
?>