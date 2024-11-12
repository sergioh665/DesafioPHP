<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$associado = $associado->read($_GET['id']);
?>

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
    <div class="button-group">
        <button type="submit" class="save">Salvar</button>
        <button class="cancel" ><a href="/associados" style="text-decoration: none;">Cancelar</a></button>
    </div>
</form>

<?php require_once(__DIR__ . '/../footer.php'); ?>