<?php
// Koneksi ke database
include "koneksi.php";

// Cek apakah parameter namabarang, jumlah, dan harga telah dikirimkan
if (isset($_POST['namabarang']) && isset($_POST['jumlah']) && isset($_POST['harga'])) {
    // Mengambil data dari form
    $namabarang = $_POST['namabarang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $total = $jumlah * $harga;

    // Menyimpan data transaksi ke database
    $query = "INSERT INTO transaksi (namabarang, jumlah, harga, total) VALUES ('$namabarang', $jumlah, $harga, $total)";
    $result = mysqli_query($link, $query);

    if ($result) {
     
        header("Location: pembayaran.php?errors=" );
    } else {
        echo "Transaksi gagal ditambahkan: " . mysqli_error($link);
    }
} else {
    echo "Error: Parameter namabarang, jumlah, dan harga tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($link);
?>