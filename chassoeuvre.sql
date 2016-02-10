-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 10 Février 2016 à 05:48
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
-- Structure de la table `arrondissement`
--

CREATE TABLE IF NOT EXISTS `arrondissement` (
  `idArrondissement` int(11) NOT NULL AUTO_INCREMENT,
  `nomArrondissement` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idArrondissement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1849 ;

--
-- Contenu de la table `arrondissement`
--

INSERT INTO `arrondissement` (`idArrondissement`, `nomArrondissement`) VALUES
(1, 'Côte-des-Neiges–Notre-Dame-de-Grâce'),
(2, 'Ville-Marie'),
(3, 'Rosemont–La Petite-Patrie'),
(4, 'Le Plateau-Mont-Royal'),
(5, 'Le Sud-Ouest'),
(6, 'Mercier–Hochelaga-Maisonneuve'),
(1837, 'Rivière-des-Prairies–Pointe-aux-Trembles'),
(1838, 'Saint-Léonard'),
(1839, 'Verdun'),
(1840, 'Villeray–Saint-Michel–Parc-Extension'),
(1841, 'Lachine'),
(1842, 'LaSalle'),
(1843, 'Ahuntsic-Cartierville'),
(1844, 'Saint-Laurent'),
(1845, 'Montréal-Nord'),
(1846, 'Outremont'),
(1847, 'L’Île-Bizard–Sainte-Geneviève'),
(1848, 'Pierrefonds-Roxboro');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=737 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `prenom`, `nom`, `collectif`, `noInterne`, `photoArtiste`) VALUES
(534, 'Patrick', 'Coutu', '', 960, '960.jpg'),
(535, 'Jocelyne', 'Alloucherie', '', 1098, '1098.jpg'),
(536, 'Pierre Yves', 'Angers', '', 1135, '1135.jpg'),
(537, 'Denise', 'Arsenault', '', 1152, '1152.jpg'),
(538, '', '', 'Atelier TAG', 1156, '1156.jpg'),
(539, 'Henri-Georges', 'Adam', '', 1173, '1173.jpg'),
(540, 'Rosario', 'Antoci', '', 1394, '1394.jpg'),
(541, 'Eduardo', 'Aquino', '', 1396, '1396.jpg'),
(542, 'Heinrich', 'Streubel', '', 6661, '6661.jpg'),
(543, 'Auteur', 'Inconnu', '', 1398, '1398.jpg'),
(544, 'Elijah Pudlat', 'Pootoogook', '', 3091, '3091.jpg'),
(545, 'Kumakuluk', 'Saggiak', '', 3092, '3092.jpg'),
(546, 'Nicolas', 'Baier', '', 1408, '1408.jpg'),
(547, 'Carlo', 'Balboni', '', 1174, '1174.jpg'),
(548, 'Octave', 'Bélanger', '', 1424, '1424.jpg'),
(549, 'Eugène-Paul', 'Benet', '', 1177, '1177.jpg'),
(550, 'Liliana', 'Berezowsky', '', 1179, '1179.jpg'),
(551, 'Germain', 'Bergeron', '', 1180, '1180.jpg'),
(552, 'Patrick', 'Bérubé', '', 1433, '1433.jpg'),
(553, 'Gilles', 'Boisvert', '', 1183, '1183.jpg'),
(554, 'Paul', 'Borduas', '', 1184, '1184.jpg'),
(555, 'Paul-Émile', 'Borduas', '', 1453, '1453.jpg'),
(556, 'Lucien', 'Boudot', '', 1458, '1458.jpg'),
(557, 'Fernand', 'Cerceau', '', 1459, '1459.jpg'),
(558, 'Guy', 'Bourassa', '', 1462, '1462.jpg'),
(559, 'Pierre', 'Bourgault', '', 1185, '1185.jpg'),
(560, 'Annick', 'Bourgeau', '', 1186, '1186.jpg'),
(561, 'Jules', 'Lasalle', '', 1253, '1253.jpg'),
(562, 'Gilbert', 'Boyer', '', 1187, '1187.jpg'),
(563, 'Marie-France', 'Brière', '', 1473, '1473.jpg'),
(564, 'Émile', 'Brunet', '', 1188, '1188.jpg'),
(565, 'Daniel', 'Buren', '', 1189, '1189.jpg'),
(566, 'Irving', 'Burman', '', 1190, '1190.jpg'),
(567, 'Alain', 'Cadieux', '', 1191, '1191.jpg'),
(568, 'Alexander', 'Calder', '', 1192, '1192.jpg'),
(569, 'Graham', 'Cantieni', '', 1193, '1193.jpg'),
(570, 'Augustin', 'Cardenas', '', 1194, '1194.jpg'),
(571, 'Jacques', 'Carpentier', '', 1195, '1195.jpg'),
(572, 'Jean', 'Cartier', '', 1496, '1496.jpg'),
(573, 'Guido', 'Casini', '', 1196, '1196.jpg'),
(574, 'Roger', 'Cavalli', '', 1197, '1197.jpg'),
(575, 'Lyse', 'Charland-Favretti', '', 1504, '1504.jpg'),
(576, 'Melvin', 'Charney', '', 1198, '1198.jpg'),
(577, 'Louis', 'Chavignier', '', 1199, '1199.jpg'),
(578, 'Ulysse', 'Comtois', '', 1509, '1509.jpg'),
(579, 'Reynald', 'Connolly', '', 1511, '1511.jpg'),
(580, '', '', 'Cooke-Sasseville', 1200, '1200.jpg'),
(581, 'Linda', 'Covit', '', 1515, '1515.jpg'),
(582, 'Marie-Claude', 'Séguin', '', 2611, '2611.jpg'),
(583, 'Cardinal', 'Hardy et associés', '', 2973, '2973.jpg'),
(584, 'Sylvia', 'Daoust', '', 1202, '1202.jpg'),
(585, 'René', 'Dardel', '', 1203, '1203.jpg'),
(586, 'Charles', 'Daudelin', '', 1204, '1204.jpg'),
(587, 'Charters', 'De Almeida', '', 1205, '1205.jpg'),
(588, 'Michel', 'De Broin', '', 1206, '1206.jpg'),
(589, 'Abdulmari Jr.', 'De Leon Imao', '', 1207, '1207.jpg'),
(590, 'Armand', 'De Palma', '', 1208, '1208.jpg'),
(591, 'Jacques', 'De Tonnancour', '', 1547, '1547.jpg'),
(592, 'Olivier', 'Debré', '', 1209, '1209.jpg'),
(593, 'Jean-Marie', 'Delavalle', '', 1210, '1210.jpg'),
(594, 'George', 'Delfosse', '', 1552, '1552.jpg'),
(595, 'Tatiana', 'Démidoff-Séguin', '', 1211, '1211.jpg'),
(596, 'Pierre-Gilles', 'Dubois', '', 1212, '1212.jpg'),
(597, 'Vital', 'Dubray', '', 1213, '1213.jpg'),
(598, 'Agnès', 'Dumouchel', '', 1214, '1214.jpg'),
(599, 'Lucie', 'Duval', '', 1215, '1215.jpg'),
(600, 'Georges', 'Dyens', '', 1219, '1219.jpg'),
(601, 'Peter David', 'Edstrom', '', 1220, '1220.jpg'),
(602, 'Kosso', 'Eloul', '', 1221, '1221.jpg'),
(603, 'Alfred', 'Faniel', '', 1572, '1572.jpg'),
(604, 'Denis', 'Farley', '', 1574, '1574.jpg'),
(605, 'Armand', 'Filion', '', 1575, '1575.jpg'),
(606, 'Vittorio', 'Fiorucci', '', 1576, '1576.jpg'),
(607, 'Lorraine', 'Fontaine', '', 1223, '1223.jpg'),
(608, 'Marc-Aurèle', 'Fortin', '', 1584, '1584.jpg'),
(609, 'André', 'Fournelle', '', 1222, '1222.jpg'),
(610, 'Benoit', 'Galipeau', '', 1225, '1225.jpg'),
(611, 'Jean-François', 'Gavoty', '', 1226, '1226.jpg'),
(612, 'Guerric', 'Péré', '', 1608, '1608.jpg'),
(613, 'Gerald', 'Gladstone', '', 1227, '1227.jpg'),
(614, 'Peter', 'Gnass', '', 1228, '1228.jpg'),
(615, 'Spyros', 'Gokakis', '', 1229, '1229.jpg'),
(616, 'Vasile', 'Gorduz', '', 1230, '1230.jpg'),
(617, 'Michel', 'Goulet', '', 1231, '1231.jpg'),
(618, 'Rose-Marie', 'Goulet', '', 1232, '1232.jpg'),
(619, 'Marie-Claude', 'Robert', '', 2397, '2397.jpg'),
(620, 'Pierre', 'Granche', '', 1233, '1233.jpg'),
(621, 'Roseline', 'Granet', '', 1234, '1234.jpg'),
(622, 'Isabelle', 'Hayeur', '', 1236, '1236.jpg'),
(623, 'Adrien', 'Hébert', '', 1645, '1645.jpg'),
(624, 'Henri', 'Hébert', '', 1237, '1237.jpg'),
(625, 'Jacques', 'Hébert', '', 1653, '1653.jpg'),
(626, 'Louis-Philippe', 'Hébert', '', 1238, '1238.jpg'),
(627, 'Pierre', 'Heyvaert', '', 1239, '1239.jpg'),
(628, 'George William', 'Hill', '', 1240, '1240.jpg'),
(629, 'Edwin H.', 'Holgate', '', 1671, '1671.jpg'),
(630, 'Henry', 'Hunt', '', 1242, '1242.jpg'),
(631, 'Tony', 'Hunt', '', 3181, '3181.jpg'),
(632, 'Raoul', 'Hunter', '', 1243, '1243.jpg'),
(633, 'Jacek', 'Jarnuszkiewicz', '', 1246, '1246.jpg'),
(634, 'George', 'Keyt', '', 1681, '1681.jpg'),
(635, 'Guillaume', 'Lachapelle', '', 1247, '1247.jpg'),
(636, 'Alfred', 'Laliberté', '', 1248, '1248.jpg'),
(637, 'Claude', 'Lamarche', '', 1694, '1694.jpg'),
(638, 'Paul', 'Lancz', '', 1249, '1249.jpg'),
(639, 'Roger', 'Langevin', '', 1250, '1250.jpg'),
(640, 'Robert', 'Lapalme', '', 1707, '1707.jpg'),
(641, 'Michèle', 'Lapointe', '', 1709, '1709.jpg'),
(642, 'Francine', 'Larivée', '', 1251, '1251.jpg'),
(643, 'Gilles', 'Larivière', '', 1252, '1252.jpg'),
(644, 'Georges Anderson', 'Lawson', '', 1254, '1254.jpg'),
(645, 'Pierre', 'Leblanc', '', 1255, '1255.jpg'),
(646, 'Charles-Auguste', 'Lebourg', '', 1257, '1257.jpg'),
(647, 'Pierre E.', 'Leclerc', '', 1258, '1258.jpg'),
(648, 'Jean', 'Lefébure', '', 1256, '1256.jpg'),
(649, 'F. Maurice', 'Lemieux', '', 1260, '1260.jpg'),
(650, 'Lisette', 'Lemieux', '', 1259, '1259.jpg'),
(651, '', '', 'Les Industries perdues', 1262, '1262.jpg'),
(652, 'Andrew', 'Lui', '', 1263, '1263.jpg'),
(653, 'Miroslav Frederik', 'Maler', '', 1264, '1264.jpg'),
(654, 'Coeur de lion', 'McCarthy', '', 1772, '1772.jpg'),
(655, 'Marlene', 'Hilton-Moore', '', 1241, '1241.jpg'),
(656, 'John', 'McEwen', '', 1265, '1265.jpg'),
(657, 'Mario', 'Merola', '', 1775, '1775.jpg'),
(658, 'Gilles', 'Mihalcean', '', 1266, '1266.jpg'),
(659, 'Claude', 'Millette', '', 1267, '1267.jpg'),
(660, 'Robert', 'Mitchell', '', 2786, '2786.jpg'),
(661, 'David', 'Moore', '', 1270, '1270.jpg'),
(662, 'Mathurin', 'Moreau', '', 1797, '1797.jpg'),
(663, 'Jean-Pierre', 'Morin', '', 1271, '1271.jpg'),
(664, 'Madeleine', 'Morin', '', 1802, '1802.jpg'),
(665, 'Joëlle', 'Morosoli', '', 1804, '1804.jpg'),
(666, 'J.L.', 'Mott', '', 1805, '1805.jpg'),
(667, 'Guy', 'Nadeau', '', 1272, '1272.jpg'),
(668, 'Marc-Antoine', 'Nadeau', '', 1806, '1806.jpg'),
(669, 'Takera', 'Narita', '', 1273, '1273.jpg'),
(670, 'Robert', 'Nepveu', '', 1274, '1274.jpg'),
(671, 'Octavian', 'Olariu', '', 1275, '1275.jpg'),
(672, 'John Patrick', 'O''Shea', '', 1808, '1808.jpg'),
(673, 'Alain', 'Paiement', '', 1829, '1829.jpg'),
(674, 'Tin Neon', 'Pang', '', 1276, '1276.jpg'),
(675, 'Roberto', 'Pellegrinuzzi', '', 1277, '1277.jpg'),
(676, 'Guy', 'Pellerin', '', 1830, '1830.jpg'),
(677, 'Robert', 'Pelletier', '', 1278, '1278.jpg'),
(678, 'Raymond', 'Pellus', '', 1831, '1831.jpg'),
(679, 'Alfonso', 'Pelzer', '', 1279, '1279.jpg'),
(680, 'Josef', 'Pillhofer', '', 1280, '1280.jpg'),
(681, 'Robert', 'Pilot', '', 1832, '1832.jpg'),
(682, 'José', 'Planes', '', 1282, '1282.jpg'),
(683, 'Jean-Noël', 'Poliquin', '', 1283, '1283.jpg'),
(684, 'Roland', 'Poulin', '', 1285, '1285.jpg'),
(685, 'Mark', 'Prent', '', 1286, '1286.jpg'),
(686, 'Krishna', 'Reddy', '', 1288, '1288.jpg'),
(687, 'Astri', 'Reusch', '', 1846, '1846.jpg'),
(688, 'Sylvie', 'Rochette', '', 1849, '1849.jpg'),
(689, 'Dominique', 'Rolland', '', 2883, '2883.jpg'),
(690, 'Robert', 'Roussil', '', 1291, '1291.jpg'),
(691, 'Aurelio', 'Sandonato', '', 1293, '1293.jpg'),
(692, 'Laura', 'Santini', '', 1294, '1294.jpg'),
(693, 'Henry', 'Saxe', '', 1295, '1295.jpg'),
(694, 'Hans', 'Schleeh', '', 1296, '1296.jpg'),
(695, '', 'Sebastian', '', 1297, '1297.jpg'),
(696, 'Jie', 'Si Tu', '', 1850, '1850.jpg'),
(697, 'Carlos Sergio', 'Signori', '', 1298, '1298.jpg'),
(698, 'Yérassimo (Gerasimos)', 'Sklavos', '', 1299, '1299.jpg'),
(699, 'Pierre', 'Szekely', '', 1300, '1300.jpg'),
(700, 'U', 'Taccola', '', 1902, '1902.jpg'),
(701, 'A', 'Zaccarella', '', 1903, '1903.jpg'),
(702, 'William Hughes', 'Taylor', '', 1904, '1904.jpg'),
(703, 'Alison', 'Tett', '', 1905, '1905.jpg'),
(704, 'Katsuhiro', 'Yamazaki', 'Atelier TAG', 3084, '3084.jpg'),
(705, 'Claude', 'Théberge', '', 1301, '1301.jpg'),
(706, 'Marcel', 'Gendreau', '', 1907, '1907.jpg'),
(707, 'Berthel', 'Thorvaldsen', '', 1302, '1302.jpg'),
(708, 'William Thurston', 'Topham', '', 1908, '1908.jpg'),
(709, 'Carlos Maria', 'Toto', '', 1303, '1303.jpg'),
(710, 'Yves', 'Trudeau', '', 1304, '1304.jpg'),
(711, 'Armand', 'Vaillancourt', '', 1305, '1305.jpg'),
(712, 'Dominique', 'Valade', '', 1306, '1306.jpg'),
(713, 'Herman J.', 'Van Der Heide', '', 1909, '1909.jpg'),
(714, 'Bill', 'Vazan', '', 1307, '1307.jpg'),
(715, 'Alfonse', 'Végiard', '', 1910, '1910.jpg'),
(716, 'Claude', 'Vermette', '', 1911, '1911.jpg'),
(717, 'Louise', 'Viger', '', 1308, '1308.jpg'),
(718, 'Joseph-Arthur', 'Vincent', '', 1309, '1309.jpg'),
(719, 'Léa', 'Vivot', '', 1310, '1310.jpg'),
(720, 'George Edward', 'Wade', '', 1311, '1311.jpg'),
(721, 'Catherine', 'Widgery', '', 1312, '1312.jpg'),
(722, 'Alice', 'Winant', '', 1313, '1313.jpg'),
(723, 'Shirley', 'Witebsky', '', 1314, '1314.jpg'),
(724, 'Marshall', 'Wood', '', 1315, '1315.jpg'),
(725, 'Luce', 'Pelletier', '', 1284, '1284.jpg'),
(726, 'Adad', 'Hannah', '', 1235, '1235.jpg'),
(727, 'Jiri Georges', 'Lauda', '', 3094, '3094.jpg'),
(728, 'Paul', 'Pannier', '', 3095, '3095.jpg'),
(729, 'Gwenaël', 'Bélanger', '', 1178, '1178.jpg'),
(730, 'Jean-Jacques', 'Besner', '', 1181, '1181.jpg'),
(731, '', '', 'Daily tous les jours', 5598, '5598.jpg'),
(732, 'Francis', 'Montillaud', '', 3103, '3103.jpg'),
(733, 'Robert', 'Wilson', '', 3106, '3106.jpg'),
(734, 'Yvette', 'Bisson', '', 1182, '1182.jpg'),
(735, 'Catherine', 'Sylvain', '', 5797, '5797.jpg'),
(736, '', '', 'BGL', 6671, '6671.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomCatAng` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
  `noInterne` int(11) DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationOeuvre` tinyint(1) DEFAULT NULL,
  `idArrondissement` int(11) NOT NULL,
  `nomMateriaux` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomMateriauxAng` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  `idSousCategorie` int(11) NOT NULL,
  `adresseCivic` varchar(100) DEFAULT NULL,
  `batiment` varchar(100) DEFAULT NULL,
  `parc` varchar(100) DEFAULT NULL,
  `latitude` varchar(16) DEFAULT NULL,
  `longitude` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`idOeuvre`),
  KEY `FK_Oeuvre_idArrondissement` (`idArrondissement`),
  KEY `idCategorie` (`idCategorie`),
  KEY `fk_oeuvre_souscat` (`idSousCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=917 ;

--
-- Contenu de la table `oeuvre`
--

INSERT INTO `oeuvre` (`idOeuvre`, `titreOeuvre`, `titreVariante`, `technique`, `techniqueAng`, `noInterne`, `description`, `validationOeuvre`, `idArrondissement`, `nomMateriaux`, `nomMateriauxAng`, `idCategorie`, `idSousCategorie`, `adresseCivic`, `batiment`, `parc`, `latitude`, `longitude`) VALUES
(2, 'Source', NULL, 'Bronze coulé; boulonné', 'Cast bronze; bolted', 962, NULL, 1, 1, 'Bronze', 'Bronze', 2, 2, '6445, avenue Monkland, Montréal', 'Centre sportif Notre-Dame-de Grâce', 'Parc Benny', '45.466405', '-73.631648'),
(3, 'Porte de jour', 'Une porte rouge (ouverte, rougeâtre, solaire)', 'Soudé', 'Welded', 1099, NULL, 1, 2, 'acier corten', 'Corten steel', 2, 3, NULL, NULL, 'Square Dalhousie', '45.512090', '-73.550979'),
(4, 'Regarder les pommetiers', NULL, 'Taillé; assemblé', 'Carved; assembled', 1119, NULL, 1, 3, 'Acier corten; granit', 'Corten steel; granite', 2, 3, '4101, rue Sherbrooke Est, Montréal (QC) H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.561585', '-73.562673'),
(621, 'Le malheureux magnifique', NULL, 'Assemblé; cimenté; peint', 'Assembled; cemented; painted', 1127, '', 1, 4, 'Ciment; fer; peinture', 'Cement; iron; paint', 2, 2, '385, rue Sherbrooke Est, Montréal, (QC) H2X 3L1', NULL, 'Intersection des rues Sherbrooke et Saint-Denis', '45.516907', '-73.567846'),
(622, 'Les clochards célestes', 'Monumental III', 'Assemblé; cimenté; peint', 'Assembled; cemented; painted', 1137, '', 1, 2, 'Ciment; fer; peinture', 'Cement; iron; paint', 2, 2, NULL, NULL, 'Parc Miville-Couture', '45.516853', '-73.555153'),
(623, 'Discours du roi poète', NULL, NULL, NULL, 1151, '', 1, 5, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Place Roland-Proulx', '45.472390', '-73.584704'),
(624, 'Hommage à Jérôme Le Royer De La Dauversière', NULL, NULL, NULL, 1157, '', 1, 2, 'Acier Corten; acier inoxydable; verre trempé', 'Corten steel; stainless steel; tempered glass', 2, 2, NULL, NULL, 'Place De La Dauversière', '45.508493', '-73.5533'),
(625, 'Obélisque oblique', NULL, 'Pliées; soudées; boulonnées', 'Bends; welded; bolted', 1391, '', 1, 2, 'Acier inoxydable', 'Stainless steel', 2, 2, '1 Avenue du Casino, Montréal, QC H3C 4W7', 'Casino de Montréal', 'Parc Jean-Drapeau, Île Notre-Dame', '45.506046', '-73.526706'),
(626, 'La source', 'Sergenti', 'Taillé', 'Carved', 1393, '', 1, 3, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Parc Guglielmo-Marconi', '45.534752', '-73.617845'),
(627, 'Vous êtes ici', NULL, NULL, NULL, 1397, '', 1, 6, 'Aluminium; DEL', 'Aluminum; LED', 2, 3, '4200, rue Ontario Est, Montréal, H1V 1K1', 'Maison de la culture Maisonneuve', NULL, '45.551183', '-73.540539'),
(628, 'Non titré (Murale en relief et sculpture)', 'Murale en relief et sculpture (extérieur)', NULL, NULL, 1399, '', 1, 4, NULL, NULL, 2, 2, '2275 boul.St-Joseph Est, Montréal, (Qc) H2H 1G4', 'Centre du Plateau', NULL, '45.539713', '-73.576110'),
(629, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1400, '', 1, 2, NULL, NULL, 4, 4, '275 Rue Notre-Dame Est, Montréal, QC H2Y 1C6', 'Hôtel de Ville de Montréal', NULL, '45.508816', '-73.554069'),
(630, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1401, '', 1, 4, NULL, NULL, 4, 4, '5434 Avenue du Parc, Montréal, QC H2V 4G7', 'Bibliothèque Mile-End', NULL, '45.521778', '-73.601548'),
(631, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1402, '', 1, 2, NULL, NULL, 4, 4, '1210, rue Sherbrooke Est, Montréal (Québec) H2L 1L9', 'Édifice Gaston-Miron', NULL, '45.522741', '-73.565331'),
(632, 'Non titré (Vitraux)', 'Vitraux', NULL, NULL, 1403, '', 1, 4, NULL, NULL, 4, 4, '1115 Laurier Est, Montréal', 'Centre Laurier', NULL, '45.531814', '-73.587131'),
(633, 'Non titré (Murale inuit)', 'Murale inuit', NULL, NULL, 1404, '', 1, 2, NULL, NULL, 2, 5, '1 Circuit Gilles Villeneuve Île Notre-Dame, Montréal, Québec, H3C 1A9', 'Pavillon de l''administration, parc Jean-Drapeau', 'Parc Jean-Drapeau, Île Notre-Dame', '45.503792', '-73.529322'),
(634, 'Non titré (Murale peinte)', 'Murale peinte', 'Œuvre peinte', 'Painting', 1406, '', 1, 1837, 'Peinture', 'Paint', 2, 5, '14 678 Rue Notre-Dame Est, Montréal, QC H1A 1W1', 'Maison Antoine-Beaudry', 'Parc Marcel-Léger', '45.676603', '-73.491423'),
(635, 'Non titré (Fontaine, mosaïque)', 'Fontaine (mosaïque)', NULL, NULL, 1407, '', 1, 5, NULL, NULL, 4, 7, '3161, rue Joseph, Montréal', 'Station de pompage centrale (Atwater)', NULL, '45.472308', '-73.572944'),
(636, 'Bibliotheca Universalis', NULL, 'Impression', 'Print', 1414, '', 1, 1, 'Verre, plexiglas', 'Glass; plexiglas', 2, 17, '6767, chemin de la Côte-des-Neiges, Montréal (Québec) H3S 2T6', 'Bibliothèque interculturelle de Côte-des-Neiges', NULL, '45.503130', '-73.636947'),
(637, 'Chibouki', 'Chiboukis', 'Impression numérique', 'Digital print', 1415, '', 1, 1, 'Papier', 'Paper', 2, 17, '6767, chemin de la Côte-des-Neiges, Montréal, QC, H3T 1Y4', 'Bibliothèque interculturelle de Côte-des-Neiges', NULL, '45.503302', '-73.636776'),
(638, 'La mort de Dante', NULL, 'Coulé', 'Cast', 1416, '', 1, 3, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc Dante', '45.534445', '-73.611721'),
(639, 'Champlain visite de nouveau le site de Montréal en 1611', NULL, NULL, NULL, 1425, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503909', '-73.587452'),
(640, 'Monument à Jean Vauquelin', NULL, 'Bronze coulé; pierre taillée', 'Cast bronze; carved stone', 1426, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Place Vauquelin', '45.508588', '-73.554655'),
(641, 'Smoke and steel', NULL, NULL, NULL, 1428, '', 1, 1838, NULL, NULL, 2, 2, '5455, rue Antonio-Dagenais, Saint-Léonard (Québec) H1S 2X3', 'Caserne d''incendie 22', NULL, '45.582705', '-73.585774'),
(642, 'Le cycliste', NULL, 'Soudé; peint', 'Welded, painted', 1431, '', 1, 1839, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc de West Vancouver', '45.456655', '-73.542746'),
(643, 'Contournement', NULL, 'Cintré et peinturé', 'Bent and painted', 1434, '', 1, 1840, 'Acier', 'Steel', 2, 2, '8931 Avenue Papineau, Montreal, QC H2M 2G2', 'Le Taz', NULL, '45.560942', '-73.635233'),
(644, 'L''arbre des générations', NULL, 'Découpé; soudé; boulonné; peint', 'Cut out; welded; bolted; painted', 1441, '', 1, 1841, 'Acier (feuille)', 'Steel (sheet)', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430699', '-73.666113'),
(645, 'Vire au vent', NULL, 'Soudage; boulonnage; peint', 'Welding; bolting; painted', 1443, '', 1, 1841, 'Acier brut, acier peint', 'Raw steel, painted steel ', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428480', '-73.682451'),
(646, 'Sans titre', 'Oiseau', 'Feuilles d''acier coupées; soudées les unes aux autres', 'Steel sheets cut; welded to each other', 1447, '', 1, 3, 'Acier peint', 'Painted steel ', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.558218', '-73.563644'),
(647, 'Carte du site de Montréal par Champlain en 1611', NULL, NULL, NULL, 1450, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503986', '-73.587585'),
(648, 'Les anciennes possessions françaises en Amérique', NULL, NULL, NULL, 1451, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503969', '-73.587623'),
(649, 'Les voyages de Jacques Cartier au Canada en 1534 et 1535', NULL, NULL, NULL, 1452, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503961', '-73.587657'),
(650, 'Montréal de 1645 à 1672', NULL, NULL, NULL, 1454, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503945', '-73.587697'),
(651, 'Montréal en 1760', NULL, NULL, NULL, 1455, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503918', '-73.587731'),
(652, 'Plan d''Hochelaga par Jacques Cartier en 1535', NULL, NULL, NULL, 1456, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503874', '-73.587727'),
(653, 'Jacques Cartier est reçu par le chef Agouhana', NULL, NULL, NULL, 1457, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503842', '-73.587707'),
(654, 'Parades Parures', 'Parades-parures', NULL, NULL, 1461, '', 1, 1837, 'Tissu; aluminium; acier; bois; verre', 'Fabric; aluminum; steel; wood; glass', 2, 9, '9001, boulevard Perras, Montréal, Québec H1E 3J7', 'Bibliothèque Rivière-des-Prairies', NULL, '45.649803', '-73.578961'),
(655, 'Le village imaginé. «Le renard l''emporte, le suit à la trace…»', NULL, 'Assemblé; soudé', 'Assembled; welded', 1463, '', 1, 5, 'Aluminium, manganèse et chrome poli (jeu de ficelle) ; acier intempérique ou corten (maisons)', 'Aluminum, manganese and chrome plating (cat’s-cradle); weathered or Corten steel (houses)', 2, 3, NULL, NULL, 'Parc Marguerite-Bourgeoys', '45.475158', '-73.558862'),
(656, 'Monument à Jean Drapeau', NULL, 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1465, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Place De La Dauversière', '45.50853', '-73.55342'),
(657, 'Hommage à Maurice Richard', NULL, NULL, NULL, 1467, '', 1, 6, 'Bronze', 'Bronze', 2, 2, '2800 Rue Viau, Montréal, QC H1V 3J3', 'Aréna Maurice-Richard', NULL, '45.562682', '-73.546957'),
(658, 'La montagne des jours', NULL, 'Gravé au jet de sable; poli', 'Sandblast engraving; polished', 1468, '', 1, 2, 'Granit', 'Granite', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.507069', '-73.590031'),
(659, 'Mémoire ardente', NULL, NULL, NULL, 1470, '', 1, 2, 'Granit; acier inoxydable', 'Granite; stainless steel', 2, 2, NULL, NULL, 'Promenade de la Commune', '45.508932', '-73.551062'),
(660, 'Les jours d''été quand le fleuve monte à l''assaut des murs, hommage à Marie Uguay', NULL, 'Mixte', 'Mixed', 1472, '', 1, 1, 'Plâtre; livre; feutre; marbre', 'Plaster; book; felt; marble', 2, 9, '6767, chemin de la Côte-des-Neiges, Montréal (Québec) H3S 2T6', 'Bibliothèque interculturelle de Côte-des-Neiges', NULL, '45.503130', '-73.636947'),
(661, 'Monument à sir Wilfrid Laurier', NULL, 'Bronze coulé', 'Cast bronze ', 1474, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Dorchester', '45.4994744', '-73.571061'),
(662, 'Monument au frère André', NULL, 'Bronze coulé', 'Cast bronze ', 1476, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Place du frère André', '45.503309', '-73.566600'),
(663, 'Neuf couleurs au vent', NULL, 'Soudé; sérigraphié', 'Welded; silkscreened', 1478, '', 1, 4, 'Aluminium; nylon', 'Aluminum; nylon ', 2, 3, NULL, NULL, 'Place Urbain-Baudreau-Graveline', '45.521709', '-73.565776'),
(664, 'Sans titre', 'Non titrée (SISM-64)', 'Taillé; sculpté', 'Carved; sculpted', 1480, '', 1, 2, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.499327', '-73.594604'),
(665, 'Table Ronde', NULL, 'Assemblé; soudé', 'Assembled; welded', 1482, '', 1, 1842, 'Béton armé; aluminium peint', 'Reinforced concrete; painted aluminum ', 2, 3, '55 avenue Dupras', 'Mairie d''arrondissement de LaSalle', NULL, '45.428134', '-73.661771'),
(666, 'Trois disques', 'Man, Three Disks;\rL''Homme; Man; The Man', 'Découpé; assemblé; boulonné; soudé ', 'Cut out; assembled; screwed; welded', 1484, '', 1, 2, 'Acier inoxydable', 'Stainless steel', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.510658', '-73.536837'),
(667, 'Hermès', NULL, 'Soudé; peint; boulonné', 'Welded; painted; bolted', 1486, '', 1, 1841, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428752', '-73.683435'),
(668, 'Sans titre', 'Non titrée (SISM-64)', 'Sculpté', 'Sculpted', 1488, '', 1, 2, 'Schiste', 'Schist', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500036', '-73.594996'),
(669, 'Non titré', NULL, 'Soudés; peints', 'Welded, painted', 1490, '', 1, 2, 'Acier peint', 'Painted steel ', 2, 2, 'Rue Beaudry', NULL, 'Parc Serge-Garant', '45.519070', '-73.556071'),
(670, 'Trilogie', NULL, 'Soudé; peint', 'Welded, painted', 1492, '', 1, 1841, 'Acier peint', 'Painted steel ', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430106', '-73.666757'),
(671, 'Communion', NULL, 'Soudé; peint', 'Welded, painted', 1494, '', 1, 1842, 'Acier peint', 'Painted steel ', 2, 2, NULL, NULL, 'Parc des Rapides', '45.423958', '-73.598574'),
(672, 'Non titré (mosaïque en céramique)', 'Sans titre (mosaïque en céramique)', 'Peint; assemblé', 'painted; assembled', 1497, '', 1, 5, 'Peinture; céramique', 'Paint; ceramics', 4, 18, '5485, chemin de la Côte-Saint-Paul, Montréal (Québec) H4C 1X3', 'Centre récréatif Gadbois', NULL, '45.466425', '-73.595811'),
(673, 'Monument à Giovanni Caboto', NULL, 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1498, '', 1, 2, 'Bronze; travertin', 'Bronze; travertine', 2, 2, NULL, NULL, 'Square Cabot', '45.489490', '-73.583652'),
(674, 'Non titré ', 'Bronzes', 'Moulage', 'Casting', 1500, '', 1, 2, 'Bronze', 'Bronze', 2, 2, '130, chemin du Tour-de-l''Isle', NULL, 'Complexe aquatique, Parc Jean-Drapeau', '45.512832', '-73.534573'),
(675, 'La femme-fontaine', NULL, 'Taille directe', 'Direct carving', 1501, '', 1, 1839, 'Pierre', 'Stone', 2, 2, '5955 Bannantyne, Verdun, Québec, H4H 1H6', 'Centre culturel de Verdun', NULL, '45.448399', '-73.577621'),
(676, 'Envol d''oiseaux', 'Puit de lumière en vitraux', 'Découpé; assemblé', 'Cut out; assembled', 1503, '', 1, 1840, 'Verre; silicone; nylon; bois', 'Glass; silicone; nylon; wood', 4, 4, '7355 Avenue Christophe-Colomb, Montréal, QC H2R 2S5', 'Bibliothèque Le Prévost', NULL, '45.543774', '-73.614480'),
(677, 'Gratte-ciel, cascades d''eau / rues, ruisseau… une construction', NULL, 'Multiple', 'Multiple', 1505, '', 1, 2, 'Acier inoxydable; béton; granit', 'Stainless steel; concrete; granite ', 2, 3, NULL, NULL, 'Place Émilie-Gamelin', '45.515449', '-73.560028'),
(678, 'Le carrousel sauvage', 'Le carrousel sauvage (SISM-64)\rLe manège d''amour', 'Taillé; assemblé', 'Carved; assembled', 1507, '', 1, 2, 'Calcaire; béton', 'Limestone; concrete', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.501169', '-73.594040'),
(679, 'Décor', NULL, 'Soudé; peint', 'Welded, painted', 1510, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429875', '-73.666409'),
(680, 'L''eau et la nourriture', NULL, 'Aluchromie', NULL, 1512, '', 1, 1842, 'Aluminium', 'Aluminum', 2, 5, '8585, Boulevard De La Vérendrye, LaSalle, Québec, H8N 2K2', 'Usine de filtration Charles-J. des Baillets', NULL, '45.425053', '-73.619043'),
(681, 'Le mélomane', NULL, NULL, NULL, 1513, '', 1, 1840, 'Bronze; béton', 'Bronze; concrete', 2, 2, NULL, NULL, 'Parc François-Perrault', '45.562200', '-73.600852'),
(682, 'Mélangez le Tout', 'Le batteur à œufs', 'Découpe au laser; assemblage; peinture électrostatique (banc).', 'Laser cutting; assemblage; electrostatic painting (bench)', 1514, '', 1, 2, 'Aluminium', 'Aluminum', 2, 2, '2633 Ontario Est, Montréal, QC H2K 1W8', 'Centre Jean-Claude-Malépart', NULL, '45.534340', '-73.552733'),
(683, 'Caesura', 'Œuvre pour la paix', 'Bronze coulé; soudure; béton coulé; taille; polissage.', 'Cast bronze; welding; poured concrete; dressing; polishing.', 1516, '', 1, 1840, 'Granit; pierre de Rivière-à-Pierre; bronze; béton, laiton; acier inoxydable; arbustes.', 'Granite; Rivière-à-Pierre stone; bronze; concrete, brass; stainless steel; shrubs', 2, 3, NULL, NULL, 'Parc Jarry', '45.537512', '-73.628020'),
(684, 'Theatre for Sky Blocks', 'Théâtre pour fragments célestes', 'Soudure; sérigraphie; peinture; coupage', 'Welding; silkscreening; paint; cutting', 1518, '', 1, 1841, 'Acier; encre de sérigraphie; granit vert laurentien', 'Steel; silkscreen ink; Laurentian green granite', 2, 3, NULL, NULL, 'Parc Fort-Rolland', '45.433893', '-73.696750'),
(685, 'Les graminées du jardin Saint-Sulpice', NULL, 'Coupé; soudé', 'Cut; welded', 1520, '', 1, 1843, 'Acier inoxydable', 'Stainless steel', 2, 3, '9355, avenue de Galilée', NULL, 'Parc Berthe-Louard', '45.559348', '-73.641608'),
(686, 'Give Peace a Chance', NULL, 'Pierre taillée', 'Carved stone', 1522, '', 1, 2, 'Calcaire; plantes indigènes', 'Limestone; indigenous plants', 2, 3, NULL, NULL, 'Parc du Mont-Royal', '45.505007', '-73.583820'),
(687, 'Monument au frère Marie-Victorin', NULL, 'Bronze coulé', 'Cast bronze ', 1524, '', 1, 3, 'Bronze; granit', 'Bronze; granite', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', NULL, '45.557281', '-73.555903'),
(688, 'Le lion de La Feuillée', 'Le lion de Lyon', 'Coulée industriel', 'Casting industrial ', 1526, '', 1, 3, 'Fonte', 'Cast iron ', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.558796', '-73.555637'),
(689, 'Agora', NULL, 'Moulage; assemblage', 'Moulding: assembly', 1528, '', 1, 2, 'Béton; pavés; eau ', 'Concrete; cobblestones; water', 2, 3, NULL, NULL, 'Square Viger', '45.512075', '-73.554819'),
(690, 'Mastodo', NULL, 'Moulage; assemblage', 'Moulding; assembly', 1530, '', 1, 2, 'Bronze; acier inoxydable; béton; eau', 'Bronze; stainless steel; concrete; water ', 2, 2, NULL, NULL, 'Square Viger', '45.511800', '-73.554681'),
(691, 'Cailloudo', NULL, 'Coulé; assemblé', 'Cast; assembled', 1532, '', 1, 1844, 'Bronze, lumière', 'Bronze, light', 2, 2, '1380, rue de l''Église, Montréal (QC) H4L 2H2', 'Bibliothèque de Saint-Laurent', NULL, '45.512457', '-73.676799'),
(692, 'Hommage à Claude Jutra', NULL, 'Assemblé; soudé; découpé; taillé; collé', 'Assembled; welded; cut out; carved; glued', 1534, '', 1, 4, 'Granit; laiton; émail', 'Granite; brass; enamel', 2, 2, NULL, NULL, 'Parc Claude-Jutra', '45.513240', '-73.572945'),
(693, 'La ville imaginaire', NULL, 'Taillé; assemblé', 'Carved; assembled', 1536, '', 1, 2, 'Granit', 'Granite', 2, 3, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.512697', '-73.537714'),
(694, 'Révolutions', NULL, NULL, NULL, 1538, '', 1, 2, 'Aluminium; acier galvanisé', 'Aluminum; galvanized steel', 2, 2, NULL, NULL, 'Parc Maisonneuve-Cartier', '45.523985', '-73.552731'),
(695, 'L''arc', 'Hommage à Salvador Allende (1908-1973)', NULL, NULL, 1540, '', 1, 2, 'Béton, acier inoxydable', 'Concrete, stainless steel', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Notre-Dame', '45.505855', '-73.527741'),
(696, 'Buste du Dr. José P. Rizal', NULL, 'Fonte à la cire perdue', 'Iron cast in the cire perdue method', 1542, '', 1, 1, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc Mackenzie-King', '45.491014', '-73.634079'),
(697, 'Monument à Christophe Colomb', NULL, 'Bronze coulé', 'Cast bronze ', 1544, '', 1, 1840, 'Bronze; granit; béton', 'Bronze; granite; concrete', 2, 2, NULL, NULL, 'Parc de Turin', '45.545114', '-73.610194'),
(698, 'Cosmos', 'Murale peinte; Cosmos I, II, III', 'Collage; peinture', 'Collage; painting ', 1546, '', 1, 1837, 'Bois; tissus; nylon; papier', 'Wood; fabric; nylon; paper', 2, 5, '14001 Rue Notre-Dame Est, Montréal, QC H1A 1T9', 'Bibliothèque de Pointe-aux-Trembles', NULL, '45.668131', '-73.494621'),
(699, 'Obélisque en hommage à Charles de Gaulle', 'Mémorial au général De Gaulle', NULL, NULL, 1548, '', 1, 4, 'Granit; époxy; ciment; peinture', 'Granite; epoxy; cement; paint', 2, 2, NULL, NULL, 'Parc La Fontaine', '45.526107', '-73.564759'),
(700, 'China Wall', NULL, 'Soudé', 'Welded', 1550, '', 1, 1841, 'Acier corten', 'Corten steel', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428562', '-73.681682'),
(701, 'Maisonneuve fonde Montréal le 18 mai 1642', NULL, NULL, NULL, 1553, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503819', '-73.587641'),
(702, 'Portail avec bas-reliefs', 'Mémoire', 'Fondu; vitrifié; peint; coupé; assemblé', 'Melted; vitrified; painted; cut; assembled', 1554, '', 1, 2, 'Bois; ciment; peinture; miroir', 'Wood; cement; paint; mirror', 2, 2, '100, rue Sherbrooke Est, Montréal (Québec)  H2X 1C3', 'Chapelle historique du Bon-Pasteur', NULL, '45.513427', '-73.546886'),
(703, 'Place du Temple', NULL, 'Coulé; peint', 'Cast; painted', 1555, '', 1, 1842, 'Ciment; métal; peinture', 'Cement; metal; paint', 2, 3, NULL, NULL, 'Place Félix-Leclerc', '45.423620', '-73.624915'),
(704, 'Fontaine de vie', 'Les baigneuses', 'Sculpté', 'Sculpted', 1557, '', 1, 1841, 'Anorthosite', 'Anorthosite', 2, 2, '1800, boul Saint-Joseph, Lachine, QC H8S 2N4', NULL, 'Place de l''hôtel de ville', '45.433162', '-73.681258'),
(705, 'Buste de Simon Bolivar', 'Simón Bolívar', NULL, NULL, 1559, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc Hector-Toe-Blake', '45.489486', '-73.580919'),
(706, 'Albarello', NULL, 'Soudé; assemblé', 'Welded; assembled', 1561, '', 1, 1841, 'Céramique; acier; plantes', 'Ceramic, steel, plants', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429940', '-73.666844'),
(707, 'À la croisée des mots', 'arbre-sculpture', 'Feuilles d''aluminium anodisé; découpées; soudées', 'Anodized aluminum sheets; cut out; welded', 1563, '', 1, 5, 'Acier galvanisé, aluminium anodisé', 'Galvanized steel, anodized aluminum ', 2, 3, '2450 Rue Workman\rMontréal, Qc', 'Centre Georges-Vanier', NULL, '45.483797', '-73.575105'),
(708, 'Mots choisis', 'Les mots choisis', 'Gravé; assemblé', 'Engraved; assembled', 1565, '', 1, 1837, 'Plexiglas; bois', 'Plexiglas; wood', 2, 2, '14001 Rue Notre-Dame Est, Montréal, QC H1A 1T9', 'Bibliothèque de Pointe-aux-Trembles', NULL, '45.668131', '-73.494621'),
(709, 'Hommage aux forces vitales du Québec', NULL, 'Techniques multiples', 'Multiple techniques ', 1566, '', 1, 1842, 'Acier; acier chromé; béton; lumière', 'Steel; chrome-plated steel; concrete; light', 2, 3, NULL, NULL, 'Parc des Rapides', '45.420052', '-73.603372'),
(710, 'Monument aux braves de N.D.G.', 'Monument aux combattants\rLes Braves de N.D.G.', 'Bronze moulé', 'Cast bronze ', 1568, '', 1, 1, 'Bronze; granit', 'Bronze; granite \r', 2, 2, NULL, NULL, 'Parc Notre-Dame-de Grâce', '45.472499', '-73.613726'),
(711, 'Optimax', 'Le Sphinx, Optimax (SISM-64)', 'Taille directe', 'Direct carving', 1570, '', 1, 2, 'Calcaire; béton', 'Limestone; concrete', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500911', '-73.593288'),
(712, 'Jacques Cartier sur le sommet du mont Royal', NULL, NULL, NULL, 1571, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503843', '-73.587576'),
(713, 'Non titré', 'Sans-titre (photographies)', 'Contre-collé sur bois et laminé', NULL, 1573, '', 1, 1841, NULL, NULL, 2, 17, '183, rue des Érables, Lachine (Québec) H8R 1B1', 'Bibliothèque Saint-Pierre', NULL, '45.445692', '-73.651331'),
(714, 'Les baigneurs', NULL, NULL, NULL, 1577, '', 1, 5, NULL, NULL, 2, 2, '5485, chemin de la Côte-Saint-Paul, Montréal (Québec) H4C 1X3', 'Centre récréatif Gadbois', NULL, '45.466339', '-73.595615'),
(715, 'Les baigneurs', 'Bas-relief (extérieur)', 'Taille directe', 'Direct carving', 1578, '', 1, 6, 'Pierre', 'Stone', 2, 2, '2800 Rue Viau, Montréal, QC H1V 3J3', 'Aréna Maurice-Richard', NULL, '45.562464', '-73.547304'),
(716, 'L''eau et la santé', NULL, 'Aluchromie', NULL, 1579, '', 1, 1842, 'Aluminium', NULL, 2, 5, '8585, Boulevard De La Vérendrye, LaSalle, Québec, H8N 2K2', 'Usine de filtration Charles-J. des Baillets', NULL, '45.425053', '-73.619043'),
(717, 'Une leçon d''histoire', NULL, 'Coulé; taillé; moulé; patiné; collé; pulvérisé', 'Cast; carved; burnished; glued; sprayed', 1580, '', 1, 2, 'Métal; bois; époxy; livre', 'Metal; wood; epoxy; book', 2, 3, '2550 Rue Ontario Est, Montréal, QC H2K 1W7', 'Bibliothèque Frontenac', NULL, '45.533042', '-73.551858'),
(718, 'Delos, septième porte de la perfection et de l''immortalité, Convoi III', 'Delos', NULL, NULL, 1581, '', 1, 4, 'Acier corten; acier.', 'Corten steel; steel', 2, 2, NULL, NULL, 'Parc Baldwin', '45.534496', '-73.562238'),
(719, 'Champlain explore le site de Montréal en 1603', NULL, NULL, NULL, 1583, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503877', '-73.587492'),
(720, 'Nous deux', NULL, 'Découpé; soudé; meulé; boulonné; peint', 'Cut out; welded; buffed; bolted; painted', 1595, '', 1, 1841, 'Acier; peinture', 'Steel; paint', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429983', '-73.666989'),
(721, 'Colonne', 'Sculpture (extérieur)', 'Taille directe; assemblé', 'Direct carving; assembled', 1597, '', 1, 4, 'Granit; acier inoxydable; verre; néon', 'Granite; stainless steel; glass; neon', 2, 2, '4247, rue Saint-Dominique, Montréal, Québec H2W 2A9', 'Centre des arts contemporains du Québec à Montréal', NULL, '45.518992', '-73.581993'),
(722, 'États de choc', 'States of shock', 'Soudé; formé; coulé; briqueté; peint', 'Welded; shaped; poured; briquetted; painted', 1598, '', 1, 1841, 'Acier; brique; mortier; ciment; peinture', 'Steel; brick; mortar; cement; paint', 2, 2, NULL, NULL, 'Parc Summerlea', '45.438429', '-73.718209'),
(723, 'La ville blanche', NULL, 'Découpé; soudé; boulonné; percé; coulé', 'Cut out; welded; bolted; pierced; cast', 1600, '', 1, 1841, 'Acier; granit', 'Steel; granite', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.428448', '-73.680350'),
(724, 'Espace cubique ou hommage à Malevitch', NULL, 'Taillé; coupé; soudé; assemblé', 'Carved; cut; welded; assembled', 1602, '', 1, 1841, 'Verre; granit; acier; béton; lumière', 'Glass; granite; steel; concrete; light', 2, 3, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429901', '-73.666579'),
(725, 'Cube géométrique', NULL, NULL, NULL, 1604, '', 1, 1844, 'Acier corten; Béton', 'Corten steel; concrete', 2, 2, '2105, rue Beauzèle,\rSaint-Laurent (Montréal)\rQuébec', NULL, 'Parc Malborough', '45.523012', '-73.721010'),
(726, 'Le jardin de Lyon', NULL, NULL, NULL, 1606, '', 1, 2, 'Acier inoxydable; bronze; luminaire; bois; granit; serrureries; revêtement plastique; structure métallique; bruyère; graminées', 'Stainless steel; bronze; lighting fixture; wood; granite; ironwork; plastic coating; metallic structure; heather; grass', 2, 3, NULL, NULL, 'Place J.-Ernest-Laforce', '45.512470', '-73.555461'),
(727, 'Orbite optique no 2', 'L''Artichaut', 'Béton projeté', 'Projected concrete', 1610, '', 1, 2, 'Béton; acier', 'Concrete; steel', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.522507', '-73.534649'),
(728, 'Fontaine', 'Jeux d''enfants\r\rNote : Ce titre était en usage avant le démantèlement de l''œuvre, en 2000. De l''œuvre originale il ne subsiste p', NULL, NULL, 1612, '', 1, 2, 'Acier inoxydable; bronze chromé; béton', 'Stainless steel; chrome-plated bronze; concrete', 2, 3, NULL, NULL, 'Square Viger', '45.513958', '-73.552921'),
(729, 'Athéna', NULL, 'Fonte à la cire perdue', 'Iron cast in the cire perdue method', 1616, '', 1, 1840, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc Athéna', '45.527740', '-73.624282'),
(730, 'Hommage à Mihai Eminescu, poète roumain', NULL, 'Bronze coulé', 'Cast bronze ', 1618, '', 1, 4, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Parc Devonshire/Place de la Roumanie', '45.514796', '-73.576459'),
(731, 'Trait d''union', NULL, 'Ancré; boulonné; collé', 'Anchored; bolted; glued', 1620, '', 1, 1838, 'Béton; pierre; acier inoxydable; eau.', 'Concrete; stone; stainless steel; water', 2, 2, '8400, boulevard Lacordaire\rSaint-Léonard (Québec)\rH1R 3B1', 'Bibliothèque Saint-Léonard', NULL, '45.586472', '-73.597139'),
(732, 'Les leçons singulières (volet 1)', 'Les leçons singulières (première partie)', 'Coulé; découpé; formé', 'Cast; cut out; shaped', 1622, '', 1, 4, 'Bronze; laiton; acier inoxydable', 'Bronze; brass; stainless steel', 2, 3, NULL, NULL, 'Place Roy', '45.521580', '-73.570456'),
(733, 'Les leçons singulières (volet 2)', 'Les leçons singulières (deuxième partie)', 'Coulé; découpé; formé', 'Cast; cut out; shaped', 1625, '', 1, 4, 'Bronze; laiton; acier inoxydable', 'Bronze; brass; stainless steel', 2, 3, NULL, NULL, 'Parc La Fontaine', '45.523417', '-73.568557'),
(734, 'Détour : le grand jardin', NULL, 'Soudé; boulonné; percé; peint', 'Welded; bolted; pierced; painted', 1627, '', 1, 1841, 'aluminium ; acier galvanisé', 'Aluminum; galvanized steel', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.428373', '-73.681115'),
(735, 'Le carrousel de l’île', NULL, NULL, NULL, 1629, '', 1, 1839, 'Acier galvanisé; laiton', 'Galvanized steel; brass', 2, 3, NULL, NULL, 'Carrefour giratoire des boulevards, René-Lévesque et Ïle-des-Sœurs', '45.465811', '-73.544778'),
(736, 'Un jardin à soi', NULL, 'Découpé; assemblé', 'Cut out; assembled', 1631, '', 1, 3, 'Laiton; acier inoxydable', 'Brass; stainless steel', 2, 3, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', NULL, '45.560956', '-73.565822'),
(737, 'Monument pour L', NULL, 'Coulé; soudé; peint', 'Cast; welded; painted', 1633, '', 1, 1841, 'Acier; végétaux; asphalte', 'Steel; plants; asphalt', 2, 3, NULL, NULL, 'Parc Fort-Rolland', '45.434760', '-73.699892'),
(738, 'Volatiles', 'Splish-splash', 'Découpé; assemblé', 'Cut out; assembled', 1635, '', 1, 1842, 'Aluminum', 'Aluminum', 2, 3, '1411 Rue Lapierre, LaSalle, QC H8N 2J4', 'Aquadôme-Centre aquatique familiale de LaSalle', NULL, '45.436661', '-73.607768'),
(739, 'Nef pour quatorze reines', NULL, NULL, NULL, 1636, '', 1, 1, 'Granit; acier inoxydable; criblure granitique; gazon', 'Granite; stainless steel; granite screenings; grass', 2, 3, NULL, NULL, 'Place du 6-décembre-1989', '45.496042', '-73.617702'),
(740, 'Hommage aux travailleurs', NULL, 'Coulé; peint', 'Cast; painted', 1638, '', 1, 1845, 'Béton', 'Concrete', 2, 2, 'Boulevard Henri-Bourassa', NULL, NULL, '45.600702', '-73.638456'),
(741, 'Le grand Jean-Paul', NULL, 'Cire perdue', 'Cire perdue method', 1640, '', 1, 2, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Place Jean-Paul-Riopelle', '45.503104', '-73.560661'),
(742, 'Monument à Émile Nelligan', 'Buste à l''effigie du poète Émile Nelligan', 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1641, '', 1, 4, 'Bronze; calcaire; granit', 'Bronze; limestone; granite', 2, 2, NULL, NULL, 'Square Saint-Louis', '45.516215', '-73.570284'),
(743, 'Songes', NULL, NULL, NULL, 1643, '', 1, 1845, 'Papier; aluminium', 'Paper; aluminum', 2, 17, '12 004, boulevard Rolland, Montréal-Nord (Québec), H1W  3W1', 'Maison culturelle et communautaire de Montréal-Nord', NULL, '45.616540', '-73.620970'),
(744, 'Jacques Cartier atterit à Hochelaga en 1535', NULL, NULL, NULL, 1644, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503907', '-73.587428'),
(745, 'Monument à sir Louis-Hippolyte La Fontaine', NULL, 'Fonte au sable', 'Sand-cast iron', 1648, '', 1, 4, 'Bronze; granit; grès; marbre', 'Bronze; granite; sandstone; marble', 2, 2, NULL, NULL, 'Parc La Fontaine', '45.523017', '-73.566328'),
(746, 'Monument aux braves d''Outremont', 'Monument aux morts de la guerre', 'Bronze coulé', 'Cast bronze ', 1650, '', 1, 1846, 'Bronze; marbre', 'Bronze; marble', 2, 2, NULL, NULL, 'Parc Outremont', '45.517753', '-73.604103'),
(747, 'L''habitation en milieu urbain', 'L''espace de l''homme dans l''univers', 'Modelage', 'Modelling', 1652, '', 1, 5, 'Grès, mortier', 'Sandstone; mortat', 2, 2, '6052, boulevard Monk, Montréal (Québec) H4E 3H6', 'Maison de la culture Marie-Uguay', NULL, '45.457694', '-73.595515'),
(748, 'Monument à Paul de Chomedey, sieur de Maisonneuve', NULL, NULL, NULL, 1654, '', 1, 2, 'Bronze; granit', 'Bronze; granite ', 2, 2, NULL, NULL, 'Place d''Armes', '45.504800', '-73.557260'),
(749, 'Monument à Louis-Octave Crémazie', NULL, 'Bronze coulé; pierre taillée', 'Cast bronze; carved stone', 1656, '', 1, 4, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Saint-Louis', '45.517388', '-73.569581'),
(750, 'Monument à John Young', NULL, 'Bronze coulé; pierre taillée', 'Cast bronze, carved stone', 1658, '', 1, 2, 'Bronze; granit', 'Bronze; granite ', 2, 2, NULL, NULL, 'De la Commune', '45.500112', '-73.553427'),
(751, 'Monument à Édouard VII', NULL, 'Coulé à la cire perdue; assemblé à la romaine à l''aide de goupilles en bronze.', 'Cast in the cire perdue method; assembled Roman style using bronze pins', 1660, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Phillips', '45.503724', '-73.568507'),
(752, 'Acier', 'Sous l''eau', 'Soudé; coulé', 'Welded; cast', 1662, '', 1, 2, 'Acier; béton', 'Steel; concrete', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Notre-Dame', '45.504307', '-73.526535'),
(753, 'Le lion de Belfort', 'La Fontaine de la Sun Life Assurance Company', 'Sculpté (granite); coulé (bronze)', 'Sculpted (granite); cast (bronze)\r', 1664, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Dorchester', '45.499704', '-73.570273'),
(754, 'Monument aux héros de la guerre des Boers', 'Monument à Lord Strathcona', NULL, NULL, 1666, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Dorchester', '45.499610', '-73.570967'),
(755, 'Monument à sir George-Étienne Cartier', NULL, 'Bronze coulé', 'Cast bronze ', 1668, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.514231', '-73.585250'),
(756, 'Départ de La Salle pour aller à la découverte du Mississipi', NULL, NULL, NULL, 1670, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503946', '-73.587378'),
(757, 'Totem Kwakiutl', 'Mât totémique Kwakwaka''wakw (Kwakiutl)', 'Sculpté', 'Sculpted', 1672, '', 1, 2, 'Bois', 'Wood', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Notre-Dame', '45.504995', '-73.529284'),
(758, 'Iris', 'Iris (Québec)', 'Feuilles d''aluminium galbées par martelage; soudées entre elles', 'Aluminum sheets shaped by hammering; welded together', 1674, '', 1, 2, 'Aluminium', 'Aluminum', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Notre-Dame', '45.505532', '-73.527751'),
(759, 'Monument à Émilie Gamelin', NULL, 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1676, '', 1, 2, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Place Émilie-Gamelin', '45.51486', '-73.559707'),
(760, 'Les allusifs', NULL, 'Assemblé; soudé; incrusté; gravé', 'Assembled; welded; inlaid; engraved', 1679, '', 1, 5, 'Bois; acier', 'Wood; steel', 2, 3, '138 Avenue Atwater, Montreal, QC H4C 2H6', 'Marché Atwater', NULL, '45.478839', '-73.575339'),
(761, 'Lanka Mata', NULL, NULL, NULL, 1682, '', 1, 5, 'Verre; plomb; acier; néon', 'Glass; lead; steel; neon', 4, 4, '6052 Boulevard Monk, Montréal, QC H4E 3H6', 'Bibliothèque Marie-Uguay', NULL, '45.457751', '-73.595486'),
(762, 'L''attente', NULL, 'Assemblé; soudé; vissé', 'Assembled; welded; screwed', 1683, '', 1, 1843, 'Aluminum ; béton ; laiton ; bronze', 'Aluminum; concrete; brass; bronze', 2, 2, NULL, NULL, 'Parc Belmont', '45.532697', '-73.725844'),
(763, 'La façade', NULL, 'Modélisation 3D; frittage laser sélectif', '3D modelling; selective laser sintering', 1684, '', 1, 2, 'Nylon', 'Nylon', 2, 2, '2093, rue de la Visitation, Montréal, QC, H2L 3C9', 'Bibliothèque Père-Ambroise', NULL, '45.522767', '-73.562670'),
(764, 'La fermière', NULL, 'Coulé', 'Cast', 1685, '', 1, 6, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Place Gennevilliers-Laliberté', '45.553561', '-73.539698'),
(765, 'Les petits baigneurs', NULL, 'Coulé; assemblé', 'Cast; assembled', 1687, '', 1, 6, 'Bronze; pierre; fonte; granit', 'Bronze; stone; cast iron; granite', 2, 2, '1875, avenue Morgan \rMontréal (QC) \rH1V 2R1', 'Bain Morgan', NULL, '45.553359', '-73.538434'),
(766, 'Monument à Dollard des Ormeaux', 'Monument à Adam Dollard des Ormeaux et à ses compagnons', 'Coulé', 'Cast', 1689, '', 1, 4, 'Bronze; granit', 'Bronze; granite ', 2, 2, NULL, NULL, 'Parc La Fontaine', '45.525594', '-73.573055'),
(767, 'Monument aux braves de Lachine', NULL, 'Coulé; assemblé', 'Cast; assembled', 1691, '', 1, 1841, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Parc Stoney-Point', '45.436555', '-73.706738'),
(768, 'Monument aux Patriotes', NULL, 'Fonte au sable', 'Sand-cast iron', 1692, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Place des Patriotes', '45.523411', '-73.546212'),
(769, 'Signal dans l''espace', 'Sculpture, extérieur', 'Assemblage', 'Assembled', 1695, '', 1, 1842, 'Acier; béton', 'Steel; concrete', 2, 2, '1080 Avenue Dollard, Montreal, QC H8N 2T9', 'Bibliothèque l''Octogone', NULL, '45.424150', '-73.623311'),
(770, 'Temps d''heures', NULL, 'Assemblé; découpé; peint', 'Assembled; cut out; painted', 1696, '', 1, 1840, 'Béton; acier de Corten; acier; peinture', 'Concrete; Corten steel; steel, paint', 2, 3, '911, rue Jean-Talon Est, Montréal, H2R 1V5', 'Centre Jean-Marie Gauvreau', NULL, '45.541376', '-73.613177'),
(771, 'Anamorphose d’une fenêtre', NULL, NULL, NULL, 1697, '', 1, 6, 'Acier; béton', 'Steel; concrete', 2, 3, '8105, rue Hochelaga, Montréal, H1L 2K9', 'Maison de la culture Mercier', NULL, '45.595513', '-73.523788'),
(772, 'Monument à John F. Kennedy', NULL, 'Bronze moulé', 'Cast bronze', 1698, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, '2001, avenue McGill College', NULL, 'Intersection des avenues du Président-Kennedy et McGill-College', '45.503367', '-73.573689'),
(773, 'Monument à Joseph Beaubien', NULL, 'Bronze coulé', 'Cast bronze ', 1700, '', 1, 1846, 'Bronze; granit', 'Bronze; granite', 2, 2, '461 Chemin de la Côte-Sainte-Catherine', NULL, 'Parc Beaubien', '45.515161', '-73.607800'),
(774, 'Buste du cardinal Paul-Émile Léger', NULL, 'Coulé', 'Cast', 1701, '', 1, 2, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Place du Cardinal-Paul-Émile-Léger', '45.509549', '-73.561333'),
(775, 'Debout', 'Debout (Monument à Félix Leclerc)', '23 sections de bronze moulées par enrobage et soudées ensemble.', '23 sections of bronze cast by coating and welded together.', 1702, '', 1, 4, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Parc La Fontaine', '45.526717', '-73.571036'),
(776, 'La porte de l’avenir', NULL, 'Empilé; gravé; peint', 'Piled up; engraved; painted', 1704, '', 1, 1839, 'Béton; fibre de verre; résine', 'Concrete; fiber glass; resin', 2, 2, '260 Rue Elgar, Verdun, QC', 'Centre communautaire Elgar', 'Parc Elgar', '45.457215', '-73.547032'),
(777, 'Deux murales', 'Deux murales (céramique)', 'Assemblage', 'Assembled', 1706, '', 1, 3, 'Céramique; peinture', 'Ceramic; paint', 4, 18, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', NULL, '45.555969', '-73.557184'),
(778, 'Le théâtre de papier', NULL, NULL, NULL, 1708, '', 1, 3, 'Verre, acier', 'Glass, steel', 4, 11, '6707 Avenue de Lorimier, Montréal, QC H2G 2P8', 'Bibliothèque La Petite-Patrie', NULL, '45.547360', '-73.598375'),
(779, 'Et pourtant elle tourne', 'Verrière cadran solaire', NULL, NULL, 1710, '', 1, 1847, NULL, NULL, 4, 11, '500, montée de l''Église, Montréal, QC, H9C 1G9', 'Bibliothèque de l''Île-Bizard', NULL, '45.489425', '-73.882544'),
(780, 'La réparation', NULL, 'Taille', 'Carved', 1711, '', 1, 1843, 'Marbre; granit; béton; arbres', 'Marble; granite; concrete; trees', 2, 3, NULL, NULL, 'Parc Marcelin-Wilson', '45.534994', '-73.679998'),
(781, 'Temple du troisième millénaire', NULL, 'Coulé; découpé; assemblé', 'Cast; cut out; assembled', 1713, '', 1, 1844, 'Béton; aluminium', 'Concrete; aluminum', 2, 3, 'Rue Bertrand', NULL, 'Parc Alexis-Nihon', '45.497286', '-73.689694'),
(782, 'Monica', NULL, 'Moulé; collé; soudé; boulonné', 'Cast; glued; welded; bolted', 1715, '', 1, 1841, 'Béton; métal; ciment (base).', 'Concrete; metal; cement (base)', 2, 2, NULL, NULL, 'Promenade Père-Marquette', '45.432433', '-73.683443'),
(783, 'Monument à Jackie Robinson', NULL, 'Bronze coulé', 'Cast bronze ', 1717, '', 1, 6, 'Bronze; béton', 'Bronze; concrete', 2, 2, '4545 Pierre-de-Coubertin\rMontréal, Québec', 'Stade olympique', NULL, '45.555846', '-73.551088'),
(784, 'Joseph-Xavier Perrault', 'Monument à Joseph-Xavier Perrault', 'Aluminium moulé et fondu; granit poli', 'Cast aluminum; polished granite ', 1719, '', 1, 2, 'Aluminium, granit, béton', 'Aluminum, granite, concrete', 2, 2, '800, rue du Square-Victoria, Montréal, Québec', NULL, 'Place du Commerce', '45.501193', '-73.561572'),
(785, 'Hommage à Marguerite Bourgeoys', NULL, 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1721, '', 1, 2, 'Bronze; granit; béton', 'Bronze; granite; concrete', 2, 2, '85, rue Notre-Dame est', NULL, 'Place Marguerite-Bourgeoys', '45.507373', '-73.555063'),
(786, 'Forces', NULL, 'Coulé; ancré', 'Cast; anchored', 1723, '', 1, 1, 'Béton; acier inoxydable', 'Concrete; stainless steel', 2, 2, '6150, avenue Royalmount', NULL, NULL, '45.485971', '-73.674962'),
(787, 'Monument à Robert Burns', NULL, 'Bronze coulé', 'Cast bronze ', 1724, '', 1, 2, 'Bronze; granit', 'Bronze; granite ', 2, 2, NULL, NULL, 'Square Dorchester', '45.499462', '-73.571571'),
(788, 'Pont d''Arles en transfert', NULL, 'Soudé; boulonné; peint', 'Welded; bolted; painted', 1726, '', 1, 1841, 'Acier; pierres; bois; gravier; tourbe', 'Steel; stones; wood; gravel; grass', 2, 3, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429964', '-73.666167'),
(789, 'Signal pour Takis', NULL, 'Soudé; boulonné', 'Welded; bolted', 1728, '', 1, 1841, 'Acier; granit; béton', 'Steel; granite; concrete', 2, 3, 'Chemin du canal', NULL, 'Parc René-Lévesque', '45.428754', '-73.682789'),
(790, 'Lieux sans temple 3', NULL, 'Soudé; patiné; oxydé; collé; boulonné', 'Welded; burnished; oxidized; glued; bolted', 1730, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429924', '-73.666603'),
(791, 'Lieux sans temple 4', NULL, 'Soudé; patiné; oxydé; collé; boulonné', 'Welded; burnished; oxidized; glued; bolted', 1732, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9\r', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429923', '-73.666567'),
(792, 'Lieux sans temple 5', NULL, 'Soudé; patiné; oxydé; collé; boulonné', 'Welded; burnished; oxidized; glued; bolted', 1734, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.429882', '-73.666570'),
(793, 'Souvenir de 1955 ou 2026 Roberval', NULL, 'Découpé; soudé; boulonné; peint', 'Cut out; welded; bolted; painted', 1736, '', 1, 1841, 'Acier; pierre', 'Steel; stone', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.429123', '-73.681809'),
(794, 'Fontaine Wallace', 'Fontaine des Vosges', 'Moulé; boulonné; peint', 'Cast; bolted; painted', 1738, '', 1, 2, 'Fonte', 'Cast iron', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Notre-Dame', '45.505419', '-73.528120'),
(795, 'Triptyque sur le paysage', NULL, NULL, NULL, 1740, '', 1, 1843, 'Acier galvanisé; verre', 'Galvanized steel; glass', 2, 3, '10897, rue Du Pont', NULL, 'Île de la Visitation', '45.575443', '-73.661664'),
(796, 'Signe solaire', NULL, NULL, NULL, 1742, '', 1, 2, 'Acier; béton; fibre de verre; résine d''époxy; limaille de bronze', 'Steel; concrete; fibre-glass; epoxy resin; bronze filings', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.513247', '-73.530889'),
(797, 'Ashapmouchouan', 'L''œuvre était initialement sans-titre, son titre actuel a été attribué par l''ayant droit de Maurice Lemieux.', NULL, NULL, 1744, '', 1, 4, 'Acier Corten', 'Corten steel', 2, 2, '465, rue Gilford\rMontréal, Québec', 'Habitations Laurier', NULL, '45.526861', '-73.586445'),
(798, 'Éclosion', 'Note: L''œuvre était initialement sans-titre, son titre actuel a été attribué par l''ayant droit de Maurice Lemieux.', 'Découpé; courbé; soudé; boulonné; peint', 'Cut out; bent; welded; bolted; painted', 1745, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430104', '-73.666761'),
(799, 'À voile déchirée', 'L''œuvre était initialement sans-titre, son titre actuel a été attribué par l''ayant droit de Maurice Lemieux.', NULL, NULL, 1748, '', 1, 2, 'Acier peint', 'Painted steel ', 2, 2, '2485, boulevard de Maisonneuve est\rMontréal, Québec', 'Habitations De Maisonneuve', NULL, '45.530132', '-73.548258'),
(800, 'Sublime', 'L''œuvre était initialement sans-titre, son titre actuel a été attribué par l''ayant droit de Maurice Lemieux.', NULL, NULL, 1750, '', 1, 5, 'Acier; béton', 'Steel; concrete', 2, 2, '2066, rue Favard\rMontréal, Québec', 'Habitations Favard', NULL, '45.477999', '-73.556237'),
(801, 'Évolution de joie', 'L''œuvre était initialement sans-titre, son titre actuel a été attribué par l''ayant droit de Maurice Lemieux.', 'Coupé; courbé; soudé', 'Cut; bent; welded', 1752, '', 1, 4, 'Acier; béton', 'Steel; concrete', 2, 2, '4110 rue Mentana\rMontréal, Québec', 'Habitations De Mentana', NULL, '45.524225', '-73.574470'),
(802, 'Sans titre', 'Cloisons-paravent et comptoir-réception', 'Assemblé', 'Assembled', 1755, '', 1, 4, 'Bois; acier', 'Wood; steel', 4, 19, '465 Avenue du Mont-Royal Est, Montréal, QC H2J 1W3', 'Bibliothèque du Plateau-Mont-Royal', NULL, '45.524831', '-73.582313'),
(803, 'Colonne stèle', NULL, 'Assemblage; inscription', 'Assembled; inscription', 1756, '', 1, 4, 'Ardoise; silicone; verre', 'Slate; silicone; glass', 2, 2, '465 Avenue du Mont-Royal Est, Montréal, QC H2J 1W3', 'Bibliothèque du Plateau-Mont-Royal', NULL, '45.524831', '-73.582313'),
(804, 'Regard sur le fleuve', NULL, 'Découpé; soudé', 'Cut out; welded', 1757, '', 1, 1841, 'Acier corten', 'Corten steel', 2, 2, NULL, NULL, 'Parc Stoney-Point', '45.435609', '-73.706410'),
(805, 'Table des matières de supports du savoir', NULL, 'Multiple', 'Multiple', 1759, '', 1, 1840, 'Matériaux divers', 'Various materials', 2, 9, '421, rue Saint-Roch, H3N 1K2', 'Bibliothèque Parc-Extension', NULL, '45.531255', '-73.628576'),
(806, 'Tango de Montréal', NULL, 'Moulage d''argile crue', 'Moulding of raw clay', 1762, '', 1, 4, 'Argile', 'Clay', 2, 2, '4433-4435-4437, rue Rivard, Place Gérald Godin', NULL, 'Place Gérald-Godin', '45.524229', '-73.581463'),
(807, 'Les sons de la musique', NULL, 'Coulé; moulé', 'Cast; moulded', 1764, '', 1, 2, 'Béton', 'Concrete ', 2, 2, NULL, NULL, 'De la Gauchetière', '45.507074', '-73.560927'),
(808, 'Cheval à plume', NULL, 'Taillé; sculpté; gravé; percé; peint', 'Carved; sculpted; engraved; pierced; painted', 1767, '', 1, 1841, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.427985', '-73.679242'),
(809, 'Études pour la figure, Saint-Laurent', NULL, 'Taillé; gravé; collé; peint', 'Carved; engraved; glued; painted', 1769, '', 1, 1841, 'Pierre; pigments métalliques', 'Stone; metallic pigments ', 2, 2, NULL, NULL, 'Boulevard Saint-Joseph', '45.433725', '-73.685529'),
(810, 'Monument aux braves de Verdun', NULL, NULL, NULL, 1771, '', 1, 1839, 'Bronze', 'Bronze', 2, 2, '4555 rue de Verdun', 'Hôtel de Ville arrondissement de Verdun', 'Parc du Souvenir', '45.458882', '-73.572314'),
(811, 'After Babel, a Civic Square', 'After Babel\rAfter Babel / A Civic Square\rAfter Babel (a civic square)', 'Assemblé; soudé; découpé; moulé', 'Assembled; welded; cut out; cast', 1773, '', 1, 2, 'Acier corten; bronze; laiton', 'Corten steel; bronze; brass', 2, 3, NULL, NULL, 'Promenade des artistes', '45.509963', '-73.567202'),
(812, 'Les sports', 'Murale (mosaïque)', 'Assemblage', 'Assembled', 1776, '', 1, 6, 'Céramique; verre', 'Ceramic; glass', 2, 9, '2800 Rue Viau, Montréal, QC H1V 3J3', 'Aréna Maurice-Richard', NULL, '45.562464', '-73.547304'),
(813, 'La joie', 'Murale peinte', 'Modelage; peinture', 'Modelling; painting', 1777, '', 1, 6, 'Gesso; béton', 'Gesso; concrete', 2, 9, '3000 Rue Viau, Montréal, QC H1V 3J3', 'Centre Pierre-Charbonneau', NULL, '45.562047', '-73.550076'),
(814, 'La peur', NULL, 'Peint; soudé; assemblé', 'Painted; welded; assembled', 1779, '', 1, 2, 'Granit; aluminium; acier galvanisé; grès; calcaire; marbre; granit naturel; peinture époxy', 'Granite; aluminum; galvanized steel; sandstone; limestone; marble; natural granite; epoxy paint ', 2, 3, NULL, NULL, 'Place D’Youville', '45.501361', '-73.555219'),
(815, 'Monument à la Pointe', 'La Pointe (titre provisoire)', NULL, NULL, 1781, '', 1, 5, 'Béton; brique; acier; aluminium', 'Concrete; brick; steel; aluminum', 2, 3, NULL, NULL, NULL, '45.476015', '-73.573449'),
(816, 'Daleth', NULL, 'Coulé; gravé; découpé; collé; assemblé', 'Cast; engraved; cut out; glued; assembled', 1783, '', 1, 1843, 'Granit; béton; acier inoxydable', 'Granite; concrete; stainless steel', 2, 3, NULL, NULL, 'Parc Marcelin-Wilson', '45.534506', '-73.678436'),
(817, 'Trajectoire no 2', NULL, 'Soudé; peint; patiné; boulonné', 'Welded; painted; burnished; bolted', 1784, '', 1, 1841, 'Acier', 'Steel', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430542', '-73.666852');
INSERT INTO `oeuvre` (`idOeuvre`, `titreOeuvre`, `titreVariante`, `technique`, `techniqueAng`, `noInterne`, `description`, `validationOeuvre`, `idArrondissement`, `nomMateriaux`, `nomMateriauxAng`, `idCategorie`, `idSousCategorie`, `adresseCivic`, `batiment`, `parc`, `latitude`, `longitude`) VALUES
(818, 'Trame d’appel', NULL, 'Souder; peint; installation par ancrages chimique', 'Welding; painting; installation by chemical anchoring', 1786, '', 1, 1847, 'Acier; granit', 'Steel; granite', 2, 2, '500, montée de l''Église, Montréal', 'Pavillon Vincent Lecavalier', 'Parc Eugène-Dostie', '45.487539', '-73.883436'),
(819, 'La naissance', NULL, 'Découpé; soudé', 'Cut out; welded', 1788, '', 1, 1839, 'Acier', 'Steel', 2, 2, '5955 Bannantyne, Verdun, Québec, H4H 1H6', 'Centre culturel de Verdun', NULL, '45.448586', '-73.577611'),
(820, 'Le coup de départ', NULL, NULL, NULL, 1790, '', 1, 1844, 'Acier inoxydable', 'Stainless steel', 2, 2, NULL, NULL, 'Parc Philippe-Laheurte', '45.505415', '-73.718634'),
(821, 'Monument à Nelson', 'Colonne Nelson', NULL, NULL, 1792, '', 1, 2, 'Calcaire; béton; grès', 'Limestone; concrete; sandstone', 2, 2, NULL, NULL, 'Place Jacques-Cartier', '45.508186', '-73.553845'),
(822, 'Site/interlude', NULL, 'Découpé; soudé', 'Cut out; welded', 1794, '', 1, 1841, 'Acier galvanisé, pierre', 'Galvanized steel, stone', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.427777', '-73.676973'),
(823, 'Non titré (Fontaine; Les chérubins)', 'Fontaine; Les chérubins', 'Coulée', 'Casting', 1796, '', 1, 1846, 'Fonte', 'Iron founding', 2, 2, NULL, NULL, 'Parc Outremont', '45.517895', '-73.604464'),
(824, 'La pierre et le feu', NULL, 'Découpé; soudé; boulonné; peint', 'Cut out; welded; bolted; painted', 1798, '', 1, 1841, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428946', '-73.682977'),
(825, 'Temps d’arrêt', NULL, 'Coupage; assemblage; soudure', 'Cutting; assemblage; welding', 1800, '', 1, 3, 'Acier intempérique; aluminium', 'Weatherized steel; aluminum', 2, 2, NULL, NULL, 'Parc Molson', '45.549062', '-73.592662'),
(826, 'L''eau et le transport', NULL, 'aluchromie', NULL, 1803, '', 1, 1842, 'Aluminium', NULL, 2, 5, '8585, Boulevard De La Vérendrye, LaSalle, Québec, H8N 2K2', 'Usine de filtration Charles-J. des Baillets', NULL, '45.425053', '-73.619043'),
(827, 'Courbes et vent', NULL, NULL, NULL, 1809, '', 1, 1848, NULL, NULL, 2, 2, '13555, boulevard de Pierrefonds', 'Bibliothèque de Pierrefonds', NULL, '45.495937', '-73.847429'),
(828, 'Fontaine du square Saint-Louis', 'Fontaine Lacroix du square Viger', NULL, NULL, 1810, '', 1, 4, 'Fonte', 'Cast iron', 2, 2, NULL, NULL, 'Square Saint-Louis', '45.517041', '-73.569964'),
(829, 'Sculpture-fontaine, square Sir-George-Étienne-Cartier', 'Sculpture-fontaine du square G.-É. Cartier', NULL, NULL, 1812, '', 1, 5, 'Fonte', 'Cast iron', 2, 2, NULL, NULL, 'Square Sir-George-Étienne-Cartier', '45.473413', '-73.586390'),
(830, 'Du long du long', NULL, 'Découpé; soudé; boulonné; peint', 'Cut out; welded; bolted; painted', 1815, '', 1, 1841, 'Acier brut; peinture; gravier', 'Raw steel; paint; gravel', 2, 2, NULL, NULL, 'Promenade Père-Marquette', '45.431119', '-73.673413'),
(831, 'Les voûtes d''Ulysse', NULL, 'Découpé; soudé; boulonné', 'Cut out; welded; bolted', 1817, '', 1, 1841, 'Acier; béton', 'Steel; concrete', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428916', '-73.682227'),
(832, 'L''eau et les sports', NULL, 'Aluchromie', NULL, 1819, '', 1, 1842, 'Aluminium', NULL, 2, 5, '8585, Boulevard De La Vérendrye, LaSalle, Québec, H8N 2K2', 'Usine de filtration Charles-J. des Baillets', NULL, '45.425053', '-73.619043'),
(833, 'From A', NULL, NULL, NULL, 1821, '', 1, 1841, 'Granit; mortier', 'Granite; mortar', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428743', '-73.686001'),
(834, 'Force et progrès', NULL, 'Soudé; peint', 'Welded, painted', 1823, '', 1, 1841, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc Monk', '45.431031', '-73.670124'),
(835, 'Écluses', NULL, 'Soudé', 'Welded', 1825, '', 1, 1841, 'Acier inoxydable', 'Stainless steel', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428215', '-73.678237'),
(836, 'Vitraux', NULL, NULL, NULL, 1827, '', 1, 2, NULL, NULL, 4, 4, '275 Rue Notre-Dame Est, Montréal, QC H2Y 1C6', 'Hôtel de Ville de Montréal', NULL, '45.508816', '-73.554069'),
(837, 'Jour ou nuit inconnue', 'Motifs et réseaux (titre provisoire)', 'Sérigraphie', 'Serigraphy', 1828, '', 1, 1837, 'Verre; peinture; acier; bois', 'Glass; paint; steel; wood', 2, 9, '14001, rue Notre-Dame Est, Montréal, H1A 1T9', 'Maison de la culture Pointe-aux-Trembles', NULL, '45.668073', '-73.494782'),
(838, 'Ce qui reste 1997-2001', 'Ce qui reste; DIA-LOG (titre provisoire)', NULL, NULL, 1834, '', 1, 2, 'Papier; bois; acrylique', 'Paper; wood; acrylic', 2, 17, '335 Place d''Youville, Montréal, QC H2Y 3T1', 'Centre d''histoire de Montréal', NULL, '45.501079', '-73.555515'),
(839, 'Le roi Singe', NULL, 'Coulé; assemblé; moulé', 'Cast; assembled; moulded', 1835, '', 1, 2, 'Béton', 'Concrete', 2, 2, NULL, NULL, 'De la Gauchetière', '45.506907', '-73.560590'),
(840, 'Le spectacle de la curiosité', NULL, 'Impression sur papier ilfochrome', 'Print on Ilfochrome paper', 1837, '', 1, 1843, 'Bois; verre; métal; papier', 'Wood; glass; metal; paper', 2, 17, '10 300 rue Lajeunesse, 1er étage, Montréal (Québec), H3L 2E5 ', 'Maison de la culture d''Ahuntsic - Cartierville', NULL, '45.553357', '-73.662743'),
(841, 'Espace vert', NULL, 'Impressions numériques montées à froid sur support de plexiglas (acrylique).', 'Digital prints cold-mounted on Plexiglas support (acrylic)', 1838, '', 1, 1846, 'Aluminium; verre; acier inoxydable; acrylique', 'Aluminum, glass, stainless steel, acrylic', 2, 17, '999, avenue McEachran, Montréal (QC) H2V 3E6', 'Centre communautaire intergénérationnel d''Outremont', 'Parc Pierre-Elliott-Trudeau', '45.519579', '-73.619247'),
(842, 'Être +', NULL, NULL, NULL, 1839, '', 1, 3, 'Aluminum', 'Aluminum', 2, 3, '3800, rue Beaubien est, Montréal, QC H1X 2T1', 'Chalet du parc Étienne Desmarteaux', NULL, '45.559685', '-73.581582'),
(843, 'Monument à Louis Cyr', NULL, 'Bronze coulé; cire perdue', 'Cast bronze; cire perdue', 1840, '', 1, 5, 'Bronze; granit; béton', 'Bronze; granite; concrete', 2, 2, NULL, NULL, 'Parc des Hommes-Forts', '45.475382', '-73.593225'),
(844, 'Le serment de Dollard des Ormeaux et de ses compagnons', NULL, NULL, NULL, 1842, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503965', '-73.587328'),
(845, 'Monument à Jean-Olivier Chénier', NULL, 'Sculpture de cuivre formé; soudure à l''étain.', 'Shaped copper sculpture; tin soldering', 1843, '', 1, 2, 'Cuivre; granit; résine', 'Copper; granite; resin', 2, 2, NULL, NULL, 'Square Viger', '45.511042', '-73.554960'),
(846, 'Sans titre', 'Non titrée (SISM-64)', 'Sculpté', 'Sculpted', 1851, '', 1, 2, 'Calcaire; béton ', 'Limestone; concrete', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.499994', '-73.594489'),
(847, 'Maisonneuve érige une croix sur la montagne', NULL, NULL, NULL, 1853, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.503995', '-73.587278'),
(848, 'Monument à Isabelle la Catholique', NULL, 'Bronze coulé', 'Cast bronze ', 1854, '', 1, 4, 'Bronze; cuivre; granit', 'Bronze; copper; granite', 2, 2, NULL, NULL, 'Parc Sir-Wilfrid-Laurier', '45.531079', '-73.586023'),
(849, 'Épisode', NULL, 'Ciment fondu', 'Aluminous cement ', 1856, '', 1, 3, 'Ciment', 'Cement', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.560483', '-73.558557'),
(850, 'Continuum 2009 (à la mémoire de Pierre Perrault)', NULL, 'Assemblé; soudé', 'Assembled; welded', 1859, '', 1, 6, 'Acier corten', 'Corten steel', 2, 2, NULL, NULL, 'Parc de la Promenade-Bellerive', '45.604249', '-73.509548'),
(851, 'Explorer', NULL, 'Soudé; boulonné; découpé; moulé', 'Welded; bolted; cut out; moulded', 1860, '', 1, 1841, 'Acier brut; acier inoxydable; résine; fibre de verre', 'Raw steel; Stainless steel; resin; fiber glass', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428890', '-73.680853'),
(852, 'Sans titre', 'Non titrée (SISM-64)', 'Sculpté', 'Sculpted', 1865, '', 1, 2, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500025', '-73.594055'),
(853, 'Non titré', NULL, 'Découpé; assemblé; boulonné', 'Cut out; assembled; screwed', 1867, '', 1, 1, 'Bois; laiton; aluminium; verre; peinture; dispositif d''éclairage', 'Wood; brass; aluminum; glass; paint; lighting fixture', 2, 9, '5290, chemin de la Côte-des-Neiges, Montréal, QC, H3T 1Y2', 'Bibliothèque Côte-des-Neiges', NULL, '45.496073', '-73.622116'),
(854, 'Non titré (Portes)', 'Portes', NULL, NULL, 1871, '', 1, 1, NULL, NULL, 4, 13, '3755, rue Botrel, Montréal, H4A 3G8', 'Maison de la culture Notre-Dame-de-Grâce', NULL, '45.475605', '-73.614587'),
(855, 'Le phare d''Archimède', NULL, 'Meulé; cimenté', 'Buffed; cemented', 1872, '', 1, 1841, 'Granit; acier; néon', 'Granite; steel; neon', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.429161', '-73.688205'),
(856, 'Le déjeuner sur l’herbe', NULL, 'Taillé; polissage; tourné; coulé; patiné', 'Carved; polishing; ; cast; burnished', 1874, '', 1, 1841, 'Granit; pierre indiana; béton; bronze', 'Granite; Indiana stone; concrete; bronze', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.428482', '-73.677576'),
(857, 'Girafes', 'Non titrée', 'Assemblé; soudé; peint', 'Assembled; welded; painted', 1876, '', 1, 2, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.520049', '-73.532032'),
(858, 'Migration', NULL, 'Coulé; boulonné', 'Cast; bolted', 1878, '', 1, 2, 'Fonte', 'Cast iron ', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.514075', '-73.534655'),
(859, 'Hommage à René Lévesque', NULL, 'Ciment moulé', 'Moulded cement', 1880, '', 1, 1841, 'Ciment; acier inoxydable; verre', 'Cement; stainless steel; glass', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428749', '-73.687124'),
(860, 'Lieu', 'Fleur d''hiver\rSans titre', 'Moulé; assemblé', 'Cast; assembled', 1882, '', 1, 1844, 'Béton armé', 'Reinforced concrete ', 2, 2, NULL, NULL, 'Parc Noël-Sud', '45.516350', '-73.725394'),
(861, 'Les promeneurs', NULL, NULL, NULL, 1885, '', 1, 1844, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc Saint-Laurent', '45.527273', '-73.686882'),
(862, 'Trampolino', NULL, 'Soudé; assemblé', 'Welded; assembled', 1887, '', 1, 1838, 'Acier inoxydable, acier Corten', 'Stainless steel, Corten steel', 2, 2, '8371, boulevard Lacordaire, Montréal', 'Centre Léonard de Vinci', NULL, '45.585723', '-73.596644'),
(863, 'Dex', NULL, 'Assemblé; soudé; percé', 'Assembled; welded; pierced', 1889, '', 1, 1841, 'Acier; ciment', 'Steel; cement', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430429', '-73.666229'),
(864, 'Affinités', NULL, 'Assemblé; soudé; martelé; découpé; patiné', 'Assembled; welded; hammered; cut out; burnished', 1891, '', 1, 2, 'Cuivre; granit', 'Copper; granite', 2, 2, NULL, NULL, 'Place Upper-Trafalgar', '45.495832', '-73.596190'),
(865, 'Puerta de la Amistad', NULL, NULL, NULL, 1893, '', 1, 2, 'Acier peint', 'Painted steel ', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.511015', '-73.533386'),
(866, 'Monument à Norman Bethune', NULL, 'Taille directe', 'Direct carving', 1895, '', 1, 2, 'Marbre; granit', 'Marble; granite', 2, 2, NULL, NULL, 'Place Norman-Bethune', '45.495970', '-73.579460'),
(867, 'Sans titre', 'Non titrée (SISM-64)', 'Taille directe', 'Direct carving', 1897, '', 1, 2, 'Marbre', 'Marble', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500500', '-73.594335'),
(868, 'Les sœurs cardinales', 'Les sœurs cardinales (SISM-64)', 'Taille directe', 'Direct carving', 1899, '', 1, 2, 'Marbre; granit', 'Marble; granite ', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.499881', '-73.594816'),
(869, 'L''ange de pierre', 'L''ange de pierre, (SISM-64)', 'Sculpté', 'Sculpted', 1901, '', 1, 2, 'Marbre; béton', 'Marble; concrete', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500421', '-73.593759'),
(870, 'Non titré', NULL, 'Coulé', 'Cast', 1912, '', 1, 1838, 'Bronze', 'Bronze', 2, 2, NULL, NULL, 'Parc Ladauversière', '45.582048', '-73.582485'),
(871, 'La fondation de Montréal est décidée à Paris', NULL, NULL, NULL, 1913, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.504020', '-73.587238'),
(872, 'Polaris en lumière', NULL, 'Image lumineuse projettée au sol', 'Illuminated image projected on the ground', 1914, '', 1, 2, 'Lumière', 'Light', 2, 14, NULL, NULL, 'Place d''Armes', '45.504636', '-73.557128'),
(873, 'Équinoxe', NULL, 'Gravé; incrusté', 'Engraved; inlaid', 1916, '', 1, 2, 'Granit; acier inoxydable', 'Granite; stainless steel', 2, 3, NULL, NULL, 'Promenade de la Commune', '45.508180', '-73.551290'),
(874, 'Force', NULL, NULL, NULL, 1917, '', 1, 2, 'Béton, granit; eau; céramique', 'Concrete; granite; water; ceramics', 2, 2, NULL, NULL, 'Square Viger', '45.512625', '-73.553821'),
(875, 'Murale céramique', NULL, 'Assemblage; peinture', 'Assembly; painting', 1919, '', 1, 6, 'Céramique; peinture', 'Ceramics; paint', 4, 18, '3000 Rue Viau, Montréal, QC H1V 3J3', 'Centre Pierre-Charbonneau', NULL, '45.562047', '-73.550076'),
(876, 'Monument à Nicolas Copernic', NULL, 'Bronzé coulé', 'Cast bronze ', 1920, '', 1, 6, 'Bronze; béton', 'Bronze; concrete', 2, 2, '4801, avenue Pierre-De Coubertin, Montréal  Québec  H1V 3V4', 'Planétarium Rio Tinto Alcan de Montréal', NULL, '45.560641', '-73.549375'),
(877, 'Dollard des Ormeaux meurt à Long-Sault pour sauver la colonie', NULL, NULL, NULL, 1923, '', 1, 2, NULL, NULL, 2, 5, '1196 Voie Camillien Houde, Montréal, QC H3H 1A1', 'Chalet du parc du Mont-Royal', 'Parc du Mont-Royal', '45.504105', '-73.587259'),
(878, 'Buste de José de San Martin', NULL, 'Fonte à la cire perdue', 'Iron cast in the cire perdue method', 1924, '', 1, 2, 'Bronze; Grès ', 'Bronze; Sandstone\r', 2, 2, NULL, NULL, 'Parc Hector-Toe-Blake', '45.489365', '-73.580891'),
(879, 'Spatio-mobile #1', NULL, 'Soudé, peint', 'Welded, painted', 1926, '', 1, 1841, 'Acier', 'Steel ', 2, 2, '1, chemin du Musée, Lachine (Québec) H8S 4L9', 'Musée de Lachine', 'Parc du musée de Lachine', '45.430317', '-73.666315'),
(880, 'Le phare du Cosmos', 'Phare cosmique', 'Taille; soudé', 'Carved; welded', 1928, '', 1, 2, 'Acier', 'Steel', 2, 2, NULL, NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.509335', '-73.532705'),
(881, 'Parvis et portail #22', 'Place de l''an 2000', 'Soudé; poli', 'Welded; polished', 1930, '', 1, 1844, 'Aluminium; acier', 'Aluminum; steel', 2, 3, NULL, NULL, 'Place de l’an 2000', '45.516024', '-73.679906'),
(882, 'La force', 'La force (SISM-64) \rNon titrée (SISM-64)', 'Coulé; moulé', 'Cast; moulded', 1932, '', 1, 2, 'Fonte', 'Cast iron', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.500095', '-73.595506'),
(883, 'La sainte Trinité', 'Holy Trinity', 'Moulé; soudé; peint (?)', 'Cast; welded; painted (?)', 1934, '', 1, 4, 'Fonte; époxy; acier', 'Cast iron; epoxy; steel', 2, 2, NULL, NULL, 'Square Saint-Louis', '45.517612', '-73.569411'),
(884, 'Rectangle', 'Sans titre', 'Moulé; sculpté', 'Cast; sculpted', 1936, '', 1, 3, 'Béton; acier; verre; pierre', 'Concrete; steel; glass; stone', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.560966', '-73.564589'),
(885, 'Sans titre', 'Non titrée (square Saint-Louis)\rLe chien du Québec', 'Coulé; peint', 'Cast; painted', 1938, '', 1, 4, 'Fonte; peinture', 'Cast iron; paint', 2, 2, NULL, NULL, 'Square Saint-Louis', '45.517421', '-73.569295'),
(886, 'Justice et paix', NULL, 'Taillé; sculpté; gravé; peint', 'Carved; sculpted; engraved; painted', 1940, '', 1, 1838, 'Calcite; acier; peinture', 'Calcite; steel; paint', 2, 2, NULL, NULL, 'Parc Saint-Léonard', '45.586578', '-73.595143'),
(887, 'L''argoulet', NULL, 'Sculpté; taillé; poli; assemblé', 'Sculpted; carved; polished; assembled', 1942, '', 1, 1839, 'Granit', 'Granite', 2, 2, NULL, NULL, 'Parc Labelle', '45.472525', '-73.570481'),
(888, 'Les cariatides', NULL, 'Découpé; collé; boulonné; taillé; peint; planté', 'Cut out; glued; screwed; carved; painted; planted', 1944, '', 1, 1841, 'Acier; granit; gravier; végétaux.', 'Steel; granite; gravel; plants', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.428688', '-73.684251'),
(889, 'Les dos blancs', NULL, 'Techniques multiples', 'Multiple techniques ', 1946, '', 1, 1844, 'Calcaire; granit; aluminium; ciment', 'Limestone; granite; aluminum; concrete', 2, 3, NULL, NULL, 'Parc Caron', '45.521679', '-73.671706'),
(890, 'Le portage', NULL, 'Taillé; sculpté; gravé; boulonnée; collé', 'Carved; sculpted; engraved; screwed; glued', 1948, '', 1, 1841, 'Acier; granit; briques; pigments; végétaux', 'Steel; granite; brick; pigments; plants', 2, 3, NULL, NULL, 'Parc Summerlea', '45.437485', '-73.714281'),
(891, 'Cadran solaire', NULL, 'Soudage; coulé; anodisation; peint', 'Welding; cast; anodized; painted', 1950, '', 1, 6, 'Acier; aluminium', 'Steel; aluminum', 4, 20, '4801, avenue Pierre-De Coubertin, Montréal  Québec  H1V 3V4', 'Planétarium Rio Tinto Alcan de Montréal', NULL, '45.560805', '-73.549767'),
(892, 'Story Rock', NULL, NULL, NULL, 1951, '', 1, 1841, 'Pierre', 'Stone', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428096', '-73.677199'),
(893, 'Le navigateur', NULL, 'Gravé', 'Engraved', 1953, '', 1, 1841, 'Granit', 'Granite', 2, 2, NULL, NULL, 'Parc Summerlea', '45.438513', '-73.719208'),
(894, 'Vortexit II', 'Vortexit 2', 'Assemblé; gravé; fixé', 'Assembled; engraved; attached', 1955, '', 1, 1841, 'Granit; gravier', 'Granite; gravel', 2, 2, NULL, NULL, 'Parc René-Lévesque', '45.428603', '-73.678586'),
(895, 'Non titré (Traitement pictural au plafond de l''ancien bureau du conservateur)', 'Traitement pictural au plafond de l''ancien bureau du conservateur', NULL, NULL, 1957, '', 1, 2, NULL, NULL, 2, 5, '1210, rue Sherbrooke Est, Montréal (Québec) H2L 1L9', 'Édifice Gaston-Miron', NULL, '45.522741', '-73.565331'),
(896, 'Murale extérieure', 'Non titrée', NULL, NULL, 1958, '', 1, 2, 'Métal, pigments', 'Metal; pigments', 4, 21, '2000, chemin Remembrance, Montréal (Québec) H3H 1A2', 'Pavillon du lac aux Castors', 'Parc du Mont-Royal', '45.498526', '-73.599161'),
(897, 'Des lauriers pour mémoire, Jean-Duceppe 1923-1990', NULL, 'Forge; soudure; assemblage', 'Forging; welding; assembly', 1960, '', 1, 3, 'Acier inoxydable', 'Stainless steel', 2, 3, NULL, NULL, 'Parc Jean-Duceppe', '45.543529', '-73.566053'),
(898, 'Monument à Jacques Cartier', NULL, 'Statue originale : cuivre repoussé-estampé; Statue actuelle : fonte; Fontaine : moulage', 'Original statue: copper repoussé-embossed; Current statue: cast iron; Fountain: casting', 1962, '', 1, 5, 'Bronze; acier; fonte de fer.', 'Bronze; steel; cast iron.', 2, 2, NULL, NULL, 'Square Saint-Henri', '45.480058', '-73.586269'),
(899, 'Le banc des amoureux', 'Lover''s Bench', 'Coulé', 'Cast', 1964, '', 1, 3, 'Bronze', 'Bronze', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.556163', '-73.558294'),
(900, 'Monument à sir John A. Macdonald', NULL, NULL, NULL, 1966, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Place du Canada', '45.498786', '-73.569638'),
(901, 'Wind Boat', 'Bateau à vent', 'Assemblé; imbriqué', 'Assembled; interlocked', 1968, '', 1, 1842, 'Acier galvanisé; aluminium', 'Galvanized steel; aluminum', 2, 2, NULL, NULL, 'Boulevard LaSalle', '45.432687', '-73.588115'),
(902, 'The Passing Song', 'Passing Song, The', NULL, NULL, 1970, '', 1, 1841, 'Acier brut, béton', 'Raw steel, concrete', 2, 3, NULL, NULL, 'Parc René-Lévesque', '45.428971', '-73.681205'),
(903, 'The First Jewel', 'La femme au collier', 'Coulé', 'Cast', 1972, '', 1, 3, 'Bronze', 'Bronze', 2, 2, '4101, rue Sherbrooke Est, Montréal, Québec, H1X 2B2', 'Jardin botanique', 'Jardin botanique', '45.559703', '-73.556911'),
(904, 'Sans titre', 'Non titrée (SISM-64)', 'Sculpté', 'Sculpted', 1974, '', 1, 2, 'Calcaire', 'Limestone', 2, 2, NULL, NULL, 'Parc du Mont-Royal', '45.499908', '-73.594361'),
(905, 'Monument à la reine Victoria', NULL, NULL, NULL, 1976, '', 1, 2, 'Bronze; granit', 'Bronze; granite', 2, 2, NULL, NULL, 'Square Victoria', '45.501421', '-73.561586'),
(906, 'L''étreinte', NULL, 'Aluminium: découpé; plié; soudé et assemblé. Granit: gravé au jet de sable (fabrication artisanale)', 'Aluminum: cut out, bends; welded and assembled. Granite: Sandblast engraving.', 2994, '', 1, 2, 'Aluminium; granit', 'Aluminum; granite', 2, 3, 'Devant l''entrée du 250, boul. de Maisonneuve est', NULL, 'Parc Paul-Dozois', '45.512386', '-73.563593'),
(907, 'Constellation en Sol', NULL, 'Découpage au laser; impression; assemblage', 'Laser cutting; printing; assembly', 3093, '', 1, 3, 'Résine de copolyester; impression', 'Copolyester resin; print', 2, 9, '500 Boulevard Rosemont, Montréal, Qc H2S 0C4', 'Bibliothèque Marc-Favreau', NULL, '45.531832', '-73.597543'),
(908, 'Hommage à l''esprit sportif', NULL, NULL, NULL, 3096, '', 1, 1845, 'Céramique ?', 'Ceramics ?', 4, 18, '11212 Rue Garon, Montréal-Nord, QC', 'Aréna Garon', NULL, '45.594994', '-73.637955'),
(909, 'La Bourrasque', NULL, 'Découpe au laser', 'Laser cutting ', 3097, '', 1, 1844, 'Acier inoxydable', 'Stainless steel', 2, 2, '2727 Boulevard Thimens, Montréal, QC H4R 1T4', 'Bibliothèque du Boisé', NULL, '45.504072', '-73.705185'),
(910, 'Voiles', 'Voile I & Voile II', 'Poli, finition effectuée par meuleuse à disque (gros grain)', 'Polished, finished using a disk grinder (coarse grit)', 3098, '', 1, 1845, 'Acier inoxydable', 'Stainless steel', 2, 2, NULL, NULL, 'Boulevard Albert-Brosseau', '45.603186', '-73.642556'),
(911, 'Chorégraphie pour les humains et les étoiles', NULL, 'Béton coulé (stèles); vidéoprojections (oeuvre numérique)', NULL, 3101, '', 1, 6, 'Béton ductal; composantes technologiques', NULL, 2, 14, '4801, avenue Pierre-De Coubertin, Montréal  Québec  H1V 3V4', 'Planétarium Rio Tinto Alcan de Montréal', NULL, '45.560735', '-73.550116'),
(912, 'Carrefour', NULL, 'Moulage; assemblage', 'Casting; assembly', 3104, '', 1, 1839, 'Bronze; acier inoxydable', 'Bronze; stainless steel', 2, 2, '201, rue Berlioz, Verdun (Québec) H3C 1C1', 'La Station (Maison intergénérationnelle)', NULL, '45.460134', '-73.544592'),
(913, 'Kate & Nora', NULL, NULL, NULL, 3107, '', 1, 1846, 'Acier inoxydable', 'Stainless steel', 2, 3, NULL, NULL, 'Place Kate-McGarrigle', '45.517594', '-73.597311'),
(914, 'COSMOTOME NO 7, OH HOMME !', NULL, NULL, NULL, 5143, '', 1, 2, NULL, NULL, 2, 2, '200, chemin du Tour-de-d''îsle, Montreal, QC, H3C 4G8', NULL, 'Parc Jean-Drapeau, Île Sainte-Hélène', '45.515301', '-73.530778'),
(915, 'Point d''origine', NULL, 'Aluminium taillé, soudé et assemblé (fini satiné et gravé); pavés découpés.', NULL, 5809, '', 1, 3, 'Aluminium; Granit', NULL, 2, 2, '780, boulevard Rosemont, Montréal, H2S 0A7', NULL, 'Place Raymond-Plante', '45.533555', '-73.596281'),
(916, 'La vélocité des lieux', 'La grande roue', 'Assemblage', 'Assemblage', 6680, '', 1, 1845, 'Aluminium, acier galvanisé, acier inoxydable, plexiglas, DEL', 'Aluminum, galvanized steel and stainless steel, Plexiglas, LEDs', 2, 2, NULL, NULL, 'Carrefour Henri-Bourassa–Pie-IX', '45.596262', '-73.642587 ');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre_artiste`
--

CREATE TABLE IF NOT EXISTS `oeuvre_artiste` (
  `idOeuvre` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  PRIMARY KEY (`idOeuvre`,`idArtiste`),
  KEY `idArtiste` (`idArtiste`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oeuvre_artiste`
--

INSERT INTO `oeuvre_artiste` (`idOeuvre`, `idArtiste`) VALUES
(2, 534),
(3, 535),
(4, 535),
(621, 536),
(622, 536),
(623, 537),
(624, 538),
(625, 539),
(626, 540),
(627, 541),
(628, 542),
(629, 543),
(630, 543),
(631, 543),
(632, 543),
(633, 544),
(633, 545),
(634, 543),
(635, 543),
(636, 546),
(637, 546),
(638, 547),
(639, 548),
(640, 549),
(641, 550),
(642, 551),
(643, 552),
(644, 553),
(645, 553),
(646, 554),
(647, 555),
(648, 555),
(649, 555),
(650, 555),
(651, 555),
(652, 555),
(653, 556),
(653, 557),
(654, 558),
(655, 559),
(656, 560),
(657, 560),
(657, 561),
(658, 562),
(659, 562),
(660, 563),
(661, 564),
(662, 564),
(663, 565),
(664, 566),
(665, 567),
(666, 568),
(667, 569),
(668, 570),
(669, 571),
(670, 571),
(671, 571),
(672, 572),
(673, 573),
(674, 573),
(675, 574),
(676, 575),
(677, 576),
(678, 577),
(679, 578),
(680, 579),
(681, 580),
(682, 580),
(683, 581),
(684, 581),
(685, 581),
(686, 581),
(686, 582),
(686, 583),
(687, 584),
(688, 585),
(689, 586),
(690, 586),
(691, 586),
(692, 586),
(693, 587),
(694, 588),
(695, 588),
(696, 589),
(697, 590),
(698, 591),
(699, 592),
(700, 593),
(701, 594),
(702, 595),
(703, 595),
(704, 596),
(705, 597),
(706, 598),
(707, 599),
(708, 599),
(709, 600),
(710, 601),
(711, 602),
(712, 603),
(713, 604),
(714, 605),
(715, 605),
(716, 606),
(717, 606),
(718, 607),
(719, 608),
(720, 609),
(721, 609),
(722, 609),
(723, 609),
(724, 609),
(725, 610),
(726, 611),
(726, 612),
(727, 613),
(728, 614),
(729, 615),
(730, 616),
(731, 617),
(732, 617),
(733, 617),
(734, 617),
(735, 617),
(736, 617),
(737, 618),
(738, 618),
(739, 618),
(739, 619),
(740, 620),
(741, 621),
(742, 621),
(743, 622),
(744, 623),
(745, 624),
(746, 624),
(747, 625),
(748, 626),
(749, 626),
(750, 626),
(751, 626),
(752, 627),
(753, 628),
(754, 628),
(755, 628),
(756, 629),
(757, 630),
(757, 631),
(758, 632),
(759, 632),
(760, 633),
(761, 634),
(762, 635),
(763, 635),
(764, 636),
(765, 636),
(766, 636),
(767, 636),
(768, 636),
(769, 637),
(770, 637),
(771, 637),
(772, 638),
(773, 638),
(774, 638),
(775, 639),
(776, 639),
(777, 640),
(778, 641),
(779, 641),
(780, 642),
(781, 643),
(782, 561),
(783, 561),
(784, 561),
(785, 561),
(786, 561),
(787, 644),
(788, 645),
(789, 645),
(790, 645),
(791, 645),
(792, 645),
(793, 645),
(794, 646),
(795, 647),
(796, 648),
(797, 649),
(798, 649),
(799, 649),
(800, 649),
(801, 649),
(802, 650),
(803, 650),
(804, 650),
(805, 650),
(806, 651),
(807, 652),
(808, 653),
(809, 653),
(810, 654),
(811, 655),
(811, 656),
(812, 657),
(813, 657),
(814, 658),
(815, 658),
(816, 658),
(817, 659),
(818, 659),
(819, 659),
(820, 659),
(821, 660),
(822, 661),
(823, 662),
(824, 663),
(825, 663),
(826, 664),
(827, 665),
(828, 666),
(829, 666),
(830, 667),
(831, 667),
(832, 668),
(833, 669),
(834, 670),
(835, 671),
(836, 672),
(837, 673),
(838, 673),
(839, 674),
(840, 675),
(841, 675),
(842, 676),
(843, 677),
(844, 678),
(845, 679),
(846, 680),
(847, 681),
(848, 682),
(849, 683),
(850, 684),
(851, 685),
(852, 686),
(853, 687),
(854, 688),
(855, 689),
(856, 689),
(857, 690),
(858, 690),
(859, 690),
(860, 690),
(861, 691),
(862, 692),
(863, 693),
(864, 694),
(865, 695),
(866, 696),
(867, 697),
(868, 698),
(869, 699),
(870, 700),
(870, 701),
(871, 702),
(872, 703),
(873, 703),
(873, 704),
(874, 705),
(875, 705),
(875, 706),
(876, 707),
(877, 708),
(878, 709),
(879, 710),
(880, 710),
(881, 710),
(882, 711),
(883, 711),
(884, 711),
(885, 711),
(886, 711),
(887, 712),
(888, 712),
(889, 712),
(890, 712),
(891, 713),
(892, 714),
(893, 714),
(894, 714),
(895, 715),
(896, 716),
(897, 717),
(898, 718),
(899, 719),
(900, 720),
(901, 721),
(902, 721),
(903, 722),
(904, 723),
(905, 724),
(906, 725),
(907, 726),
(908, 727),
(908, 728),
(909, 729),
(910, 730),
(911, 731),
(912, 732),
(913, 733),
(914, 734),
(915, 735),
(916, 736);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `souscategorie`
--

INSERT INTO `souscategorie` (`idSousCategorie`, `nomSousCat`, `nomSousCatAng`, `idCategorie`) VALUES
(2, 'Sculpture', 'Sculpture', 2),
(3, 'Installation', 'Installation', 4),
(4, 'Vitrail', 'Stained Glass', 2),
(5, 'Peinture', 'Painting', 2),
(7, 'Mosaique', 'Mosaics', 1),
(9, 'Techniques mixtes', 'Mixed Media', 1),
(11, 'Verre', 'Glass', 1),
(13, 'Mobilier', 'Furnishings', 1),
(14, 'Multimédia', 'Multimedia Work', 1),
(17, 'Photographie', 'Photography', 2),
(18, 'Céramique', 'Ceramics', 4),
(19, 'Bois/menuiserie d''art', 'Wood/Woodcraft', 4),
(20, 'Design industriel', 'Industrial Design', 4),
(21, 'Émaux', 'Enamels', 4);

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
  `nomUtil` varchar(50) DEFAULT NULL,
  `prenomUtil` varchar(50) DEFAULT NULL,
  `courrielUtil` varchar(100) DEFAULT NULL,
  `TelUtil` text,
  `bio` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `photoUtilisateur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur_enregistre`
--

INSERT INTO `utilisateur_enregistre` (`idUtilisateur`, `loginUtilisateur`, `passUtilisateur`, `nomUtil`, `prenomUtil`, `courrielUtil`, `TelUtil`, `bio`, `photoUtilisateur`) VALUES
(4, 'toto', 'f71dbe52628a3f83a77ab494817525c6', 'toto', 'le magicien', 'totolemagicien@lamagique.com', '5145858585', 'Je suis le magicien plus populaire du monde', 'utilisateurDefaut.jpg'),
(5, 'gerard', '64d8be661d8a79416eb6662db51e7118', 'Gerard', 'Tremblay', 'gerartremblay@gmail.com', '5145860409', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'Util_1.jpg');

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
