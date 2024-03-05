<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div  id="phase1" class="text-light">
                <p>To reset your password enter your Email we'll send you a otp to reset your password.</p>
            
             <div>
             <div class="field-wrap">

            
            <input type="email"  placeholder="example123@gmail.com "   name="otp_email" id="otp_email">
            </div>
            
          
             </div>
            
             <button onclick="otp()" class="button button-block">genrate otp</button>

              </div><!-- phase 1 end -->
             <div id="phase2">

             <p  class="text-light">To reset your password enter otp we have sent you a otp to reset your password.</p>
             <div class="field-wrap">
                  
            <input type="text"  placeholder="Insert otp"   name="otp_otp" id="otp_otp">
            </div>
            
            <p class="forgot" onclick="otp1()">Resend otp</p>
            <button onclick="otp_submit()" class="button button-block">submit</button>
             </div>

            <!-- phase2 end -->
            <!-- phase 3 start -->
            <div id="phase3">
            <div class="field-wrap">
          
          <input type="password" placeholder="Insert new  Password"  name="otp_password" id="otp_password">
          </div>
          <button onclick="submit()" class="button button-block">submit</button>
          </div>
          
            <!-- phase 3 end -->
           
             <script>
                  $("#phase1").show();
              $("#phase2").hide();
              $("#phase3").hide();


                    function otp(){
                      let otp_email = $("#otp_email").val();
                      console.log("email",otp_email);

                        $.ajax({
                    url: "otp_phone.php",
                    type: "POST",
                    data: { input1: otp_email},
                    success: function(response) {
                      
                    // alert("Thank you! " + response); 
                    console.log(response);
                    if (response.trim() === "Login successful") {
                        
                       
                        let otp = Math.floor(1000 + Math.random() * 9000);
                        alert("otp - " +otp)
                        $("#otp_otp").val(otp);
                   
                $("#phase1").hide();
              $("#phase2").show();
              $("#phase3").hide();

                        
                          
        
                    }
                    else{
                        alert("email id  not exist");
                    }
                
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });
            
    // /////////////////////////////////////



           
                    }

                    /////////////////////////////////////////////////////////////
                    function otp1(){
                        let otp = Math.floor(1000 + Math.random() * 9000);
                        alert("otp - " +otp)
                        $("#otp_otp").val(otp);
                    }
               
//                     $(document).ready(function(){
//     // Inserting data into the input field
//     $("#myInput").val("Hello, World!");
// });
                        //////////////////////////////////////////////////////////

                      function otp_submit(){
                        $("#phase1").hide();
              $("#phase2").hide();
              $("#phase3").show();

                      }
                      /////////////////////////////////////////////////////
                      function submit(){
                        let otp_email = $("#otp_email").val();
                        let otp_password = $("#otp_password").val();
                       
                        $.ajax({
                    url: "update.php",
                    type: "POST",
                    data: { input1: otp_email,input2:otp_password},
                    success: function(response) {
                      
                     alert("Thank you! your password updated " );
                     
                 window.location.reload(); 
                    // console.log(response);

                   
                
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });

                      }
             </script>


</body>
</html>
