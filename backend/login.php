<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $validation = mysqli_num_rows($result);
    if ($validation < 1) {
        echo 'Login ou senha inválido';
    } 
    else {
        echo 'Logado';
    }
}

else{
    header('location: ../frontend/html/login.html');
}






?>