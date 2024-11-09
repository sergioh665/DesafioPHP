<?php
require_once 'Associado.php';
require_once 'Anuidade.php';
require_once 'Pagamento.php';

$associado = new Associado($pdo);
$anuidade = new Anuidade($pdo);
$pagamento = new Pagamento($pdo);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/associados':
        $associados = $associado->readAll();
        require __DIR__ . '/views/associados/index.php';
        break;
    case '/associados/create':
        require __DIR__ . '/views/associados/create.php';
        break;

    // adicionar mais rotas aqui conforme necessário
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>