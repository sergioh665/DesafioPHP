<?php

namespace Sergio\DesafioPhp;

require_once '../config/database.php'; // inclui a conexão com o banco de dados
require_once 'Associado.php';
require_once 'Anuidade.php';
require_once 'Pagamento.php';

use Sergio\DesafioPhp\Associado;
use Sergio\DesafioPhp\Anuidade;
use Sergio\DesafioPhp\Pagamento;

$associado = new Associado($pdo);
$anuidade = new Anuidade($pdo);
$pagamento = new Pagamento($pdo);

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
    case '/':
        require __DIR__ . '/../views/index.php';
        break;
    case '/associados':
        $associados = $associado->readAll();
        require __DIR__ . '/../views/associados/index.php';
        break;
    case '/associados/create':
        require __DIR__ . '/../views/associados/create.php';
        break;
    case '/associados/store':
        $associado->create($_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['data_filiacao']);
        header('Location: /associados');
        break;
    case '/associados/edit':
        require __DIR__ . '/../views/associados/edit.php';
        break;
    case '/associados/update':
        $associado->update($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['cpf'], $_POST['data_filiacao']);
        header('Location: /associados');
        break;
    case '/associados/delete':
        $associado->delete($_GET['id']);
        header('Location: /associados');
        break;
    case '/anuidades':
        $anuidades = $anuidade->readAll();
        require __DIR__ . '/../views/anuidades/index.php';
        break;
    case '/anuidades/create':
        require __DIR__ . '/../views/anuidades/create.php';
        break;
    case '/anuidades/store':
        $anuidade->create($_POST['ano'], $_POST['valor']);
        header('Location: /anuidades');
        break;
    case '/anuidades/edit':
        require __DIR__ . '/../views/anuidades/edit.php';
        break;
    case '/anuidades/update':
        $anuidade->update($_POST['id'], $_POST['ano'], $_POST['valor']);
        header('Location: /anuidades');
        break;
    case '/anuidades/delete':
        $anuidade->delete($_GET['id']);
        header('Location: /anuidades');
        break;
    case '/pagamentos':
        $pagamentos = $pagamento->readAll();
        require __DIR__ . '/../views/pagamentos/index.php';
        break;
    case '/pagamentos/create':
        require __DIR__ . '/../views/pagamentos/create.php';
        break;
    case '/pagamentos/store':
        $pagamento->create($_POST['associado_id'], $_POST['anuidade_id']);
        header('Location: /pagamentos');
        break;
    case '/pagamentos/edit':
        require __DIR__ . '/../views/pagamentos/edit.php';
        break;
    case '/pagamentos/update':
        $pagamento->update($_POST['id'], isset($_POST['pago']) ? 1 : 0);
        header('Location: /pagamentos');
        break;
    case '/pagamentos/delete':
        $pagamento->delete($_GET['id']);
        header('Location: /pagamentos');
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../views/404.php';
        break;
}
?>