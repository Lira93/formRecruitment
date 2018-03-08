-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Mar 2018, 22:07
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `formdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dataformdb`
--

CREATE TABLE `dataformdb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `subject` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `star` int(6) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `dataformdb`
--

INSERT INTO `dataformdb` (`id`, `name`, `email`, `surname`, `subject`, `star`, `image`, `text`) VALUES
(90, 'Paulina', 'kowalska1@wp.pl', 'Kowalska', 'ocena firmy', 4, 'portfolio.png', 'Kowlaska gratuluje!'),
(91, 'Krystian', 'kowalski34@wp.pl', 'Kowalski', 'ocena firmy', 4, 'ja.jpg', 'sddasdadds');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dataformdb`
--
ALTER TABLE `dataformdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dataformdb`
--
ALTER TABLE `dataformdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
