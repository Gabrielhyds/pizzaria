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
  	foto varchar(255) DEFAULT NULL
);

INSERT INTO `usuario` (`idUsuario`, `nome`, `permissao`, `senha`, `usuario`, `genero`, `cpf`, `salario`, `foto`) VALUES
(4, 'gabriel ', '1', '123456', 'Gabriel', 'Masculino', '1234567890', '1000.00', 'ee45c748d50bbd63773e9c51772551a1.png');
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
-- Estrutura da tabela Endereco. 
-- *

CREATE TABLE endereco(
  	id int NOT NULL PRIMARY KEY,
  	cep char(9) DEFAULT NULL,
  	logradouro varchar(100) DEFAULT NULL,
  	bairro varchar(100) DEFAULT NULL,
  	cidade varchar(50) DEFAULT NULL,
  	estado char(2) DEFAULT NULL,
  	complemento varchar(50) DEFAULT NULL,
  	numero int(11) DEFAULT NULL,
  	codEndereco int DEFAULT NULL,
  	FOREIGN KEY(codEndereco) REFERENCES usuario(idUsuario)
);


-- *
-- Estrutura da tabela Produtos. 
-- *
CREATE TABLE produto (
   id int NOT NULL PRIMARY KEY,
   nome varchar(100) NOT NULL,
   descricao varchar(255) DEFAULT NULL,
   image varchar(255) NOT NULL,
   preco double(10,2) NOT NULL
);



