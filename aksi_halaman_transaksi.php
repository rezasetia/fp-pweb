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
    echo "<h2>Transaksi Berhasil</h2>";
    echo "<p>Terima kasih atas pembelian Anda!</p>";
    echo "<p>Detail transaksi:</p>";
   

    // Ambil informasi transaksi berdasarkan id
    include 'koneksi.php';
    $sql = "SELECT * FROM kucing WHERE Id = '$Id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    // Tampilkan detail transaksi
    echo "<p>Jenis: " . $row['jenis'] . "</p>";
    echo "<img src='img/" . $row['gambar'] . "' width='200'>";
    echo "<p>Harga: " . $row['harga'] . "</p>";

    mysqli_close($link);
  } else {
    // Jika tidak ada parameter id, tampilkan pesan kesalahan
    echo "<h2>Error: Parameter id tidak ditemukan</h2>";
  }
  ?>

  
</body>

</html>