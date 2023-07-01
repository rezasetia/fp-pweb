<?php
session_start();
include "koneksi.php";

$errors = array(); // Inisialisasi array kosong untuk menyimpan kesalahan

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencari data pengguna dalam database berdasarkan username yang diberikan
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($password == $row['password']) {
            // Login berhasil
            $_SESSION['username'] = $username;

            // Perbarui status menjadi aktif
            $queryUpdate = "UPDATE user SET status = 'aktif' WHERE username = '$username'";
            mysqli_query($link, $queryUpdate);

            if ($row['role'] == 'admin') {
                // Login sebagai admin
                $_SESSION['role'] = 'admin';
                $_SESSION['status'] = 'aktif';
                header("Location: admin_dasboard.php");
                exit();
            } elseif ($row['role'] == 'user') {
                // Login sebagai user
                $_SESSION['role'] = 'user';
                $_SESSION['status'] = 'aktif';
                header("Location: dasboard.php");
                exit();
            }
        } else {
            // Password salah
            $errors['password'] = 'Password salah';
        }
    } else {
        // Pengguna tidak ditemukan
        $errors['username'] = 'Username tidak ditemukan';
    }

    // Menutup koneksi
    mysqli_close($link);
}
?>