create database web18100165;
use web18100165;
create table usuario (
    id_usuario int not null,
    contraseña varchar(8) not null,
    primary key(id_usuario)
);
create table solicitud (
    nombre varchar (30) not null,
    apellido varchar (30) not null,
    correo varchar(50) not null,
    fecha date not null,
    genero varchar(10) not null,
    id_usuario int not null,
    c_institucional varchar(50) not null,
    num_telefono varchar(10) not null,
    primary key (c_institucional),
    foreign key (id_usuario) references usuario (id_usuario)
);
insert into usuario values (18100165,'drg12345');
insert into usuario values (18100150,'fth23456');
insert into usuario values (17100200,'sef12345');
insert into usuario values (19100123,'awd23456');
insert into usuario values (17100234,'drg23456');

insert into solicitud values ('Francisco','De la Rosa','fran@gmail.com','2021-10-2','masculino',18100165,'165@nlaredo.tec','8671612074');
insert into solicitud values ('Jose','Peña','jos@gmail.com','2021-9-10','masculino',18100150,'150@nlaredo.tec','8671204023');
insert into solicitud values ('Juan','Martinez','joan@gmail.com','2021-8-9','masculino',17100200,'200@nlaredo.tec','8671322332');
insert into solicitud values ('Ana','Saldaña','annie@gmail.com','2021-10-3','femenino',19100123,'123@nlaredo.tec','8672002240');
insert into solicitud values ('Sofia','Treviño','sof@gmail.com','2021-7-10','femenino',17100234,'234@nlaredo.tec','8671232030');
