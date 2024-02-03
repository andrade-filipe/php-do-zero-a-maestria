<?php
    $host = "localhost";
    $user = "root";
    $password = "Root*3306";
    $db = "curso_php";

    $connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
?>