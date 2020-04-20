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

CREATE TABLE Orden (
  idorden int not null auto_increment,
  tiempollegada varchar(50),
  calificacion int,
  idpersona int not null,
  PRIMARY KEY (idorden),
  FOREIGN KEY (idpersona) REFERENCES Cliente (idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Pago (
  idpago int not null,
  valor double,
  fecha date,
  tipo varchar(10),
  idorden int not null,
  PRIMARY KEY (idpago),
  FOREIGN KEY (idorden) REFERENCES Orden (idorden) 
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;


CREATE TABLE Ingrediente (
  idingrediente int not null auto_increment,
  nombre varchar(50),
  precio double,
  PRIMARY KEY (idingrediente)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Or_In(
  idorden int not null,
  idingrediente int not null,
  FOREIGN KEY (idorden) REFERENCES Orden(idorden),
  FOREIGN KEY (idingrediente) REFERENCES Ingrediente(idingrediente)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

