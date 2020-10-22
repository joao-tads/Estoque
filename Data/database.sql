DROP DATABASE IF EXISTS Estoque;
CREATE DATABASE Estoque;

USE Estoque;

CREATE TABLE Usuarios (
	id INT PRIMARY KEY NOT NULL auto_increment,
    nome TEXT NOT NULL,
    email TEXT NOT NULL,
    senha TEXT NOT NULL
);

CREATE TABLE Itens (
	id INT PRIMARY KEY NOT NULL auto_increment,
    descricao TEXT NOT NULL,
    quantidade INT NOT NULL,
    valor DOUBLE NOT NULL
);

CREATE TABLE Tecnicos (
	id INT PRIMARY KEY,
    nome TEXT NOT NULL
);

CREATE TABLE Movimentacao (
	id INT PRIMARY KEY NOT NULL auto_increment,
    idTecnico INT NOT NULL,
    idItem INT NOT NULL,
    dataHora DATETIME NOT NULL,
    quantidade INT NOT NULL,
    FOREIGN KEY (idTecnico) REFERENCES Tecnicos (id),
    FOREIGN KEY (idItem) REFERENCES Itens (id)
);

INSERT INTO Usuarios (nome, email, senha) VALUES
	('Alciran', 'alciran@estoque.com', 'alciran@estoque'),
    ('João', 'joao@estoque.com', 'joao@estoque');











