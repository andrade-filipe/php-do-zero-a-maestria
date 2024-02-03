<?php
    include_once "conexao.php";

    $id = 7;

    $stmt = $connection->prepare("UPDATE itens SET nome = ? WHERE id = ?");

    $nome = "Sofá";

    $stmt->bind_param("si", $nome, $id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }
?>