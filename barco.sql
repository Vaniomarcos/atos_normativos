CREATE TABLE tipo_ato_normativo (
	id INTEGER,
	descricao TEXT,
	CONSTRAINT tipo_ato_normativo_PK PRIMARY KEY (id)
);

CREATE TABLE ofertas_socioassistenciais (
	id INTEGER,
	descricao TEXT,
	CONSTRAINT ofertas_socioassistenciais_PK PRIMARY KEY (id)
);

CREATE TABLE "especificacao_ofertas_sociais" (
	id INTEGER,
	descricao TEXT,
	CONSTRAINT classificacao_geral_PK PRIMARY KEY (id)
);

CREATE TABLE classificacao_geral (
	id INTEGER,
	descricao TEXT,
	CONSTRAINT classificacao_geral_PK PRIMARY KEY (id)
);

CREATE TABLE ato_normativo (
	id INTEGER,
	ato_normativo TEXT,
	ementa TEXT,
	normativo_consolidado TEXT,
	link_diario TEXT,
	ano INTEGER,
	fk_especificacao_ofertas_sociais INTEGER,
	fk_ofertas_socioassistenciais INTEGER,
	fk_tipo_ato_normativo INTEGER,
	fk_classificacao_geral INTEGER,
	CONSTRAINT ato_normativo_PK PRIMARY KEY (id),
	CONSTRAINT ato_normativo_FK FOREIGN KEY (fk_especificacao_ofertas_sociais) REFERENCES especificacao_ofertas_sociais(id),
	CONSTRAINT ato_normativo_FK_1 FOREIGN KEY (fk_ofertas_socioassistenciais) REFERENCES ofertas_socioassistenciais(id),
	CONSTRAINT ato_normativo_FK_2 FOREIGN KEY (fk_tipo_ato_normativo) REFERENCES tipo_ato_normativo(id),
	CONSTRAINT ato_normativo_FK_3 FOREIGN KEY (fk_classificacao_geral) REFERENCES classificacao_geral(id)
);
