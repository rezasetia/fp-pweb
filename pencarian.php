<?php
// Koneksi ke database
include "koneksi.php";

// Cek apakah parameter 'keyword' telah diberikan melalui metode GET
if (isset($_POST['keyword'])) {
  // Dapatkan nilai keyword dari URL
  $keyword = $_POST['keyword'];

  // Query pencarian data barang
  $sql = "SELECT * FROM kucing WHERE jenis LIKE '%$keyword%'";
  $result = mysqli_query($link, $sql);

  // Periksa apakah ada hasil pencarian
  if (mysqli_num_rows($result) > 0) {
    // Tampilkan hasil pencarian
    while ($row = mysqli_fetch_assoc($result)) {
      echo "Jenis: " . $row['jenis'] . "<br>";
    
      echo "Harga: " . $row['harga'] . "<br>";
     
    }
  } else {
    echo "Tidak ada hasil yang ditemukan.";
  }
}
?>