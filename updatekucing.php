<?php
include "koneksi.php"; // Menghubungkan ke database
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Id = $_POST['Id'];
    $jenis = $_POST['jenis'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga'];

    // Query untuk mengupdate data berdasarkan ID
    $updateQuery = "UPDATE kucing SET jenis = '$jenis', gambar = '$gambar', harga = '$harga' WHERE Id = '$Id'";
    $updateResult = mysqli_query($link, $updateQuery);

    if ($updateResult) {
     
        $_SESSION['success_message'] = "Data berhasil diupdate.";
        header("Location: admin_dasboard.php");
    } else {
        echo "Error: " . mysqli_error($link);
    }
} else {
    echo "Invalid request.";
}
?>