CREATE DATABASE dataeds;

use dataeds;
CREATE TABLE usuario 
(
  idUsuario int(11) NOT NULL AUTO_INCREMENT,
  nomeCompleto varchar(45) NOT NULL,
  nomeUser varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  senha varchar(20) NOT NULL,
  descricao varchar(245) NULL,
  isAdm tinyint(1) NOT NULL,
  PRIMARY KEY (idUsuario)
) 
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


