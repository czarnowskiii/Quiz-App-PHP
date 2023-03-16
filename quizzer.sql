-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lis 2022, 22:29
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `quizzer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `log` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`ID`, `log`, `pass`) VALUES
(1, 'administrator', '123456');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gracze`
--

CREATE TABLE `gracze` (
  `nr` int(11) NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `wynik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `gracze`
--

INSERT INTO `gracze` (`nr`, `login`, `wynik`) VALUES
(1, 'Konrad', 5),
(2, 'Piotr', 4),
(3, 'Kinga', 2),
(4, 'Agata', 2),
(5, 'Jerem', 0),
(6, 'Jan', 2),
(7, 'Jarek', 4),
(8, 'Sebastian', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id` int(11) NOT NULL,
  `numer_pytania` int(11) NOT NULL,
  `prawda` tinyint(4) NOT NULL DEFAULT 0,
  `tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id`, `numer_pytania`, `prawda`, `tresc`) VALUES
(1, 1, 0, '10 koni mechanicznych'),
(2, 1, 0, '10 zaworów'),
(3, 1, 1, '10 cylindrów'),
(4, 1, 0, '10 kół'),
(5, 1, 0, '10 lamp'),
(6, 2, 0, 'Turbo Diesel Intercooler'),
(7, 2, 1, 'Turbo Direct Injection'),
(8, 2, 0, 'Turbo Diesel Intake'),
(9, 2, 0, 'Turbina Dla Inteligentnych'),
(10, 2, 0, 'Tak Dla Inwalidów'),
(16, 3, 1, 'z Niemiec'),
(17, 3, 0, 'z Polski'),
(18, 3, 0, 'z RPA'),
(19, 3, 0, 'z Islandii'),
(20, 3, 0, 'z Hiszpanii'),
(24, 4, 1, 'Willys'),
(25, 4, 0, 'Gaz69'),
(26, 4, 0, 'Uaz Hunter'),
(27, 4, 0, 'Suzuki Jimny'),
(28, 4, 0, 'Audi A3'),
(59, 5, 0, 'Audi'),
(60, 5, 0, 'Volkswagen'),
(61, 5, 1, 'BMW'),
(62, 5, 0, 'Mercedes-Benz'),
(63, 5, 0, 'Porsche');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `numer_pytania` int(11) NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`numer_pytania`, `tekst`) VALUES
(1, 'V10 oznacza:'),
(2, 'TDI oznacza:'),
(3, 'VW to marka pochodząca:'),
(4, 'Jeep Wrangler jest następcą, którego z samochodów?'),
(5, 'M57 to silnik diesla, której niemieckiej marki?');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `gracze`
--
ALTER TABLE `gracze`
  ADD PRIMARY KEY (`nr`);

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `gracze`
--
ALTER TABLE `gracze`
  MODIFY `nr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
