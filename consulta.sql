CREATE TABLE usuarios (
 id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR (50),
 usuario VARCHAR (50),
 contrasena VARCHAR (50),
 email VARCHAR (50)
);

CREATE TABLE barra_lateral( 
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
contenido VARCHAR (100));