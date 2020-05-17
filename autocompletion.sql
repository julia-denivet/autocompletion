-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 mai 2020 à 15:19
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autocompletion`
--
CREATE DATABASE IF NOT EXISTS `autocompletion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `autocompletion`;

-- --------------------------------------------------------

--
-- Structure de la table `persolol`
--

DROP TABLE IF EXISTS `persolol`;
CREATE TABLE IF NOT EXISTS `persolol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `persolol`
--

INSERT INTO `persolol` (`id`, `nom`) VALUES
(1, 'Aatrox'),
(2, 'Ahri'),
(3, 'Akali'),
(4, 'Alistar'),
(5, 'Amumu'),
(6, 'Anivia'),
(7, 'Annie'),
(8, 'Aphelios'),
(9, 'Ashe'),
(10, 'Aurelion Sol'),
(11, 'Azir'),
(12, 'Bard'),
(13, 'Blitzcrank'),
(14, 'Brand'),
(15, 'Braum'),
(16, 'Caitlyn'),
(17, 'Camille'),
(18, 'Cassiopeia'),
(19, 'Cho\'Gath'),
(20, 'Corki'),
(21, 'Darius'),
(22, 'Diana'),
(23, 'Dr. Mundo'),
(24, 'Draven'),
(25, 'Ekko'),
(26, 'Elise'),
(27, 'Evelynn'),
(28, 'Ezreal'),
(29, 'Fiddlesticks'),
(30, 'Fiora'),
(31, 'Fizz'),
(32, 'Galio'),
(33, 'Gangplank'),
(34, 'Garen'),
(35, 'Gnar'),
(36, 'Gragas'),
(37, 'Graves'),
(38, 'Hecarim'),
(39, 'Heimerdinger'),
(40, 'Illaoi'),
(41, 'Irelia'),
(42, 'Ivern'),
(43, 'Janna'),
(44, 'Jarvan IV'),
(45, 'Jax'),
(46, 'Jayce'),
(47, 'Jhin'),
(48, 'Jinx'),
(49, 'Kai\'Sa'),
(50, 'Kalista'),
(51, 'Karma'),
(52, 'Karthus'),
(53, 'Kassadin'),
(54, 'Katarina'),
(55, 'Kayle'),
(56, 'Kayn'),
(57, 'Kennen'),
(58, 'Kha\'Zix'),
(59, 'Kindred'),
(60, 'Kled'),
(61, 'Kog\'Maw'),
(62, 'LeBlanc'),
(63, 'Lee Sin'),
(64, 'Leona'),
(65, 'Lissandra'),
(66, 'Lucian'),
(67, 'Lulu'),
(68, 'Lux'),
(69, 'Maître Yi'),
(70, 'Malphite'),
(71, 'Malzahar'),
(72, 'Maokai'),
(73, 'Miss Fortune'),
(74, 'Mordekaiser'),
(75, 'Morgana'),
(76, 'Nami'),
(77, 'Nasus'),
(78, 'Nautilus'),
(79, 'Neeko'),
(80, 'Nidalee'),
(81, 'Nocturne'),
(82, 'Nunu'),
(83, 'Olaf'),
(84, 'Orianna'),
(85, 'Ornn'),
(86, 'Pantheon'),
(87, 'Poppy'),
(88, 'Pyke'),
(89, 'Qiyana'),
(90, 'Quinn'),
(91, 'Rakan'),
(92, 'Rammus'),
(93, 'Rek\'Sai'),
(94, 'Renekton'),
(95, 'Rengar'),
(96, 'Riven'),
(97, 'Rumble'),
(98, 'Ryze'),
(99, 'Sejuani'),
(100, 'Senna'),
(101, 'Sett'),
(102, 'Shaco'),
(103, 'Shen'),
(104, 'Shyvana'),
(105, 'Singed'),
(106, 'Sion'),
(107, 'Sivir'),
(108, 'Skarner'),
(109, 'Sona'),
(110, 'Soraka'),
(111, 'Swain'),
(112, 'Sylas'),
(113, 'Syndra'),
(114, 'Tahm Kench'),
(115, 'Taliyah'),
(116, 'Talon'),
(117, 'Taric'),
(118, 'Teemo'),
(119, 'Thresh'),
(120, 'Tristana'),
(121, 'Trundle'),
(122, 'Tryndamere'),
(123, 'Twisted Fate'),
(124, 'Twitch'),
(125, 'Udyr'),
(126, 'Urgot'),
(127, 'Varus'),
(128, 'Vayne'),
(129, 'Veigar'),
(130, 'Vel\'Koz'),
(131, 'Vi'),
(132, 'Viktor'),
(133, 'Vladimir'),
(134, 'Volibear'),
(135, 'Warwick'),
(136, 'Wukong'),
(137, 'Xayah'),
(138, 'Xerath'),
(139, 'Xin Zhao'),
(140, 'Yasuo'),
(141, 'Yorick'),
(142, 'Yuumi'),
(143, 'Zac'),
(144, 'Zed'),
(145, 'Ziggs'),
(146, 'Zilean'),
(147, 'Zoé'),
(148, 'Zyra');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
