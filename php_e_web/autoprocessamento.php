<?php

    $method = $_SERVER['REQUEST_METHOD'];

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($method == 'GET'):
    ?>
        <form action="autoprocessamento.php" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="submit" value="Enviar">
        </form>
    <?php
        else:
    ?>
    <h1>O seu nome é <?= $nome?></h1>
    <?php
    endif
    ?>
</body>
</html>