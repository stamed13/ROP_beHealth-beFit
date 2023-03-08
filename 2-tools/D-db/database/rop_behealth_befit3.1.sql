DROP DATABASE IF EXISTS rop_behealth_befit;

CREATE DATABASE rop_behealth_befit CHARACTER SET utf8 COLLATE utf8_slovak_ci;

USE rop_behealth_befit;



CREATE TABLE advice (
  idAdvice int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

INSERT INTO advice (idAdvice, name) VALUES
(1, 'Máš normálnu váhu.'),
(2, 'Máš nadváhu.'),
(3, 'Máš nízku váhu.'),
(4, 'Máš obezitu.'),
(5, 'Tesim sa, cvicis dost casto a rovnomerne na vsetky partie.'),
(6, 'Tesim sa, cvicis pravidelne 3x do tyzdna a rovnomerne na vsetky partie.'),
(7, 'Tesim sa, cvicis pravidelne 4x do tyzdna a rovnomerne na vsetky partie.'),
(8, 'Tesim sa, cvicis pravidelne 5x do tyzdna a rovnomerne na vsetky partie.'),
(9, 'Tesim sa, cvicis pravidelne kazdy den a rovnomerne na vsetky partie.'),
(10, 'Sklamal si ma, cvicis malo, aspon rovnomerne na vsetky partie.'),
(11, 'Cvicis dost casto, ale nerovnomerne na vsetky partie.'),
(12, 'Tesim sa, cvicis pravidelne 3x do tyzdna, ale nerovnomerne na vsetky partie.'),
(13, 'Tesim sa, cvicis pravidelne 4x do tyzdna, ale nerovnomerne na vsetky partie.'),
(14, 'Tesim sa, cvicis pravidelne 5x do tyzdna, ale nerovnomerne na vsetky partie.'),
(15, 'Tesim sa, cvicis pravidelne kazdy den, ale nerovnomerne na vsetky partie.'),
(16, 'Sklamal si ma, cvicis malo, dokonca nerovnomerne na vsetky partie.'),
(17, 'Skus viac'),
(18, 'Skus viac'),
(19, 'Skus viac'),
(20, 'Skus viac'),
(21, 'Si zaciatocnik, pokojne cvic dalej, vysledky pomaly pridu.'),
(22, 'Si pokrocily/a, pokojne si mozes zlepsit svoje schopnosti a posunut level narocnosti.'),
(23, 'Si expert, pokojne si zlepsuj \r\nsvoje chopnosti.'),
(24, 'Radim ti cvicit hlboky drep a vysiet na hrazde.'),
(25, 'Radim ti cvicit hlboky drep a striedat pasivny vis s aktivnym visom, zapoj prosim lopatky.'),
(26, 'Radim ti cvicit hlboky drep s nohami na sirku ramien a denne aspon jeden zhyb a kluk.'),
(27, 'Radim ti cvicit hlboky drep s nohami na sirku ramien, pike pulses a denne 5 zhybov a klukov.'),
(28, 'Radim ti cvicit hlboky drep s nohami na sirku ramien, pike pulses a striezku. Cviky, v ktorych sa chces zlepsit cvic co najcastejsie, vtedy ked si na nich spomenies (len take, ktore ta velmi neunavia).'),
(29, 'Mozno ti pomoze zdravsia strava.'),
(30, 'Mozno ti pomoze dychanie alebo otuzovanie zintenzivnit zazitok.'),
(31, 'Mozno ti pomoze prechadzka v prirode.'),
(32, 'posilnovat biceps'),
(33, 'posilnovat triceps'),
(34, 'strecovat nohy'),
(35, 'strecovat chrbat'),
(36, 'Ak mas bolesti hlavy alebo zapastia skus prosim strecovat krk alebo ruky (to co robi problem).'),
(37, 'posilnovat nohy'),
(38, ''),
(39, ''),
(40, '');

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

CREATE TABLE users (
	idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(60) NOT NULL,
    passwd VARCHAR(60) NOT NULL,
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(40) NOT NULL,
    genderId TINYINT NOT NULL,
    age TINYINT NOT NULL,
    height INT NOT NULL,
    weight INT NOT NULL,
    planId INT NOT NULL,
    adviceId INT NOT NULL
) Engine = Innodb;

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
    name VARCHAR(40) NOT NULL
) Engine = Innodb;

INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "aktívny vis");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "vytlacanie z ramien");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "negatívny zhyb nadhmat");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "izometria podhmat");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "izometria nadhmat");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 1, "austrálsky zhyb");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "zhyb podhmat");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "zhyb nadhmat");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "austrálsky zhyb ťahší");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "tuck front lever výdrž");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "lopatkový zhyb, záklon");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 2, "motýlik");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "zhyb na 1 ruke");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "L-zhyb");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "frontlever");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "backlever");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "lukostrelecký zhyb");
INSERT INTO exercises (partId, levelId, name) VALUES (1, 3, "false grip zhyb");

INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "lopatkový kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "kľuk na kolenách");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "kľuk na prekážke");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "negatívny kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "izometria v normálnom kľuku");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 1, "dipy na stoličke");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "normálny kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "širší kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "kľuk z vyvýšeniny");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "diamantový kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "izometria v širšom kľuku");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 2, "dipy");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "kľuk s tliesknutím");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "lukostrelecký kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "tuckpanche kľuk");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "dipy na kruhoch");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "tigrie kľuky");
INSERT INTO exercises (partId, levelId, name) VALUES (2, 3, "kľuk v stojke");

INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "drep s rukami vpred");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "drep s rukami za hlavou");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "sumo drep");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "úzky drep");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "skákavé výpady");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 1, "drep výskok");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "drep na 1 nohe dotyk členkov");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "bulgarian split squats");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "záklon na kolenách");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "drep na 1 nohe s vystretou nohou");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "drep na 1 nohe s nohou na kolene");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 2, "izometria v polohe stolička");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "drep na 1 nohe so záťažou");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "drep na 1 nohe s nohou vo flexe");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "drep na 1 nohe, ruky za chrbtom");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "skok na prekážku");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "drep na 1 nohe so záťažou");
INSERT INTO exercises (partId, levelId, name) VALUES (3, 3, "drep na 1 nohe s výskokom");

INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "skracovačky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "dotýkanie členkov");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "sklápačky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "quadrupedál");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "ruské otočky");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 1, "plank na kolenách");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "kolíska");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "striedavé zdvihy nôh");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "horolezci");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "ruské otočky ťažšie");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "stierače");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "nožnice");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 2, "izometria");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "dragon flag");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "vznos do 180°");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "stierače ťažšie");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "kolíska ťažšia");
INSERT INTO exercises (partId, levelId, name) VALUES (4, 3, "tlak panvy nad seba");

INSERT INTO exercises (partId, levelId, name) VALUES (5, 1, "predklon");
INSERT INTO exercises (partId, levelId, name) VALUES (5, 1, "záklon");
INSERT INTO exercises (partId, levelId, name) VALUES (5, 2, "malý úklon na stranu");
INSERT INTO exercises (partId, levelId, name) VALUES (5, 2, "ťahanie hlavy nadol");
INSERT INTO exercises (partId, levelId, name) VALUES (5, 3, "veľký úklon na stranu");
INSERT INTO exercises (partId, levelId, name) VALUES (5, 3, "rotácia do strán");

INSERT INTO exercises (partId, levelId, name) VALUES (6, 1, "posuny v sede");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 1, "krúženie ramenami");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 1, "ťahanie sa za ramenom");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 1, "predklony so zápästím");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 2, "zdvih do polmostíka");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 2, "pretáčanie ramien s palicou");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 2, "ťahanie rúk pomocou expandera");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 2, "záklony s vytočeným zápästím");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 3, "výdrž v polmostíku");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 3, "posuny v striežke");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 3, "spojenie rúk za chrbtom");
INSERT INTO exercises (partId, levelId, name) VALUES (6, 3, "záklony s pretočeným zápästím");

INSERT INTO exercises (partId, levelId, name) VALUES (7, 1, "úklon do strany");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 1, "mačací chrbát");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 1, "kobra strečing");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 1, "váľanie nôh");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 2, "kobra-zajac");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 2, "úklony do strán");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 2, "krúženie rukou na boku");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 2, "pretáčanie ramien v ľahu");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 3, "výdrž v pluhu");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 3, "zbalená kolíska");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 3, "zakopávanie v ľahu");
INSERT INTO exercises (partId, levelId, name) VALUES (7, 3, "výdrž v mostíku");

INSERT INTO exercises (partId, levelId, name) VALUES (8, 1, "predklon v sede");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 1, "kozácke drepy");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 1, "vystieranie nohy v ľahu");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 1, "pozícia dieťa");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 2, "širšia striežka");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 2, "motýlik");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 2, "pike pulses s 1 nohou");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 2, "pozícia holub");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 3, "užšia striežka");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 3, "výdrž v rozštepe");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 3, "pike pulses");
INSERT INTO exercises (partId, levelId, name) VALUES (8, 3, "zakláňanie sa v striežke");

CREATE TABLE activities (
	idActivity INT NOT NULL PRIMARY KEY AUTO_INCREMENT
) Engine = Innodb;

CREATE TABLE userActivity (
	idUsrAct BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	date DATE,
    userId INT NOT NULL,
	pullCa INT NOT NULL,
    pushCa INT NOT NULL,
    coreCa INT NOT NULL,
    legCa INT NOT NULL,
    neckSt INT NOT NULL,
	handSt INT NOT NULL,
    backSt INT NOT NULL,
	legSt INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(idUser)
) Engine = Innodb;