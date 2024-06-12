<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Pendaftar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }
        body {
            background-color: #fff;
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
        .input-control {
            padding: 5px 10px;
            font-size: 16px;
            margin: 5px 0;
        }
        footer {
            background-color: #B90000;
        }
        nav {
            background-color: #B90000;
        }
        .hero {
            margin: 100px auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="Logo-SMK-Telkom-Purwokerto-200x57.png" alt="Bootstrap" width="auto" height="auto">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"></ul>
      <a class="btn btn-outline-light ml-3" href="daftar.php">Daftar</a> &nbsp;&nbsp;&nbsp;
      <a class="btn btn-outline-light ml-3" href="list-siswa.php">Pendaftar</a>
    </div>
  </div>
</nav>
<section class="box-formulir">
<h2>Daftar Pendaftar SMK Telkom</h2>
<div class="box">
<?php
include("koneksi.php");

// Query untuk mengambil data pendaftar dari database
$query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");

// Cek apakah ada data yang ditemukan
if(mysqli_num_rows($query) > 0) {
    // Tampilkan data dalam bentuk tabel HTML
    echo "<table class='table'>
            <thead>
            <tr>
                <th>ID Pendaftaran</th>                
                <th>Jurusan</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>";
    while($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row['id_pendaftaran']."</td>";
        echo "<td>".$row['jurusan']."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['jk']."</td>";
        echo "<td>".$row['agama']."</td>";
        echo "<td>".$row['almt_peserta']."</td>";
        echo "<td>
                <a href='edit.php?id=".$row['id_pendaftaran']."' class='btn btn-primary btn-sm'>Edit</a>
                <a href='hapus.php?id=".$row['id_pendaftaran']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
              </td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "Belum ada data pendaftar.";
}
?>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0uwXrZ4lgxD1w9O2jR3ltlg24G" crossorigin="anonymous"></script>
</body>
</html>
