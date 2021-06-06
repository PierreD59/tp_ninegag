-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 juin 2021 à 19:19
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_ninegag`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `comment` varchar(60) NOT NULL,
  `meme_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `meme_id` (`meme_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `name`, `comment`, `meme_id`) VALUES
(1, 'titi', 'salut', 19),
(2, 'tata', 'salut salut', 19),
(3, 'Titi', 'Incroyable du cul', 19),
(4, 'Mister MV', 'Incroyable du cul', 4);

-- --------------------------------------------------------

--
-- Structure de la table `meme`
--

DROP TABLE IF EXISTS `meme`;
CREATE TABLE IF NOT EXISTS `meme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `illustration_image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `meme`
--

INSERT INTO `meme` (`id`, `name`, `illustration_image_url`) VALUES
(1, 'Magic according to Marvel', 'https://cdn.discordapp.com/attachments/346052911740223500/841942755349233684/facebook_1620805165893_6798149590526797295.jpg'),
(2, 'The Amazing Sniper-Man', 'https://img-9gag-fun.9cache.com/photo/aO3DYgD_460swp.webp'),
(3, 'Praise Be', 'https://img-9gag-fun.9cache.com/photo/amPM1mV_460swp.webp'),
(4, 'Titanic', 'https://scontent-cdg2-1.xx.fbcdn.net/v/t1.6435-0/p552x414/186918437_699029067598120_887645856313784906_n.jpg?_nc_cat=1&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=unDIShZNshoAX85GkXF&_nc_ht=scontent-cdg2-1.xx&tp=6&oh=895b3e3f71a164af04a75878f78ab2ce&oe=60CD82F4'),
(5, 'L\'australie...', 'https://scontent-cdg2-1.xx.fbcdn.net/v/t1.6435-9/188285730_4386702958020097_1737648007633835561_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=730e14&_nc_ohc=2azVcj71CswAX-FME_D&_nc_ht=scontent-cdg2-1.xx&oh=63b2a73c51538a2c5b107deafa5f44e5&oe=60CB4060'),
(6, 'Douce enfance brisée...', 'https://scontent-cdg2-1.xx.fbcdn.net/v/t1.6435-0/s640x640/190908861_2605061633129478_5341928414818784682_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=dZ6vChqFvGMAX82oyAY&_nc_ht=scontent-cdg2-1.xx&tp=7&oh=00ad5aef471b998066e4d2854d4688f5&oe=60D14303'),
(7, 'Le télétravail pour un alchimiste', 'https://img-9gag-fun.9cache.com/photo/a5EzrqL_700bwp.webp'),
(8, 'Tintin et le pain au chocolat', 'https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/189708021_5540031629401466_3245891237342568616_n.jpg?_nc_cat=1&ccb=1-3&_nc_sid=730e14&_nc_ohc=kdjXJ-7V7RMAX_TpZyT&_nc_ht=scontent-cdt1-1.xx&oh=5fe16856c201adeb854c065d55f4d536&oe=60D672FA'),
(9, 'Catexplosion !', 'https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-0/p180x540/194361121_2253086538155345_6718000226498561275_n.jpg?_nc_cat=1&ccb=1-3&_nc_sid=730e14&_nc_ohc=KJvrrPK5iJAAX-_or7Y&_nc_ht=scontent-cdt1-1.xx&tp=6&oh=549bf50c07c8cdbb89f1b55a57e1390d&oe=60DE52D9'),
(10, 'Man vs World', 'https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-9/s720x720/193328874_194757472518799_3049127795702988474_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=qvHwGo_L8v8AX-wphBF&_nc_ht=scontent-cdt1-1.xx&tp=7&oh=54f44299a47152f8b4750dbb6d3e435c&oe=60DC8B92'),
(11, 'La logique de Resident Evil', 'https://scontent-cdt1-1.xx.fbcdn.net/v/t1.6435-0/p526x296/187248067_2599768886992086_4627852512513655612_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=yjrDPNZIwqYAX8zzDqW&_nc_ht=scontent-cdt1-1.xx&tp=6&oh=098319212bfb2b87d5f31800cbc554d8&oe=60CD161F'),
(19, 'Test', 'https://eternia.fr/public/media/upload/newsicon/810.jpeg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`meme_id`) REFERENCES `meme` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
