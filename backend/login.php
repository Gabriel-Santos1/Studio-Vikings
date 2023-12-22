<?php
session_start();
include("connection.php");

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $validation = mysqli_num_rows($result);
    if ($validation < 1) {
        // echo 'Login ou senha inválido';
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location: ../frontend/html/login.html');
    } 
    else {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("location: agendar.php");
    }
}

else{
    header('location: ../frontend/html/login.html');
}






?>