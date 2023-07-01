<html lang="en">
<head>
<?php
session_start();

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="output.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<!-- bagian atas  -->
<body>
    <div class="container absolute top-0 left-0 mx-10" >
<div class="contents text-justify ">
    <img src="img/image 1.jpg" alt="makanankucing" width="73" 
    class="float-left">
    <p class="text-amber-900 font-bold">
        PETSHUY
    </p>
    <p class="font-semibold text-amber-900">Pusat Kebutuhan Hewan</p>
     <p class="font-semibold text-amber-900" >Perilaharaan Yogyakarta</p>
</div>
</div>
 
<!-- baground  -->
<div class="bg-cover bg-center  " style="background-image: url(img/vector.png);">
    <!-- bungkus untuk colum -->
    <div class="flex flex-col md:flex-row">
        <!-- bugkus sebelah kiri  -->
        <div class="container mx-5 ml-28 
         py-10" width="1/2 w-full md:w-1/2 px-5 py-10" >
            <div class="text-8xl font-serif mt-36  " >
                <p class="text-amber-900">Celebr<a class="text-white">ating the</a></p>
                <p class="text-amber-900">Courag<a class="text-white">e and
                   </a> <a class="text-amber-900">Love</a></p>
                <p class="text-amber-900">of Animals</p>
            </div>
            <div class=" mt-4  rounded-lg max-w-xl
                         container text-sm text-justify text-black " >
                <p>Belanja Online Kebutuhan Hewan
                    Peliharaan HANYA Petshop Indonesia! Menyediakan brand lokal dan internasional yang terus bertambah untuk PetLovers di seluruh Indonesia. Kami memiliki lebih dari 5.000 produk yang dapat memenuhi kebutuhan hewan peliharaan kesayangan Anda dengan menawarkan berbagai produk pilihan dari berbagai kategori, mulai dari makanan, vitamin dan obat-obatan, mainan, aksesoris, baju, kandang, dan masih banyak lagi.</p>
            </div>
            <a href="loginuser.php"><button class= " mt-4 text-white font-semibold w-24 h-10 rounded-lg
              hover:bg-amber-500
               hover:text-black
                bg-amber-950">
                Get Started
                
             </button></a>
            
        </div>
        <!-- bungkus seblah kanan -->
<div class=" my-auto lg:mr-52 md:mr-42 mr-0 justify-center ">
<!-- bungkus untuk button dan gambar -->
  <div class="w-full" >
      <img id="image"  src="img/anji1.png" alt="Gambar" class="mx-auto rounded-2xl">
        <div class="flex items-center justify-center mt-4">
        <button id="prevButton" class="px-4 py-2 bg-amber-900  hover:bg-amber-500 text-white rounded">Prev</button>
        <button id="nextButton" class="px-4 py-2 bg-amber-900  hover:bg-amber-500 text-white rounded ml-2">Next</button>
        </div>
  </div>
</div>
<!-- untuk fungsi button -->
<script>
  const prevButton = document.getElementById('prevButton');
  const nextButton = document.getElementById('nextButton');
  const image = document.getElementById('image');
  const images = ['img/anji1.png', 'img/anji2.png', 'img/anji3.png', 'img/anji4.png'];
  let currentIndex = 0;
  nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    const newImage = images[currentIndex];
    image.src = newImage;
  });

  prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    const newImage = images[currentIndex];
    image.src = newImage;
  });
</script>
    </div> 

    </div>
           

</body>
</html>