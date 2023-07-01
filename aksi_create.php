<?php
include "koneksi.php";

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username sudah digunakan
$checkSql = "SELECT * FROM user WHERE username = '$username'";
$checkResult = mysqli_query($link, $checkSql);
if (mysqli_num_rows($checkResult) > 0) {

    // Jika username sudah ada, kembalikan ke halaman create dengan pesan error

    $errorMessage = "Username sudah ada<br> Silakan pilih username lain";
    $errorMessage = '<span style="color: red;">' . $errorMessage . '</span>';
    header("location: halamancreate.php?error=" . urlencode($errorMessage));
    exit;
}

// Query tambah data user
$sql = "INSERT INTO user (username, password, role, akses) 
VALUES ('$username', '$password', 'user','dasboard.php')";

if (mysqli_query($link, $sql)) {
    header("location: halamancreate.php?success=true");
    exit;
} else {
    header("location: halamancreate.php");
    exit;
}
?>