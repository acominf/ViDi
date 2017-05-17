CREATE DATABASE ViDi;

use vidi;

CREATE Table users(
	id int auto_increment,
    usr varchar(16) not null,
    pass varchar(16) not null,
    nombre varchar(20) NOT null,
    apellido varchar(30),
    edad int not null,
    PRIMARY KEY (id),
    UNIQUE nombre_usuario (usr)
);

create table video(
	id int not null auto_increment,
	nombre varchar(50) not null,
	PRIMARY KEY (id),
	UNIQUE nombre_usuario (nombre)
);

create table clasif(
	id int not null auto_increment,
	clas varchar(16) not null,
	PRIMARY KEY (id)
);

create table video_clasif(
	idVideo int not null,
	idClas int not null,
	PRIMARY KEY (idVideo,idClas)
);

create table user_video(
	idVideo int not null,
	idUser int not null
	puntuacion int not null

	CHECK (puntuacion>=0 && puntuacion<=5)
);