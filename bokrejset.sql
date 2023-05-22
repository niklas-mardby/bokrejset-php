-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 maj 2023 kl 15:17
-- Serverversion: 10.4.28-MariaDB
-- PHP-version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `bokrejset`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumpning av Data i tabell `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`) VALUES
(1, 'f-test', 'l-test'),
(2, 'Martha', 'Wells'),
(3, 'Adrian', 'Tchaikovksy'),
(4, 'Hannu', 'Rajaniemi'),
(5, 'Becky', 'Chambers'),
(6, 'S.M.', 'Stirling'),
(7, 'Dennis', 'Taylor');

-- --------------------------------------------------------

--
-- Tabellstruktur `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `year` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumpning av Data i tabell `books`
--

INSERT INTO `books` (`id`, `title`, `year`, `author_id`) VALUES
(1, 'Children of Time', 2015, 3),
(2, 'The Quantum Thief', 2010, 4),
(3, 'The Long Way to a Small, Angry Planet', 2014, 5),
(4, 'Dies the Fire', 2004, 6),
(5, 'We Are Legion (We Are Bob)', 2016, 7),
(6, 'All Systems Red', 2017, 2),
(7, 'Artificial Condition', 2018, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Stina'),
(2, 'Lisa'),
(3, 'Benny'),
(4, 'Olle');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT för tabell `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
