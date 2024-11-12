<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$associados = $associado->readAll();
?>

<h1>Lista de Associados</h1>
<a href="/associados/create" class="add-button">Adicionar Novo Associado</a>
<table>
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
            <a href="/associados/edit?id=<?= $associado['id'] ?>" class="button edit">Editar</a>
            <a href="/associados/delete?id=<?= $associado['id'] ?>" class="button delete">Deletar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="/anuidades" class="add-button">Listar Anuidades aqui</a>
<a href="/pagamentos" class="add-button">Listar Pagamentos aqui</a>

<?php require_once(__DIR__ . '/../footer.php'); ?>