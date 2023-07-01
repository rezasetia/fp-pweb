<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    
    $oldPassword = $_POST['password1'];
    $newPassword = $_POST['password2'];

    $username = $_SESSION['username'];

    // Check if the old password matches the stored password for the user
    $sql = "SELECT password FROM user WHERE username='$username'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];

    if ($oldPassword === $storedPassword) {
        // Update the password in the database
        $updateSql = "UPDATE user SET password='$newPassword' WHERE username='$username'";
        if (mysqli_query($link, $updateSql)) {
         
            $_SESSION['success_message'] = "Password updated successfully!";
            header("location: dasboard.php");
            exit;
        } else {
            echo "Failed to update password. Please try again.";
        }
    } else {
        echo "Old password is incorrect.";
    }
}
?>