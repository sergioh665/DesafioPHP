<?php

namespace Sergio\DesafioPhp;

require_once '../config/database.php';

use \PDO;

class Pagamento {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // cria um novo pagamento
    public function create($associado_id, $anuidade_id) {
        $stmt = $this->pdo->prepare("INSERT INTO pagamentos (associado_id, anuidade_id) VALUES (?, ?)");
        return $stmt->execute([$associado_id, $anuidade_id]);
    }

    // le todos os pagamentos
    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM pagamentos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // le um pagamento específico
    public function read($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM pagamentos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // atualiza o status de um pagamento
    public function update($id, $pago) {
        $stmt = $this->pdo->prepare("UPDATE pagamentos SET pago = ? WHERE id = ?");
        return $stmt->execute([$pago, $id]);
    }

    // deleta um pagamento
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM pagamentos WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // obtem associados devedores
    public function getDevedores() {
        $stmt = $this->pdo->query("SELECT a.nome, a.email, a.cpf, a.data_filiacao, p.pago FROM associados a LEFT JOIN pagamentos p ON a.id = p.associado_id WHERE p.pago = 0 OR p.pago IS NULL");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // obtem associados com pagamentos em dia
    public function getPagamentosEmDia() {
        $stmt = $this->pdo->query("SELECT a.nome, a.email, a.cpf, a.data_filiacao, p.pago FROM associados a LEFT JOIN pagamentos p ON a.id = p.associado_id WHERE p.pago = 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
