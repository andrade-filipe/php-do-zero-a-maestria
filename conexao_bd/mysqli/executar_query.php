<?php
    include_once "conexao.php";

    $query = "SELECT * FROM itens";

    $result = $connection->query($query);

    print_r($result);

    $connection->close();
?>