<?php
// Koneksi ke database
include "koneksi.php";

// Cek apakah parameter id telah dikirimkan
if (isset($_POST['id'])) {
    // Mengambil data id dari form
    $id = $_POST['id'];

    // Hapus data user dari tabel user
    $query = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($link, $query);

    if ($result) {
        echo "Data user berhasil dihapus.";
    } else {
        echo "Gagal menghapus data user: " . mysqli_error($link);
    }
} else {
    echo "Error: Parameter id tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($link);
?>