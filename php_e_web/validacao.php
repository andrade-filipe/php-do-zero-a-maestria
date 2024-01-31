<?php

    if(count($_POST) > 0){
        $validacoes = [];
        if($_POST['nome'] === ""){
            $validacoes[] = "Por Favor, Preencha o Nome do Usuário";
        }
        if($_POST['email'] === ""){
            $validacoes[] = "Por Favor, Preencha o Email do Usuário";
        }

        if($_POST['senha'] != $_POST['confirmar_senha']){
            $validacoes[] = "Senhas devem ser Iguais";
        }
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
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li> <?= $validacao ?> </li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    <form action="validacao.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="senha">
        </div>
        <div>
            <input type="password" name="confirmar_senha" placeholder="Confirmar Senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>