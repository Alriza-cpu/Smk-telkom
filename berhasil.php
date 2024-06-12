<?php
include("koneksi.php");

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
.btn-cetak{
    display: inline-block;
    padding: 10px 17px;
    color: #fff;
    background-color: #ff5733;
    margin-top: 1px;
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
   <a class="btn btn-outline-light ml-3" href="daftar.php">Daftar</a> &nbsp;&nbsp;&nbsp;
   <a class="btn btn-outline-light ml-3" href="list-siswa.php">Pendaftar</a>
     </div>
  </div>
</nav>
<Section class="box-formulir">
<h2 class="text-center">Pendaftaran Berhasil</h2>
<div class="box">
<h4>Kode pendaftaran anda adalah <?php echo $_GET['id']; ?></h4>
<a href="cetak_bukti_daftar.php?id=<?php echo $_GET['id']?>" class="btn-cetak">Cetak Bukti Daftar Anda</a>
</div>
</Section>
</body>
</html>