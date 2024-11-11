<?php
require_once(__DIR__ . '/../../src/Router.php');
$pagamento = $pagamento->read($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Pagamento</title>
</head>
<body>
    <nav>
            <a href="/">Home</a>
    </nav>
    <h1>Editar Pagamento</h1>
    <form action="/pagamentos/update" method="post">
        <input type="hidden" name="id" value="<?= $pagamento['id'] ?>">
        <label for="associado_id">Associado ID:</label>
        <input type="number" id="associado_id" name="associado_id" value="<?= $pagamento['associado_id'] ?>" required><br>
        <label for="anuidade_id">Anuidade ID:</label>
        <input type="number" id="anuidade_id" name="anuidade_id" value="<?= $pagamento['anuidade_id'] ?>" required><br>
        <label for="pago">Pago:</label>
        <input type="checkbox" id="pago" name="pago" <?= $pagamento['pago'] ? 'checked' : '' ?>><br>
        <button type="submit">Salvar</button>
        <a href="/pagamentos"><button type="button">Cancelar</button></a>
    </form>
</body>
</html>