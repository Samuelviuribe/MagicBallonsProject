CREATE DATABASE Decoraciones;

use Decoraciones;

CREATE TABLE DatosUsuario( 

    id INT PRIMARY KEY NOT AUTO_INCREMENT,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(25) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    correo  VARCHAR(50) NOT NULL UNIQUE,
    numero VARCHAR(20) NOT NULL UNIQUE,
);

