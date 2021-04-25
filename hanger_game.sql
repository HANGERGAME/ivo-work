-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 апр 2021 в 10:51
-- Версия на сървъра: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanger_game`
--

-- --------------------------------------------------------

--
-- Структура на таблица `game_genres`
--

CREATE TABLE `game_genres` (
  `game_genre_id` int(11) NOT NULL,
  `game_genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `game_genres`
--

INSERT INTO `game_genres` (`game_genre_id`, `game_genre_name`) VALUES
(1, 'sports'),
(2, 'cars'),
(3, 'movies');

-- --------------------------------------------------------

--
-- Структура на таблица `game_levels`
--

CREATE TABLE `game_levels` (
  `game_level_id` int(11) NOT NULL,
  `game_level_choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `game_levels`
--

INSERT INTO `game_levels` (`game_level_id`, `game_level_choice`) VALUES
(1, 'Easy'),
(2, 'Medium'),
(3, 'Hard');

-- --------------------------------------------------------

--
-- Структура на таблица `leederbord`
--

CREATE TABLE `leederbord` (
  `leederbord_id` int(11) NOT NULL,
  `time` varchar(20) DEFAULT NULL,
  `player_id` int(11) NOT NULL,
  `game_level_id` int(11) NOT NULL,
  `game_genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `leederbord`
--

INSERT INTO `leederbord` (`leederbord_id`, `time`, `player_id`, `game_level_id`, `game_genre_id`) VALUES
(17, '306.33810022101', 12, 3, 1),
(18, '51.256031618977', 12, 3, 1),
(19, '37.760228625964', 12, 3, 1),
(20, '0.021220059017651', 12, 3, 1),
(21, '58.545740327972', 13, 2, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `player_password` varchar(100) NOT NULL,
  `player_email` varchar(100) NOT NULL,
  `player_years` varchar(11) NOT NULL,
  `player_gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `players`
--

INSERT INTO `players` (`player_id`, `player_name`, `player_password`, `player_email`, `player_years`, `player_gender`) VALUES
(12, 'petar', '1234', 'petar@gmail.com', '30', 'male'),
(13, 'georgi', '1234', 'georgi@gmail.com', '20', 'male');

-- --------------------------------------------------------

--
-- Структура на таблица `words`
--

CREATE TABLE `words` (
  `word_id` int(11) NOT NULL,
  `word_name` varchar(20) NOT NULL,
  `word_letter` int(20) NOT NULL,
  `game_level_id` int(11) NOT NULL,
  `game_genre_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `words`
--

INSERT INTO `words` (`word_id`, `word_name`, `word_letter`, `game_level_id`, `game_genre_id`) VALUES
(10, 'football', 8, 1, 1),
(11, 'tennis', 6, 1, 1),
(12, 'golf', 4, 1, 2),
(13, 'karate', 4, 1, 1),
(14, 'motogp', 6, 1, 1),
(15, 'taekwondo', 9, 2, 1),
(16, 'volleyball', 10, 2, 1),
(17, 'Basketball', 10, 2, 1),
(18, 'baseball', 8, 2, 1),
(19, 'badminton', 9, 2, 1),
(20, 'gymnastic', 9, 3, 1),
(21, 'bmw', 3, 1, 2),
(22, 'audi', 4, 1, 2),
(23, 'toyota', 6, 1, 2),
(24, 'volvo', 5, 1, 2),
(25, 'tesla', 5, 1, 2),
(26, 'mercedes', 8, 2, 2),
(27, 'porsche', 7, 2, 2),
(28, 'ferrari', 7, 2, 2),
(29, 'maserati', 8, 2, 2),
(30, 'volkswagen', 10, 3, 2),
(31, 'mitsubishi', 10, 3, 2),
(32, 'lamborghini', 11, 3, 2),
(33, 'koenigsegg', 10, 3, 2),
(34, 'batman', 6, 1, 3),
(35, 'borat', 5, 1, 3),
(36, 'Taxi', 4, 1, 3),
(37, 'titanic', 7, 2, 3),
(38, 'terminator', 10, 2, 3),
(39, 'ghostbusters', 12, 3, 3),
(40, 'Seaspiracy', 10, 3, 3),
(41, 'madagascar', 10, 3, 3),
(42, 'flintstones', 11, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_genres`
--
ALTER TABLE `game_genres`
  ADD PRIMARY KEY (`game_genre_id`);

--
-- Indexes for table `game_levels`
--
ALTER TABLE `game_levels`
  ADD PRIMARY KEY (`game_level_id`);

--
-- Indexes for table `leederbord`
--
ALTER TABLE `leederbord`
  ADD PRIMARY KEY (`leederbord_id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `game_level_id` (`game_level_id`),
  ADD KEY `game_genre_id` (`game_genre_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`word_id`),
  ADD KEY `game_level_id` (`game_level_id`),
  ADD KEY `game_genre_id` (`game_genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_genres`
--
ALTER TABLE `game_genres`
  MODIFY `game_genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game_levels`
--
ALTER TABLE `game_levels`
  MODIFY `game_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leederbord`
--
ALTER TABLE `leederbord`
  MODIFY `leederbord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `leederbord`
--
ALTER TABLE `leederbord`
  ADD CONSTRAINT `leederbord_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`),
  ADD CONSTRAINT `leederbord_ibfk_2` FOREIGN KEY (`game_level_id`) REFERENCES `game_levels` (`game_level_id`),
  ADD CONSTRAINT `leederbord_ibfk_3` FOREIGN KEY (`game_genre_id`) REFERENCES `game_genres` (`game_genre_id`);

--
-- Ограничения за таблица `words`
--
ALTER TABLE `words`
  ADD CONSTRAINT `words_ibfk_1` FOREIGN KEY (`game_level_id`) REFERENCES `game_levels` (`game_level_id`),
  ADD CONSTRAINT `words_ibfk_2` FOREIGN KEY (`game_genre_id`) REFERENCES `game_genres` (`game_genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
