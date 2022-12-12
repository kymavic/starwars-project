-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 03:46 AM
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
(1, 'Falleen', 'https://static.wikia.nocookie.net/starwars/images/1/18/ZitonMoj-BHUSC.png', 'The Falleen are a fictional race of human-like reptilian people who come from a world called Falleen in the Midrim region in the Star Wars universe. They change the color and hue of their skin to convey their emotional states and can also affect the emotional state of others. Males and females of the race have strong pheromones which can easily attract women and men respectively of many humanoid species. The Falleen seldom leave their world due to the belief that their species is superior to all others. A notable Legends villain from this race is Prince Xizor. Another major villain was Darth Karrid of the Old Republic.'),
(2, 'Far-Outsiders', 'https://static.wikia.nocookie.net/starwars/images/6/6e/YuuzhanVong_NEGAS.jpg', 'Far-Outsiders is the cryptic code-name given by the Chiss who inhabit the edges of the galaxy, for the extra-galactic alien force that began assaulting the Unknown Regions in the years during the Galactic Civil War. They are probably the Yuuzhan Vong, who launched a siege on the galaxy from 25-30 ABY (After the Battle of Yavin). The name \"Far-Outsiders\" is also used by the inhabitants of Zonama Sekot to describe the invaders that attacked their planet. The Far-Outsiders are referred to in the singular, but the Chiss named \"Stent\" once told Mara Jade that there were \"a hundred different threats out there that would freeze your blood if you knew about them. The Ruling Families can\'t stop them; neither can any power in the region.\", suggesting that the term \"Far-Outsiders\" may apply to any unknown hostile race originating from outside the galaxy.');

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
(1, 'Luke Skywalker', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png ', 'Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.\r\n'),
(2, 'Leia Skywalker', 'https://upload.wikimedia.org/wikipedia/en/1/1b/Princess_Leia%27s_characteristic_hairstyle.jpg', 'Leia is princess of the planet Alderaan, a member of the Imperial Senate and an agent of the Rebel Alliance. She thwarts the sinister Sith Lord Darth Vader and helps bring about the destruction of the Empire\'s cataclysmic superweapon, the Death Star.'),
(3, 'Yoda', 'https://upload.wikimedia.org/wikipedia/en/9/9b/Yoda_Empire_Strikes_Back.png', 'He is a small, green humanoid alien who is powerful with the Force and is a leading member of the Jedi Order until its near annihilation.');

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
(1, 'The force', 'The Force is a metaphysical and ubiquitous power in the Star Wars fictional universe. \"Force-sensitive\" characters use the Force throughout the franchise. Heroes like the Jedi seek to \"become one with the Force\", matching their personal wills with the will of the Force, while the Sith and other villains exploit the Force and try to bend it toward their destructive desires.'),
(2, 'Jedi', 'Jedi Knights, or collectively the Jedi Order are the main heroic protagonists of many works of the Star Wars franchise. Working symbiotically alongside the Old Galactic Republic, and later supporting the Rebel Alliance, the Jedi Order is depicted as a monastic, academic, military, and meritocratic peacekeeping organization whose origin dates back thousands of years before the events of the first film released in the franchise.'),
(3, 'Sith', 'They are the antithesis and ancient enemies of the Jedi. The Sith Order are depicted as an ancient monastic and kraterocratic cultist organization of supernaturally gifted Force-wielders driven by a machiavellian-imperialist agenda of galactic domination and revenge against the Jedi Order. The various antagonistic factions in the franchise, namely the Separatist Alliance, the First Galactic Empire, the Imperial Remnant and the First Order, all originated, either directly or indirectly, from the Sith.');

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
(1, 'vicky@starwars.com.co\r\n', '1234\r\n', 'Welcome!\r\n'),
(2, 'kymavic18@hotmail.com', '1234', 'Hello world!');

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
(1, 'Star Wars: Episode IV - A New Hope', 'https://m.media-amazon.com/images/M/MV5BOTA5NjhiOTAtZWM0ZC00MWNhLThiMzEtZDFkOTk2OTU1ZDJkXkEyXkFqcGdeQXVyMTA4NDI1NTQx._V1_FMjpg_UY720_.jpg', 1977, '121', 8.6, 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.'),
(2, 'Star Wars: Episode V - The Empire Strikes Back', 'https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UY720_.jpg', 1980, '124', 8.7, 'After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued across the galaxy by Darth Vader and bounty hunter Boba Fett.'),
(3, 'Star Wars: Episode VI - Return of the Jedi', 'https://m.media-amazon.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UX380_CR0,13,380,562_.jpg', 1983, '131', 8.3, 'After a daring mission to rescue Han Solo from Jabba the Hutt, the Rebels dispatch to Endor to destroy the second Death Star. Meanwhile, Luke struggles to help Darth Vader back from the dark side without falling into the Emperor\'s trap.'),
(4, 'Star Wars: Episode I - The Phantom Menace', 'https://m.media-amazon.com/images/M/MV5BYTRhNjcwNWQtMGJmMi00NmQyLWE2YzItODVmMTdjNWI0ZDA2XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UX380_CR0,4,380,562_.jpg', 1999, '136', 6.5, 'Two Jedi escape a hostile blockade to find allies and come across a young boy who may bring balance to the Force, but the long dormant Sith resurface to claim their original glory.'),
(5, 'Star Wars: Episode II - Attack of the Clones', 'https://m.media-amazon.com/images/M/MV5BMDAzM2M0Y2UtZjRmZi00MzVlLTg4MjEtOTE3NzU5ZDVlMTU5XkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_QL75_UX380_CR0,7,380,562_.jpg', 2002, '142', 6.6, 'Ten years after initially meeting, Anakin Skywalker shares a forbidden romance with Padmé Amidala, while Obi-Wan Kenobi investigates an assassination attempt on the senator and discovers a secret clone army crafted for the Jedi.'),
(6, 'Star Wars: Episode III - Revenge of the Sith', 'https://m.media-amazon.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_QL75_UY562_CR21,0,380,562_.jpg', 2005, '140', 7.6, 'Three years into the Clone Wars, the Jedi rescue Palpatine from Count Dooku. As Obi-Wan pursues a new threat, Anakin acts as a double agent between the Jedi Council and Palpatine and is lured into a sinister plan to rule the galaxy.'),
(7, 'Star Wars: Episode VII - The Force Awakens', 'https://m.media-amazon.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_QL75_UY562_CR1,0,380,562_.jpg', 2015, '138', 7.8, 'As a new threat to the galaxy rises, Rey, a desert scavenger, and Finn, an ex-stormtrooper, must join Han Solo and Chewbacca to search for the one hope of restoring peace.'),
(8, 'Star Wars: Episode VIII - The Last Jedi', 'https://m.media-amazon.com/images/M/MV5BMjQ1MzcxNjg4N15BMl5BanBnXkFtZTgwNzgwMjY4MzI@._V1_QL75_UX380_CR0,0,380,562_.jpg', 2017, '152', 6.9, 'The Star Wars saga continues as new heroes and galactic legends go on an epic adventure, unlocking mysteries of the Force and shocking revelations of the past.');

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
(1, 'Abafar', 'https://static.wikia.nocookie.net/starwars/images/6/66/Abafar-ASDitV.png', 'A desert planet located in the Outer Rim with a completely white surface. Known as The Void, the planet is barely populated but is home to massive amounts of rhydonium, a scarce and volatile fuel.'),
(2, 'Agamar', 'https://static.wikia.nocookie.net/starwars/images/2/22/Agamar-TOSVC.jpg', 'A barren, rocky planet in the Outer Rim. Site of a still-active reserve of Separatist droids that became known for surviving the Clone Wars.'),
(3, 'Ahch-To', 'https://static.wikia.nocookie.net/starwars/images/0/04/Ahch-To_TLJTVD.png', 'Largely oceanic planet on which Luke Skywalker has been hiding for several years, and the location of the first Jedi Temple and the Tree Library of sacred Jedi texts. Porgs, Lanai and thala-sirens are among the native species.');

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
(1, 'Death Star', 'https://upload.wikimedia.org/wikipedia/en/f/f9/Death_star1.png', 'The Death Star is the Empire\'s battle station which has ability to use a kyber-crystal powered laser to destroy entire planets. It appears throughout the Star Wars franchise, particularly the original trilogy.'),
(2, 'Executor (Super Star Destroyer)', 'https://www.therpf.com/forums/attachments/b53f47bc-jpg.1018873/', 'The Executor serves as Darth Vader\'s flagship during the events of The Empire Strikes Back, leading the Death Squadron against the Rebel Alliance on Hoth and in pursuit of the Millennium Falcon. It features again in Return of the Jedi where, during the final space battle, it is destroyed after a Rebel A Wing crashes into the command bridge, causing the Executor to lose control and be destroyed as the second Death Star\'s gravity pulls the flagship into its surface.'),
(3, 'Home One (Mon Calamari cruiser)', 'https://th.bing.com/th/id/OIP.WT_EovJwe6qLYU-WffHqJgHaEz?pid=ImgDet&rs=1', 'Home One made its theatrical appearance in Return of the Jedi as Admiral Ackbar\'s flagship during the Battle of Endor. According to the old Expanded Universe (now Star Wars Legends) material, the Galactic Empire occupied the planet of Mon Calamari (also known as Mon Cala or Dac). After the Empire destroyed three floating cities to pacify the planet, the peaceful Mon Calamari converted their passenger liners and deep space exploration cruisers into warships, driving the Imperials from their homeworld prior to the Battle of Yavin. Darth Vader successfully subjugates Mon Cala, leading to a mass exodus of city-ships from Mon Cala. This fleet would later be commanded by Admiral Raddus and Admiral Ackbar and join the Rebel Alliance.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
