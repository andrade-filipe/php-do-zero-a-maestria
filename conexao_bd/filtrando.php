<?php
    include_once "conexao.php";

    $id = 4;

    $stmt = $connection->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id); //troca o ? pela variavel id

    $stmt->execute(); //executa a query

    $result = $stmt->get_result(); //pega o resultado da query

    $data = $result->fetch_all(); //transforma em um array

    print_r($data);
?>