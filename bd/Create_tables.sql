use ifood;
CREATE TABLE Usuario (
  idpersona int not null,
  contra varchar(20),
  nombre varchar(50),
  apellido1 varchar(50),
  apellido2 varchar(50),
  direccion varchar(25),
  correo varchar(50),
  PRIMARY KEY (idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Restaurante (
  idrestaurante int not null,
  nombre varchar(50),
  ubicacion varchar(50),
  telefono varchar(50),
  correo varchar(50),
  PRIMARY KEY (idrestaurante),
  UNIQUE INDEX idrestaurante_UNIQUE (idrestaurante ASC)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;/*Quitar el correo*/

CREATE TABLE Administrador (
  idpersona int not null,
  idrestaurante int not null,
  PRIMARY KEY (idpersona),
  FOREIGN KEY (idpersona) REFERENCES Usuario (idpersona),
  FOREIGN KEY (idrestaurante) REFERENCES Restaurante (idrestaurante)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Cliente (
  idpersona int not null,
  membresia varchar(50),
  PRIMARY KEY (idpersona),
  FOREIGN KEY (idpersona) REFERENCES Usuario (idpersona)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Orden (
  idorden int not null,
  tiempollegada varchar(50),
  calificacion int,
  idpersona int not null,
  PRIMARY KEY (idorden),
  FOREIGN KEY (idpersona) REFERENCES Cliente (idpersona),
  UNIQUE INDEX idorden_UNIQUE (idorden ASC)
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

CREATE TABLE Plato (
  idplato int not null,
  precio double,
  preparacion text,
  idorden int not null,
  PRIMARY KEY (idplato),
  FOREIGN KEY (idorden) REFERENCES Orden(idorden)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

CREATE TABLE Ingrediente (
  idingrediente int not null,
  nombre varchar(50),
  precio double,
  idplato int not null,
  PRIMARY KEY (idingrediente),
  FOREIGN KEY (idplato) REFERENCES Plato(idplato)
)ENGINE = InnoDB DEFAULT CHARACTER SET = latin1;

