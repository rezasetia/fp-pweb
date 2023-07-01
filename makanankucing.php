
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MakananKucing</title>
  <link rel="stylesheet" href="output.css">
</head>
<body>
  <div class="w-full h-screen  ">
    <!-- row gambar petshop -->
    <div class=" w-full  " >
             <img  src="img/sdde.png" alt="sdsd" class=" mx-auto" >
      </div>
    <!-- row brand-hewan-layanan-blog- -->
    <div class="flex  w-full mt-5 ">
      <!-- kotak1 -->
      <div class="  flex  w-full ">
        <!-- untuk brand -->
        <div class=" w-1/4 text-center">
          <div class="flex w-full text-center justify-center">
          <a href="brand.php"><div>Hewan</div></a>
            </div>
          </div>
          <!-- untuk hewan -->
          <div class=" w-1/4 text-center">
          <div class="flex w-full text-center justify-center">
            <div> <a href="makananHewan.php">Makanan</a></div>
            </div>
          </div>
          <!-- untuk layanan -->
          <div class=" w-1/4">
            <div class="flex w-full text-center justify-center">
              <div>
                layanan
              </div>
              <div>
                <button class="rounded-full py-2 px-4" onclick="toggleDropdown('Layanan')">
                  <img src="img/Icon.png" alt="">
                  <div id="Layanan" class="absolute hidden bg-white rounded shadow">
                    <ul>
                    <li><a href="klinik.php">Klinik Hewan</a></li>
            
            <li><a href="penginapan.php">Penginapan Hewan</a></li>
                    </ul>
                  </div>
                </button>
                
              </div>
            </div>
          </div>
          <div class=" w-1/4 text-center">Blog</div>

          <!-- untuk gambar akun -->
          <div class=" w-1/4     ">
            <div class="w-full    mx-auto">
              <div class=" w-full ">
              <a href="profil.php">
                <img src="img/Group 3.png" alt="" width="30" class="mx-auto">
                </a>
              </div>
              
            </div>
        </div>
      </div>
        </div>
      
     
      
      <!-- row homepage and brand  -->
      <div class="w-1/2 flex  px-3 mt-5 mb-5">
        <div class="w-1/2 ">
            <div class="w-full flex">
                <div class="w-2/3 text-center"><a href="makananHewan.php">kategori Makanan</a></div>
                <div class="w-1/3 items-end">  
                     <img src="img/Line 15.png" alt="anakpanah" >
                    </div>
             
            </div> 
        </div>
        <div class="w-1/2 ">Makanan Kucing </div>
      </div>
<!-- row seacrh -->
<div class="font-bold ml-5 ">Search</div>
    <!-- baris ke 5 -->
    <div class="rounded-full bg-gray-300 w-1/2 ml-5 mb-5 flex items-center mt-5">
        <button>
          <img src="img/Group 19.png" alt="pencarian" class="p-2">
        </button>
        <input type="email" id="email" class="bg-gray-300 w-full py-2 px-4 rounded-md 
        hover:bg-white mr-2" placeholder="Cari barang anda">
      </div>

<!-- row baris pilihan kucing anjing burung kelinci-->
<div class="relative inline-block  w-64">
    <select id="kategori" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
      <option value="kategoriHewan">Katagori Makanan</option>
       
     
    </select>
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path d="M10 12h-1l-3 3v-2H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-2v2l-3-3z"/>
      </svg>
    </div>
  </div>
  
  <div id="gambar-kategori" class="mt-4 px-4 flex flex-wrap ">
    <!-- Gambar Kucing -->
    
  </div>
  <!-- batas -->
  <!-- buat gambar ke 2 -->
  <?php include 'koneksi.php';
    $sql = "SELECT * FROM makanankucing where merk ='Felibite' " ;
    $result = mysqli_query($link, $sql);
    ?>
                <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
               <div  class="border p-5 " >
                     
                  <?php echo $row['merk']; ?>    
                     
                  <img src="img/<?php echo $row["gambar"]; ?>" width="400">
                  <?php echo $row['harga']; ?> 
                  <br>
                  <a href="Makanankucing.php">
                   <button class="border ml-5 w-1/4 rounded-md bg-red-400">Beli</button>
                    </a>
               </div>                  
                </tr>
                
               
                <?php } ?> 
                <?php 
                // buat gambar ke2
    $sql = "SELECT * FROM makanankucing where merk ='Whiskas' " ;
    $result = mysqli_query($link, $sql);
    ?>
                <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
               <div  class="border p-5 " >
                     
                  <?php echo $row['merk']; ?>    
                     
                  <img src="img/<?php echo $row["gambar"]; ?>" width="400">
                  <?php echo $row['harga']; ?> 
                  <br>
                  <a href="login.php">
                   <button class="border ml-5 w-1/4 rounded-md bg-red-400">Beli</button>
                    </a>
               </div>                  
                </tr>
                
               
                <?php } ?> 
                <?php 
                // buat gambar ke 3
    $sql = "SELECT * FROM makanankucing where merk ='Felibite' " ;
    $result = mysqli_query($link, $sql);
    ?>
                <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
               <div  class="border p-5 " >
                     
                  <?php echo $row['merk']; ?>    
                     
                  <img src="img/<?php echo $row["gambar"]; ?>" width="400">
                  <?php echo $row['harga']; ?> 
                  <br>
                  <a href="Makanankucing.php">
                   <button class="border ml-5 w-1/4 rounded-md bg-red-400">Beli</button>
                    </a>
               </div>                  
                </tr>
                
               
                <?php } ?> 
                
          
  <!-- batas -->
  
                  
                  
<!-- row ke 7 -->
<div class=" bg-gray-300 flex mt-5">
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