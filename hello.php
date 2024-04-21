<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Retrieve user data from session
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['user_email'];

// You can use this data to display on the page
?>


<!-- ////////////// -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommers-puma</title>
    <style>
      
#nav_text{
   
   font-size: 14px;
   line-height: 1.428; 
   

       --tw-text-opacity: 1;
       color: rgba(255, 255, 255, var(--tw-text-opacity));
   
}
.nav1{
background-color: rgba(138, 115, 80);
}
.after_navbar{
background-color:rgba(90, 82, 36);
}
    
#womenDropdown:hover .dropdown-menu {
    display: block;
}


.dropdown-menu {
    display: none;
}
.custom-hr {
        background-color:black; 
        height: 3px; 
        border: none;
    }
    .sticky-top {
      position: fixed;
       top: 0;
      /*z-index: 1000; */
    }

    </style>

</head>
<body>
    
<!-- nav1 start -->
 <nav class="navbar navbar-expand-lg nav1 ">
  <div class="container-fluid d-flex justify-content-center align-self-center">
   <h1 id="nav_text">FREE DELIVERIES. FREE RETURNS.</h1>

  </div>
</nav>
<script>
    function changeText() {
    var textElement = document.getElementById('nav_text');
    var currentText = textElement.textContent;
    
    if (currentText === 'FREE DELIVERIES. FREE RETURNS.') {
      textElement.textContent = 'EXTRA 5% DISCOUNT FOR ALL ONLINE PAYMENTS';
    } else {
      textElement.textContent = 'FREE DELIVERIES. FREE RETURNS.';
    }
  }


  setInterval(changeText, 2000);

</script>
<!-- nav1 End -->
<!-- /////////////////////////////////////////////////////////////////////////////// -->
<!-- nav2  start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
  <a class="navbar-brand logo  d-flex justify-content-center align-self-center" href="#">
      <img src="img\puma_(1).png" alt="Puma_logo" width="60" height="70">
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-light">

      </span>
    
    </button>
     
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">New</a>

        </li>
        <li class="nav-item">
         
          <!--  -->
          <div class="dropdown" id="womenDropdown">
    <a class="nav-link active text-light" aria-current="page" href="#" id="womenLink">Women</a>

    

    <ul class="dropdown-menu" aria-labelledby="womenLink">
   
    <div class="d-flex ">
      <div class="m-2">
      <li><a class="dropdown-item" href="#">Shoes</a></li>
    <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Running()">Running</p></li>
        <li><p class="dropdown-item" onclick="walking()">Walking</p></li>
        <li><p class="dropdown-item" onclick="training()" >Training & Gym</p></li>
        </div>
       
        <div class="m-2">
        <li><a class="dropdown-item" href="#">Sports</a></li>
            <li><hr class="dropdown-divider custom-hr"></li>
        <li><p class="dropdown-item" onclick="Cricket()">Cricket</p></li>
        <li><p class="dropdown-item" onclick="football()">football</p></li>
        <li><p class="dropdown-item" onclick="Batminton()">Batminton</p></li>
        </div>

      </div>
    </ul>
    <!--  -->
   
    

</div>

          <!--  -->

        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Men</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Sports</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success me-2" type="submit">Search</button>

<!--  -->
<div class="dropdown">
  <div  type="button" data-bs-toggle="dropdown" aria-expanded="false">
<!--  -->
<div id="cart_ani" onclick="cart()" class="cart_ani" data-totalitems="0">
        <i class="fas fa-shopping-cart"><img src="img\cart1.png" alt="cart"   width="45" height="36"></i>
      </div>

  <!--  -->
  </div>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Acount</a></li>
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="singup_login_forget_logout\signup.php">Login</a></button></li>
  
    <li>  <button type="button" class="btn "><a class="dropdown-item" href="">SingUp</a></button></li>
  </ul>
</div>
 
    <!--  -->

 <div class="cart-">
 
  <img src="img\user.png" alt="user" width="38" height="30" class="dropdown-toggle" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
  >
  </div>
 
</div>
  <!--  -->
      </form>
    </div>
  </div>
</nav>
<!-- nav2 end -->

 <!-- <div class="after_navbar d-flex flex-column justify-content-center align-items-center">

<div class="af1 text-light">EXTRA 15% OFF ON ORDERS ABOVE ₹2999*</div>
<div class="af2 text-light">Limited Time Offer | Ends Today ⏳</div>
<div class="af3 text-light">Auto-applied at checkout</div>

</div> -->
<h1>Hello, <?php echo $user_email; ?></h1>
<script>
        $(document).ready(function () {
  $("#addtocart").on("click", function () {
    var button = $(this);
    var cart = $("#cart_ani");
    var cartTotal = cart.attr("data-totalitems");
    var newCartTotal = parseInt(cartTotal) + 1;

    button.addClass("sendtocart");
    setTimeout(function () {
      button.removeClass("sendtocart");
      cart.addClass("shake").attr("data-totalitems", newCartTotal);
      setTimeout(function () {
        cart.removeClass("shake");
      }, 500);
    }, 1000);
  });
});

      </script> 
      <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
      </body>
</html>