<?php 
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }
        else{
            session_destroy();
            header("location: ../index.php?msg=Você não tem acesso");
        }
        
?>

                                <!-- session_start();
                                $_SESSION['user'] = "Robson";
                                header("location: restricted"); -->