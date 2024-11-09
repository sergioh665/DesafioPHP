<?php
require_once '../../src/Router.php';
$associados = $associado->readAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Associados</title>
</head>
<body>
    <h1>Lista de Associados</h1>
    <a href="/associados/create">Adicionar Novo Associado</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data de Filiação</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($associados as $associado): ?>
        <tr>
            <td><?= $associado['id'] ?></td>
            <td><?= $associado['nome'] ?></td>
            <td><?= $associado['email'] ?></td>
            <td><?= $associado['cpf'] ?></td>
            <td><?= $associado['data_filiacao'] ?></td>
            <td>
                <a href="/associados/edit?id=<?= $associado['id'] ?>">Editar</a>
                <a href="/associados/delete?id=<?= $associado['id'] ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>