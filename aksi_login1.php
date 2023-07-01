<?php
session_start(); 
include "koneksi.php";
$errors = array();

if (isset($_SESSION['username'])) {
    // Jika pengguna telah login, alihkan ke halaman lain
    header("Location: dasboard.php");
    exit();
  }
// Validasi username
if (empty($_POST['username'])) {
    $errors['username'] = 'Username harus diisi';
}

// Validasi password
if (empty($_POST['password'])) {
    $errors['password'] = 'Password harus diisi';
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password != $row['password']) {
            $errors['password'] = 'Password salah';
        }
    } else {
        $errors['username'] = 'Username tidak ditemukan';
    }
}

if (count($errors) === 0) {
    session_start();
    $_SESSION['status'] = 'Login';
    header("Location: halamanadmin.php");
} else {
    header("Location: halamanadmin.php?errors=" . urlencode(serialize($errors)));
}

$errors = unserialize(urldecode($_GET['errors']));
if (isset($errors['username'])) {
    echo $errors['username'];
}
if (isset($errors['password'])) {
    echo $errors['password'];
}
?>