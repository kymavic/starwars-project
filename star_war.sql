-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 12:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_war`
--

-- --------------------------------------------------------

--
-- Table structure for table `alien_races`
--

CREATE TABLE `alien_races` (
  `id` int(11) NOT NULL,
  `alien_races` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alien_races`
--

INSERT INTO `alien_races` (`id`, `alien_races`, `url_img`, `description`) VALUES
(1, 'Gamorrean', 'https://lumiere-a.akamaihd.net/v1/images/gamorrean-main_5141bc61.jpeg?region=0%2C0%2C1280%2C721&width=960', 'A Gamorrean is a large pig-like humanoid from the fictional Star Wars series. The creatures have little intelligence and are often hired as guards, notably by Jabba the Hutt, who was fond of hiring them due to their low cost.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imgLocation` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `imgLocation`, `description`) VALUES
(1, 'Luke Skywalker', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png ', 'Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `forces`
--

CREATE TABLE `forces` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forces`
--

INSERT INTO `forces` (`id`, `name`, `description`) VALUES
(1, 'the force\r\n', 'Was an energy field created by all life that connected everything in the universe, and was known by a variety of names throughout galactic history. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `email`, `password`, `message`) VALUES
(1, 'vicky@starwars.com.co\r\n', '1234\r\n', 'Welcome!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_title` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `rate` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `url_img`, `year`, `duration`, `rate`, `description`) VALUES
(1, 'Star Wars: Episode IV - A New Hope', 'https://lumiere-a.akamaihd.net/v1/images/Star-Wars-New-Hope-IV-Poster_c217085b.jpeg?region=49%2C43%2C580%2C914&width=480 ', 1977, '121 ', 8.6, 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.');

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `planet_name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `planet_name`, `url_img`, `description`) VALUES
(1, 'Abafar', 'https://static.wikia.nocookie.net/star-wars-extended-universe/images/0/01/Tatooine.png/revision/latest?cb=20180131124626', 'A desert planet located in the Outer Rim with a completely white surface. Known as The Void, the planet is barely populated but is home to massive amounts of rhydonium, a scarce and volatile fuel.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int(11) NOT NULL,
  `ship_name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id`, `ship_name`, `url_img`, `description`) VALUES
(1, 'Death Star', 'https://static.wikia.nocookie.net/starwars/images/8/87/Imperial_Might_RotE.png/revision/latest?cb=20200710034046 ', 'The Death Star is the Empire\'s battle station which has ability to use a kyber-crystal powered laser to destroy entire planets. It appears throughout the Star Wars franchise, particularly the original trilogy.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alien_races`
--
ALTER TABLE `alien_races`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forces`
--
ALTER TABLE `forces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alien_races`
--
ALTER TABLE `alien_races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forces`
--
ALTER TABLE `forces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
