<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
    <div class="flex h-screen 
                bg-cover bg-center items-center justify-center"
                style="background-image: url(img/loginn.png);">
      <button class=" absolute left-0 top-0 mt-4 ml-4">
        <a href="HalamanPertama.php"><img src="img/Line 14 (1).png" alt="anakpanah"></a>
      
      </button>
      
      <div  class=" rounded-lg shadow-lg 
                  my-20 w-2/3 h-4/5 sm:h-4/5  backdrop-blur-md bg-white/30 max-w-2xl ">
                  <div class=" h-full w-full flex justify-center items-center  ">
                    <div class="w-2/3 h-full my-10   ">
                      <div class="mx-2 mt-10 text-center text-xl font-bold font-serif">Login For Admin</div>
                      <div class="text-center font-mono ">Selamat Datang MIN Semoga Hari mu Menyenangkan</div>
                      <div class="text-center text-white"></div>
                      <!-- ini untuk pembungkus ke2 kotak -->
                      <div class="flex justify-center items-center mt-5 mb-5">
                        <!-- kotak pada button google -->
                        

                         <!-- kotak facebook  -->
                         
                          
                      </div>
                    <form method="post" action="aksi_login1.php " >
                      <div class="  flex items-center px-3 mb-3" >
                        <input type="text" id="text" name="username" class="w-full py-2 px-4 rounded-md focus:outline-none 
                                     focus:ring-2 focus:ring-blue-500 focus:border-transparent "  
                                    placeholder="UserName">  
                                    
                      </div>
                     <!-- enter your pasword -->
                        <div class="mb-4 items-center px-3">
                          <input type="password" id="password" name="password" class="w-full py-2 px-4 
                                    rounded-md  focus:outline-none focus:ring-2
                                     focus:ring-blue-500
                                    focus:border-transparent" 
                                    placeholder="Enter your password">
                                    <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-2 flex items-center">
                                    </button>
                                    
                                    
                        </div>
                        <!-- untuk remember dan forgot -->
                     
                    
                        <div class=" items-center  px-3  " >
                          <button class="w-full bg-white text-black
                                         px-4 py-2 rounded-md hover:bg-slate-700 
                                         transition-colors" id="loginBtn" type="submit" >Login</button>
                        </div>
                        <!-- don have accoun -->
                          
                        </form>
                        
                        </div>            
                      
                        </div>
                        </div>
                     
                    
                
                                                                   
 <!-- untuk mata -->
                  
                  <script>function togglePasswordVisibility() {
                    const passwordInput = document.getElementById('password');
                  
                   
                  }
                  
          
                  </script>
                  <!-- seterusnya -->
</body>

</html>