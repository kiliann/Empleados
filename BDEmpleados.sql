CREATE DATABASE BDEmpleado CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';

CREATE TABLE Empleado(
id_empleado TINYINT unsigned not NULL AUTO_INCREMENT,
DNI CHAR(9) not null  UNIQUE ,
Nombre VARCHAR(18) not null,
Correo VARCHAR(30) NULL,
Telefono CHAR(15),
PRIMARY KEY(id_empleado)

)