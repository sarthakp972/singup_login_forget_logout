 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication</title>
    <link rel="stylesheet" href="signup.css">
    
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
</head>
<body >
    

  <div  class="form">
      
      <ul class="tab-group">
        <li class="tab  active"><a  onclick="sign_up()" id="si">Sign Up</a></li>
        <li class="tab "><a  onclick="log_in()" id="li">Log In</a></li>
      </ul>
      
      <div class="tab-content">

<!-- ///////////////////////////////////////////////////////////singup page start -->
        <div id="signup">   
          <!-- <h1 class="text-light">Sign Up </h1> -->
          
          <div class="form1">
          
          <div class="top-row">
            <div class="field-wrap">
           
          
              <input type="text"   placeholder="FIRST NAME" name="f_name" id="f_name" required autocomplete="off">
            </div>
        
            <div class="field-wrap">
         
            <input type="text"   placeholder="SECOND NAME" name="s_name" id="s_name" required autocomplete="off">
            </div>

            
            <div class="field-wrap">
         
            <input type="number"   placeholder="MOBILE" name="phone" id="phone" required autocomplete="off">
            </div>

          </div>



          <div class="field-wrap">
            
          <input type="email"  placeholder="example123@gmail.com"   name="email" id="email">
          </div>
          
          <div class="field-wrap">
          
          <input type="password" placeholder="Insert Password"  name="password" id="password">
          </div>
          
          <button onclick="submit_sign()" class="button button-block">Get Started</button>
          
           </div>   <!--form 1 end -->

        </div>
        <!-- //////////////////////////////////////////////////////end signup  page -->
        <div id="login">   
          <!-- <h1>Welcome Back!</h1> -->
          
          <div>
          
            <div class="field-wrap">
           
            <input type="email"  placeholder="example123@gmail.com"   name="l_email" id="l_email">
          </div>
          
          <div class="field-wrap">
          <input type="password" placeholder="Insert Password"  name="l_password" id="l_password">
     
          </div>
          
          <p class="forgot" onclick="forget_pass()">Forgot Password?</p>
          
          <button onclick="login2()" class="button button-block"/>Log In</button>
          
  </div>

        <!-- Login end  --></div>

        <!-- start forget password page-->
        <!-- ///////////////////////////////////////////////////////////////////// -->
        <div id="forget_password">
          <?php
          include 'forget.php';
          ?>
       

        </div>
       



   <!-- end forget password page-->


     
                
      </div><!-- tab-content -->

   
      
</div> <!-- /form -->

<div id="phase4">
   <?php
          include 'phase4.php';
          ?>
   </div>



<script>
    $("#signup").show();
    $("#login").hide();
    $("#forget_password").hide();
    $("#phase4").hide();
    //////////////////////////////////////////////////////change start
      $('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  

  
});
//////////////////////////////////////////////////////change end
    function log_in(){
        $("#signup").hide();
    $("#login").show();
    $("#forget_password").hide();
}

    function sign_up(){
        $("#signup").show();
    $("#login").hide();
    $("#forget_password").hide();
    $("#phase4").hide();
    }
//////////////////////////////////////////////////////////////////////////////////////////

function submit_sign(){
    let first_name = $("#f_name").val();
    let second_name = $("#s_name").val();
let email = $("#email").val();
let phone = $("#phone").val();
let password = $("#password").val();


 let index1=email.indexOf(".");
let index2=email.indexOf("@");




if(first_name.length<=3){
alert("please Enter a valid name ,  name should be atleast 3 char ");
}

else if( index1==-1||index2==-1){
    alert("please Enter a valid email");   

}

 else if(phone.length<10||phone.length>10 ){

  alert("please enter 10 digit phone number");
 }

 else{
    /////////////////////////////////ajax start
    console.log("data will we save");
    $.ajax({
    url: "datasave.php",
    type: "POST",
    data: { input1:first_name,input2:second_name,input3:email,input4:phone,input5:password},

    success: function(response) {
      console.log(response)
    
    
      
        alert("Congratulations! You have successfully signed up. Please proceed to the login page and enter your email and password to log in.");

         $("#signup").hide() ;
    $("#login").show();
    $("#forget_password").hide();
    $("#phase4").hide();

      /* ///////////////////////////////////////////////////////////////// 
///////////////////////////////////////////////// */

    },
    error: function(xhr, status, error) {
        alert("Error: " + status + "\nMessage: " + error);
        console.log("error");
    }
});

    // ajax end
  
 }
}
///////////////////////////////////////////////////////////////////////////////

function login2(){
    let l_password = $("#l_password").val();
    let l_email = $("#l_email").val();



let index1=l_email.indexOf(".");
let index2=l_email.indexOf("@");

if( index1==-1||index2==-1){
    alert("please Enter a valid email");
    }

    else{
        $.ajax({
                    url: "login.php",
                    type: "POST",
                    data: { input1: l_email, input2: l_password},
                    success: function(response) {
                    alert("Thank you! " + response); 
                    console.log(response);
                    if (response.trim() === "Login successful") {
                      ////////////////////////////////////////remove body
                     
                     
            // Get all elements except the body
           
            console.log("if ke ander");
        
                      ////////////////////////////////////////remove body end
                     
     $("#signup").hide();
    $("#login").hide();
    $("#forget_password").hide();
    $("#phase4").show();


                    }
                    console.log("if ke bahar");
                    $("#signup").hide();
    $("#login").hide();
    $("#forget_password").hide();
    $("#phase4").show();
                },
                    error: function(xhr, status, error) {
                        alert("Error: " + status + "\nMessage: " + error);
                    }
                });

    }

}
  
/////////////////////////////////////////////////////////////////////////////////////////

function forget_pass(){
  $("#signup").hide();
    $("#login").hide();
    $("#forget_password").show();
    $("#phase4").hide();
  alert("forget");
}

</script>
</body>
</html> 
