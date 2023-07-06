<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
   
    <?php
    // Cek apakah parameter id transaksi telah dikirimkan
    if (isset($_POST['Id'])) {
        $Id = $_POST['Id'];

        // Lakukan proses lain yang diperlukan, seperti memasukkan data transaksi ke dalam database
        // ...

        // Tampilkan informasi transaksi kepada pengguna
  
        echo "<p>Detail transaksi:</p>";

        // Ambil informasi transaksi berdasarkan id
        include 'koneksi.php';
        $sql = "SELECT * FROM kucing WHERE Id = '$Id'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);

       
        // Tampilkan detail transaksi
        echo "<p>Jenis Kucing: " . $row['jenis'] . "</p>";
        echo "<img src='img/" . $row['gambar'] . "' width='200'>";
        echo "<p>Harga Kucing: " . $row['harga'] . "</p>";

     
        mysqli_close($link);
    } else {
        // Jika tidak ada parameter id, tampilkan pesan kesalahan
        echo "<h2>Error: Parameter id tidak ditemukan</h2>";
    }
    ?>
    <br>
    <br>

    <!-- Form untuk input transaksi -->

    <form method="POST" action="aksi_transaksi.php">
        <label for="namabarang">Nama Barang</label>:</label>
        <input type="text" name="namabarang" required><br><br>
        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br><br>
        <label for="harga">Harga Satuan:</label>
        <input type="number" name="harga" required><br><br>
        <input class="border bg-red-600" type="submit" value="Tambah Transaksi">
    </form>


</body>

</html>