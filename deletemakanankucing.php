<?php
session_start();
include "koneksi.php"; // Menghubungkan ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Id'])) {
    $Id = $_POST['Id'];

    // Query untuk menghapus data berdasarkan ID
    $deleteQuery = "DELETE FROM makanankucing WHERE Id = '$Id'";
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