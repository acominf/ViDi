CREATE DATABASE ViDi;

use vidi;

CREATE Table users(
    usr varchar(16) not null,
    pass varchar(16) not null,
    nombre varchar(20) NOT null,
    apellido varchar(30),
    edad int not null,
    PRIMARY KEY (usr)
);