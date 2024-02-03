<?php
    include_once "conexao.php";

    $id = 4;

    $stmt = $connection->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id); //troca o ? pela variavel id

    $stmt->execute(); //executa a query

    $result = $stmt->get_result(); //pega o resultado da query

    $data = $result->fetch_all(); //transforma em um array

    print_r($data);
    echo "<br>";

    $stmt2 = $connection->prepare("SELECT * FROM itens WHERE id = ?");
    $stmt2->bind_param("i", $id);
    $stmt2->execute();

    $result = $stmt2->get_result();
    $item = $result->fetch_row();

    print_r($item);

    $connection->close();
?>