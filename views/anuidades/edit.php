<?php
require_once '../../src/Router.php';
$anuidade = $anuidade->read($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Anuidade</title>
</head>
<body>
    <h1>Editar Anuidade</h1>
    <form action="/anuidades/update" method="post">
        <input type="hidden" name="id" value="<?= $anuidade['id'] ?>">
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" value="<?= $anuidade['ano'] ?>" required><br>
        <label for="valor">Valor:</label>
        <input type="number" step="0.01" id="valor" name="valor" value="<?= $anuidade['valor'] ?>" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>