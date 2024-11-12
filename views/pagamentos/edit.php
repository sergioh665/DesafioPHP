<?php
require_once(__DIR__ . '/../../src/Router.php');
require_once(__DIR__ . '/../header.php');
$pagamento = $pagamento->read($_GET['id']);
?>

<h1>Editar Pagamento</h1>
<form action="/pagamentos/update" method="post">
    <input type="hidden" name="id" value="<?= $pagamento['id'] ?>">
    <label for="associado_id">ID do Associado:</label>
    <input type="number" id="associado_id" name="associado_id" value="<?= $pagamento['associado_id'] ?>" required><br>
    <label for="anuidade_id">ID da Anuidade:</label>
    <input type="number" id="anuidade_id" name="anuidade_id" value="<?= $pagamento['anuidade_id'] ?>" required><br>
    <label for="pago">Pago:</label>
    <input type="checkbox" id="pago" name="pago" <?= $pagamento['pago'] ? 'checked' : '' ?>><br>
    <button type="submit">Salvar</button>
    <a href="/pagamentos"><button type="button">Cancelar</button></a>
</form>

<?php require_once(__DIR__ . '/../footer.php');