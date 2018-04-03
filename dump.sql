-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Avril 2018 à 16:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `miam`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Ingredient_Name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`) VALUES
(1, 'Jambon'),
(2, 'Miel'),
(3, 'Poulet'),
(4, 'Eau'),
(5, 'Sucre'),
(6, 'Steak'),
(7, 'Huile'),
(8, 'Olive'),
(9, 'Poivre'),
(10, 'weed'),
(11, 'thon'),
(12, 'mais'),
(13, 'poire'),
(14, 'selris');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_recette`
--

CREATE TABLE IF NOT EXISTS `ingredient_recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipeName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ingredient` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quantity` float(10,2) DEFAULT NULL,
  `quantity_unit` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `ingredient_recette`
--

INSERT INTO `ingredient_recette` (`id`, `recipeName`, `ingredient`, `quantity`, `quantity_unit`) VALUES
(1, 'Kebab', 'Gigo d''Agneau', 180.00, 'g'),
(2, 'Kebab', 'oignon râpé', 0.25, ''),
(4, 'Kebab', 'paprika', 0.25, 'cuillère à café'),
(5, 'Kebab', 'cumin moulu', 0.25, 'cuillère à café'),
(6, 'Kebab', 'persil plat ciselé', 0.50, 'cuillère à soupe'),
(7, 'Kebab', 'huile d''olive', 1.50, 'cl'),
(8, 'Kebab', 'poivre', NULL, ''),
(9, 'Kebab', 'sel', NULL, ''),
(50, 'la_recette_du_siecle', 'Huile', 3.00, 'cl'),
(49, 'la_recette_du_siecle', 'Miel', 3.00, 'cl'),
(39, 'la_recette_du_siecle', 'weed', 3.00, 'cl'),
(40, 'la_recette_du_siecle', 'Eau', 3.00, 'cl'),
(41, 'la_recette_du_siecle', 'Miel', 3.00, 'cl'),
(58, 'ok_c_est_cool', 'Eau', 3.00, 'cl'),
(57, 'ok_c_est_cool', 'Eau', 3.00, 'cl'),
(56, 'ok_c_est_cool', 'Eau', 3.00, 'cl'),
(55, 'ok_c_est_cool', 'Eau', 3.00, 'cl');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Recette_Name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`id`, `name`, `text`) VALUES
(1, 'Kebab', '##1) Couper les escalopes en petits morceaux (en dés). Dans un plat creux, verser l’huile d’olive, puis 4 cuillères à soupe de paprika, 2 de gingembre, 4 de curry. Délayer, puis ajouter du sel, du poivre et 2 cuillères à soupe de vinaigre. Pour finir, ajouter herbes de provence. Mélanger le tout en y ajoutant les morceaux de viande. ##2) Verser le fromage blanc dans 1 bol. Mélanger avec le jus de citron, 1 ou 2 cuillères à soupe d’ail en poudre, du sel, du poivre et du persil.\r\n##3) Faire cuire les morceaux de viande à la poêle jusqu''à ce qu''ils dorent un peu.\r\n##4) Couper les tomates en demi-tranches, les oignons en lamelles et la laitue en morceaux.\r\n##Pour finir, Poser les crêpes à plat ou alors fendre légèrement les faluches, puis tartiner le fond avec une couche de sauce blanche, puis ajouter les morceaux de laitue, les morceaux de tomates, puis les morceaux d''oignons parsemés. Ajouter la viande cuite sur cela et arroser d''une couche de sauce. Refermer les crêpes avec un cure-dent piqué dans les bords relevés.'),
(26, 'la_recette_du_siecle', 'la recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du sieclela recette du siecle'),
(27, 'ok_c_est_cool', 'ok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est coolok c est cool');
--
-- Base de données :  `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
