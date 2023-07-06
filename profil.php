<html lang="en">
<?php
session_start();
if (isset($_POST['username'])) {
  $username = $_POST['username'];
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Akun</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
  <div class="flex md:h-screen sm:h-screen lg:h-screen xl:max-h-fit h-full bg-cover bg-center items-center justify-center" style="background-image: url(img/a1.jpg);">

    <a href="dasboard.php">
      <button class="absolute left-0 top-0 mt-6 ml-4">
        <img src="img/Line 14 (1).png" alt="anakpanah">
      </button>
    </a>

    <div class="mx-24 rounded-lg shadow-lg my-20 w-2/3 h-2/3 backdrop-blur-md bg-white/30 max-w-2xl">
      <div class="h-full w-full flex justify-center items-center">
        <div class="w-2/3 h-full my-10">
          <div class="items-center mt-3">
            <img src="img/Group 3.png" alt="akun" width="50">
            <span class="text-white font-semibold ml-2">
              <?php
              if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
              } else {
                // Jika username tidak tersedia dalam sesi, Anda dapat melakukan penanganan sesuai kebutuhan, misalnya mengarahkan pengguna ke halaman login.
                header("Location: login.php");
                exit();
              }
              include 'koneksi.php';
              $sql = "SELECT * FROM user WHERE username = '$username'";
              $result = mysqli_query($link, $sql);
              if ($row = mysqli_fetch_assoc($result)) {
                echo "Hi, " . $row['username'];
              } else {
                echo "Username tidak ditemukan.";
              }
              ?>
            </span>
          </div>


          <form method="post" action="aksi_update.php">
            <!-- Enter your username address -->
            <label for="username" class="mx-4 text-white font-semibold">Username</label>
            <?php
            $sql = "SELECT * FROM user WHERE  username = '$username'";
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="bg-white w-1/2 rounded-md mx-4 px-2">' . $row['username'] . '</div>';
            }
            ?>

            <!-- Enter your password -->
            <div>
              <label for="password" class="mx-4 text-white font-semibold m-4">Password</label>
              <?php
              $sql = "SELECT * FROM user WHERE  username = '$username'";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="bg-white w-1/2 rounded-md mx-4 px-2">' . $row['password'] . '</div>';
              }
              ?>
            </div>

            <div class="items-center mx-4 mt-10">
              <button class="w-1/3 bg-white text-black font-mono font-semibold rounded-md hover:bg-slate-700 btn btn-primary transition-colors"><a href="updatepassword.php">CHANGE PASSWORD</a></button>
            </div>

          </form>

          <div class="flex">
            <div class="items-center mx-4">
              <!-- Fungsi delete_account -->
              <form method="post" action="delete_account.php">
                <button class="w-full bg-red-600 text-black font-mono font-semibold rounded-md
                 hover:bg-slate-700 mt-2 transition-colors" id="deleteBtn" type="submit">DELETE ACCOUNT</button>
              </form>
            </div>

            <div class="flex-grow"></div>

            <div class="flex items-center mx-4">
              <a href="logout.php" class="bg-red-600 text-black font-mono font-bold rounded-md hover:bg-slate-700 transition-colors">
                LOG OUT
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>