DROP DATABASE IF EXISTS rop_behealth_befit;

CREATE DATABASE rop_behealth_befit;

USE rop_behealth_befit;

CREATE TABLE genders (
	idGender TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(10) NOT NULL
) Engine = Innodb;

INSERT INTO genders (name) VALUES ("muž");
INSERT INTO genders (name) VALUES ("žena");

CREATE TABLE plans (
	idPlan INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mon VARCHAR(40) NOT NULL,
    tue VARCHAR(40) NOT NULL,
    wed VARCHAR(40) NOT NULL,
    thu VARCHAR(40) NOT NULL,
    fri VARCHAR(40) NOT NULL,
    sat VARCHAR(40) NOT NULL,
    sun VARCHAR(40) NOT NULL
) Engine = Innodb;

CREATE TABLE advice (
	idAdvice INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(500) NOT NULL
) Engine = Innodb;

CREATE TABLE users (
	idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL,
    passwd VARCHAR(60) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(40) NOT NULL,
    genderId TINYINT NOT NULL,
    age TINYINT NOT NULL,
    height TINYINT NOT NULL,
    weight TINYINT NOT NULL,
    planId INT NOT NULL,
    adviceId INT NOT NULL
) Engine = Innodb;

CREATE TABLE cathegories (
	idCathegory INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) Engine = Innodb;

INSERT INTO cathegories (name) VALUES ("kalistenika");
INSERT INTO cathegories (name) VALUES ("strečing");

CREATE TABLE parts (
	idPart INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cathegoryId INT NOT NULL,
    name VARCHAR(20) NOT NULL
) Engine = Innodb;

INSERT INTO parts (cathegoryId, name) VALUES (1, "príťah");
INSERT INTO parts (cathegoryId, name) VALUES (1, "tlak");
INSERT INTO parts (cathegoryId, name) VALUES (1, "nohy");
INSERT INTO parts (cathegoryId, name) VALUES (1, "brucho");
INSERT INTO parts (cathegoryId, name) VALUES (2, "krk");
INSERT INTO parts (cathegoryId, name) VALUES (2, "ruky");
INSERT INTO parts (cathegoryId, name) VALUES (2, "chrbát");
INSERT INTO parts (cathegoryId, name) VALUES (2, "nohy");

CREATE TABLE levels (
	idLevel INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(15) NOT NULL
) Engine = Innodb;

INSERT INTO levels (name) VALUES ("začiatočník");
INSERT INTO levels (name) VALUES ("pokročilí");
INSERT INTO levels (name) VALUES ("expert");

CREATE TABLE exercises (
	idExercise INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    partId INT NOT NULL,
    levelId INT NOT NULL,
    name VARCHAR(35) NOT NULL
) Engine = Innodb;

INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "tlak panvy nad seba");

INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "skracovačky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "dotýkanie členkov");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "sklápačky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "quadrupedál");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "ruské otočky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "plank na kolenách");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "kolíska");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "striedavé zdvihy nôh");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "horolezci");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "ruské otočky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "stierače");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "nožnice");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "izometria");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "dragon flag");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "vznos do 180°");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "stierače ťahšie");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "kolíska");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "tlak panvy nad seba");

CREATE TABLE activities (
	idActivity INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pullCa INT NOT NULL,
    pushCa INT NOT NULL,
    coreCa INT NOT NULL,
    legCa INT NOT NULL,
    neckSt INT NOT NULL,
	handSt INT NOT NULL,
    backSt INT NOT NULL,
    legSt INT NOT NULL
) Engine = Innodb;

CREATE TABLE userActivity (
	idUsrAct BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	date DATE,
    userId INT NOT NULL,
	activityId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(idUser),
	FOREIGN KEY (activityId) REFERENCES activities(idActivity)
) Engine = Innodb;