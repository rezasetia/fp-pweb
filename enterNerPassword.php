<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EnterNewPassword</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
    <div class="flex md:h-screen sm:h-screen lg:h-screen xl:max-h-fit h-full
                bg-cover bg-center items-center justify-center "
                style="background-image: url(img/kangguru.png);">
     
      <a href="login.html"> <button class=" absolute left-0 top-0 mt-4 ml-4">
        <img src="img/Line 14 (1).png" alt="anakpanah">
        </button></a>
      <div class="mx-24 rounded-lg 
                  my-20 w-2/3 h-2/3 backdrop-blur-md bg-white/30 max-w-2xl">
                  <div class="h-full w-full flex justify-center items-center  ">
                    <div class="w-2/3 h-full my-10 mt-64">
                      
                      
                      <div class="mx-2 first-letter: text-center text-xl
                       font-bold font-serif mb-3">Enter your new password?</div>
                      <div class="text-center text-white mb-3">This is the last step in recovering your password.</div>
                  
                       <!-- enter your username adress -->
                       <div class=" flex items-center px-3 mb-3" >
                        <input type="password" id="password" class="w-full py-2 px-4 
                                    rounded-md  focus:outline-none focus:ring-2
                                     focus:ring-blue-500
                                    focus:border-transparent" 
                                    placeholder="Password">
                                    <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-2 flex items-center">
                                    </button>
                                    
                      </div>
                     <!-- enter your pasword -->
                        <div class="mb-4 items-center px-3">
                          <input type="password" id="password" class="w-full py-2 px-4 
                                    rounded-md  focus:outline-none focus:ring-2
                                     focus:ring-blue-500
                                    focus:border-transparent" 
                                    placeholder="Confirm Password">
                                    <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-2 flex items-center">
                                    </button>
              
                        <div class="mb-4 mt-10 items-center px-3 md:mt-10 sm:mt-10" >
                          <button class="w-full bg-white text-black font-mono font-bold
                                         px-4 py-2 rounded-md hover:bg-slate-700 
                                         transition-colors">SUBMIT</button>
                        </div>
                        <!-- don have accoun -->
                            
                        </div>
                        </div>            
                 
                        </div>
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