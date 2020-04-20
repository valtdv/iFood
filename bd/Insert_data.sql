use ifood_01;
/*Clientes*/
INSERT INTO Cliente VALUES (1234567,'contra',false,'Diego','Albor','Rojas','diegoaalborrojas@gmail.com',3135879014,'cra 34 #87-09');
INSERT INTO Cliente VALUES (4597017,'contra123',true,'Valeria','Osorio','Salcedo','valeosal@gmail.com','cra 64 #79-89',3587047409);

	select *
	from Cliente;


/*Adminsitrador*/
INSERT INTO Administrador VALUES(123456,'ettop','Luis','Potte','Herrera','lapotte@gmail.com',1);

select *
from Administrador;

/*Orden*/
INSERT INTO Orden VALUES (123,'30min',5,1234567);
INSERT INTO Orden VALUES (124,'40min',3,1234567);

select *
from Orden;

/*Ingrediente*/
INSERT INTO Ingrediente VALUES(1,'pasta',5000);
INSERT INTO Ingrediente VALUES(2,'cebolla',1200);
INSERT INTO Ingrediente VALUES(4,'carne molida',1200);
INSERT INTO Ingrediente VALUES(75,'queso',4500);
INSERT INTO Ingrediente VALUES(89,'pescado',4500);
INSERT INTO Ingrediente VALUES(87,'limon',1500);
INSERT INTO Ingrediente VALUES (25,'Carne',4687);

select *
from Ingrediente;

/*Or_In*/
INSERT INTO Or_In VALUES (123,1);
INSERT INTO Or_In VALUES (123,75);
INSERT INTO Or_In VALUES (123,4);
INSERT INTO Or_In VALUES (124,89);
INSERT INTO Or_In VALUES (124,87);

select *
from Or_In