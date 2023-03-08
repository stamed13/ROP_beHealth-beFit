-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost:3306
-- Čas generovania: Út 28.Feb 2023, 20:05
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 7.4.29

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
-- Štruktúra tabuľky pre tabuľku `activities`
--

CREATE TABLE `activities` (
  `idActivity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `activities`
--

INSERT INTO `activities` (`idActivity`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `advice`
--

CREATE TABLE `advice` (
  `idAdvice` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `advice`
--

INSERT INTO `advice` (`idAdvice`, `name`) VALUES
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
(22, 'Si pokrocili/a, pokojne si mozes zlepsit svoje schopnosti a posunut level narocnosti.'),
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

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cathegories`
--

CREATE TABLE `cathegories` (
  `idCathegory` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `cathegories`
--

INSERT INTO `cathegories` (`idCathegory`, `name`) VALUES
(1, 'kalistenika'),
(2, 'strečing');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `exercises`
--

CREATE TABLE `exercises` (
  `idExercise` int(11) NOT NULL,
  `partId` int(11) NOT NULL,
  `levelId` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `exercises`
--

INSERT INTO `exercises` (`idExercise`, `partId`, `levelId`, `name`) VALUES
(1, 1, 1, 'aktívny vis'),
(2, 1, 1, 'vytlacanie z ramien'),
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
  `name` varchar(10) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `genders`
--

INSERT INTO `genders` (`idGender`, `name`) VALUES
(1, 'muž'),
(2, 'žena');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `levels`
--

CREATE TABLE `levels` (
  `idLevel` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `levels`
--

INSERT INTO `levels` (`idLevel`, `name`) VALUES
(1, 'začiatočník'),
(2, 'pokročilí'),
(3, 'expert');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `parts`
--

CREATE TABLE `parts` (
  `idPart` int(11) NOT NULL,
  `cathegoryId` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_slovak_ci NOT NULL
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
  `mon` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `tue` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `wed` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `thu` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `fri` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `sat` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `sun` varchar(40) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

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
(3, '2023-02-23', 2, 10, 25, 62, 40, 73, 80, 91, 104),
(6, '2023-02-22', 2, 18, 0, 0, 0, 73, 0, 91, 0),
(7, '2023-02-26', 2, 17, 0, 0, 0, 0, 0, 0, 0),
(12, '2023-02-05', 3, 1, 19, 57, 32, 73, 81, 102, 114),
(13, '2023-02-08', 3, 5, 19, 57, 52, 70, 80, 102, 114),
(14, '2023-02-27', 3, 2, 21, 70, 54, 78, 90, 102, 114),
(15, '2023-02-28', 3, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_slovak_ci NOT NULL,
  `passwd` varchar(60) COLLATE utf8_slovak_ci NOT NULL,
  `fname` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `lname` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `genderId` tinyint(4) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `planId` int(11) NOT NULL,
  `adviceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`idUser`, `email`, `passwd`, `fname`, `lname`, `genderId`, `age`, `height`, `weight`, `planId`, `adviceId`) VALUES
(1, 'stanislav.medvec6@gmail.com', '$2y$10$Afxlbfxhj93x4dtZYmdxuuVrXixX2Y/3lXPoxS9kiU/4Lnwu71XXK', 'Stanislav', 'Medvec', 1, 18, 170, 98, 0, 0),
(2, 'jan@gmail.com', '$2y$10$NRd5mb78c3o0CQMOzWCyOOn8T8GPTgK.98XPizmSv0jvMEyef9UA.', 'Jan', 'Medvec', 1, 15, 172, 66, 0, 0),
(3, 'stanislav@gmail.com', '$2y$10$dsuRmw65RkCHssrfdl8TQuXhBccIUYmuD8M2Au02k6KcOn3Slihl2', 'Stano', 'Medvec', 1, 51, 172, 72, 0, 0);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`idActivity`);

--
-- Indexy pre tabuľku `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`idAdvice`);

--
-- Indexy pre tabuľku `cathegories`
--
ALTER TABLE `cathegories`
  ADD PRIMARY KEY (`idCathegory`);

--
-- Indexy pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`idExercise`);

--
-- Indexy pre tabuľku `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`idGender`);

--
-- Indexy pre tabuľku `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`idLevel`);

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
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `activities`
--
ALTER TABLE `activities`
  MODIFY `idActivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `advice`
--
ALTER TABLE `advice`
  MODIFY `idAdvice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pre tabuľku `cathegories`
--
ALTER TABLE `cathegories`
  MODIFY `idCathegory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT pre tabuľku `levels`
--
ALTER TABLE `levels`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `parts`
--
ALTER TABLE `parts`
  MODIFY `idPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `plans`
--
ALTER TABLE `plans`
  MODIFY `idPlan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `idUsrAct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `useractivity`
--
ALTER TABLE `useractivity`
  ADD CONSTRAINT `useractivity_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
