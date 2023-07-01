<?php
session_start();
include "koneksi.php"; // Menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    // Validasi data kosong
    if (empty($jenis) || empty($gambar) || empty($harga)) {
        $_SESSION['success_message'] = "Data tidak boleh kosong!";
        header("Location: admin_dasboard.php");
    } else {
        $insertQuery = "INSERT INTO anjing (jenis, gambar, harga) VALUES ('$jenis', '$gambar', '$harga')";
        $insertResult = mysqli_query($link, $insertQuery);

        if ($insertResult) {
            $_SESSION['success_message'] = "Data berhasil ditambahkan!";
            header("Location: admin_dasboard.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($link);
        }
    }
}
?>