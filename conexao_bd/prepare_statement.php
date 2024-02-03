<?php
    include_once "conexao.php";

    $nome = "Suporte para Microfone";

    $stmt = $connection->prepare("INSERT INTO itens (nome) VALUES (?)");
    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $connection->close();
?>