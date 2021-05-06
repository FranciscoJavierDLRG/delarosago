create database tarea1;
use tarea1;
create table usuario (
    idUsuario int not null IDENTITY(1,1),
    nombre varchar (15) not null,
    apPaterno varchar (15) not null,
    apMaterno varchar (15) not null,
    log_in varchar (8) not null,
    pass_word varchar (4) not null,
    primary key (idUsuario)
);
insert into usuario (nombre,apPaterno,apMaterno,log_in,pass_word)
values ('Francisco','De la Rosa','Gómez','18100165','0165');