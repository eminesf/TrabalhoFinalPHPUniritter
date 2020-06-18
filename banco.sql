CREATE TABLE pessoa
(
    idPessoa                INT         NOT NULL AUTO_INCREMENT,
    nome                    VARCHAR(40) NOT NULL,
    email                   VARCHAR(30) NOT NULL,
    nascimento              VARCHAR(20) NOT NULL,
    rg                      INT(10)     NOT NULL,
    celular                 INT(11)     NOT NULL,
    telResidencial          INT(11)     NOT NULL,
    idEscola_escola         INT         NOT NULL,
    idEndereco_endereco     INT         NOT NULL,
    idResultuado_resultado  INT         NOT NULL,

    PRIMARY KEY(idPessoa),
    FOREIGN KEY (idEndereco_endereco) REFERENCES endereco(idEndereco),
    FOREIGN KEY (idEscola_escola) REFERENCES escola(idEscola),
    FOREIGN KEY (idResultuado_resultado) REFERENCES resultado(idResultado)
);

CREATE TABLE endereco
(
    idEndereco      INT NOT NULL AUTO_INCREMENT,
    estado          VARCHAR(2)  NOT NULL,
    cidade          VARCHAR(20) NOT NULL,
    bairro          VARCHAR(20) NOT NULL,
    rua             VARCHAR(30) NOT NULL,
    numero          INT(7)      NOT NULL,
    complemento     VARCHAR(20),

    PRIMARY KEY(idEndereco)
);

CREATE TABLE escola
(
    idEscola       INT         NOT NULL AUTO_INCREMENT,
    escola          VARCHAR(30) NOT NULL,
    bairroEscola    VARCHAR(20) NOT NULL,
    ano             VARCHAR(20) NOT NULL,
    turma           VARCHAR(10) NOT NULL,
    perfilEscola    VARCHAR(10),

    PRIMARY KEY(idEscola)
);

CREATE TABLE resultado
(
    idResultado    INT         NOT NULL AUTO_INCREMENT,
    resultado       VARCHAR(20) NOT NULL,
    idPessoa_pessoa INT         NOT NULL,

    PRIMARY KEY (idResultado),
    FOREIGN KEY (idPessoa_pessoa) REFERENCES pessoa(idPessoa)
);