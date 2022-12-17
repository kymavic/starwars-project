-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 06:38 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `alien_races`
--

INSERT INTO `alien_races` (`id`, `alien_races`, `url_img`, `description`) VALUES
(1, 'Wookiees', 'https://static.wikia.nocookie.net/starwars/images/1/1e/Chewbacca-Fathead.png', 'Wookiees were a species of tall, hairy humanoids that were native to the planet Kashyyyk. A notable member of this species was the warrior Chewbacca, Han Solo\'s best friend and co-pilot, who played a vital role in the Clone Wars during the Battle of Kashyyyk, the Galactic Civil War by aiding the Rebel Alliance in their fight against the Galactic Empire, and the war against the First Order. They were quite strong, and were known to rip people\'s arms out of their sockets when provoked. Though being from a temperate planet better known for its swamps and forests, they were able to be comfortable on icy worlds such as Ilum and Hoth without any protective clothing, including gloves and boots.'),
(2, 'Jawa', 'https://static.wikia.nocookie.net/starwars/images/5/56/Jawas.png', 'Jawas were a sentient species of meter-tall furry humanoids native to the Outer Rim desert world of Tatooine. Jawas who migrated from Tatooine were referred to as Offworld Jawas.'),
(3, 'Tuskens', 'https://static.wikia.nocookie.net/starwars/images/2/2c/TuskenFamily-TSWB.png', 'Tusken Raiders, less formally referred to as Sand People or simply as Tuskens, were a culture of nomadic sentients indigenous to the desert planet Tatooine, where they were often hostile to local settlers. Tusken children were called Uli-ah. The name of Tusken Raiders was acquired much later, due to a period of concerted attacks on the settlement called Fort Tusken around eight decades before 19 BBY.');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imgLocation` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `imgLocation`, `description`) VALUES
(1, 'Luke Skywalker', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png ', 'Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.\r\n'),
(2, 'Leia Skywalker', 'https://upload.wikimedia.org/wikipedia/en/1/1b/Princess_Leia%27s_characteristic_hairstyle.jpg', 'Leia is princess of the planet Alderaan, a member of the Imperial Senate and an agent of the Rebel Alliance. She thwarts the sinister Sith Lord Darth Vader and helps bring about the destruction of the Empire\'s cataclysmic superweapon, the Death Star.'),
(3, 'Han Solo', 'https://upload.wikimedia.org/wikipedia/en/b/be/Han_Solo_depicted_in_promotional_image_for_Star_Wars_%281977%29.jpg', 'First appearing in the original trilogy, Han Solo and his first mate Chewbacca are smugglers who are hired by Ben Kenobi and Luke Skywalker to transport them to Alderaan so they can deliver the stolen plans for the Death Star.');

-- --------------------------------------------------------

--
-- Table structure for table `forces`
--

CREATE TABLE `forces` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `forces`
--

INSERT INTO `forces` (`id`, `name`, `description`) VALUES
(1, 'The force', 'The Force is a metaphysical and ubiquitous power in the Star Wars fictional universe. \"Force-sensitive\" characters use the Force throughout the franchise. Heroes like the Jedi seek to \"become one with the Force\", matching their personal wills with the will of the Force, while the Sith and other villains exploit the Force and try to bend it toward their destructive desires.'),
(2, 'Jedi', 'Jedi Knights, or collectively the Jedi Order are the main heroic protagonists of many works of the Star Wars franchise. Working symbiotically alongside the Old Galactic Republic, and later supporting the Rebel Alliance, the Jedi Order is depicted as a monastic, academic, military, and meritocratic peacekeeping organization whose origin dates back thousands of years before the events of the first film released in the franchise.\r\n<ul>\r\n<li>Obi-Wan Kenobi</li>\r\n<li>Yoda</li>\r\n<li>Luke Skywalker</li>\r\n</ul>'),
(3, 'Sith', 'They are the antithesis and ancient enemies of the Jedi. The Sith Order are depicted as an ancient monastic and kraterocratic cultist organization of supernaturally gifted Force-wielders driven by a machiavellian-imperialist agenda of galactic domination and revenge against the Jedi Order. The various antagonistic factions in the franchise, namely the Separatist Alliance, the First Galactic Empire, the Imperial Remnant and the First Order, all originated, either directly or indirectly, from the Sith.\r\n<ul>\r\n<li>Darth Vader</li>\r\n<li>Darth Sidious</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `url_img`, `year`, `duration`, `rate`, `description`) VALUES
(1, 'Star Wars: Episode IV - A New Hope', 'https://m.media-amazon.com/images/M/MV5BOTA5NjhiOTAtZWM0ZC00MWNhLThiMzEtZDFkOTk2OTU1ZDJkXkEyXkFqcGdeQXVyMTA4NDI1NTQx._V1_FMjpg_UY720_.jpg', 1977, '121', 8.6, 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.'),
(2, 'Star Wars: Episode V - The Empire Strikes Back', 'https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UY720_.jpg', 1980, '124', 8.7, 'After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued across the galaxy by Darth Vader and bounty hunter Boba Fett.'),
(3, 'Star Wars: Episode VI - Return of the Jedi', 'https://m.media-amazon.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UX380_CR0,13,380,562_.jpg', 1983, '131', 8.3, 'After a daring mission to rescue Han Solo from Jabba the Hutt, the Rebels dispatch to Endor to destroy the second Death Star. Meanwhile, Luke struggles to help Darth Vader back from the dark side without falling into the Emperor\'s trap.');

-- --------------------------------------------------------

--
-- Table structure for table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `planet_name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `planets`
--

INSERT INTO `planets` (`id`, `planet_name`, `url_img`, `description`) VALUES
(1, 'Tatooine', 'https://upload.wikimedia.org/wikipedia/en/6/6d/Tatooine_%28fictional_desert_planet%29.jpg', 'The planet was first seen in the original 1977 film Star Wars, and has to date featured in a total of six Star Wars theatrical films, three live-action television series, and two animated series.'),
(2, 'Alderaan', 'https://static.wikia.nocookie.net/starwars/images/4/4a/Alderaan.jpg', 'Alderaan, located in the Core Worlds, was a terrestrial planet covered with mountains. During the waning decades of the Galactic Republic, it was ruled by Queen Breha Organa and represented in the Galactic Senate by her husband, Senator Bail Prestor Organa. Alderaan was regarded for its natural beauty, its tranquility, and the sophistication of its arts and culture.'),
(3, 'Hoth\n', 'https://upload.wikimedia.org/wikipedia/en/d/d2/Hothplanetsurface.jpg', 'Hoth is the sixth planet of a remote system of the same name.[1] It is a small, terrestrial planet blanketed by snow and ice. The freezing climate, although habitable, is too cold for intelligent life to develop. Hoth is home to only a few species, including the towering, predatory wampa and the gray snow-lizards known as tauntauns. Both appear in The Empire Strikes Back.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int(11) NOT NULL,
  `ship_name` varchar(200) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id`, `ship_name`, `url_img`, `description`) VALUES
(1, 'Death Star', 'https://upload.wikimedia.org/wikipedia/en/f/f9/Death_star1.png', 'The Death Star is the Empire\'s battle station which has ability to use a kyber-crystal powered laser to destroy entire planets. It appears throughout the Star Wars franchise, particularly the original trilogy.'),
(2, 'TIE fighter', 'https://upload.wikimedia.org/wikipedia/en/d/d9/TIEfighter.jpg', 'The Twin Ion Engine (TIE) fighter is a series of fictional starfighters featured in the Star Wars universe. TIE fighters are depicted as fast, agile, yet fragile starfighters produced by Sienar Fleet Systems for the Galactic Empire and by Sienar-Jaemus Fleet Systems for the First Order and the Sith Eternal. TIE fighters and other TIE craft appear in Star Wars films, television shows, and throughout the Star Wars expanded universe. Several TIE fighter replicas and toys, as well as a TIE flight simulator, have been produced and sold by many companies.'),
(3, 'X-wing fighter', 'https://upload.wikimedia.org/wikipedia/en/7/7b/X-wing.jpg', 'Named for the distinctive shape made when its s-foils (wings) are in attack position, the X-wing was a class of starfighter used by the Rebel Alliance in their conflict with the Galactic Empire. It made its theatrical debut, as the T-65B model, in Star Wars (1977) as the spacecraft piloted by Luke Skywalker and the Red Squadron when Luke destroyed the Death Star. The starfighter featured extensively in the Star Wars original trilogy and in the Expanded Universe that followed, and has been merchandised as a variety of toys and models.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

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
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `forces`
--
ALTER TABLE `forces`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alien_races`
--
ALTER TABLE `alien_races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forces`
--
ALTER TABLE `forces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
