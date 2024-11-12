<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$anuidade = $anuidade->read($_GET['id']);
?>

<h1>Editar Anuidade</h1>
<form action="/anuidades/update" method="post">
    <input type="hidden" name="id" value="<?= $anuidade['id'] ?>">
    <label for="ano">Ano:</label>
    <input type="number" id="ano" name="ano" value="<?= $anuidade['ano'] ?>" required><br>
    <label for="valor">Valor:</label>
    <input type="number" step="0.01" id="valor" name="valor" value="<?= $anuidade['valor'] ?>" required><br>
    <div class="button-group">
        <button type="submit" class="save">Salvar</button>
        <button class="cancel" ><a href="/associados" style="text-decoration: none;">Cancelar</a></button>
    </div>
</form>

<?php require_once(__DIR__ . '/../footer.php'); ?>