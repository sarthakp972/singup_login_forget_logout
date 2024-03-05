
 
 <?php
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $email = isset($_POST["input1"]) ? $_POST["input1"] : "";
    $password = isset($_POST["input2"]) ? $_POST["input2"] : "";

    $conn=mysqli_connect("localhost","root","","sing_login") or  die("connection failed");
    $sql = $sql = "SELECT * FROM user_info WHERE email = '$email' AND  password = '$password'";
    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");
    $row = mysqli_num_rows($result);

    if($row>0){
        // session_start();
        // $_SESSION['loginp'] = 'login';
        // session_write_close();

        echo "Login successful";
        // header("Location: next_page.php");
        // exit;
     


    }
    else{
        $response = "Authentication failed. Please check your email and password." ;
        echo $response;
    }
 }
   //////////////////////////////////////////////////////////////////
 ?>
