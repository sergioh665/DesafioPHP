<?php

namespace Sergio\DesafioPhp;

class Anuidade {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($ano, $valor) {
        $stmt = $this->pdo->prepare("INSERT INTO anuidades (ano, valor) VALUES (?, ?)");
        return $stmt->execute([$ano, $valor]);
    }

    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM anuidades");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function read($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM anuidades WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function update($id, $ano, $valor) {
        $stmt = $this->pdo->prepare("UPDATE anuidades SET ano = ?, valor = ? WHERE id = ?");
        return $stmt->execute([$ano, $valor, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM anuidades WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
