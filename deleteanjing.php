<?php
session_start();
include "koneksi.php"; // Menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Query untuk menghapus data berdasarkan ID
    $deleteQuery = "DELETE FROM anjing WHERE id = '$id'";
    $deleteResult = mysqli_query($link, $deleteQuery);

    if ($deleteResult) {
        $_SESSION['success_message'] = "Data berhasil dihapus.";
        header("Location: admin_dasboard.php");
       
    } else {
        echo "Error: " . mysqli_error($link);
    }
} else {
    echo "Invalid request.";
}
?>