<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Akun</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
  <div class="flex md:h-screen sm:h-screen lg:h-screen xl:max-h-fit h-full bg-cover bg-center items-center justify-center"
    style="background-image: url(img/a1.jpg);">
  
    <a href="profil.php">
      <button class="absolute left-0 top-0 mt-6 ml-4">
        <img src="img/Line 14 (1).png" alt="anakpanah">
      </button>
    </a>
    
    <div class="mx-24 rounded-lg shadow-lg my-20 w-2/3 h-2/3 backdrop-blur-md bg-white/30 max-w-2xl">
      <div class="h-full w-full flex justify-center items-center">
        <div class="w-2/3 h-full my-10">
          <form action="aksi_update.php" method="POST">
            <div class="flex flex-col items-center mt-3">
              <!-- Enter your old password -->
              <div class="mb-4 mt-20">
                <label for="password1" class="mx-4 text-black font-semibold m-4">Password Lama</label>
                <div class="bg-white w-full rounded-md mx-4 px-2">
                  <input type="password" name="password1" id="password1" class="w-full px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Old Password">
                </div>
              </div>

              <!-- Enter your new password -->
              <div class="mb-2">
                <label for="password2" class="mx-4 text-black font-semibold m-4">Password Baru</label>
                <div class="bg-white w-full rounded-md mx-4 px-2">
                  <input type="password" id="password2" class="w-full px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter New Password" name="password2">
                </div>
              </div>

              <div class="mx-4">
                <button type="submit" class="w-full bg-white text-black font-mono font-semibold rounded-md hover:bg-slate-700 btn btn-primary transition-colors">CHANGE PASSWORD</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>