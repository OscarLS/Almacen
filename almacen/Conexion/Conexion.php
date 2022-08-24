<?php 
    $conn = new mysqli('localhost','root','','almacen');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>