CREATE DATABASE banco_teste;
USE banco_teste;
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL);
DESCRIBE usuarios;
INSERT INTO usuarios (nome, email) VALUES
	('Jenifer’, jenifer@gmail.com'),
	('Maria,’ maria@hotmail.com'),
	('Gabriel’, gabriel@hotmail.com');
