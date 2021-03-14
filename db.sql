CREATE DATABASE prueba_informix;
USE prueba_informix;

CREATE TABLE consulta  (
    
    id int (200) NOT NULL, 
    nombre VARCHAR(500) NOT NULL, 
    codigo VARCHAR(100) NOT NULL,
    cedula VARCHAR (500) NOT NULL, 
    direccion VARCHAR (500) NOT NULL, 
    email VARCHAR (500) NOT NULL, 
    tarjeta_profesional VARCHAR(500) NOT NULL, 
    CONSTRAINT pk_id PRIMARY KEY (id)       

);


CREATE TABLE ingreso (

    id INT (200)  auto_increment NOT NULL, 
    codigo VARCHAR(100) NOT NULL,
    propiedad VARCHAR(200) NOT NULL,
    dato VARCHAR(200) NOT NULL,
    CONSTRAINT pk_id PRIMARY KEY (id)
);
