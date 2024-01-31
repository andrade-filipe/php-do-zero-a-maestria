<?php

$usuario = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissao' => 'Programador'
];

if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
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
    <form action="">
        <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>">
        <input type="text" name="idade" placeholder="Idade" value="<?= $idade ?>">
        <input type="text" name="profissao" placeholder="Profissao" value="<?= $profissao ?>">
    </form>
</body>
</html>