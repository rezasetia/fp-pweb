<?php
session_start();
include "koneksi.php";

// Ketika pengguna logout, Anda dapat mengatur status login pengguna menjadi "tidak aktif" di database
$username = $_SESSION['username']; // Ganti dengan nama variabel sesuai dengan penanganan session Anda
$query = "UPDATE user SET status = 'tidak aktif' WHERE username = '$username'";
mysqli_query($link, $query);
// Fungsi logout
function logout() {
    session_destroy();
    // Mengalihkan ke halaman login
    header("Location: halamanPertama.php");
    exit();
}

logout(); // Memanggil fungsi logout
?>