<?php
    include_once "conexao.php";

    $stmt = $connection->prepare("INSERT INTO itens (nome) VALUES (:nome)");

    $nome = "Suporte de Monitor";
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();
?>