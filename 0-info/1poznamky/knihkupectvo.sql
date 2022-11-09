DROP DATABASE IF EXISTS knihkupectvo;

CREATE DATABASE knihkupectvo DEFAULT CHARACTER SET utf8 COLLATE utf8_slovak_ci;

USE knihkupectvo;

CREATE TABLE autor(
	meno varchar(40) NOT NULL,
	priezvisko varchar(40) NOT NULL
)ENGINE = InnoDB; 

ALTER TABLE autor ADD id_autor tinyint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT FIRST;

CREATE TABLE vydavatel(
	id_vydavatel int NOT NULL AUTO_INCREMENT,
	meno varchar(30) NOT NULL,
	PRIMARY KEY(id_vydavatel)
)ENGINE = InnoDB; 

ALTER TABLE vydavatel CHANGE meno nazov varchar(40) NOT NULL;

CREATE TABLE kniha(
	id_kniha tinyint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_vydavatel int NOT NULL,
	nazov varchar(30) NOT NULL,
	typ varchar(30),
	cena float,
	#PRIMARY KEY (id_kniha),
	FOREIGN KEY (id_vydavatel) REFERENCES vydavatel(id_vydavatel) ON DELETE CASCADE
)ENGINE = InnoDB; 

#RENAME TABLE publikacia TO kniha;

ALTER TABLE kniha MODIFY typ enum('b','o','s') NOT NULL DEFAULT 'b';

CREATE TABLE autor_kniha(
	id_autor tinyint unsigned NOT NULL,
	id_kniha tinyint unsigned NOT NULL,
	PRIMARY KEY(id_autor,id_kniha),
	FOREIGN KEY (id_autor) REFERENCES autor(id_autor) ON DELETE CASCADE,
	FOREIGN KEY (id_kniha) REFERENCES kniha(id_kniha) ON DELETE CASCADE
)ENGINE = InnoDB;

