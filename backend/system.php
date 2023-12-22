<?php
    session_start();
    if((!isset($_SESSION['email']) == true) && (!isset($_SESSION['password']) == true)){
        header('location: ../frontend/html/login.html');
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
</head>
<body>
    
</body>
</html>