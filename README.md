# [DesafioPHP - Devs do RN](https://github.com/sergioh665/DesafioPHP/blob/main/Desafio.md)

## Descrição

Este projeto é um sistema de gerenciamento de **associados, anuidades e pagamentos**. Ele foi desenvolvido em PHP e utiliza o MySQL como banco de dados.

## Funcionalidades

- Cadastro de novos associados com informações como nome, e-mail e data de filiação.
- Registro e atualização de pagamentos de anuidades.
- Visualização de associados e suas informações.
- Exclusão de registros de associados quando necessário.

## Requisitos

- **PHP** 7.4 ou superior ([baixar](https://www.php.net/downloads.php))
- **MySQL** 5.7 ou superior ([baixar](https://www.mysql.com/downloads/))
- **Composer** para gerenciar dependências ([baixar](https://getcomposer.org/download/))
- **XAMPP** ([baixar](https://www.apachefriends.org/index.html))
  > Opcional, para um ambiente de desenvolvimento rápido

## Instalação

### Passo 1: Clonar o Repositório

```sh
git clone https://github.com/seuusuario/DesafioPHP.git
cd DesafioPHP
```

### Passo 2: Instalar Dependências

> Instale as dependências usando o `Compose`

```
composer install
```

### Passo 3: Importe o banco de dados:

```sh
mysql -u root -p < meu_database.sql
```

### Passo 4: Inicie o servidor embutido do PHP:

```sh
php -S localhost:8000 -t public
```

> Abra o navegador e vá para http://localhost:8000.
> 
> Para ter acesso ao Banco de Dados vá para http://localhost/phpmyadmin

## Autor

Sérgio Henrique - sergioh665@gmail.com

---
