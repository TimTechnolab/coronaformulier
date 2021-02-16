-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 sep 2020 om 13:59
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronaformulier`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanwezigheid`
--

CREATE TABLE `aanwezigheid` (
  `ID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `functie` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `klas` varchar(30) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `aanwezigheid`
--

INSERT INTO `aanwezigheid` (`ID`, `email`, `functie`, `school`, `klas`, `timestamp`) VALUES
(66, 'orjgw@gmail.com', 'werknemer', '', '', '2021-09-30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(30) NOT NULL,
  `Gebruikersnaam` varchar(30) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`ID`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(1, 'dennis', 'dennis123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `formdata`
--

CREATE TABLE `formdata` (
  `ID` int(11) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `achternaam` varchar(30) NOT NULL,
  `telefoonnummer` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `TOS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `formdata`
--

INSERT INTO `formdata` (`ID`, `voornaam`, `achternaam`, `telefoonnummer`, `email`, `TOS`) VALUES
(131, 'test', 'test', '06123456789', 'orjgw@gmail.com', 'true');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `aanwezigheid`
--
ALTER TABLE `aanwezigheid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `formdata`
--
ALTER TABLE `formdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `aanwezigheid`
--
ALTER TABLE `aanwezigheid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT voor een tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `formdata`
--
ALTER TABLE `formdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
