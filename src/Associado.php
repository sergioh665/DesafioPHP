<?php

namespace Sergio\DesafioPhp;

use PDO;

require_once '../config/database.php';

class Associado {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // cria um novo associado
    public function create($nome, $email, $cpf, $data_filiacao) {
        $stmt = $this->pdo->prepare("INSERT INTO associados (nome, email, cpf, data_filiacao) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $email, $cpf, $data_filiacao]);
    }

    // le todos os associados
    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM associados");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // le um associado específico
    public function read($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM associados WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // atualiza um associado
    public function update($id, $nome, $email, $cpf, $data_filiacao) {
        $stmt = $this->pdo->prepare("UPDATE associados SET nome = ?, email = ?, cpf = ?, data_filiacao = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $cpf, $data_filiacao, $id]);
    }

    // deleta um associado
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM associados WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
