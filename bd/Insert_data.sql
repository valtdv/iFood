use ifood_01;
/*Usuarios*/
INSERT INTO Usuario VALUES (1234567,'contra','Diego','Albor','Rojas','cra 34 #87-09','diegoaalborrojas@gmail.com');
INSERT INTO Usuario VALUES (4597017,'contra123','Valeria','Osorio','Salcedo','cra 64 #79-89','valeosal@gmail.com');
INSERT INTO Usuario VALUES (3009199,'contra30','Luis','Potte','Herrera','cra 45 #102-4','ettop123@gmail.com');/*Potte será el dueño de sazon*/

select * 
from usuario


/*Restaurantes*/
INSERT INTO Restaurante VALUES (11111,'El Sazon casero','cra 51b #35-05', 3034598, 'sazoncasero@hotmail.com');

select *
from Restaurante

/*Administrador*/
INSERT INTO Administrador VALUES(3009199,11111);

select *
from Administrador()

/*Cliente*/
INSERT INTO Cliente VALUES (1234567,true);
INSERT INTO Cliente VALUES (4597017,false);

select *
from Cliente

/*Orden*/
INSERT INTO Orden VALUES (123,'30min',5,1234567);
INSERT INTO Orden VALUES (124,'40min',3,1234567);
INSERT INTO Orden VALUES (523,'20min',5,4597017);

select *
from Orden

/*Plato*/
INSERT INTO Plato VALUES (123,123489,"Termino medio",123);
INSERT INTO Plato VALUES (874,55000,"Hervido",124);
INSERT INTO Plato VALUES (970,25000,"Casi crudo",523);

select *
from Plato;

/*Ingrediente*/
INSERT INTO Ingrediente VALUES(1,'pasta',5000,123);
INSERT INTO Ingrediente VALUES(2,'cebolla',1200,123);
INSERT INTO Ingrediente VALUES(4,'carne molida',1200,123);
INSERT INTO Ingrediente VALUES(75,'queso',4500,123);
INSERT INTO Ingrediente VALUES(89,'pescado',4500,874);
INSERT INTO Ingrediente VALUES(87,'limon',1500,874);
INSERT INTO Ingrediente VALUES (25,'Carne',4687,970);

select *
from Ingrediente