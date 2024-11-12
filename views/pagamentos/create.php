<?php
require_once(__DIR__ . '/../header.php');
?>

<h1>Criar Novo Pagamento</h1>
<form action="/pagamentos/store" method="post">
    <label for="associado_id">ID do Associado:</label>
    <input type="number" id="associado_id" name="associado_id" required><br>
    <label for="anuidade_id">ID da Anuidade:</label>
    <input type="number" id="anuidade_id" name="anuidade_id" required><br>
    <label for="pago">Pago:</label>
    <input type="checkbox" id="pago" name="pago"><br>
    <div class="button-group">
        <button type="submit" class="save">Salvar</button>
        <button class="cancel" ><a href="/associados" style="text-decoration: none;">Cancelar</a></button>
    </div>
</form>

<?php require_once(__DIR__ . '/../footer.php');