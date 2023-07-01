<?php
session_start();
if(!empty($_SESSION['status'])){
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1 class="mt-4 mb-4">CRUD Mahasiswa</h1>
	<?php include 'koneksi.php';
    $sql = "SELECT * FROM kucing";
    $result = mysqli_query($link, $sql);
    ?>
            <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>jenis</th>
                    <th>gambar</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['jenis']; ?></td>
                    <td><img src="img/<? $row["gambar"];?>" width="50">
                    </td>
                    
                    <td>
                        <a href="form_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> 
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="form_tambah.php" class="btn btn-success">Tambah Mahasiswa</a>
        <a href = "logout.php" class ="btn btn-danger">Logout</a>
        </div>
    </body>
</html>
<?php 
} ?>