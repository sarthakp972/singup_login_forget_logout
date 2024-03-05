<?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $email = isset($_POST["input1"]) ? $_POST["input1"] : "";
   
     $conn=mysqli_connect("localhost","root","","sing_login") or  die("connection failed");
     $sql = "SELECT * FROM user_info WHERE email = '$email'";
    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");
    $row = mysqli_num_rows($result);

    


    if($row>0){
        // session_start();
        // $_SESSION['loginp'] = 'login';
        // session_write_close();

        echo "Login successful";
       
     


    }
    else{
        $response = "you are not login";
        echo $response;
    }
 }
   //////////////////////////////////////////////////////////////////
 ?>