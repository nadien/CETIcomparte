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


CREATE TABLE categorias (
id integer primary key NOT NULL AUTO_INCREMENT,
categoria varchar(30));

CREATE TABLE comentarios(id int PRIMARY KEY AUTO_INCREMENT, articulo int, nombre varchar(20), comentario varchar(50), estado int default 1);

CREATE TABLE articulos (
id int primary key NOT NULL AUTO_INCREMENT,
titulo varchar(150),
contenido text,
autor integer);
