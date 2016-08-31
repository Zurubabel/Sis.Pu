/* Criação da base de dados */

CREATE DATABASE SisPu;

CREATE TABLE tb_Profissional (
	
	idProfissional INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nmProfissional VARCHAR(75),
	nmSexo VARCHAR(2),
	qtBusto FLOAT,
	qtBenga FLOAT,
	dtInclusao DATE,
	dtAlteracao DATE
	/* Tipos de Trabalho ?*/
)

CREATE TABLE tb_TipoSexo (
	cdTipoSexo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nmTipoSexo VARCHAR(50) NOT NULL,
	bAtivo BOOLEAN NOT NULL DEFAULT TRUE,
	dtInclusao DATE,
	dtAlteracao DATE
)