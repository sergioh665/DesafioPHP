<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$pagamentos = $pagamento->readAll();
?>

<h1>Lista de Pagamentos</h1>
<a href="/pagamentos/create">Adicionar Novo Pagamento</a>
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
<a href="/associados">Listar Associados aqui</a><p>
<a href="/anuidades">Listar Anuidades aqui</a>

<?php require_once(__DIR__ . '/../footer.php');