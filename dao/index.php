<?php
    include_once("db.php");
?>

<h1>Insira um Carro</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="brand">Kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="brand">Cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a Cor">
    </div>
    <input type="submit" value="Salvar">
</form>