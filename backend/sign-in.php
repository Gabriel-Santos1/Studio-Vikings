<?php
include('connection.php');
if (isset($_POST["submit"])) {
    $first_name = $_POST['first_name'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $validation = mysqli_query($conn,"SELECT * FROM `user` WHERE email='$email'");
    $cont = mysqli_num_rows($validation);

    $validation_1 = mysqli_query($conn,"SELECT * FROM `user` WHERE cpf='$cpf'");
    $cont_1 = mysqli_num_rows($validation_1);

    if(($password == $confirm_password) && ($cont != 1) && ($cont_1 !=1)) {
        $result = mysqli_query($conn, "INSERT INTO `user`(`name`,`cpf`, `email`, `password`, `phone`) 
        VALUES ('$first_name','$cpf','$email','$password','$phone')");
        header('location: ../frontend/home.html');
        
    }
    else{
        header('location: ../frontend/html/sign-in.html');

    }


}
?>