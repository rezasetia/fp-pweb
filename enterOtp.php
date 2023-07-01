<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
    <div class="flex md:h-screen sm:h-screen lg:h-screen xl:max-h-fit h-full
                bg-cover bg-center items-center justify-center "
                style="background-image: url(img/kucingpp.png);">
      <button class=" absolute left-0 top-0 mt-4 ml-4">
      <img src="img/Line 14 (1).png" alt="anakpanah">
      </button>
      
      <div class="mx-24 rounded-lg 
                  my-20 w-2/3 h-2/3 backdrop-blur-md bg-white/30 max-w-2xl">
                  <div class="h-full w-full flex justify-center items-center  ">
                    <div class="w-2/3 h-full my-10 mt-64">
                      <div class="mx-2 text-center text-xl
                       font-bold font-serif mb-3">Enter OTP</div>
                      <div class="text-center text-white mb-3 ">
                        Sent OTP on gilangramadhani0212@gmail.com</div>
                                <div class="flex justify-center space-x-2 w-full">
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit1" maxlength="1" readonly>
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit2" maxlength="1" readonly>
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit3" maxlength="1" readonly>
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit4" maxlength="1" readonly>
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit5" maxlength="1" readonly>
                                    <input class="otp-digit w-8 h-8 text-center" type="text" id="digit6" maxlength="1" readonly>
                                </div >
                                <div class=" mt-3 px-3">
                                    <button class=" w-full bg-white hover:bg-slate-700
                                     text-black font-bold py-2 px-4 
                                     rounded" onclick="generateOTP()">Generate OTP</button>
                                </div>
                                

                                <div class="mb-4 mt-10 items-center px-3 md:mt-10 sm:mt-10" >
                                    <button class="w-full bg-white text-black font-mono font-bold
                                                   px-4 py-2 rounded-md hover:bg-slate-700 
                                                   transition-colors">SUBMIT</button>
                                  </div>
                            </div>
                        </div>
                    
                        </div>
                    
                     
                       
                    
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
    <script > function generateOTP() {
        const digits = "0123456789";
        const otpLength = 6;
        let otp = "";
      
        for (let i = 0; i < otpLength; i++) {
          otp += digits[Math.floor(Math.random() * digits.length)];
        }
      
        const otpDigits = otp.split("");
        for (let i = 1; i <= otpLength; i++) {
          document.getElementById(`digit${i}`).value = otpDigits[i - 1];
        }
      }</script>
    
</body>

</html>