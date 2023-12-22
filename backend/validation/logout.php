<?php 
session_start();
    if((isset($_SESSION['email']) == true) && (isset($_SESSION['password']) == true)){
        header('location: ../frontend/html/login.html');
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    }
?>