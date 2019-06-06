CREATE DATABASE bdPetz;

USE bdPetz;


CREATE TABLE Cliente (
	codCliente INT PRIMARY KEY AUTO_INCREMENT ,
	dataCadastro	CHAR(20) NOT NULL,
	dataNascimento	CHAR(12) NOT NULL,
	nome			VARCHAR(80) NOT NULL,
	rg				CHAR(10) NOT NULL,
	telefone		CHAR(10) NOT NULL,
	email			VARCHAR(50) NOT NULL,
	endereco		VARCHAR(50) NULL,
	cidade			VARCHAR(30) NOT NULL,
	estado			VARCHAR(30) NOT NULL,
	pais			VARCHAR(20) NOT NULL
	);

CREATE TABLE Funcionario(
	codFuncionario   INT PRIMARY KEY AUTO_INCREMENT,
	dataCadastro	CHAR(20) NOT NULL,
	dataNascimento  CHAR(20) NOT NULL,
	nome			VARCHAR(80) NOT NULL,
	rg				CHAR(10) NOT NULL,
	telefone		CHAR(20) NULL,
	email			VARCHAR(40) NULL,
	endereco		VARCHAR(50) NOT NULL,
	cidade			VARCHAR(30) NOT NULL,
	estado			VARCHAR(30) NOT NULL,
	pais			VARCHAR(20) NOT NULL,
	codTipo			INT NOT NULL,
	senha			VARCHAR (30) NOT NULL
	);


INSERT INTO Funcionario(codFuncionario,dataNascimento,dataCadastro,nome,rg,telefone,email,endereco,cidade,estado,pais,codTipo,senha) 
	VALUES ('FUNC001','21/01/2002','26/11/2018','Admnistrador','12345678','31991408741','adm@gmail.com','Rua João Dornas 109','Belo Horizonte','Minas Gerais','Brasil',1,123);
INSERT INTO Funcionario(codFuncionario,dataNascimento,dataCadastro,nome,rg,telefone,email,endereco,cidade,estado,pais,codTipo,senha) 
	VALUES ('FUNC002','21/01/2002','26/11/2018','Balconista','12345678','31991408741','balconista@gmail.com','Rua João Dornas 109','Belo Horizonte','Minas Gerais','Brasil',2,123);

	SELECT * FROM Funcionario;