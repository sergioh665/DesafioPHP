<?php

namespace Sergio\DesafioPhp;

require_once '../config/database.php';

use \PDO;

class Anuidade {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // cria uma nova anuidade
    public function create($ano, $valor) {
        $stmt = $this->pdo->prepare("INSERT INTO anuidades (ano, valor) VALUES (?, ?)");
        return $stmt->execute([$ano, $valor]);
    }

    // le todas as anuidades
    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM anuidades");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // le uma anuidade específica
    public function read($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM anuidades WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // atualiza uma anuidade
    public function update($id, $ano, $valor) {
        $stmt = $this->pdo->prepare("UPDATE anuidades SET ano = ?, valor = ? WHERE id = ?");
        return $stmt->execute([$ano, $valor, $id]);
    }

    // deleta uma anuidade
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM anuidades WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
