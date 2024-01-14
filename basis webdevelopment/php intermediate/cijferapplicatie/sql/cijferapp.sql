-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jan 2024 om 10:16
-- Serverversie: 10.4.21-MariaDB-log
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cijferapp`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `resultaten`
--

CREATE TABLE `resultaten` (
  `resultaat_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `toets_id` int(11) NOT NULL,
  `cijfer` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `resultaten`
--

INSERT INTO `resultaten` (`resultaat_id`, `student_id`, `toets_id`, `cijfer`) VALUES
(1, 1, 1, 5.5),
(2, 1, 2, 4.5),
(3, 1, 3, 7.5),
(4, 1, 4, 6.2),
(5, 1, 5, 3.2),
(6, 2, 1, 4.5),
(7, 2, 2, 5.2),
(8, 2, 3, 3.5),
(9, 2, 4, 7.3),
(10, 2, 5, 3.3),
(11, 3, 1, 4.5),
(12, 3, 2, 4.4),
(13, 3, 3, 4.4),
(14, 3, 4, 6.1),
(15, 4, 5, 8.2),
(16, 4, 1, 9.5),
(17, 4, 2, 9.5),
(18, 4, 3, 9.5),
(19, 5, 4, 1.2),
(20, 5, 5, 3.2),
(21, 5, 1, 2.2),
(22, 5, 2, 2.5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE `studenten` (
  `student_id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`student_id`, `voornaam`, `achternaam`, `login`, `password`) VALUES
(1, 'Piet', 'Dijkstra', 'Pietje', '123'),
(2, 'Jan', 'Blijerveen', 'Jannie', '123'),
(3, 'Klaas', 'Postma', 'Klaassie', '123'),
(4, 'Miep', 'Kraak', 'Miepie', '123'),
(5, 'Jola', 'Haastra', 'Jo', '123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `toetsen`
--

CREATE TABLE `toetsen` (
  `toets_id` int(11) NOT NULL,
  `toetsnaam` varchar(255) NOT NULL,
  `weging` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `toetsen`
--

INSERT INTO `toetsen` (`toets_id`, `toetsnaam`, `weging`) VALUES
(1, 'algebra 1', 1),
(2, 'meetkunde 1', 1),
(3, 'meetkunde 2', 2),
(4, 'geometrie 1', 1),
(5, 'geometrie 2', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `resultaten`
--
ALTER TABLE `resultaten`
  ADD PRIMARY KEY (`resultaat_id`);

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexen voor tabel `toetsen`
--
ALTER TABLE `toetsen`
  ADD PRIMARY KEY (`toets_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `resultaten`
--
ALTER TABLE `resultaten`
  MODIFY `resultaat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `studenten`
--
ALTER TABLE `studenten`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `toetsen`
--
ALTER TABLE `toetsen`
  MODIFY `toets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
