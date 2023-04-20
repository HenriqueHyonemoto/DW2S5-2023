CREATE TABLE contato
(
    id        INT             NOT NULL    AUTO_INCREMENT,
    nome      VARCHAR(350)    NOT NULL,
    email     VARCHAR(150)    NOT NULL,    
    datahora  TIMESTAMP       DEFAULT     CURRENT_TIMESTAMP,
    mensagem  TEXT            NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;