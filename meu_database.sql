CREATE DATABASE IF NOT EXISTS devs_do_rn;

USE devs_do_rn;

CREATE TABLE IF NOT EXISTS associados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    data_filiacao DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS anuidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ano INT NOT NULL,
    valor DECIMAL(10, 2) NOT NULL
);

CREATE TABLE IF NOT EXISTS pagamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    associado_id INT NOT NULL,
    anuidade_id INT NOT NULL,
    pago BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (associado_id) REFERENCES associados(id),
    FOREIGN KEY (anuidade_id) REFERENCES anuidades(id)
);

ALTER TABLE pagamentos
DROP FOREIGN KEY pagamentos_ibfk_1;

ALTER TABLE pagamentos
ADD CONSTRAINT pagamentos_ibfk_1 
FOREIGN KEY (associado_id) REFERENCES associados(id) 
ON DELETE CASCADE;

ALTER TABLE pagamentos
DROP FOREIGN KEY pagamentos_ibfk_2;

ALTER TABLE pagamentos
ADD CONSTRAINT pagamentos_ibfk_2
FOREIGN KEY (anuidade_id) REFERENCES anuidades(id)
ON DELETE CASCADE;
