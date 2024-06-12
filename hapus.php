<?php
include("koneksi.php");

// Memeriksa apakah ID telah diterima melalui URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Persiapkan pernyataan hapus
    $sql = "DELETE FROM tb_pendaftaran WHERE id_pendaftaran=?";

    // Persiapkan pernyataan dan ikat parameter
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);

        // Jalankan pernyataan
        if ($stmt->execute()) {
            // Periksa apakah baris telah dihapus
            if ($stmt->affected_rows > 0) {
                echo "Data berhasil dihapus.";
            } else {
                echo "Tidak ada data yang dihapus.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }

        // Tutup pernyataan
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Mengarahkan kembali ke halaman list-siswa.php
    header("Location: list-siswa.php");
    exit;
} else {
    echo "ID tidak ditemukan.";
}
?>
