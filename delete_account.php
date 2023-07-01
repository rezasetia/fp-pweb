<?php
session_start();
// Pastikan pengguna sudah login atau sesuai dengan kebutuhan Anda

// Fungsi delete account
function deleteAccount($link) {
    // Perintah SQL untuk menghapus data pengguna dari tabel yang relevan
    
    $query = "DELETE FROM user WHERE status = 'aktif'";

    // Eksekusi perintah SQL
    if (mysqli_query($link, $query)) {
        // Jika penghapusan berhasil, lakukan logout
        session_unset(); // Menghapus semua data session
        session_destroy(); // Menghapus session
        header("Location: halamanPertama.php"); // Mengalihkan ke halaman login
        exit();
    } else {
        // Jika terjadi kesalahan dalam penghapusan
        echo "Error deleting record: " . mysqli_error($link);
    }
}

// Menghubungkan ke database
include "koneksi.php";

// Periksa koneksi database
if (!$link) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Panggil fungsi delete account dan lewatkan parameter $link
deleteAccount($link);

// Tutup koneksi database
mysqli_close($link);
?>