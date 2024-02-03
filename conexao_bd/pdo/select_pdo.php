<?php
    include_once "conexao.php";

    $id = 4;

    $stmt = $connection->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // $data = $stmt->fetch(PDO::FETCH_ASSOC);

    // print_r($data);
    // echo "<br>";

    $itens = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    print_r($itens);