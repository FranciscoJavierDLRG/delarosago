create database delarosago;
use delarosago;

create table Estudiantes
(
    Nombre varchar(50),
    NumControl INTEGER PRIMARY KEY NOT NULL IDENTITY,
    Telefono integer,
    Email varchar(50),
    Carrera varchar(50),
);

insert into Estudiantes values('Francisco De la Rosa','18100165','8671612074','18100165@tecnm.mx','sistemas');
insert into Estudiantes values('Martin Cabrera','18100154','8672424416','18100154@tecnm.mx','sistemas');
insert into Estudiantes values('Pablo Escobar','18100155','8672424417','18100155@tecnm.mx','mecanica');