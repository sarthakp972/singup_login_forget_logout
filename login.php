<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = isset($_POST["input1"]) ? $_POST["input1"] : "";
    $password = isset($_POST["input2"]) ? $_POST["input2"] : "";

    $conn = mysqli_connect("localhost", "root", "", "sing_login") or die("connection failed");
    $sql = "SELECT * FROM user_info WHERE email = '$email' AND  password = '$password'";

    $result = mysqli_query($conn, $sql) or die("query unsuccessful");
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Store user data in session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_f_name'] = $row['f_name'];

        // Redirect to hello.php
        header("Location: http://localhost/puma/main.php");
        exit;
    } else {
        $response = "Authentication failed. Please check your email and password.";
        echo $response;
    }
}
?>
