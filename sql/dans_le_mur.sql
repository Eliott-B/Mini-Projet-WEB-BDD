-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 17 Janvier 2022 à 20:17
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dans_le_mur`
--

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `id_voiture` varchar(40) DEFAULT NULL,
  `options` varchar(40) DEFAULT NULL,
  `etat` varchar(40) CHARACTER SET utf8 DEFAULT 'En cours d''analyse'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `email`, `id_voiture`, `options`, `etat`) VALUES
(1, 'noreply@alliot.fr', 'PORSCHE 911 GT3 RS', 'Pack Carbon', 'En cours d\'analyse'),
(2, 'noreply@alliot.fr', 'PORSCHE 911 GT3 RS', 'Pack Carbon', 'En cours de fabrication'),
(3, 'noreply@alliot.fr', 'PORSCHE 911 GT3 RS', 'Pack Carbon', 'En cours d\'expedition'),
(4, 'noreply@alliot.fr', 'PORSCHE 911 GT3 RS', 'Pack Carbon', 'Expedie'),
(5, 'noreply@alliot.fr', 'PORSCHE 911 GT3 RS', 'Pack Carbon', 'Livre');

-- --------------------------------------------------------

--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `nom_option` varchar(40) NOT NULL,
  `prix_option` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `options`
--

INSERT INTO `options` (`nom_option`, `prix_option`) VALUES
('Ailerons', 1340),
('Echappement', 3500),
('Jante Noir', 350),
('Pack Alcantara', 975),
('Pack Carbon', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `nom_voiture` varchar(40) NOT NULL,
  `couleur` varchar(40) DEFAULT NULL,
  `prix` int(11) DEFAULT '0',
  `photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voitures`
--

INSERT INTO `voitures` (`nom_voiture`, `couleur`, `prix`, `photo`) VALUES
('FERRARI 488 Pista', 'Rouge', 283000, 'ferrari-488-pista.png'),
('LAMBORGHINI Urus', 'Noir', 350000, 'lamborghini-urus.png'),
('MASERATI GranCabrio MC', 'Noir', 75000, 'maserati-grancabrio-mc.png'),
('PORSCHE 911 GT3 RS', 'Rouge', 150000, 'porsche-911-gt3-rs.png'),
('TOYOTA Supra', 'Noir', 350000, 'toyota-supra.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_voiture` (`id_voiture`),
  ADD KEY `options` (`options`);

--
-- Index pour la table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`nom_option`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`nom_voiture`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`id_voiture`) REFERENCES `voitures` (`nom_voiture`),
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`options`) REFERENCES `options` (`nom_option`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
