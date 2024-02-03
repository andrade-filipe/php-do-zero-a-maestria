<?php
    $host = "localhost";
    $user = "root";
    $password = "Root*3306";
    $db = "curso_php";
    $connection = new mysqli($host, $user, $password, $db);

    if($connection->connect_errno){
        echo "Erro: " . $connection->connect_error;
    }
?>