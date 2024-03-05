<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$conn = mysqli_connect("localhost","root","","sing_login") or die("connection failed");
// Get form data
$f_name = isset($_POST["input1"]) ? $_POST["input1"] : "";
$s_name= isset($_POST["input2"]) ? $_POST["input2"] : "";
$email= isset($_POST["input3"]) ? $_POST["input3"] : "";
$phone_number  = isset($_POST["input4"]) ? $_POST["input4"] : "";
$password = isset($_POST["input5"]) ? $_POST["input5"] : "";


$sql = "INSERT INTO user_info (f_name,s_name,email, mobile,password) VALUES ('{$f_name}', '{$s_name}', '{$email}', '{$phone_number}', '{$password}')";

$result=mysqli_query($conn, $sql) or die("Query Unsuccessful");
$response = "Your form has been successfully submitted. ,";
echo $response;



}
else{
    echo "Invalid request method";
}
?>


  

  

 
    
     

   