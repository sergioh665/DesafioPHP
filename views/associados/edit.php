<?php
require_once '../../src/Router.php';
$associado = $associado->read($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Associado</title>
</head>
<body>
    <h1>Editar Associado</h1>
    <form action="/associados/update" method="post">
        <input type="hidden" name="id" value="<?= $associado['id'] ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $associado['nome'] ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $associado['email'] ?>" required><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?= $associado['cpf'] ?>" required><br>
        <label for="data_filiacao">Data de Filiação:</label>
        <input type="date" id="data_filiacao" name="data_filiacao" value="<?= $associado['data_filiacao'] ?>" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>