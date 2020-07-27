-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 juil. 2020 à 12:24
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

-- --------------------------------------------------------

--
-- Structure de la table `football`
--

DROP TABLE IF EXISTS `football`;
CREATE TABLE IF NOT EXISTS `football` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pays` varchar(255) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `logoclub` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `football`
--

INSERT INTO `football` (`id`, `Pays`, `noms`, `images`, `bio`, `logoclub`) VALUES
(1, 'France', 'Griezmann', 'griezmann.png', 'statsgriezmann.png', 'barca.png'),
(2, 'France', 'Pavard', 'pavard.png', 'statspavard.png', 'bayern.png'),
(3, 'France', 'Pogba', 'pogba.png', 'statspogba.png', 'manu.png'),
(4, 'France', 'Sidibé', 'sidibé.png', 'statssidibé.png', 'everton.png'),
(5, 'France', 'Umtiti', 'umtiti.png', 'statsumtiti.png', 'barca.png'),
(6, 'France', 'Varane', 'varane.png', 'statsvarane.png', 'madrid.png'),
(7, 'France', 'Kanté', 'kanté.png', 'statskanté.png', 'chelsea.png'),
(8, 'France', 'Payet', 'payet.png', 'statspayet.png', 'om.png'),
(11, 'France', 'Thauvin', 'thauvin.png', 'statsthauvin.png', 'om.png'),
(12, 'France', 'Sanson', 'sanson.png', 'statssanson.png', 'om.png'),
(13, 'France', 'Kamara', 'kamara.png', 'statskamara.png', 'om.png'),
(14, 'France', 'Mbappé', 'mbappé.png', 'statsmbappé.png', 'pd.png'),
(15, 'France', 'Mandanda', 'mandanda.png', 'statsmandanda.png', 'om.png'),
(16, 'France', 'Dembélé', 'dembélé.png', 'statsdembélé.png', 'barca.png'),
(18, 'France', 'Lenglet', 'lenglet.png', 'statslenglet.png', 'barca.png'),
(20, 'France', 'Gignac', 'gignac.png', 'statsgignac.png', 'tigres.png'),
(21, 'France', 'Gueye', 'Gueye.png', 'statsgueye.png', 'pd.png'),
(22, 'France', 'Patrice Evra', 'evra.png', 'statslenglet.png', 'legend.png'),
(23, 'Brésil', 'Neymar', 'neymar.png', 'statsneymar.png', 'pd.png'),
(24, 'Brésil', 'Rivaldo', 'rivaldo.png', 'statsrivaldo.png', 'legend.png'),
(27, 'Brésil', 'Ronaldo', 'ronaldo.png', 'statsronaldo.png', 'legend.png'),
(28, 'Brésil', 'Kaka', 'kaka.png', 'statskaka.png', 'legend.png'),
(29, 'Brésil', 'Robinho', 'robinho.png', 'statsrobinho.png', 'legend.png'),
(30, 'Brésil', 'Cafu', 'cafu.png', 'statscafu.png', 'legend.png'),
(31, 'Brésil', 'Socrates', 'socrates.png', 'statssocrates.png', 'legend.png'),
(32, 'Brésil', 'Dani Alves', 'danialves.png', 'statsalves.png', 'legend.png'),
(33, 'Brésil', 'Firmino', 'firmino.png', 'statsfirmino.png', 'liverpool.png'),
(34, 'Brésil', 'Hulk', 'hulk.png', 'statshulk.png', 'china.png'),
(35, 'Brésil', 'Brandao', 'brandao.png', 'statsbrandao.png', 'legend.png'),
(36, 'Brésil', 'Lucas', 'lucas.png', 'statslucas.png', 'hotspurs.png'),
(37, 'Brésil', 'Willian', 'willian.png', 'statswillian.png', 'chelsea.png'),
(38, 'Brésil', 'Oscar', 'oscar.png', 'statsoscar.png', 'china.png'),
(39, 'Brésil', 'Pelé', 'pelé.png', 'statspelé.png', 'legend.png'),
(40, 'Brésil', 'Juninho', 'juninho.png', 'statsjuninho.png', 'legend.png'),
(41, 'Brésil', 'Socrates', 'socrates.png', 'statssocrates.png', 'legend.png'),
(42, 'Brésil', 'Roberto Carlos', 'robertocarlos.png', 'statscarlos.png', 'legend.png'),
(43, 'Brésil', 'Marquinhos', 'marquinhos.png', 'statsmarquinhos.png', 'pd.png'),
(44, 'Brésil', 'Thiago Silva', 'thiago.png', 'statsthiago.png', 'pd.png'),
(45, 'Brésil', 'Adriano', 'adriano.png', 'statsadriano.png', 'legend.png'),
(47, 'Brésil', 'David Luiz', 'davidluiz.png', 'statsdavidluiz.png', 'arsenal.png'),
(48, 'Brésil', 'Jesus', 'jesus.png', 'statsjesus.png', 'city.png'),
(49, 'Brésil', 'Casemiro', 'casemiro.png', 'statscasemiro.png', 'madrid.png'),
(50, 'Brésil', 'Vinicius', 'vinicius.png', 'statsvinicius.png', 'madrid.png'),
(52, 'Brésil', 'Richarlison', 'richarlison.png', 'statsricharlison.png', 'everton.png'),
(53, 'France', 'Zinedine Zidane', 'zidane.png', 'statszidane.png', 'legend.png'),
(55, 'France', 'Franck Ribery', 'ribery.png', 'statsribery.png', 'fiorentina.png'),
(56, 'Brésil', 'Ronaldinho', 'ronaldinho.png', 'statsronaldinho.png', 'legend.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
