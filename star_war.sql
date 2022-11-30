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
INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(1, 'Falleen', '../images/alien1.jpg', 'The Falleen are a fictional race of human-like reptilian people who come from a world called Falleen in the Midrim region in the Star Wars universe. They change the color and hue of their skin to convey their emotional states and can also affect the emotional state of others. Males and females of the race have strong pheromones which can easily attract women and men respectively of many humanoid species. The Falleen seldom leave their world due to the belief that their species is superior to all others. A notable Legends villain from this race is Prince Xizor. Another major villain was Darth Karrid of the Old Republic.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(2, 'Far-Outsiders', '../images/alien1.jpg', 'Far-Outsiders is the cryptic code-name given by the Chiss who inhabit the edges of the galaxy, for the extra-galactic alien force that began assaulting the Unknown Regions in the years during the Galactic Civil War. They are probably the Yuuzhan Vong, who launched a siege on the galaxy from 25-30 ABY (After the Battle of Yavin). The name "Far-Outsiders" is also used by the inhabitants of Zonama Sekot to describe the invaders that attacked their planet. The Far-Outsiders are referred to in the singular, but the Chiss named "Stent" once told Mara Jade that there were "a hundred different threats out there that would freeze your blood if you knew about them. The Ruling Families can''t stop them; neither can any power in the region.", suggesting that the term "Far-Outsiders" may apply to any unknown hostile race originating from outside the galaxy.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(3, 'Feeorin', '../images/alien1.jpg', 'Nym, a pirate from various Star Wars computer games (including the MMORPG "Star Wars Galaxies") was a Feeorin. It is said that Feeorins only grow stronger with age. Their homeworld was Odryn for a period of time in the Old Republic era, when the oldest and strongest Feeorin was chosen as their leader. The controversial Jedi master Feln was a Feeorin leader. It has been stated in several Star Wars novels and comics that there are only roughly 1 million Feeorins left in the galaxy, suggesting a decline from a larger number.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(4, 'Ferroans', '../images/alien1.jpg', 'Not a well known species, the only reference is in Force Heretic 1-3 and Rogue Planet. They have icy blue skin, white-toned hair, and live on Zonama Sekot, a living planet. The planet provides them fleshy habitats constructed of its own mass.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(5, 'Firrerreo', '../images/alien1.jpg', 'The Firrerreo are a species of near-humans from the planet Firrerre. They have two-toned hair and golden skin. In their culture, if someone says a Firrerreo''s name, the Firrerreo would be forced to serve the speaker, as saying a Firrerreo''s name was a form of power.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(6, 'Fosh', '../images/alien1.jpg', 'The Fosh are a sentient avian species. They are first mentioned in the Star Wars: The New Jedi Order series. The only Fosh mentioned in all the Star Wars books was the Jedi Knight Vergere.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(7, 'Frozian', '../images/alien1.jpg', 'The Frozian are a species of sentient felines, hailing from the planet Froz. Their most distinctive characteristics are their triple-jointed hands, their double-jointed legs, and their infertility off their homeworld.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(8, 'Gado', '../images/alien1.jpg', 'Gados are tall, thin, furry sapients with long limbs and a worm-like head. Most of a Gado''s inner organs are stretched out in ribbons that run throughout their body; thus, any injury can be life-threatening to a Gado. Gados are native to the planet of Abregado-rae. They formerly spoke a language called Gados, but now mostly speak Basic.');

INSERT INTO `alien_races` (`id`,`name`, `url_img`, `description`) VALUES
(9, 'Gamorrean', '../images/alien1.jpg', 'A Gamorrean is a large pig-like humanoid from the fictional Star Wars series. The creatures have little intelligence and are often hired as guards, notably by Jabba the Hutt, who was fond of hiring them due to their low cost. On their home planet, Gamorreans exist in a sort of tribal political system dominated by the female sows. The males train for massive tribal conflicts that take place each year. The first time a space ship landed on Gamorr, the various tribes fought for days over who would win the right to approach it. The winning side eventually battered the vessel to pieces. Entries regarding the Gamorrean homeworld in travel guides simply read "DO NOT GO TO GAMORR!"');
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

INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(1, 'Death Star', '../images/ship1.jpg', 'The Death Star is the Empire''s battle station which has ability to use a kyber-crystal powered laser to destroy entire planets. It appears throughout the Star Wars franchise, particularly the original trilogy.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(2, 'Executor (Super Star Destroyer)', '../images/ship1.jpg', 'The Executor serves as Darth Vader''s flagship during the events of The Empire Strikes Back, leading the Death Squadron against the Rebel Alliance on Hoth and in pursuit of the Millennium Falcon. It features again in Return of the Jedi where, during the final space battle, it is destroyed after a Rebel A Wing crashes into the command bridge, causing the Executor to lose control and be destroyed as the second Death Star''s gravity pulls the flagship into its surface.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(3, 'Home One (Mon Calamari cruiser)', '../images/ship1.jpg', 'Home One made its theatrical appearance in Return of the Jedi as Admiral Ackbar''s flagship during the Battle of Endor. According to the old Expanded Universe (now Star Wars Legends) material, the Galactic Empire occupied the planet of Mon Calamari (also known as Mon Cala or Dac). After the Empire destroyed three floating cities to pacify the planet, the peaceful Mon Calamari converted their passenger liners and deep space exploration cruisers into warships, driving the Imperials from their homeworld prior to the Battle of Yavin. Darth Vader successfully subjugates Mon Cala, leading to a mass exodus of city-ships from Mon Cala. This fleet would later be commanded by Admiral Raddus and Admiral Ackbar and join the Rebel Alliance.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(4, 'Imperial landing craft (Sentinel-class landing craft)', '../images/ship1.jpg', 'Imperial landing craft (or Sentinel-class landing craft) were designed for the Special Edition release of Star Wars Episode IV: A New Hope and created entirely with CGI. However, they first appeared in products of the Star Wars: Shadows of the Empire multimedia campaign. According to in-universe sources, the primary mission for Sentinel-class craft is deploying Imperial military forces from orbit onto a planet, though it can be used for other missions including short-range scouting, cargo transport and close air support. Heavily armored and equipped with powerful deflector shields, Imperial landers carry eight laser cannons, two concussion missile launchers, two blaster cannons and an ion cannon turret. As a troop transport it can carry 54 stormtroopers into battle, or carry vehicles via cargo pod installed on its underside.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(5, 'Imperial shuttle (Lambda-class shuttle)', '../images/ship1.jpg', 'Lambda-class T4a shuttles first appeared in Star Wars: Episode VI - Return of the Jedi, and were later added to the Special Edition release of The Empire Strikes Back. Joe Johnston, Ralph McQuarrie, and Nilo Rodis-Jamero borrowed elements from the skyhopper designed for A New Hope when refining the shuttle''s appearance. Earlier versions were boxy, boat-like, or had TIE fighter-like components. Industrial Light and Magic''s modelmakers made two shooting models, although CGI versions were used for the craft''s Special Edition appearance in The Empire Strikes Back. The Theta-class shuttle in Revenge of the Sith was designed to appear like a predecessor to the Lambda class. A Lambda-class shuttle makes a cameo appearance during the docking sequence of Inara Serra''s shuttle in "Serenity", the pilot episode of Joss Whedon''s Firefly.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(6, 'Imperial Star Destroyer', '../images/ship1.jpg', 'The Star Destroyers are the Galactic Empire''s assault ships. Much like the Republic assault ships, the two have similar hulls, bridges, engines, and many other parts. They appear in a variety of forms throughout the Star Wars franchise. The Ravager, an Executor-class Star Dreadnought, was destroyed during the Battle of Jakku.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(7, 'Millennium Falcon (YT-1300 light freighter)', '../images/ship1.jpg', 'The Millennium Falcon is a highly modified YT-1300F light freighter captained by smuggler Han Solo (Harrison Ford) and his Wookiee first mate, Chewbacca (Peter Mayhew).');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(8, 'Rebel Medical Frigate (Nebulon-B frigate)', '../images/ship1.jpg', 'Luke Skywalker (Mark Hamill) receives a prosthetic hand aboard the Redemption, a modified Nebulon-B escort frigate, at the conclusion of Star Wars: Episode V - The Empire Strikes Back. A Nebulon-B medical frigate is part of the Rebel Alliance fleet at the Battle of Endor in Return of the Jedi. Expanded Universe material states that relatively affordable Nebulon-B frigates, which are effective at engaging starfighters, are used by both the Rebellion and the Galactic Empire. The frigates appear in several LucasArts titles, including the X-Wing flight simulators series, Empire at War real-time strategy game, and Star Wars: Battlefront, as well as episodes 'Zero Hour' and 'Secret Cargo' of Star Wars Rebels.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(9, 'Rebel Transport (GR-75 medium transport)', '../images/ship1.jpg', 'GR-75 medium transports are a class of ship which first appears in The Empire Strikes Back during the evacuation of Echo Base on Hoth, and have made appearances in other media. Only 90 m (300 ft) long, these ships are described in Star Wars sources as largely consisting of a thick outer hull with its interior entirely open for modular cargo pods. These are held in place by a magnetic shield and allows the transport to accommodate 19,000 metric tons (42,000,000 lb) of cargo. Cheap and easy to maintain, these transports are only equipped with four twin laser cannons and minimal deflector shields, though some are retrofitted for combat.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(10, 'Slave I (Firespray-31)', '../images/ship1.jpg', 'Slave I is the starship used by bounty hunter Boba Fett (Jeremy Bulloch) in The Empire Strikes Back and The Mandalorian (in which Boba is played by Temuera Morrison), and by his father Jango Fett (also played by Morrison) in Attack of the Clones. The ship's design is said to resemble the shape of a street lamp. However, the actual inspiration for the shape of the ship was a radar dish, according to Nilo Rodis-Jamero, the assistant art director and visual effects creator on The Empire Strikes Back. Rodis-Jamero created the initial design after seeing Joe Johnston's ideas for Boba Fett, and states that "the original design I had was round, but when you looked at it from the side, it became elliptical...George thought it was elliptical, so that's what it became." He goes on to say that "hen building the ship at ILM, someone looked at the street lamps and pointed out that they looked like Boba's ship. So everyone began to think that was where I got the idea for the design." Its appearance in the original release of The Empire Strikes Back was realized by a combination of matte paintings and a 69-centimeter (27 in) model.');
INSERT INTO `ships` (`id`,`name`, `url_img`, `description`) VALUES
(11, 'Tantive IV (Rebel Blockade Runner)', '../images/ship1.jpg', 'The Tantive IV, identified in source material as a CR90 Corellian corvette, first appears in the opening scene of the original Star Wars: Episode IV - A New Hope, commanded by Princess Leia (Carrie Fisher) as she evades pursuit from Darth Vader (David Prowse/James Earl Jones) aboard his Imperial Star Destroyer. Her adoptive father Bail Organa (Jimmy Smits) is seen using a similar vessel during the prequel movie Revenge of the Sith, identified in source material as the CR70 model Tantive III. Corellian corvettes, also known as Rebel Blockade Runners for their powerful engine array and ability to outrun customs vessels, are manufactured by the Corellian Engineering Corporation.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
