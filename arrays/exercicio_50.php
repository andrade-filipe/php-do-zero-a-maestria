<?php

$pessoas = [
    'matheus' => 29,
    'alexia' => 28,
    'pedro' => 27,
    'joao' => 26,
];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?=$nome;?></td>
            <td><?=$idade;?></td>
        </tr>
    <?php endforeach; ?>
</table>