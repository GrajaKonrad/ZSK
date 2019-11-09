-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lis 2019, 15:44
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `platforma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzialy`
--

CREATE TABLE `dzialy` (
  `IdDzialu` varchar(255) NOT NULL,
  `KierunekId` varchar(255) NOT NULL,
  `Autor` int(11) NOT NULL,
  `NazwaDzialu` varchar(255) DEFAULT 'NULL',
  `Kategoria` varchar(255) DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `OznaczenieJezyka` varchar(3) NOT NULL,
  `PelnaNazwaJezyka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kierunki`
--

CREATE TABLE `kierunki` (
  `IdKierunku` varchar(255) NOT NULL,
  `JezykOznaczenie` varchar(3) NOT NULL,
  `NazwaKierunku` varchar(255) DEFAULT NULL,
  `PoziomZaawansoania` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowka`
--

CREATE TABLE `slowka` (
  `IdSlowka` varchar(255) NOT NULL,
  `UzytkownikId` int(11) NOT NULL,
  `DzialId` varchar(255) NOT NULL,
  `SlowkoPierwszyJ` varchar(255) DEFAULT NULL,
  `SlowkoDrugiJ` varchar(255) DEFAULT NULL,
  `Poprawnie` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `IdUzytkownika` int(11) NOT NULL DEFAULT 0,
  `NazwaU` varchar(255) DEFAULT NULL,
  `Haslo` varchar(20) DEFAULT NULL,
  `Uprawnienia` varchar(30) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `DataUtworzeniaKonta` varchar(255) DEFAULT NULL,
  `PreferowanyJezykStronny` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzialy`
--
ALTER TABLE `dzialy`
  ADD PRIMARY KEY (`IdDzialu`),
  ADD KEY `IdDziału` (`IdDzialu`),
  ADD KEY `IdKierunku` (`KierunekId`),
  ADD KEY `KierunkiDziały` (`KierunekId`),
  ADD KEY `UżytkownicyDziały` (`Autor`);

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`OznaczenieJezyka`);

--
-- Indeksy dla tabeli `kierunki`
--
ALTER TABLE `kierunki`
  ADD PRIMARY KEY (`IdKierunku`),
  ADD KEY `Id` (`IdKierunku`),
  ADD KEY `JęzykiKierunki` (`JezykOznaczenie`);

--
-- Indeksy dla tabeli `slowka`
--
ALTER TABLE `slowka`
  ADD KEY `DziałySłówka` (`DzialId`),
  ADD KEY `IdSłówka` (`IdSlowka`),
  ADD KEY `IdUżytkownika` (`UzytkownikId`),
  ADD KEY `UżytkownicySłówka` (`UzytkownikId`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`IdUzytkownika`),
  ADD KEY `Id` (`IdUzytkownika`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dzialy`
--
ALTER TABLE `dzialy`
  ADD CONSTRAINT `dzialy_ibfk_1` FOREIGN KEY (`Autor`) REFERENCES `uzytkownicy` (`IdUzytkownika`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `dzialy_ibfk_2` FOREIGN KEY (`KierunekId`) REFERENCES `kierunki` (`IdKierunku`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `kierunki`
--
ALTER TABLE `kierunki`
  ADD CONSTRAINT `kierunki_ibfk_1` FOREIGN KEY (`JezykOznaczenie`) REFERENCES `jezyki` (`OznaczenieJezyka`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `slowka`
--
ALTER TABLE `slowka`
  ADD CONSTRAINT `slowka_ibfk_1` FOREIGN KEY (`UzytkownikId`) REFERENCES `uzytkownicy` (`IdUzytkownika`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `slowka_ibfk_2` FOREIGN KEY (`DzialId`) REFERENCES `dzialy` (`IdDzialu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
