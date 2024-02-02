<?php
    include_once "conexao.php";

    $query = "SELECT * FROM itens";

    $result = $connection->query($query);

    $connection->close();

    $itens = $result->fetch_assoc();

    print_r($itens);
?>