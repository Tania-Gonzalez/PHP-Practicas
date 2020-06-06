
/* CERACIÓN DE TABLA
    tipos de datos
    int         Número de caracteres    Entero
    interger    Número de caracteres    Entero      
    varchar     Caracteres              String      Máximo 255
    char        Un caracter             String      Alfanumerico
    float       Número decimal          Decimal     Coma flotante
    date        Fecha                   Date
    time        Hora                    String
    timestap  

    STRING MÁS GRNADES  
    tex             65535 Caracteres
    mediumtext      16 millones  
    longtext        4 millones de caracteres  

    ENTEROS MÁS GRNADES
    medimint
    Bigint

*/
CREATE DATABASE cursophp;
drop database cursophp;
USE cursophp;
drop TABLE usuarios;

CREATE TABLE  Usuarios(
    ID  int (10) AUTO_INCREMENT NOT NULL ,
    Nombre varchar (100) NOT NULL,
    Apellidos varchar (100) NOT NULL,
    Email varchar (100) NOT NULL,
    Contraseña varchar (255) NOT NULL
);



use cursophp;

CREATE TABLE usuarios(
    id          int (10) AUTO_INCREMENT  NOT NULL,
    nombre      varchar (100) NOT NULL,
    apellido    varchar (100) NOT NULL,
    email       varchar (100) NOT NULL,
    contraseña  varchar (100) NOT NULL,
    fecha       DATE NOT null,
    CONSTRAINT pk_usuarios PRIMARY KEY  (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;


CREATE TABLE  categorias(
    id          int (10) AUTO_INCREMENT NOT NULL,
    nombre      varchar (100),
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id              int(10)  AUTO_INCREMENT NOT NULL,
    titulo          varchar (255) NOT NULL,
    descripcion     varchar (255) NOT null, 
    fecha           date  NOT NULL,
    id_usuario      int (10),
    id_categoria    int (10),
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id) ON DELETE CASCADE,
    CONSTRAINT fk_entrada_categoria FOREIGN  KEY (id_categoria) REFERENCES categorias(id) 
)ENGINE=InnoDb;


SELECT * FROM Usuarios;
SELECT * FROM categorias;
SELECT * FROM entradas;

/*  INSERTAR DATOS*/


use cursophp;
INSERT INTO usuarios VALUES(null,'Tani','Gonz','Tani@gail.com','52278','2020-04-30');
INSERT INTO usuarios VALUES(null,'Maria','Bern','Mari6654@gail.com','274852','2020-04-30');
INSERT INTO usuarios VALUES(null,'Andrea','Cruz','Andy6468@gail.com','78585','2020-04-30');
INSERT INTO usuarios VALUES(null,'Paola','Gonz','Pao654654@gail.com','785876','2020-04-30');
INSERT INTO usuarios VALUES(null,'Sofia','sanchez','sof53468@gail.com','6876','2020-04-30');

DELETE FROM usuarios WHERE id=1;

UPDATE usuarios SET  apellido='Sanch' where apellido='sanch';

/*INSERTAR FILAS CON SOLO ALGUNAS COLUMNAS*/

INSERT INTO usuarios (email,contraseña) values ('terg54qgmail.com','64164');

UPDATE usuarios SET nombre="Fabi" WHERE id= 7;

/*Select básico*/

SELECT email,nombre,apellidos from usuarios;
SELECT * FROM usuarios;

/*  OPERADORES ARITMETICOS*/
SELECT EMAIL, (4+7) FROM USUARIOS;
SELECT  EMAIL, (1+6) AS 'OPERACION' FROM USUARIOS;
SELECT  id, nombre,email  FROM USUARIOS ORDER BY id DESC;

/* FUNCIONES MATEMATICAS */

SELECT ABS(7.654) AS 'OPERACION' FROM USUARIOS;
SELECT CEILING (7.355) AS 'OPERACION' FROM USUARIOS;
SELECT FLOOR (7.355) AS 'OPERACION' FROM USUARIOS;
SELECT PI () AS 'OPERACION' FROM USUARIOS;
SELECT RAND(1,10) AS 'OPERACION' FROM USUARIOS;
SELECT ROUND(1,10) AS 'OPERACION' FROM USUARIOS;
SELECT SQRT(7.91) AS 'OPERACION' FROM USUARIOS;
SELECT TRUNCATE(7.546468,2) AS 'OPERACION' FROM USUARIOS;


/* FUNCIONES PARA TEXTOS */
SELECT UPPER(NOMBRE) FROM USUARIOS; /*TEXTO EN MAYUSCULA*/
SELECT LOWER(NOMBRE) FROM USUARIOS; /*TEXTO EN MINUSCULAS*/
SELECT CONCAT(NOMBRE, ' ', APELLIDO) FROM USUARIOS; /*CONCATENAR STRING*/
SELECT CONCAT(NOMBRE, ' ', APELLIDO) AS 'CONCATENACIÓN' FROM USUARIOS;
SELECT UPPER(CONCAT(NOMBRE, ' ', APELLIDO)) AS 'CONCATENACIÓN' FROM USUARIOS;
SELECT LENGTH(CONCAT(NOMBRE, ' ', APELLIDO)) AS 'CONCATENACIÓN' FROM USUARIOS;
SELECT TRIM(CONCAT('   ', NOMBRE, '       ', APELLIDO)) AS 'CONCATENACIÓN' FROM USUARIOS;


/*OPERACINES CON FECHAS*/

SELECT EMAIL,FECHA, CURDATE() AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DATEDIFF(FECHA,CURDATE()) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DAYNAME(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DAYOFMONTH(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DAYOFWEEK(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DAYOFYEAR(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, DAY(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, MONTH(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, YEAR(FECHA) AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, CURTIME() AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,FECHA, SYSDATE() AS 'FECHA ACTUAL' FROM USUARIOS;
SELECT EMAIL,DATE_FORMAT(FECHA,'%d-%m-%y') AS 'FECHA ACTUAL' FROM USUARIOS;




