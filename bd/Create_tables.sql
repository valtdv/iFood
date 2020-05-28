use ifood_01;

CREATE TABLE Administrador (
  idpersona int not null auto_increment,
  contra varchar(20),
  nombre1 varchar(50),
  apellido1 varchar(50),
  apellido2 varchar(50),
  correo varchar(50),
  no_admin int,
  PRIMARY KEY (idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Cliente (
  idpersona int not null auto_increment,
  contra varchar(20),
  membresia boolean,
  nombre1 varchar(50),
  apellido1 varchar(50),
  apellido2 varchar(50),
  correo varchar(50),
  telefono long,
  direccion varchar(25),
  PRIMARY KEY (idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Ingrediente (
  idingrediente int not null auto_increment,
  nombre varchar(50),
  precio double,
  PRIMARY KEY (idingrediente)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Plato(
  idplato int not null auto_increment,
  categoria varchar(50),
  precio double,
  PRIMARY KEY (idplato)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Pi_Ing (
  idplato int not null,
  idingrediente int not null,
  PRIMARY KEY (idplato, idingrediente)
  FOREIGN KEY (idplato) REFERENCES Plato(idplato),
  FOREIGN KEY (idingrediente) REFERENCES Ingrediente(idingrediente)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Orden (
  idorden int not null auto_increment,
  plato int not null,
  nombre varchar(50),
  estado varchar(50),
  idpersona int not null,
  PRIMARY KEY (idorden),
  FOREIGN KEY (idpersona) REFERENCES Cliente (idpersona),
  FOREIGN KEY (plato) REFERENCES Plato (idplato)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Califcacion(
  idcalificacion int not null,
  idorden int not null,
  puntaje int,
  comentario varchar(150),
  PRIMARY KEY (idcalificacion),
  FOREIGN KEY (idorden) REFERENCES Orden(idorden)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Pago (
  idpago int not null,
  valor double,
  tipo varchar(20),
  idorden int not null,
  PRIMARY KEY (idpago),
  FOREIGN KEY (idorden) REFERENCES Orden (idorden)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Dev_Pa(
  iddevolucion int not null,
  idpago int not null,
  idpersona int not null,
  PRIMARY KEY (iddevolucion),
  FOREIGN KEY (idpago) REFERENCES Pago (idpago),
  FOREIGN KEY (idpersona) REFERENCES Administrador(idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

