<?php
include("koneksi.php");
if(isset($_POST['submit'])){
    // Cek apakah formulir telah disubmit
    if (empty($_POST['th_ajaran']) || empty($_POST['jurusan']) || empty($_POST['nama']) || empty($_POST['tmp_lahir']) || empty($_POST['tgl_lahir']) || empty($_POST['jk']) || empty($_POST['agama']) || empty($_POST['almt_peserta'])) {
        // Jika ada yang belum diisi, tampilkan pesan kesalahan menggunakan JavaScript
        echo "<script>alert('Harap lengkapi semua kolom formulir.');</script>";
    } else {
        $getMaxid = mysqli_query($conn,"SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $maxid = mysqli_fetch_object($getMaxid);
        $generateid = 'P'.date('Y').sprintf("%05s", $maxid->id + 1);

        //proses insert
        $insert = mysqli_query($conn,"INSERT INTO tb_pendaftaran VALUES(
            '".$generateid."',
            '".date('Y-m-d')."',
            '".$_POST['th_ajaran']."',
            '".$_POST['jurusan']."',
            '".$_POST['nama']."',
            '".$_POST['tmp_lahir']."',
            '".$_POST['tgl_lahir']."',
            '".$_POST['jk']."',
            '".$_POST['agama']."',
            '".$_POST['almt_peserta']."'
        )");
        if($insert){
            echo "<script>window.location='berhasil.php?id=".$generateid."'</script>";
        }else{
          echo "Ulangi";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Telkom Purwokerto</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
      * {
    margin: 0;
    padding: 0;
    font-family: 'Quicksand', sans-serif;
}
body{
  background-color: gray;
}
.box-formulir {
    width: 50%;
    margin: 100px auto;
}
.box {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px;
    box-sizing: border-box;
    margin: 5px 0 25px;
}
.input-control{
  padding: 5px 10px;
  font-size: 16px;
  margin: 5px 0;
}
.btn-submit{
  padding: 10px 17px;
  background-color: #3364FF;
  color: #fff;
  border: none;
  font-size: 16px;
}
.btn-submit:hover{
  cursor: pointer;
  background-color: #6A3BBC;
}
footer{
  background-color: #B90000;
}
/* 
.table_form{
  width: 100px;
} */
nav{
  background-color: #B90000;
}
.hero{
  margin: 100px auto;
}
    </style>
  </head>
  <body class="bg-light">

  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
  <img src="Logo-SMK-Telkom-Purwokerto-200x57.png" alt="Bootstrap" width="auto" height="auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      </a>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav ms-auto"></ul>
   <a class="btn btn-outline-light ml-3" href="Home.php">Daftar</a> &nbsp;&nbsp;&nbsp;
   <a class="btn btn-outline-light ml-3" href="list-siswa.php">Pendaftar</a>
     </div>
  </div>
</nav>
<Section class="box-formulir">
<h2 class="text-center">Formulir pendaftaran SMK Telkom</h2>
<form action="" method="post">
<div class="box">
  <table border="0" class="table form">
    <tr>
      <td>Tahun Ajaran</td>
      <td>:</td>
      <td>
        <input type="text" name="th_ajaran" class="input-control" value="2024/2025" readonly>
      </td>
    </tr>
      <td>Jurusan</td>
      <td>:</td>
      <td>
        <select class="input-control" name="jurusan" id="">
        <option value="">--Pilih--</option>
        <option value="akl">Akutansi</option>
        <option value="bp">Broadcasting dan Perfilman</option>
        <option value="pm">Pemasaran</option>
        <option value="mplb">Perkantoran</option>
        <option value="tjkt">Teknik Komputer</option>
        <option value="pplg">Pengembangan Perangkat Lunak dan Game</option>
      </select>
      </td>
    </tr>
  </table>
</div>
 <h3>Data Diri Calon Siswa SMK Telkom</h3>
 <div class="box">
  <table border="0" class="table form">
    <tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td>
        <input type="text" name="nama" class="input-control">
      </td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td>:</td>
      <td>
        <input type="text" name="tmp_lahir" class="input-control">
      </td>
    </tr>
    <tr>
    <td>Tanggal Lahir</td>
      <td>:</td>
      <td>
        <input type="date" name="tgl_lahir" class="input-control">
      </td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <input type="radio" name="jk" class="input-control" 
        value="laki-laki">Laki-Laki 
        <br>
        <input type="radio" name="jk" class="input-control" 
        value="perempuan">Perempuan
      </td>
    </tr>
      <td>Agama</td>
      <td>:</td>
      <td>
        <select class="input-control" name="agama" id="">
        <option value="">--Pilih--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
        <option value="Atheis">Atheis</option>
        <option value="Agnostik">Agnostik</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Alamat Lengkap</td>
      <td>:</td>
      <td>
        <textarea class="input-control" name="almt_peserta" ></textarea>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
        <input type="submit" name="submit" class="btn-submit" value="Daftar Sekarang">
      </td>
    </tr>
  </table>
</div>
</form>
<section class="content">
    <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
      <div class="col-md-2 p-3">
        <img src="images__1_-removebg-preview.png" class="w-50" alt="">
      </div>
      <div class="col-md-2 p-3">
        <img src="images-removebg-preview (1).png" class="w-50" alt="">
      </div>
    </div>
  </section>
</Section>
  <footer> 

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>