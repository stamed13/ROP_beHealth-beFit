-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 17.Mar 2023, 18:43
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `rop_behealth_befit`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `advice`
--

CREATE TABLE `advice` (
  `idAdvice` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `advice`
--

INSERT INTO `advice` (`idAdvice`, `name`) VALUES
(1, 'Máš normálnu váhu.'),
(2, 'Máš nadváhu.'),
(3, 'Máš nízku váhu.'),
(4, 'Máš obezitu.'),
(5, 'Teším sa, cvičíš dosť často a rovnomerne na všetky partie.'),
(6, 'Teším sa, cvičíš pravidelne 3x do týždňa a rovnomerne na všetky partie.'),
(7, 'Teším sa, cvičíš pravidelne 4x do týždňa a rovnomerne na všetky partie.'),
(8, 'Teším sa, cvičíš pravidelne 5x do týždňa a rovnomerne na všetky partie.'),
(9, 'Teším sa, cvičíš pravidelne každý deň a rovnomerne na všetky partie.'),
(10, 'Cvičíš málo, aspoň rovnomerne na všetky partie.'),
(11, 'Cvičíš dosť často, ale nerovnomerne na všetky partie.'),
(12, 'Teším sa, cvičíš pravidelne 3x do týždňa, ale nerovnomerne na všetky partie.'),
(13, 'Teším sa, cvičíš pravidelne 4x do týždňa, ale nerovnomerne na všetky partie.'),
(14, 'Teším sa, cvičíš pravidelne 5x do týždňa, ale nerovnomerne na všetky partie.'),
(15, 'Teším sa, cvičíš pravidelne každý deň, ale nerovnomerne na všetky partie.'),
(16, 'Cvičíš málo, dokonca nerovnomerne na všetky partie.'),
(17, 'Skus viac'),
(18, 'Skus viac'),
(19, 'Skus viac'),
(20, 'Skus viac'),
(21, 'Si začiatočník, pokojne cvič ďalej, výsledky pomaly prídu.'),
(22, 'Si pokročilý/a, pokojne si môžeš zlepšiť svoje schopnosti a posunúť level náročnosti.'),
(23, 'Si expert, pokojne si zlepšuj \r\nsvoje schopnosti.'),
(24, 'Radím ti cvičiť hlboký drep a visiet na hrazde.'),
(25, 'Radím ti cvičiť hlboký drep a striedať pasívny vis s aktívnym visom, zapoj prosím lopatky.'),
(26, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien a denne aspoň jeden zhyb a kľuk.'),
(27, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien, pike pulses a denne 5 zhybov a kľukov.'),
(28, 'Radím ti cvičiť hlboký drep s nohami na šírku ramien, pike pulses a striežku. Cviky, v ktorých sa chceš zlepšiť cvič denne, vtedy keď si na nich spomenieš (také cviky, ktoré ľahko zvládneš).'),
(29, 'Možno ti pomôže zdravšia strava.'),
(30, 'Možno ti pomôže dýchanie alebo otužovanie zintenzívniť zážitok.'),
(31, 'Možno ti pomôže prechádzka v prírode.'),
(32, 'posilňovať biceps'),
(33, 'posilňovať triceps'),
(34, 'strečovať nohy'),
(35, 'strečovať chrbát'),
(36, 'Ak máš bolesti hlavy alebo zápästia, skús prosím strečovať krk alebo ruky (to čo robí problém).'),
(37, 'posilňovať nohy'),
(38, ''),
(39, ''),
(40, '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `exercises`
--

CREATE TABLE `exercises` (
  `idExercise` int(11) NOT NULL,
  `partId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `exercises`
--

INSERT INTO `exercises` (`idExercise`, `partId`, `levelId`, `name`) VALUES
(1, 1, 1, 'aktívny vis'),
(2, 1, 1, 'vytláčanie z ramien'),
(3, 1, 1, 'negatívny zhyb nadhmat'),
(4, 1, 1, 'izometria podhmat'),
(5, 1, 1, 'izometria nadhmat'),
(6, 1, 1, 'austrálsky zhyb'),
(7, 1, 2, 'zhyb podhmat'),
(8, 1, 2, 'zhyb nadhmat'),
(9, 1, 2, 'austrálsky zhyb ťahší'),
(10, 1, 2, 'tuck front lever výdrž'),
(11, 1, 2, 'lopatkový zhyb, záklon'),
(12, 1, 2, 'motýlik'),
(13, 1, 3, 'zhyb na 1 ruke'),
(14, 1, 3, 'L-zhyb'),
(15, 1, 3, 'frontlever'),
(16, 1, 3, 'backlever'),
(17, 1, 3, 'lukostrelecký zhyb'),
(18, 1, 3, 'false grip zhyb'),
(19, 2, 1, 'lopatkový kľuk'),
(20, 2, 1, 'kľuk na kolenách'),
(21, 2, 1, 'kľuk na prekážke'),
(22, 2, 1, 'negatívny kľuk'),
(23, 2, 1, 'izometria v normálnom kľuku'),
(24, 2, 1, 'dipy na stoličke'),
(25, 2, 2, 'normálny kľuk'),
(26, 2, 2, 'širší kľuk'),
(27, 2, 2, 'kľuk z vyvýšeniny'),
(28, 2, 2, 'diamantový kľuk'),
(29, 2, 2, 'izometria v širšom kľuku'),
(30, 2, 2, 'dipy'),
(31, 2, 3, 'kľuk s tliesknutím'),
(32, 2, 3, 'lukostrelecký kľuk'),
(33, 2, 3, 'tuckpanche kľuk'),
(34, 2, 3, 'dipy na kruhoch'),
(35, 2, 3, 'tigrie kľuky'),
(36, 2, 3, 'kľuk v stojke'),
(37, 3, 1, 'drep s rukami vpred'),
(38, 3, 1, 'drep s rukami za hlavou'),
(39, 3, 1, 'sumo drep'),
(40, 3, 1, 'úzky drep'),
(41, 3, 1, 'skákavé výpady'),
(42, 3, 1, 'drep výskok'),
(43, 3, 2, 'drep na 1 nohe dotyk členkov'),
(44, 3, 2, 'bulgarian split squats'),
(45, 3, 2, 'záklon na kolenách'),
(46, 3, 2, 'drep na 1 nohe s vystretou nohou'),
(47, 3, 2, 'drep na 1 nohe s nohou na kolene'),
(48, 3, 2, 'izometria v polohe stolička'),
(49, 3, 3, 'drep na 1 nohe so záťažou'),
(50, 3, 3, 'drep na 1 nohe s nohou vo flexe'),
(51, 3, 3, 'drep na 1 nohe, ruky za chrbtom'),
(52, 3, 3, 'skok na prekážku'),
(53, 3, 3, 'drep na 1 nohe so záťažou'),
(54, 3, 3, 'drep na 1 nohe s výskokom'),
(55, 4, 1, 'skracovačky'),
(56, 4, 1, 'dotýkanie členkov'),
(57, 4, 1, 'sklápačky'),
(58, 4, 1, 'quadrupedál'),
(59, 4, 1, 'ruské otočky'),
(60, 4, 1, 'plank na kolenách'),
(61, 4, 2, 'kolíska'),
(62, 4, 2, 'striedavé zdvihy nôh'),
(63, 4, 2, 'horolezci'),
(64, 4, 2, 'ruské otočky ťažšie'),
(65, 4, 2, 'stierače'),
(66, 4, 2, 'nožnice'),
(67, 4, 2, 'izometria'),
(68, 4, 3, 'dragon flag'),
(69, 4, 3, 'vznos do 180°'),
(70, 4, 3, 'stierače ťažšie'),
(71, 4, 3, 'kolíska ťažšia'),
(72, 4, 3, 'tlak panvy nad seba'),
(73, 5, 1, 'predklon'),
(74, 5, 1, 'záklon'),
(75, 5, 2, 'malý úklon na stranu'),
(76, 5, 2, 'ťahanie hlavy nadol'),
(77, 5, 3, 'veľký úklon na stranu'),
(78, 5, 3, 'rotácia do strán'),
(79, 6, 1, 'posuny v sede'),
(80, 6, 1, 'krúženie ramenami'),
(81, 6, 1, 'ťahanie sa za ramenom'),
(82, 6, 1, 'predklony so zápästím'),
(83, 6, 2, 'zdvih do polmostíka'),
(84, 6, 2, 'pretáčanie ramien s palicou'),
(85, 6, 2, 'ťahanie rúk pomocou expandera'),
(86, 6, 2, 'záklony s vytočeným zápästím'),
(87, 6, 3, 'výdrž v polmostíku'),
(88, 6, 3, 'posuny v striežke'),
(89, 6, 3, 'spojenie rúk za chrbtom'),
(90, 6, 3, 'záklony s pretočeným zápästím'),
(91, 7, 1, 'úklon do strany'),
(92, 7, 1, 'mačací chrbát'),
(93, 7, 1, 'kobra strečing'),
(94, 7, 1, 'váľanie nôh'),
(95, 7, 2, 'kobra-zajac'),
(96, 7, 2, 'úklony do strán'),
(97, 7, 2, 'krúženie rukou na boku'),
(98, 7, 2, 'pretáčanie ramien v ľahu'),
(99, 7, 3, 'výdrž v pluhu'),
(100, 7, 3, 'zbalená kolíska'),
(101, 7, 3, 'zakopávanie v ľahu'),
(102, 7, 3, 'výdrž v mostíku'),
(103, 8, 1, 'predklon v sede'),
(104, 8, 1, 'kozácke drepy'),
(105, 8, 1, 'vystieranie nohy v ľahu'),
(106, 8, 1, 'pozícia dieťa'),
(107, 8, 2, 'širšia striežka'),
(108, 8, 2, 'motýlik'),
(109, 8, 2, 'pike pulses s 1 nohou'),
(110, 8, 2, 'pozícia holub'),
(111, 8, 3, 'užšia striežka'),
(112, 8, 3, 'výdrž v rozštepe'),
(113, 8, 3, 'pike pulses'),
(114, 8, 3, 'zakláňanie sa v striežke');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `genders`
--

CREATE TABLE `genders` (
  `idGender` tinyint(4) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `genders`
--

INSERT INTO `genders` (`idGender`, `name`) VALUES
(1, 'muž'),
(2, 'žena');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `parts`
--

CREATE TABLE `parts` (
  `idPart` int(11) NOT NULL,
  `cathegoryId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `parts`
--

INSERT INTO `parts` (`idPart`, `cathegoryId`, `name`) VALUES
(1, 1, 'príťah'),
(2, 1, 'tlak'),
(3, 1, 'nohy'),
(4, 1, 'brucho'),
(5, 2, 'krk'),
(6, 2, 'ruky'),
(7, 2, 'chrbát'),
(8, 2, 'nohy');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `plans`
--

CREATE TABLE `plans` (
  `idPlan` int(11) NOT NULL,
  `monC` varchar(20) DEFAULT NULL,
  `tueC` varchar(20) DEFAULT NULL,
  `wedC` varchar(20) DEFAULT NULL,
  `thuC` varchar(20) DEFAULT NULL,
  `friC` varchar(20) DEFAULT NULL,
  `satC` varchar(20) DEFAULT NULL,
  `sunC` varchar(20) DEFAULT NULL,
  `monS` varchar(20) DEFAULT NULL,
  `tueS` varchar(20) DEFAULT NULL,
  `wedS` varchar(20) DEFAULT NULL,
  `thuS` varchar(20) DEFAULT NULL,
  `friS` varchar(20) DEFAULT NULL,
  `satS` varchar(20) DEFAULT NULL,
  `sunS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `plans`
--

INSERT INTO `plans` (`idPlan`, `monC`, `tueC`, `wedC`, `thuC`, `friC`, `satC`, `sunC`, `monS`, `tueS`, `wedS`, `thuS`, `friS`, `satS`, `sunS`) VALUES
(1, 'full', 'x', 'full', 'x', 'full', 'x', 'x', 'x', 'static', 'x', 'static', 'x', 'x', 'x'),
(2, 'pull', 'x', 'legs', 'x', 'push', 'x', 'x', 'x', 'static', 'x', 'static', 'x', 'static', 'x'),
(3, 'legs', 'x', 'pull', 'push', 'x', 'core', 'x', 'x', 'hand', 'x', 'x', 'back', 'x', 'legs'),
(4, 'legs', 'pull', 'x', 'push', 'core', 'hand', 'x', 'x', 'x', 'hand', 'x', 'back', 'x', 'legs'),
(5, 'legs', 'pull', 'push', 'x', 'legs', 'pull', 'push', 'x', 'bridge', 'x', 'split', 'x', 'x', 'x');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `useractivity`
--

CREATE TABLE `useractivity` (
  `idUsrAct` bigint(20) NOT NULL,
  `date` date DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `pullCa` int(11) NOT NULL,
  `pushCa` int(11) NOT NULL,
  `coreCa` int(11) NOT NULL,
  `legCa` int(11) NOT NULL,
  `neckSt` int(11) NOT NULL,
  `handSt` int(11) NOT NULL,
  `backSt` int(11) NOT NULL,
  `legSt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `useractivity`
--

INSERT INTO `useractivity` (`idUsrAct`, `date`, `userId`, `pullCa`, `pushCa`, `coreCa`, `legCa`, `neckSt`, `handSt`, `backSt`, `legSt`) VALUES
(1, '2023-02-26', 1, 1, 19, 70, 50, 78, 90, 102, 113),
(2, '2023-02-28', 1, 13, 30, 68, 49, 0, 0, 100, 110),
(3, '2023-03-04', 1, 1, 29, 68, 50, 73, 90, 101, 112),
(4, '2023-03-05', 1, 3, 30, 68, 49, 74, 89, 101, 112),
(5, '2023-02-23', 2, 10, 25, 62, 40, 73, 80, 91, 104),
(6, '2023-03-01', 2, 13, 0, 70, 0, 74, 0, 101, 0),
(7, '2023-01-01', 3, 13, 0, 0, 0, 0, 0, 0, 113),
(8, '2023-03-02', 4, 0, 36, 72, 42, 0, 90, 102, 114),
(9, '2023-03-08', 1, 12, 0, 0, 0, 75, 0, 100, 0),
(10, '2023-03-10', 4, 3, 31, 0, 0, 0, 0, 0, 114),
(11, '2023-03-13', 1, 11, 19, 0, 37, 75, 80, 0, 0),
(12, '2023-03-13', 4, 9, 0, 0, 0, 0, 88, 0, 0),
(15, '2023-03-15', 5, 11, 31, 69, 50, 73, 89, 102, 113),
(16, '2023-03-16', 1, 18, 36, 72, 54, 78, 90, 102, 114),
(18, '2023-03-16', 5, 11, 0, 69, 0, 0, 88, 0, 112),
(20, '2023-03-16', 6, 10, 32, 68, 51, 75, 88, 100, 113),
(21, '2023-03-17', 8, 10, 32, 68, 52, 75, 89, 100, 113),
(22, '2023-03-17', 3, 12, 30, 66, 50, 74, 88, 100, 112);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `passwd` varchar(60) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `genderId` tinyint(4) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `planId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`idUser`, `email`, `passwd`, `fname`, `lname`, `genderId`, `age`, `height`, `weight`, `planId`) VALUES
(1, 'stanislav.medvec@gmail.com', '$2y$10$K9rbCwkVKOjHuJVn1vmDQOT/Tat.mdaXO1AOO1USnhvV03cbX07MG', 'Stanislav', 'Medvec', 1, 19, 170, 60, 1),
(3, 'renata@gmail.com', '$2y$10$KrLfKikoh3NWsQXlqWEQ.uI8BjjwKj8litedmgTq0XU10SgqtECDi', 'Renata', 'Medvecova', 2, 48, 165, 58, 1),
(4, 'stanislav@gmail.com', '$2y$10$uzQ8FpU5DirvaOEPqdS1devGE3aQkb1EyAykzPIdya/6ykNHhz9xe', 'Stanislav', 'Medvec', 1, 52, 172, 75, 1),
(5, 'janko.hrasko@gmail.com', '$2y$10$hEM6cENo1j/qrjGx0dk54.tT/wDUTYBUlCaEZBCgrXEapmS2cerwu', 'Janko', 'Hrasko', 1, 25, 164, 60, 2),
(6, 'jan@gmail.com', '$2y$10$Bytu3L8PgUSqHd.kpC9wXeH2GvefxiREenHcHKYuAs1FbsgC8Q2ZO', 'Ján', 'Medvec', 1, 15, 172, 66, 4),
(7, 'michal@gmail.com', '$2y$10$eKewZr9Z.oXSvTasDqW0OOwsJrxuG7Jdpzna7k1Vc1lP5u9eY7d32', 'Michal', 'Medvec', 1, 15, 185, 65, 1),
(8, 'viliam@gmail.com', '$2y$10$CjEwrU6Sz19FHDHla0P0xubconmSnBRbWtbUBM2WSVZ.DijBHhLmK', 'Viliam', 'Bálint', 1, 16, 174, 68, 4),
(9, 'viliam.balindovec@gmail.com', '$2y$10$yr2TzefgwEJusYJF9U9ZTuXkMDDY5V9VBZXzcDCwSKCNnWkBjwg2q', 'Viliam', 'Bálint', 1, 16, 130, 250, 1);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`idAdvice`);

--
-- Indexy pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`idExercise`),
  ADD KEY `partId` (`partId`);

--
-- Indexy pre tabuľku `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`idGender`);

--
-- Indexy pre tabuľku `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`idPart`);

--
-- Indexy pre tabuľku `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`idPlan`);

--
-- Indexy pre tabuľku `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`idUsrAct`),
  ADD KEY `userId` (`userId`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `genderId` (`genderId`),
  ADD KEY `planId` (`planId`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `advice`
--
ALTER TABLE `advice`
  MODIFY `idAdvice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  MODIFY `idExercise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pre tabuľku `genders`
--
ALTER TABLE `genders`
  MODIFY `idGender` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `parts`
--
ALTER TABLE `parts`
  MODIFY `idPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `plans`
--
ALTER TABLE `plans`
  MODIFY `idPlan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `idUsrAct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  ADD CONSTRAINT `exercises_ibfk_1` FOREIGN KEY (`partId`) REFERENCES `parts` (`idPart`);

--
-- Obmedzenie pre tabuľku `useractivity`
--
ALTER TABLE `useractivity`
  ADD CONSTRAINT `useractivity_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`idUser`);

--
-- Obmedzenie pre tabuľku `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`genderId`) REFERENCES `genders` (`idGender`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`planId`) REFERENCES `plans` (`idPlan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
