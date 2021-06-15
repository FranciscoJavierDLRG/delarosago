create database F18100165;
use F18100165;
create table usuarios (
    ncontrol varchar (8) primary key not null,
    usuario varchar (50) not null,
    telefono varchar(10) not null,
    correo varchar(50) not null,
    carrera varchar(50) not null,
    contraseña varchar (10) not null,
);
insert into usuario values ('18100165','Francisco','8671612074','l18100165@nlaredo.tecnm.mx','ISC','De la Rosa');