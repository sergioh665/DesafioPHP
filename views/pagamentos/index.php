<?php
require_once(__DIR__ . '/../../src/Router.php');
$pagamentos = $pagamento->readAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pagamentos</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
    </nav>
    <h1>Lista de Pagamentos</h1>
    <a href="/pagamentos/create">Adicionar Novo Pagamento</a><p>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Associado</th>
            <th>Anuidade</th>
            <th>Pago</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($pagamentos as $pagamento): ?>
        <tr>
            <td><?= $pagamento['id'] ?></td>
            <td><?= $pagamento['associado_id'] ?></td>
            <td><?= $pagamento['anuidade_id'] ?></td>
            <td><?= $pagamento['pago'] ? 'Sim' : 'Não' ?></td>
            <td>
                <a href="/pagamentos/edit?id=<?= $pagamento['id'] ?>">Editar</a>
                <a href="/pagamentos/delete?id=<?= $pagamento['id'] ?>">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
    <br>
    <a href="/associados">Listar Associados aqui</a><p>
    <a href="/anuidades">Listar Anuidades aqui</a>
</body>
</html>