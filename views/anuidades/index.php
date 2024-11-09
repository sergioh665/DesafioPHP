<?php
require_once '../../src/Router.php';
$anuidades = $anuidade->readAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Anuidades</title>
</head>
<body>
    <h1>Lista de Anuidades</h1>
    <a href="/anuidades/create">Adicionar Nova Anuidade</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ano</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($anuidades as $anuidade): ?>
        <tr>
            <td><?= $anuidade['id'] ?></td>
            <td><?= $anuidade['ano'] ?></td>
            <td><?= $anuidade['valor'] ?></td>
            <td>
                <a href="/anuidades/edit?id=<?= $anuidade['id'] ?>">Editar</a>
                <a href="/anuidades/delete?id=<?= $anuidade['id'] ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>