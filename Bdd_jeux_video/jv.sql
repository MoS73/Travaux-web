-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 15 fév. 2021 à 17:31
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeuxvideo`
--
CREATE DATABASE IF NOT EXISTS `jeuxvideo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `jeuxvideo`;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

DROP TABLE IF EXISTS `jeux`;
CREATE TABLE IF NOT EXISTS `jeux` (
  `Jeux_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Jeux_Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jeux_Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Jeux_Prix` float NOT NULL,
  `Jeux_DateSortie` date NOT NULL,
  `Jeux_PaysOrigine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jeux_Connexion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jeux_Mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Jeux_Genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Jeux_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`Jeux_Id`, `Jeux_Titre`, `Jeux_Description`, `Jeux_Prix`, `Jeux_DateSortie`, `Jeux_PaysOrigine`, `Jeux_Connexion`, `Jeux_Mode`, `Jeux_Genre`) VALUES
(1, 'Final Fantasy XV', 'Final Fantasy XV c\'est pourri il est trop linéaire ', 79, '2016-04-28', 'Japon', 'Oui', 'singles', 'RPG'),
(2, 'Far Cry 6', 'Far Cry 6', 50, '5041-02-05', 'USA', 'Online', 'Solo', 'FPS'),
(3, 'Sea of Thieves', 'Sea of Thieves', 52.99, '2017-11-28', 'USA', 'Online', 'Multi-en-ligne', 'MMO'),
(4, 'Monster Hunter World', 'Monster Hunter World', 69.99, '2017-06-21', 'Japon', 'Online', 'Solo', 'RPG'),
(5, 'Dragon Ball FighterZ', 'Dragon Ball FighterZ', 49.99, '2017-05-19', 'Japon', 'Online', 'Solo', 'Action'),
(6, 'A Way Out', 'A Way Out', 29.99, '2017-12-08', 'USA', 'Online', 'Multi-en-ligne', 'Action'),
(7, 'Call of Duty WWII', 'Call of Duty WWII', 49.99, '2018-02-02', 'USA', 'Online', 'Solo', 'FPS'),
(8, 'Extinction', 'Extinction', 59.99, '2018-05-18', 'USA', 'Online', 'Solo', 'Action'),
(9, 'Warhammer Vermintide 2', 'Warhammer Vermintide 2', 23.99, '2017-03-18', 'USA', 'Online', 'Solo', 'FPS'),
(10, 'Star Wars : Battlefront II', 'Star Wars : Battlefront II', 35, '2017-06-17', 'Europe', 'Online', 'Solo', 'FPS');

-- --------------------------------------------------------

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
