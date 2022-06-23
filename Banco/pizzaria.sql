-- criando o banco de dados da pizzaria.
CREATE DATABASE BDpizzaria;
-- selecionando o banco pizzaria.
USE BDpizzaria;

-- *
-- Estrutura da tabela usuário. 
-- *

CREATE TABLE usuario(
   idUsuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	nome varchar(100) DEFAULT NULL,
  	permissao varchar(15) DEFAULT NULL,
  	senha varchar(100) DEFAULT NULL,
  	usuario varchar(40) DEFAULT NULL,
  	genero varchar(20) DEFAULT NULL,
  	cpf char(11) DEFAULT NULL,
  	salario decimal(7,2) DEFAULT NULL,
);

-- inserindo dados na tabela usuário
INSERT INTO `usuario` (`idUsuario`, `nome`, `permissao`, `senha`, `usuario`, `genero`, `cpf`, `salario`) VALUES
(6, 'jose ', '2', '654321', 'Jose123', 'Masculino', '1234567890', '1000.00');

-- pesquisando os usuários.
SELECT * FROM usuario

-- *
-- Estrutura da tabela Telefone. 
-- *

CREATE TABLE telefone(
	id INT NOT NULL PRIMARY KEY,
	ddd VARCHAR(2) NOT NULL,
	telefone VARCHAR(9) NOT NULL,
	tipo VARCHAR(11) NOT NULL, 
	codTelefone INT NOT NULL,
	FOREIGN KEY(codTelefone) REFERENCES usuario(idUsuario)
);

-- *
-- Estrutura da tabela Produtos. 
-- *
CREATE TABLE produto (
   id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
   nome varchar(100) NOT NULL,
   descricao varchar(255) DEFAULT NULL,
   imagem LONGBLOB ,
   imagemTipo VARCHAR(50) DEFAULT NULL,
   preco double(10,2) NOT NULL,
   path VARCHAR(50)
);



