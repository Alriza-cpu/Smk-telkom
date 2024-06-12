<?php
include("koneksi.php");

// Pastikan parameter id ada dan tidak kosong
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data pendaftar berdasarkan ID
    $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '$id'");

    // Cek apakah data ditemukan
    if(mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        $id_pendaftaran = $row['id_pendaftaran'];
        $jurusan = $row['jurusan'];
        $nama = $row['nama'];
        $jenis_kelamin = $row['jk'];
        $agama = $row['agama'];
        $alamat = $row['almt_peserta'];

        // Form untuk mengedit data
        echo "<form action='proses_edit.php' method='POST'>
                <input type='hidden' name='id_pendaftaran' value='$id_pendaftaran'>
                <label for='jurusan'>Jurusan:</label>
                <input type='text' name='jurusan' value='$jurusan' class='form-control'><br>
                <label for='nama'>Nama:</label>
                <input type='text' name='nama' value='$nama' class='form-control'><br>
                <label for='jenis_kelamin'>Jenis Kelamin:</label>
                <input type='text' name='jenis_kelamin' value='$jenis_kelamin' class='form-control'><br>
                <label for='agama'>Agama:</label>
                <input type='text' name='agama' value='$agama' class='form-control'><br>
                <label for='alamat'>Alamat:</label>
                <textarea name='alamat' class='form-control'>$alamat</textarea><br>
                <input type='submit' name='submit' value='Update Data' class='btn btn-primary'>
              </form>";
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
