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

    if(($password == $confirm_password) && ($cont != 1)) {
        $result = mysqli_query($conn, "INSERT INTO `user`(`name`,`cpf`, `email`, `password`, `phone`) 
        VALUES ('$first_name','$cpf','$email','$password','$phone')");
        
        echo"Cadastrado com suceso!";
    }
    else{
        echo "Não foi possível cadastrar. As senhas não coincidem ou conta existente";
    }


}
?>