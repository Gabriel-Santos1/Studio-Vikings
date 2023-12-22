<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "company";

    if($conn = mysqli_connect($server, $user, $pass, $bd)){
        //echo "connect";
    } 
    else{ 
        //echo "Error";

     }

    function mensagem($text, $type){
        echo "<div class='alert alert-$type' role='alert'>
        $text
      </div>";
    }

    
?>