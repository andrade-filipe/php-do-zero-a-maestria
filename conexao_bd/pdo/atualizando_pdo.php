<?php
    include_once "conexao.php";

    $id = 4;
    $nome = "Teclado Microsoft";

    $stmt = $connection->prepare("UPDATE itens SET nome = :nome WHERE id = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);

    $stmt->execute();
?>