-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Janvier 2016 à 08:42
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chassoeuvre`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminmod`
--

CREATE TABLE IF NOT EXISTS `adminmod` (
  `idAdMod` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `login` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idAdMod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `adminmod`
--

INSERT INTO `adminmod` (`idAdMod`, `role`, `login`, `pass`) VALUES
(3, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 0, 'modo', 'b4bd3c0453ef20e66f2fcc026e3816ec');

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `idAdresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresseCiv` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `batiment` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `parc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`idAdresse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`idAdresse`, `adresseCiv`, `batiment`, `parc`, `latitude`, `longitude`) VALUES
(1, '6445, avenue Monkland, Montréal', 'Centre sportif Notre-Dame-de Grâce', 'Parc Benny', 45.4664, -73.6316),
(2, NULL, NULL, 'Square Dalhousie', 45.5121, -73.551),
(3, '4101, rue Sherbrooke Est, Montréal (QC) H1X 2B2', 'Jardin botanique', 'Jardin botanique', 45.5616, -73.5627),
(4, '385, rue Sherbrooke Est, Montréal, (QC) H2X 3L1', NULL, 'Intersection des rues Sherbrooke et Saint-Denis', 45.5169, -73.5678),
(5, NULL, NULL, 'Parc Miville-Couture', 45.5169, -73.5552),
(6, NULL, NULL, 'Place Roland-Proulx', 45.4724, -73.5847),
(7, NULL, NULL, 'Place De La Dauversière', 45.5085, -73.5533),
(8, '1 Avenue du Casino, Montréal, QC H3C 4W7', 'Casino de Montréal', 'Parc Jean-Drapeau, Île Notre-Dame', 45.506, -73.5267),
(22, NULL, NULL, 'Parc Guglielmo-Marconi', 45.5348, -73.6178),
(23, '4200, rue Ontario Est, Montréal, H1V 1K1', 'Maison de la culture Maisonneuve', NULL, 45.5512, -73.5405),
(24, '2275 boul.St-Joseph Est, Montréal, (Qc) H2H 1G4', 'Centre du Plateau', NULL, 45.5397, -73.5761),
(25, '275 Rue Notre-Dame Est, Montréal, QC H2Y 1C6', 'Hôtel de Ville de Montréal', NULL, 45.5088, -73.5541),
(26, '5434 Avenue du Parc, Montréal, QC H2V 4G7', 'Bibliothèque Mile-End', NULL, 45.5218, -73.6015),
(27, '1210, rue Sherbrooke Est, Montréal (Québec) H2L 1L9', 'Édifice Gaston-Miron', NULL, 45.5227, -73.5653),
(28, '1115 Laurier Est, Montréal', 'Centre Laurier', NULL, 45.5318, -73.5871),
(29, ' 1 Circuit Gilles Villeneuve Île Notre-Dame, Montréal, Québec, H3C 1A9', 'Pavillon de l''administration, parc Jean-Drapeau', 'Parc Jean-Drapeau, Île Notre-Dame', 45.5038, -73.5293);

-- --------------------------------------------------------

--
-- Structure de la table `arrondissement`
--

CREATE TABLE IF NOT EXISTS `arrondissement` (
  `idArrondissement` int(11) NOT NULL AUTO_INCREMENT,
  `nomArrondissement` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idArrondissement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `arrondissement`
--

INSERT INTO `arrondissement` (`idArrondissement`, `nomArrondissement`) VALUES
(1, 'Côte-des-Neiges–Notre-Dame-de-'),
(2, 'Ville-Marie'),
(3, 'Rosemont–La Petite-Patrie'),
(4, 'Le Plateau-Mont-Royal'),
(5, 'Le Sud-Ouest'),
(6, 'Mercier–Hochelaga-Maisonneuve'),
(7, 'Rivière-des-Prairies–Pointe-au');

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `idArtiste` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `collectif` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noInterne` int(11) DEFAULT NULL,
  `photoArtiste` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idArtiste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `prenom`, `nom`, `collectif`, `noInterne`, `photoArtiste`) VALUES
(1, 'Patrick', 'Coutu', '', 962, NULL),
(2, 'Jocelyne', 'Alloucherie', '', 1099, NULL),
(3, 'Pierre Yves', 'Angers', '', 1127, NULL),
(4, 'Denise', 'Arsenault', '', 1151, NULL),
(5, 'Bioman', 'Rouge', '', 1156, NULL),
(6, NULL, NULL, 'Atelier TAG', 1157, NULL),
(10, 'Henri-Georges', 'Adam', NULL, 1391, NULL),
(11, 'Rosario', 'Antoci', NULL, 1393, NULL),
(12, 'Eduardo', 'Aquino', NULL, 1397, NULL),
(13, 'Heinrich', 'Streubel', NULL, 1399, NULL),
(14, 'Auteur', 'Inconnu', NULL, 1400, NULL),
(15, 'Auteur', 'Inconnu', NULL, 1401, NULL),
(16, 'Auteur', 'Inconnu', NULL, 1402, NULL),
(17, 'Auteur', 'Inconnu', NULL, 1403, NULL),
(18, 'Elijah Pudlat', 'Pootoogook', NULL, 1404, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomCatAng` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`, `nomCatAng`) VALUES
(1, 'Art mural', 'Street Art'),
(2, 'Beaux-Arts', 'Fine Arts'),
(4, 'Arts décoratifs', 'Decorative Arts');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationCommentaire` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  PRIMARY KEY (`idPhoto`,`idCommentaire`),
  KEY `FK_contient_idCommentaire` (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ecrit`
--

CREATE TABLE IF NOT EXISTS `ecrit` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  `dateCommentaire` date DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idCommentaire`),
  KEY `FK_ecrit_idCommentaire` (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `gagne`
--

CREATE TABLE IF NOT EXISTS `gagne` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idSucces` int(11) NOT NULL,
  `dateSucces` datetime DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idSucces`),
  KEY `FK_gagne_idSucces` (`idSucces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modere`
--

CREATE TABLE IF NOT EXISTS `modere` (
  `idMod` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idMod`,`idCommentaire`,`idPhoto`),
  KEY `FK_modere_idCommentaire` (`idCommentaire`),
  KEY `FK_modere_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

CREATE TABLE IF NOT EXISTS `oeuvre` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `titreOeuvre` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `titreVariante` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `technique` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `techniqueAng` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoInterne` int(11) DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationOeuvre` tinyint(1) DEFAULT NULL,
  `idArrondissement` int(11) NOT NULL,
  `idAdresse` int(11) NOT NULL,
  `idArtiste` int(11) DEFAULT NULL,
  `nomMateriaux` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomMateriauxAng` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  `idSousCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idOeuvre`),
  KEY `FK_Oeuvre_idArrondissement` (`idArrondissement`),
  KEY `FK_Oeuvre_idAdresse` (`idAdresse`),
  KEY `FK_Oeuvre_idArtiste` (`idArtiste`),
  KEY `idCategorie` (`idCategorie`),
  KEY `fk_oeuvre_souscat` (`idSousCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `oeuvre`
--

INSERT INTO `oeuvre` (`idOeuvre`, `titreOeuvre`, `titreVariante`, `technique`, `techniqueAng`, `NoInterne`, `description`, `validationOeuvre`, `idArrondissement`, `idAdresse`, `idArtiste`, `nomMateriaux`, `nomMateriauxAng`, `idCategorie`, `idSousCategorie`) VALUES
(2, 'Source', NULL, 'Bronze coulé; boulonné', 'Cast bronze; bolted', 960, NULL, 1, 3, 1, 1, 'Bronze', 'Bronze', 2, 2),
(3, 'Porte de jour', 'Une porte rouge (ouverte, rougeâtre, solaire)', 'Soudé', 'Welded', 1098, NULL, 1, 2, 2, 2, 'acier corten', 'Corten steel', 2, 3),
(4, 'Regarder les pommetiers', NULL, 'Taillé; assemblé', 'Carved; assembled', 1098, NULL, 1, 3, 3, 2, 'Acier corten; granit', 'Corten steel; granite', 2, 3),
(6, ' Le malheureux magnifique', NULL, 'Assemblé; cimenté; peint', 'Assembled; cemented; painted', 1, NULL, 1, 4, 1, 4, 'Ciment; fer; peinture', 'Cement; iron; paint', 2, 2),
(10, 'Les clochards célestes', 'Monumental III', 'Assemblé; cimenté; peint', 'Assembled; cemented; painted', 1135, NULL, 1, 2, 5, 10, 'Ciment; fer; peinture', 'Cement; iron; paint', 2, 2),
(14, 'Discours du roi poète', NULL, NULL, NULL, 1152, NULL, 1, 5, 6, 4, 'Calcaire', 'Limestone', 2, 2),
(16, 'Hommage à Jérôme Le Royer De La Dauversière', NULL, NULL, NULL, 1156, NULL, 1, 2, 7, 6, 'Acier Corten; acier inoxydable; verre trempé', 'Corten steel; stainless steel; tempered glass', 2, 2),
(17, 'Obélisque oblique', NULL, 'Pliées; soudées; boulonnées', ' Bends; welded; bolted', 1173, NULL, 1, 2, 8, 10, 'Acier inoxydable', 'Stainless steel', 2, 2),
(18, 'La source', 'Sergenti', 'Taillé', 'Carved', 1394, NULL, 1, 3, 22, 11, 'Calcaire', 'Limestone', 2, 2),
(19, 'Vous êtes ici', NULL, NULL, NULL, 1396, NULL, 1, 6, 23, 12, 'Aluminium; DEL', 'Aluminum; LED', 2, 3),
(20, 'Non titré (Murale en relief et sculpture)', 'Murale en relief et sculpture (extérieur)', NULL, NULL, 6661, NULL, 1, 4, 24, 12, NULL, NULL, 2, 2),
(21, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1398, NULL, 1, 2, 25, 14, NULL, NULL, 4, 4),
(22, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1398, NULL, 1, 4, 26, 15, NULL, NULL, 4, 4),
(23, 'Non titré (Murale inuit)', 'Murale inuit', NULL, NULL, 3091, NULL, 1, 2, 29, 18, NULL, NULL, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre_artiste`
--

CREATE TABLE IF NOT EXISTS `oeuvre_artiste` (
  `idOeuvre` int(11) NOT NULL,
  `IdArtiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oeuvre_artiste`
--

INSERT INTO `oeuvre_artiste` (`idOeuvre`, `IdArtiste`) VALUES
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `nomPhoto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationPhoto` tinyint(1) DEFAULT NULL,
  `idOeuvre` int(11) NOT NULL,
  PRIMARY KEY (`idPhoto`),
  KEY `fk_photo_oeuvre` (`idOeuvre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `validationPhoto`, `idOeuvre`) VALUES
(1, 'img_2.jpg', 1, 3),
(2, NULL, 0, 4),
(3, NULL, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `propose`
--

CREATE TABLE IF NOT EXISTS `propose` (
  `idUtilisateur` int(11) NOT NULL,
  `idPhoto` int(11) NOT NULL,
  `dateProposition` datetime DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idPhoto`),
  KEY `FK_propose_idUtilisateur` (`idUtilisateur`),
  KEY `FK_propose_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `souscategorie`
--

CREATE TABLE IF NOT EXISTS `souscategorie` (
  `idSousCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomSousCat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomSousCatAng` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idSousCategorie`),
  KEY `idCategorie` (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `souscategorie`
--

INSERT INTO `souscategorie` (`idSousCategorie`, `nomSousCat`, `nomSousCatAng`, `idCategorie`) VALUES
(1, 'Graffiti', 'Graffiti', 1),
(2, 'Sculpture', 'Sculpture', 2),
(3, 'Installation', 'Installation', 4),
(4, 'Vitrail', 'Stained Glass', 2),
(5, 'Peinture', 'Painting', 2);

-- --------------------------------------------------------

--
-- Structure de la table `succes`
--

CREATE TABLE IF NOT EXISTS `succes` (
  `idSucces` int(11) NOT NULL AUTO_INCREMENT,
  `nomSucces` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idSucces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_enregistre`
--

CREATE TABLE IF NOT EXISTS `utilisateur_enregistre` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passUtilisateur` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `photoUtilisateur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur_enregistre`
--

INSERT INTO `utilisateur_enregistre` (`idUtilisateur`, `loginUtilisateur`, `passUtilisateur`, `bio`, `score`, `photoUtilisateur`) VALUES
(4, 'toto', 'f71dbe52628a3f83a77ab494817525c6', 'test', 0, ''),
(5, 'gerard', '64d8be661d8a79416eb6662db51e7118', 'test', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idPhoto`),
  KEY `FK_vote_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_contient_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_contient_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Contraintes pour la table `ecrit`
--
ALTER TABLE `ecrit`
  ADD CONSTRAINT `FK_ecrit_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_ecrit_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `gagne`
--
ALTER TABLE `gagne`
  ADD CONSTRAINT `FK_gagne_idSucces` FOREIGN KEY (`idSucces`) REFERENCES `succes` (`idSucces`),
  ADD CONSTRAINT `FK_gagne_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `modere`
--
ALTER TABLE `modere`
  ADD CONSTRAINT `FK_modere_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_modere_idMod` FOREIGN KEY (`idMod`) REFERENCES `adminmod` (`idAdMod`),
  ADD CONSTRAINT `FK_modere_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Contraintes pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `FK_Oeuvre_idAdresse` FOREIGN KEY (`idAdresse`) REFERENCES `adresse` (`idAdresse`),
  ADD CONSTRAINT `FK_Oeuvre_idArrondissement` FOREIGN KEY (`idArrondissement`) REFERENCES `arrondissement` (`idArrondissement`),
  ADD CONSTRAINT `fk_oeuvre_souscat` FOREIGN KEY (`idSousCategorie`) REFERENCES `souscategorie` (`idSousCategorie`),
  ADD CONSTRAINT `oeuvre_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_oeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`);

--
-- Contraintes pour la table `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `FK_propose_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_propose_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `souscategorie`
--
ALTER TABLE `souscategorie`
  ADD CONSTRAINT `souscategorie_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_vote_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_vote_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
