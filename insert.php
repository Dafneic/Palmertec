insert into subservicios (nombre, servicio_id) VALUES('Calificación del diseño (CD)', 28)


SELECT * FROM `servicio` s inner join subservicios ss on s.id_servicio = servicio_id where categoria_id = 1

