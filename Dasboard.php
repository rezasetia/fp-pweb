<?php 

session_start();

if (empty($_SESSION['status']) || $_SESSION['status'] != 'aktif')
{
  header('Location: ./loginuser.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>

  <div class="w-full h-screen ">
    <!-- baris pertama -->
    <div class="bg-orange-700 flex">
      <div class="mx-5 text-xs">
        <button class="flex  items-center text-center">
          <img src="img/Group 57.png" alt="LOKASI" width="16">
          <p>LOKASI TERDEKAT</p>
        </button>
      </div>
      <div class="text-xs mx-5">
        <button class="flex items-center text-center">
          <img src="img/Group.png" alt="PERJALAN" width="25">
          <p>PERJALAN BARANG ANDA</p>
        </button>
      </div>
    </div>
    <div class="border bg-slate-600 text-center font-serif text-white text-4xl">
    <?php
            if (isset($_SESSION['success_message'])) {
            echo '<div class="success-message">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']);
            }
?>  
    </div>
            
    <!-- baris kedua -->
    <div class="  flex  w-full mt-5">
      <!-- kotak1 -->
      <div class=" w-1/3">
        <img  src="img/sdde.png" alt="sdsd">
      </div>
      <!-- kotak kedua -->

      <div class="flex items-center">
  <form action="pencarian.php" method="GET" class="flex items-center">
    <div class="mr-2">
      <button type="submit">
        <img src="img/Group 19.png" alt="pencarian" class="p-2 " width="60">
      </button>
    </div>
    <div>
      <input class="rounded-full border py-2 px-4" type="text" name="keyword" placeholder="Cari barang Anda">
    </div>
  </form>
</div>
      <!-- kotak ke 3 -->
      <div class="w-1/3  items-center mx-auto my-auto">
        <div class="w-full  flex items-center justify-center mx-4">
          <div class=" w-1/3 ml-4">
            <a href="profil.php"><img src="img/Group 3.png" alt="" width="34"></a>
            
          </div>
          
        
        </div>
      </div>
    </div>
    <!-- row ke 3  -->
    <div class=" flex mt-5">
      <!-- untuk brand -->
   <div class="w-1/4" >
    <div class="w-full text-center justify-center " >
    <a href="brand.php">Hewan</a> 
    </div>
    
   </div>
        <!-- untuk hewan -->
        <div class="w-1/4" >
    <div class="w-full text-center justify-center " >
    <a href="makananHewan.php">Makanan</a> 
    </div>
    
   </div>
        <!-- untuk layanan -->
        <div class="w-1/4">
          <div class="flex w-full text-center justify-center">
            <div>
              layanan
            </div>
            <div>
              <button class="rounded-full py-2 px-4" onclick="toggleDropdown('Layanan')">
                <img src="img/Icon.png" alt="">
              </button>
              <div id="Layanan" class="absolute hidden bg-white rounded shadow">
                <ul>
                  <li><a href="klinik.php">Klinik Hewan</a></li>
            
                  <li><a href="penginapan.php">Penginapan Hewan</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=" w-1/4 text-center">Blog</div>
      </div>
      <!-- row ke 4 -->
<div class="items-center justify-center mt-5  ">
</div>
<div class="  mx-auto max-w-xs   ">
  <img src="img/National Dog Day Templates - Dibuat dengan PosterMyWall 1.png" alt="ass"  >
</div>
  
<!-- row ke 5 -->
<div class="mt-5 bg-gray-300 rounded-2xl">
  <div class=" rounded-2xl  flex items-center max-w-2xl w-full mx-auto ">
    <div class=" w-1/2 p-5 -10">
      <img src="img/unsplash_0nJmKtzjs_E.png" alt="anjingkucing">
    </div>
    <div class=" w-1/2">
      <img src="img/Group 55.png" alt="baru">
    </div>
  </div>
</div>


<!-- row ke 6 -->
<div class="w-full bg-cover p-10 " style="background-image: url(img/Group\ 56.png);">
  <div class="h-48 w-full flex items-center justify-center mt-10">
    <div class="bg-gray-300 rounded-2xl max-w-4xl">
      <div class="text-center font-bold m-2 text-xl">
        Jasa Layanan & Kebutuhan Hewan Peliharaan
      </div>
      <!-- Isi konten lainnya di dalam kotak jasa layanan -->     
  <div class="flex mt-5 gap-4   ">
    <a href="" class="w-1/4 p-5 items-center  " >
      <img src="img/Frame 55.png " alt="Frame" width="80"  >
    </a>
    <a href="" class="w-1/4 p-5 items-center  ">
      <img src="img/Frame 56.png" alt="Frame" width="80">
    </a>
    <a href="" class="w-1/4  p-5 items-center ">
      <img src="img/Frame 57.png" alt="Frame" width="80">
    </a>
    <a href="" class="w-1/4 p-5 items-center  ">
      <img src="img/Frame 58.png" alt="Frame" width="80">
    </a>
     </div>
    </div>
  </div>
</div>

<!-- row ke 7 -->
<div class=" bg-gray-300 flex">
  <!-- kotak1 -->
  <div class="w-1/4 ">
    <div class="flex justify-end p-2">
      <img src="img/image 18.png" alt="imagee" width="120"> 
    </div>
  </div>
  <!-- kotak 2 -->
  <div class="w-1/4  p-2"><p class="text-orange-600 font-bold">Find Us</p>
     <a href="" class="text-xs">Gg. Sri Kaloka,Kadipaten, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55132</a> 
    </div>
  <!-- kotak3 -->
  <div class="w-1/4  p-2 flex flex-col ">
    <p class="text-orange-600 font-bold mb-1">Servicess</p>
    <a href="" class="text-xs">Klinik Hewan </a>
    <a href="" class="text-xs">Aksesoris Hewan</a>
    <a href="" class="text-xs">Makanan Hewan</a> 
    <a href="" class="text-xs">Penginapan Hewan</a>
   </div>
  <!-- kotak4 -->
  <div class="w-1/4  p-2 flex flex-col">
    <p class="text-orange-600 font-bold mb-1">Animals</p>
    <a href="" class="text-xs">Kucing</a>
    <a href="" class="text-xs">Anjing</a> 
    <a href="" class="text-xs">Kelinci</a> 
    <a href="" class="text-xs">Marmut</a> 
    
   </div>
</div>

<!-- row ke 8 -->
<div class="flex">
  <!-- kotak 1 -->
  <div class="bg-gray-400 w-1/2 text-center text-xs"> 
    <div class="w-full flex p-2 m-2">
      <div class="w-1/4">Copyright © 2023</div>
      <div class="w-1/4">Privacy</div>
      <div class="w-1/4">Policy</div>
      <div class="w-1/4">Terms of Use Search</div>
    </div>        
 
  </div>
  <!-- kotak 2 -->
  <div class=" justify-end w-1/2 flex bg-gray-400 text-center items-center ">
    <div>
<img src="img/Vector (1).png" alt="Vector11">
    </div >
    <div>
      WhatsApp: 0857-5383-7413
    </div>
  </div>
</div>
</div>

  <script>
    function toggleDropdown(id) {
      const dropdownOptions = document.getElementById(id);
      dropdownOptions.classList.toggle("hidden");
    }
  </script>
</body>
</html>