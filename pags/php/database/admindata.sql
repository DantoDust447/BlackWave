create database BlackWave;
use BlackWave;
create table desarrolladores(
dpi int auto_increment primary key,
nombre varchar(25),
apellido varchar (50),
email mediumtext,
telefono mediumint,
direccion longtext,
fecha_contratacion date,
puesto_id smallint(15)
);
create table puestos(
puesto_id smallint(15),
puesto_nombre varchar(12)
);