-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Cze 2022, 17:12
-- Wersja serwera: 10.6.5-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `simple_ecommerce`
--
CREATE DATABASE IF NOT EXISTS `simple_ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simple_ecommerce`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(1, 'Baobab Collection');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `manufacturerID` int(11) NOT NULL,
  `imageName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `manufacturerID`, `imageName`) VALUES
(1, 'Aurum', 150, 1, 'aurum'),
(5, 'Black Pearls', 120, 1, 'black_pearls'),
(6, 'Brussels', 130, 1, 'brussels'),
(7, 'Cyprium', 150, 1, 'cyprium'),
(8, 'Encre De Chine', 90, 1, 'encre_de_chine'),
(9, 'Feathers', 120, 1, 'feathers'),
(10, 'High Society Louise', 80, 1, 'high_society_louise'),
(11, 'High Society Swann', 150, 1, 'high_society_swann'),
(12, 'Manhattan', 130, 1, 'manhattan'),
(13, 'Miami', 180, 1, 'miami'),
(14, 'Nirvana Bliss', 120, 1, 'nirvana_bliss'),
(15, 'Platinum', 160, 1, 'platinum'),
(16, 'Rainforest Mayumbe', 170, 1, 'rainforest_mayumbe'),
(17, 'Rainforest Tanjung', 120, 1, 'rainforest_tanjung'),
(18, 'Sapphire Pearls', 140, 1, 'sapphire_pearls'),
(19, 'Stones Agate', 160, 1, 'stones_agate'),
(20, 'Stones Lazuli', 120, 1, 'stones_lazuli'),
(21, 'Stones Marble', 150, 1, 'stones_marble'),
(22, 'Stones Marble Totem', 120, 1, 'stones_marble_totem');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text DEFAULT NULL,
  `password` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(29, 'Cimon', 'Nißner', 'cimon@nisner.pl', '$2y$10$BSHsFwfg.2Lwm1YigaHWSub2JfCkbStNs17hDymWNWzzKtKRLMa0.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_id_uindex` (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_uindex` (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
