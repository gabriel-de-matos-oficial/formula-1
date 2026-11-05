CREATE DATABASE formula1;

USE formula1;

CREATE TABLE ingressos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100),
    email VARCHAR(100),
    cpf VARCHAR(20),
    telefone VARCHAR(20),

    setor VARCHAR(50),

    quantidade_ingressos INT,

    forma_pagamento VARCHAR(50)

);