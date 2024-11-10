<?php
require_once(__DIR__ . '/../../src/Router.php');
$anuidades = $anuidade->readAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Anuidades</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
    </nav>
    <h1>Lista de Anuidades</h1>
    <a href="/anuidades/create">Adicionar Nova Anuidade</a><p>
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
    <p>
    <br>
    <a href="/associados">Listar Associados aqui</a><p>
    <a href="/pagamentos">Listar Pagamentos aqui</a>

</body>
</html>