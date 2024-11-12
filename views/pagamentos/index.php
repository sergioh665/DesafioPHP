<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$pagamentos = $pagamento->readAll();
?>

<h1>Lista de Pagamentos</h1>
<a href="/pagamentos/create" class="add-button">Adicionar Novo Pagamento</a>
<table>
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
            <a href="/pagamentos/edit?id=<?= $pagamento['id'] ?>" class="button edit">Editar</a>
            <a href="/pagamentos/delete?id=<?= $pagamento['id'] ?>" class="button delete">Deletar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="/associados" class="add-button">Listar Associados aqui</a>
<a href="/anuidades" class="add-button">Listar Anuidades aqui</a>

<?php require_once(__DIR__ . '/../footer.php'); ?>