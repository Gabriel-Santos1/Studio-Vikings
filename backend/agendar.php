<?php
session_start();
include("connection.php");

 if (isset($_POST["submit"])) {
    $barber = $_POST['option'] ?? '';
    $sql = "SELECT u.name,s.barber,s.date FROM `user` as u,schedule as s WHERE u.id_user=s.id_time";
    $result = mysqli_query($conn, $sql);
    
    while ($line = mysqli_fetch_assoc($result)) {
        $name = $line['name'];
        $barber = $line['barber'];
        $date = $line['date'];

        echo " <tr>
        <th scope='row'>$name</th>
        <td>$barber</td>
        <td>25/05/2002</td>
        </tr>";

    }
    
}

 else{
     header('location: ../frontend/html/login.html');
 }






?>