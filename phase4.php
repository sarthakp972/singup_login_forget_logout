<?php


// Check if user is logged in

// Retrieve user data from session
// $user_id = $_SESSION['user_id'];
// $user_email = $_SESSION['user_email'];


// You can use this data to display on the page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container-fluid d-flex align-items-center justify-content-center vh-1 ">
           <div class="card">
                <div class="card-body ">

                    <h1 class="text-center mb-3 bg-info-subtle " >Your Profile</h1>
                        <div class="text-center">
<div>
    <div class="d-flex flex-column align-items-center justify-content-center">
        <div class="circle-frame">
        <img src="img\profile_photo1.jpeg" alt="Your Image">
        </div>
        <div>
        <!-- <p>User ID: <?php// echo $userId; ?></p>
<p>Email: <?php //echo $email; ?></p> -->
        </div>
        <div>
            <a href="http://localhost/puma/main.php">Continue with your profile</a>
        </div>
    </div>
</div>
<!-- phase 4 end -->
</div></div></div></div>

</body>
</html>