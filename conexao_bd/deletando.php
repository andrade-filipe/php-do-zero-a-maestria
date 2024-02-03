<?php
    include_once "conexao.php";

    $nome = "abajur";

    $stmt = $connection->prepare("DELETE FROM itens WHERE nome = ?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $connection->close();
?>