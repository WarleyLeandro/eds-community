
CREATE TABLE evento
(
  idEvento int(11) NOT NULL AUTO_INCREMENT,
  tituloEvento varchar(45) NOT NULL,
  linkEvento varchar(245) NOT NULL,
  dataHoraEvento varchar(45) NOT NULL,
  localEvento varchar(20) NOT NULL,
  descricao varchar(245) NOT NULL,
  PRIMARY KEY (idEvento)
) 

ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

