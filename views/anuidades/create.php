<?php
require_once(__DIR__ . '/../header.php');
?>

<h1>Criar Nova Anuidade</h1>
<form action="/anuidades/store" method="post">
    <label for="ano">Ano:</label>
    <input type="number" id="ano" name="ano" required><br>
    <label for="valor">Valor:</label>
    <input type="number" step="0.01" id="valor" name="valor" required><br>
    <button type="submit">Salvar</button>
    <a href="/anuidades"><button type="button">Cancelar</button></a>
</form>

<?php require_once(__DIR__ . '/../footer.php');