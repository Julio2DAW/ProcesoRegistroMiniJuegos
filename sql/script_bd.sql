/*
    script_bd.sql

    Julio Antonio Ramos Gago
*/

CREATE DATABASE minijuegos;

USE minijuegos;

CREATE TABLE usuario(
    idUsuario smallint unsigned AUTO_INCREMENT PRIMARY KEY,
    nick varchar(20) UNIQUE NOT NULL,
    password varchar(40) NOT NULL,
    email varchar(80) UNIQUE NOT NULL
);

CREATE TABLE minijuego(
    idMinijuego tinyint unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(40) UNIQUE NOT NULL,
    url
    descripcion
);