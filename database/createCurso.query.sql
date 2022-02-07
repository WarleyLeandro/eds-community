
CREATE TABLE curso
(
  idCurso int(11) NOT NULL AUTO_INCREMENT,
  tituloVideo varchar(45) NOT NULL,
  linkVideo varchar(245) NOT NULL,
  tipoVideo varchar(45) NOT NULL,
  PRIMARY KEY (idCurso)
) 
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;


insert into evento (tituloVideo, linkVideo, tipoVideo) values (?, ?, ?);