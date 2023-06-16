SHOW DATABASES; -- muestra todas las bases de DIAGNOSTICS
CREATE  DATABASE db_M3_prueba_miguel; -- crea base de datos

USE db_M3_prueba_miguel; -- para usar esta base de datos

INSERT INTO tb_camper(id,nombre, edad) VALUES(1,"No te dare mi datos",0); -- ingresar datos a una base de datos


UPDATE tb_camper
SET nombre = "No te dare mis datos"
WHERE id = 5; -- para modificar un valor de una base de datos

SELECT * FROM tb_camper;


