DROP DATABASE IF EXISTS rop_behealth_befit;

CREATE DATABASE rop_behealth_befit;

USE rop_behealth_befit;

CREATE TABLE genders (
	id TINYINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(10) NOT NULL
) Engine = Innodb;

INSERT INTO genders (name) VALUES ("muž");
INSERT INTO genders (name) VALUES ("žena");

CREATE TABLE plans (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mon VARCHAR(40) NOT NULL,
    tue VARCHAR(40) NOT NULL,
    wed VARCHAR(40) NOT NULL,
    thu VARCHAR(40) NOT NULL,
    fri VARCHAR(40) NOT NULL,
    sat VARCHAR(40) NOT NULL,
    sun VARCHAR(40) NOT NULL
) Engine = Innodb;

CREATE TABLE advice (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(500) NOT NULL
) Engine = Innodb;

CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL,
    passwd VARCHAR(60) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(40) NOT NULL,
    gender_id TINYINT NOT NULL,
    age TINYINT NOT NULL,
    height TINYINT NOT NULL,
    weight TINYINT NOT NULL,
    plan_id INT NOT NULL,
    advice_id INT NOT NULL
) Engine = Innodb;

CREATE TABLE cathegories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
) Engine = Innodb;

INSERT INTO cathegories (name) VALUES ("kalistenika");
INSERT INTO cathegories (name) VALUES ("strečing");

CREATE TABLE parts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cathegory_id INT NOT NULL,
    name VARCHAR(20) NOT NULL
) Engine = Innodb;

INSERT INTO parts (cathegory_id, name) VALUES (1, "príťah");
INSERT INTO parts (cathegory_id, name) VALUES (1, "tlak");
INSERT INTO parts (cathegory_id, name) VALUES (1, "nohy");
INSERT INTO parts (cathegory_id, name) VALUES (1, "brucho");
INSERT INTO parts (cathegory_id, name) VALUES (2, "krk");
INSERT INTO parts (cathegory_id, name) VALUES (2, "ruky");
INSERT INTO parts (cathegory_id, name) VALUES (2, "chrbát");
INSERT INTO parts (cathegory_id, name) VALUES (2, "nohy");

CREATE TABLE levels (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(15) NOT NULL
) Engine = Innodb;

INSERT INTO levels (name) VALUES ("začiatočník");
INSERT INTO levels (name) VALUES ("pokročilí");
INSERT INTO levels (name) VALUES ("expert");

CREATE TABLE exercises (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    cathegory_id INT NOT NULL,
    part_id INT NOT NULL,
    level_id INT NOT NULL,
    name VARCHAR(35) NOT NULL
) Engine = Innodb;

INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "skracovačky");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "dotýkanie členkov");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "sklápačky");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "quadrupedál");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "ruské otočky");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 1, 1, "plank na kolenách");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "kolíska");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "striedavé zdvihy nôh");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "horolezci");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "ruské otočky");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "stierače");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "nožnice");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 2, 1, "izometria");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 3, 1, "dragon flag");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 3, 1, "vznos do 180°");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 3, 1, "stierače ťahšie");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 3, 1, "kolíska");
INSERT INTO exercises (cathegory_id, part_id, level_id, name) VALUES (1, 3, 1, "tlak panvy nad seba");

CREATE TABLE activities (
	id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    date DATE,
    pull_ca INT NOT NULL,
    push_ca INT NOT NULL,
    core_ca INT NOT NULL,
    leg_ca INT NOT NULL,
    neck_st INT NOT NULL,
	hand_st INT NOT NULL,
    back_st INT NOT NULL,
    leg_st INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
) Engine = Innodb;