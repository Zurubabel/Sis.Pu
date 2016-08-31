/* Criação da base de dados */

CREATE DATABASE SisPu;

CREATE TABLE tb_Profissional (
	
	cdProfissional INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
	cdProfissional INT NOT NULL,
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


ALTER TABLE tb_ProfissionalTipoTrabalho
ADD CONSTRAINT FK_ProfissionalTipoTrabalho_Profissional
FOREIGN KEY (cdProfissional) 
REFERENCES tb_Profissional (cdProfissional);

ALTER TABLE tb_ProfissionalTipoTrabalho
ADD CONSTRAINT FK_ProfissionalTipoTrabalho_TipoTrabalho
FOREIGN KEY (cdTipoTrabalho)
REFERENCES tb_TipoTrabalho (cdTipoTrabalho);



