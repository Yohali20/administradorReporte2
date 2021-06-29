create database personas;

use personas;


create table usuarios(
  id int not null auto_increment, primary key (id),
  usuario varchar(250),
  password varchar(250)
);


