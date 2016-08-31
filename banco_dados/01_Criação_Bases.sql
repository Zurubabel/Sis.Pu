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
);

CREATE TABLE tb_TipoSexo (
	cdTipoSexo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nmTipoSexo VARCHAR(50) NOT NULL,
	bAtivo BOOLEAN NOT NULL DEFAULT TRUE,
	dtInclusao DATE,
	dtAlteracao DATE
);

INSERT INTO tb_TipoSexo (nmTipoSexo, dtInclusao) VALUES ("Heterossexual", NOW()); 
INSERT INTO tb_TipoSexo (nmTipoSexo, dtInclusao) VALUES ("Bissexual", NOW());
INSERT INTO tb_TipoSexo (nmTipoSexo, dtInclusao) VALUES ("Homosexual", NOW());

CREATE TABLE tb_ProfissionalTipoTrabalho (
	cdProfissionalTipoTrabalho INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idProfissional INT NOT NULL,
	cdTipoTrabalho INT NOT NULL,
	bAtivo BOOLEAN NOT NULL DEFAULT TRUE,
	dtInclusao DATE,
	dtAlteracao DATE
);

CREATE TABLE tb_TipoTrabalho (
	cdTipoTrabalho INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nmTipoTrabalho VARCHAR(50) NOT NULL,
	bAtivo BOOLEAN NOT NULL DEFAULT TRUE,
	dtInclusao DATE,
	dtAlteracao DATE
);