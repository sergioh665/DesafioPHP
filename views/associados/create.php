<?php
require_once(__DIR__ . '/../header.php');
?>

<h1>Criar Novo Associado</h1>
<form action="/associados/store" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>
    <label for="data_filiacao">Data de Filiação:</label>
    <input type="date" id="data_filiacao" name="data_filiacao" required>
    <div class="button-group">
        <button type="submit" class="save">Salvar</button>
        <button class="cancel" ><a href="/associados" style="text-decoration: none;">Cancelar</a></button>
    </div>  

</form>

<?php require_once(__DIR__ . '/../footer.php');