-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 01:27 PM
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
  `name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(1, 'Luke Skywalker', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png', ' Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.');

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(2, 'Leia Skywalker', 'https://upload.wikimedia.org/wikipedia/en/1/1b/Princess_Leia%27s_characteristic_hairstyle.jpg', 'Leia is princess of the planet Alderaan, a member of the Imperial Senate and an agent of the Rebel Alliance. She thwarts the sinister Sith Lord Darth Vader and helps bring about the destruction of the Empire''s cataclysmic superweapon, the Death Star.');

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(3, 'Yoda', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Yoda_Empire_Strikes_Back.png', 'He is a small, green humanoid alien who is powerful with the Force and is a leading member of the Jedi Order until its near annihilation.');

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(4, 'Darth Vader', 'https://upload.wikimedia.org/wikipedia/en/0/0b/Darth_Vader_in_The_Empire_Strikes_Back.jpg', 'The character is the central antagonist of the original trilogy and, as Anakin Skywalker, is one of the main protagonists throughout the prequel trilogy.');

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(5, 'Han Solo', 'https://upload.wikimedia.org/wikipedia/en/b/be/Han_Solo_depicted_in_promotional_image_for_Star_Wars_%281977%29.jpg', 'Han Solo and his first mate Chewbacca are smugglers who are hired by Ben Kenobi and Luke Skywalker to transport them to Alderaan so they can deliver the stolen plans for the Death Star.');

INSERT INTO `characters` (`id`,`name`, `url_img`, `description`) VALUES
(6, 'Chewbacca', 'https://upload.wikimedia.org/wikipedia/en/1/12/Chewbaca_%28Peter_Mayhew%29.png', 'He is a Wookiee, a tall, hirsute, bipedal, intelligent species originating from the fictional planet of Kashyyyk. Chewbacca is the loyal friend and first mate of Han Solo, and serves as co-pilot on Solo''s spaceship, the Millennium Falcon; together they help the Rebel Alliance defeat the Galactic Empire and restore freedom to the galaxy.');

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

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_title` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `duration` int(4) NOT NULL,
  `rate` int(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(1, 'Abafar', '../images/planet1.jpg', 'A desert planet located in the Outer Rim with a completely white surface. Known as The Void, the planet is barely populated but is home to massive amounts of rhydonium, a scarce and volatile fuel.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(2, 'Agamar', '../images/planet1.jpg', 'A barren, rocky planet in the Outer Rim. Site of a still-active reserve of Separatist droids that became known for surviving the Clone Wars.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(3, 'Ahch-To', '../images/planet1.jpg', 'Largely oceanic planet on which Luke Skywalker has been hiding for several years, and the location of the first Jedi Temple and the Tree Library of sacred Jedi texts. Porgs, Lanai and thala-sirens are among the native species.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(4, 'Ajan Kloss', '../images/planet1.jpg', 'A jungle moon which serves as a new base of operations for the Resistance. Years before, Leia and Luke were training there. Leia Organa dies here after using the last of her energy to reach out to her son through the Force.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(5, 'Akiva', '../images/planet1.jpg', 'Jungle planet and home of Norra and Temmin Wexley, and a primary setting in Aftermath.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(6, 'Alderaan', '../images/planet1.jpg', 'Forests, mountains; home planet of Princess Leia and the House of Organa. Destroyed by the first Death Star as punishment for involvement in the Rebel Alliance and also as a demonstration of power.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(7, 'Aaleen', '../images/planet1.jpg', 'A subterranean world located in the Mid Rim. The native species include, the surface dwelling beings called the Aleena and sentient tree-like beings called Kindalo.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(8, 'Alzoc III', '../images/planet1.jpg', 'Ice planet, with many glaciers, and in its surface lies a crashed separatist carrier, with an anti-gravitational device.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(9, 'Anaxes', '../images/planet1.jpg', 'A rocky planet located in the Azure sector of the galaxy''s Core Worlds region. A majority of its surface was covered with tall, red plant-like life. In the early years of the Imperial Era, the planet was destroyed in a cataclysm, with the remains becoming the Anaxes asteroid belt.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(10, 'Ando', '../images/planet1.jpg', 'A water-covered planet located in the Outer Rim, it is home to the amphibious Aqualish species and endures great turmoil during the Separatist Crisis.');
INSERT INTO `planets` (`id`,`name`, `url_img`, `description`) VALUES
(11, 'Anoat', '../images/planet1.jpg', 'Polluted; A nearly inhospitable planet used by the Empire.');

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forces`
--

CREATE TABLE `forces` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forces`
--
INSERT INTO `forces` (`id`,`name`, `url_img`, `description`) VALUES
(1, 'The Force', '../images/force1.jpg', 'The Force is a metaphysical and ubiquitous power in the Star Wars fictional universe. \"Force-sensitive\" characters use the Force throughout the franchise. Heroes like the Jedi seek to \"become one with the Force\", matching their personal wills with the will of the Force, while the Sith and other villains exploit the Force and try to bend it toward their destructive desires.');
INSERT INTO `forces` (`id`,`name`, `url_img`, `description`) VALUES
(2, 'Jedi', '../images/jedi1.jpg', 'Jedi Knights, or collectively the Jedi Order are the main heroic protagonists of many works of the Star Wars franchise. Working symbiotically alongside the Old Galactic Republic, and later supporting the Rebel Alliance, the Jedi Order is depicted as a monastic, academic, military, and meritocratic peacekeeping organization whose origin dates back thousands of years before the events of the first film released in the franchise.');
INSERT INTO `forces` (`id`,`name`, `url_img`, `description`) VALUES
(3, 'Sith', '../images/sith1.jpg', 'They are the antithesis and ancient enemies of the Jedi. The Sith Order are depicted as an ancient monastic and kraterocratic cultist organization of supernaturally gifted Force-wielders driven by a machiavellian-imperialist agenda of galactic domination and revenge against the Jedi Order. The various antagonistic factions in the franchise, namely the Separatist Alliance, the First Galactic Empire, the Imperial Remnant and the First Order, all originated, either directly or indirectly, from the Sith.');
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
-- Indexes for table `forces`
--
ALTER TABLE `forces`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forces`
--
ALTER TABLE `forces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
