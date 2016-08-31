/* Criação da base de dados */

CREATE DATABASE SisPu;

CREATE TABLE tb_Profissional (
	
	idProfissional INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nmProfissional VARCHAR(75),
	nmSexo VARCHAR(2),
	qtBusto FLOAT,
	qtBenga FLOAT,
	/* Tipos de Trabalho ?*/
)