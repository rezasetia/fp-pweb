<?php

session_start();

if (!empty($_SESSION['status'])) {
  if ($_SESSION['status'] == 'aktif' and $_SESSION['role'] == 'user') {
    header('Location: ./dasboard.php');
  } else if ($_SESSION['status'] == 'aktif' and $_SESSION['role'] == 'admin') {
    header('Location: ./admin_dasboard.php');
  }
}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create your account</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>


  <div class="flex md:h-screen sm:h-screen lg:h-screen xl:max-h-fit 
                bg-cover bg-center items-center justify-center" style="background-image: url(img/anjingss.png);">

    <a href="loginuser.php"><button class=" absolute left-0 top-0 mt-4 ml-4">
        <img src="img/Line 14 (1).png" alt="anakpanah">
      </button></a>


    <form method="post" action="aksi_create.php" class="mx-24 rounded-lg shadow-lg 
                  my-20 w-2/3 h-2/3 backdrop-blur-md bg-white/30 max-w-2xl">
      <div class="h-full w-full flex justify-center items-center  ">
        <div class="w-2/3 h-full my-10 ">
          <div class="mx-2 mt-4 text-center text-xl font-bold font-serif">Create your account</div>
          <div class="text-center text-white">Unlock all Features!</div>

          <div class=" w-full text-center text-xl font-serif font-bold ">
            <?php if (isset($_GET['success']) && $_GET['success'] == "true") {
              echo "Akun berhasil ditambahkan!";
            }
            ?>
            <?php
            if (isset($_GET['error'])) {
              $errorMessage = $_GET['error'];
              echo '<div class="error-message">' . $errorMessage . '</div>';
            }
            ?>
          </div>
          <!-- enter your username adress -->
          <div class="flex items-center px-3 mb-3">
            <input type="text" id="text" name="username" class="w-full py-2 px-4 rounded-md focus:outline-none 
                                     focus:ring-2 focus:ring-blue-500 focus:border-transparent " placeholder="Username">

          </div>
          <!--  enter your email adress 
                      <div class="flex items-center px-3 mb-3" >
                        <input type="email" id="email" class="w-full py-2 px-4 rounded-md focus:outline-none 
                                     focus:ring-2 focus:ring-blue-500 focus:border-transparent "  
                                    placeholder="Enter your email address">
                      </div> -->


          <div class="mb-4 items-center px-3">
            <input type="password" id="password" name="password" class="w-full py-2 px-4 
                                    rounded-md  focus:outline-none focus:ring-2
                                     focus:ring-blue-500
                                    focus:border-transparent" placeholder="Enter your password">
          </div>
          <!-- untuk remember dan forgot -->
          <div class=" w-full sm:w-1/2 
                        mp-4 text-left items-center ">
            <input type="checkbox">Accept terms and conditions
          </div>


          <div class="mb-4 items-center px-3 ">
            <button class="w-full bg-white text-black
                                         px-4 py-2 rounded-md hover:bg-slate-700 
                                         transition-colors">Create</button>
          </div>

          <!-- don have accoun -->
          <div class="text-center">You Have Account? <a href="loginuser.php" class="text-white">Login Now</a></div>
        </div>
      </div>



    </form>
  </div>
  </div>
  </div>
  </div>
  </div>

  </div>

  </div>
  </div>
  </div>

</body>

</html>