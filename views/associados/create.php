<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Associado</title>
</head>
<body>
    <h1>Criar Novo Associado</h1>
    <form action="/associados/store" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br>
        <label for="data_filiacao">Data de Filiação:</label>
        <input type="date" id="data_filiacao" name="data_filiacao" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>