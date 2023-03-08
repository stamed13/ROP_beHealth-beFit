-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 08.Mar 2023, 17:38
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
(7, '2023-03-01', 3, 13, 0, 0, 0, 0, 0, 0, 113),
(8, '2023-03-02', 4, 0, 36, 72, 42, 0, 90, 102, 114);

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
(1, 'stanislav.medvec@gmail.com', '$2y$10$zpci6505Epsfr1wXFiwciuUVIEmRLN/tpw6tjErlTuK/c30hCZiRC', 'Stanislav', 'Medvec', 1, 19, 170, 60, 0);

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
  ADD PRIMARY KEY (`idExercise`);

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
  ADD PRIMARY KEY (`idUsrAct`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `genderId` (`genderId`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `advice`
--
ALTER TABLE `advice`
  MODIFY `idAdvice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `exercises`
--
ALTER TABLE `exercises`
  MODIFY `idExercise` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idUsrAct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`genderId`) REFERENCES `genders` (`idGender`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
