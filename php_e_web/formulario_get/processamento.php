<?php

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
}

?>

<h1> seu nome é <?= $nome ?></h1>