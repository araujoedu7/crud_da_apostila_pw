-- Cria o banco de dados web
CREATE DATABASE crudusuarios;

-- Seleciona o banco de dados web
USE crudUsuarios;

-- Cria a tabela tabela_usuarios
CREATE TABLE tabela_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    niveis_acesso INT NOT NULL
);

INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso)
VALUES ('Eduardo', 'ea144027@gmail.com', '1234', 1);

-- Cria a tabela produtos
SELECT * FROM web;
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(255) NOT NULL,
    preco_produto DECIMAL(10, 2) NOT NULL
);

