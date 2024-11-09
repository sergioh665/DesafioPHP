<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Pagamento</title>
</head>
<body>
    <h1>Criar Novo Pagamento</h1>
    <form action="/pagamentos/store" method="post">
        <label for="associado_id">Associado ID:</label>
        <input type="number" id="associado_id" name="associado_id" required><br>
        <label for="anuidade_id">Anuidade ID:</label>
        <input type="number" id="anuidade_id" name="anuidade_id" required><br>
        <label for="pago">Pago:</label>
        <input type="checkbox" id="pago" name="pago"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>