-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2023 om 14:36
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `top2000`
--
CREATE DATABASE IF NOT EXISTS `top2000` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `top2000`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `country` varchar(64) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `artist`
--

INSERT INTO `artist` (`id`, `name`, `country`, `year`) VALUES
(1, 'The Beatles', 'Engeland', 1960),
(2, 'The Rolling Stones', 'Engeland', 1962),
(3, 'Bob Marley', 'Jamaica', 1962),
(4, 'Elvis Presley', 'USA', 1953),
(5, 'Joost', 'Nederland', 2016),
(6, 'Coldplay', 'Engeland', 1997),
(7, 'Golden Earring', 'Nederland', 1961),
(8, 'Normaal', 'Nederland', 1974),
(9, 'Goldband', 'Nederland', 2019);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
