<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$anuidades = $anuidade->readAll();
?>

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
<a href="/associados">Listar Associados aqui</a></p>
<a href="/pagamentos">Listar Pagamentos aqui</a>

<?php require_once(__DIR__ . '/../footer.php');