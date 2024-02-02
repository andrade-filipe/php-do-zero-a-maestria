<?php
    include_once "conexao.php";

    $table = "itens";
    $nome = "xicara";

    $query = "INSERT INTO $table (nome) VALUES ('$nome')";

    $connection->query($query);

    $connection->close();
?>