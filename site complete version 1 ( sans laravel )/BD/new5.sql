-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 14 avr. 2020 à 11:13
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `elearning`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdps`) VALUES
(1, 'aiman.elbou@gmail.com', 'elbouayadi1234'),
(2, 'mohammed.elkh@gmail.com', '1234567890'),
(3, 'lahcen.hass@gmail.com', 'elhasnaoui');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cour` int(11) NOT NULL AUTO_INCREMENT,
  `nom` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cour`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cour`, `nom`, `description`, `id_filiere`) VALUES
(30, 'Programmation C', 'Ce cours sert a prends les et la base principe de programmation C', 'GI'),
(31, 'Programmation JAVA', 'Ce cours sert a prends les principe de programmation JAVA', 'GI'),
(32, 'Base Donnes', 'Ce cours sert a prends les principe de Base Donnees', 'GI'),
(33, 'Securiter Réseau', 'Ce cours sert a prends les principe de securité Reseau', 'TSI'),
(34, 'Organisation d entreprise', 'Ce cours sert a prends les principe d organisation d entreprise', 'TM'),
(35, 'Droits', 'Ce cours sert a prends les principe Droits', 'FBA'),
(36, 'Gestion de Projet', 'Ce cours sert a prends les principe d Organisation d entreprise', 'TM'),
(37, 'Mécanique des fluides', 'Ce cours sert a prends les principe de Mécanique des fluides', 'GTE'),
(38, 'Physique générale', 'Ce cours sert a prends les principe de Physique générale', 'GTE'),
(39, 'Electronique Numérique', 'Ce cours sert a prends les principe de Physique générale', 'GIM'),
(40, 'Organisation et Méthodes et maintenance', 'Ce cours sert a prends les principe d Organisation et Méthodes et maintenance', 'GIM'),
(41, 'Electronique Analogique', 'Ce cours sert a prends les principe d Electronique Analogique', 'GIM'),
(42, 'Technique du batiment', 'Ce cours sert a prends les principe de Technique du batiment', 'GC'),
(43, 'Calcul des Structures', 'Ce cours sert a prends les principe de Calcul des Structures', 'GC'),
(44, 'Architecture et Topographie', 'Ce cours sert a prends les principe d Architecture et Topographie', 'GC'),
(45, 'Comptabilité et outils de gestion', 'Ce cours sert a prends les principe de Comptabilité et outils de gestion', 'TCC'),
(46, 'Outils d aide a la décision', 'Ce cours sert a prends les principe d Outils d aide a la décision', 'TCC'),
(47, 'Macro economie', 'ce cours pour la filiere tcc', 'TCC'),
(48, 'Deve web avancée', 'ce cours sert a donner les princip du web avancé', 'TCC'),
(50, 'gestion', 'pour la gestion', 'TM');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `code_massar` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `date_naiss` date NOT NULL,
  `filiere` varchar(4) NOT NULL,
  `num_tele` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdps` text NOT NULL,
  `type_user` enum('etudiant','professeur') NOT NULL,
  `etat` enum('-1','0','1') NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`code_massar`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`code_massar`, `nom`, `prenom`, `date_naiss`, `filiere`, `num_tele`, `email`, `mdps`, `type_user`, `etat`, `adresse`) VALUES
(3, 'manal', 'benchlikha', '2015-01-01', 'GC', 456546, 'benchlikha@gmail.com', '0000', 'professeur', '-1', 'casablanca'),
(4, 'oudghiri', 'lamiae', '2015-01-01', 'TM', 456546, 'lamiae@gmail.com', '0000', 'etudiant', '-1', 'Rabat'),
(5, 'oudghiri', 'khansae', '2015-01-01', 'GI', 456546, 'khansae@gmail.com', '0000', 'etudiant', '-1', 'taza'),
(6, 'badouri', 'lamiae', '2015-01-01', 'FBA', 456546, 'lamia@gmail.com', '0000', 'professeur', '-1', 'marakech'),
(7, 'badouri', 'safae', '2015-01-01', 'TCC', 456546, 'safae@gmail.com', '0000', 'etudiant', '-1', 'tanger'),
(8, 'achbihi', 'kenza', '2015-01-01', 'TSI', 456546, 'kenza@gmail.com', '0000', 'etudiant', '-1', 'sale'),
(9, 'leknit', 'achraf', '2015-01-01', 'GI', 456546, 'achraf@gmail.com', '0000', 'professeur', '-1', 'Ouejda'),
(11, 'alaoui', 'imane', '2015-01-01', 'TM', 456546, 'imane@gmail.com', '0000', 'professeur', '1', 'Meknes'),
(12, 'akhawayni', 'ayoub', '2015-01-01', 'GE', 456546, 'ayoub@gmail.com', '0000', 'etudiant', '1', 'Fes'),
(13, 'nhari', 'ayoub', '2020-03-06', 'GC', 654824, 'ayoub.nh@gmail.com', '123456', 'etudiant', '-1', 'Meknes'),
(14, 'popo', 'amin', '2020-03-06', 'TSI', 456546, 'popo@gmail.com', 'popo123', 'etudiant', '-1', 'RABAT'),
(15, 'sanousi', 'mohamed', '2020-02-28', 'TSI', 45654, 'sanousi@gmail.com', 'simans', 'professeur', '-1', 'MEKNES'),
(16, 'salhi', 'anas', '2020-03-12', 'GIM', 5412, 'salhi@gmail.com', '0000', 'professeur', '-1', 'TANGER'),
(17, 'izm', 'amina', '2001-01-11', 'GI', 451, 'izm@gmail.com', '1111', 'etudiant', '-1', 'MEKNES'),
(18, 'laasili', 'basma', '1111-11-11', 'GIM', 47862, 'bassma@gmail.com', '0000', 'professeur', '-1', 'Meknes'),
(19, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '-1', 'Meknes'),
(21, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '-1', 'Meknes'),
(22, 'corona', 'corona', '2020-03-20', 'GIM', 0, 'corona@gmail.com', 'corona', 'professeur', '-1', 'china');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `code_massar` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `filiere` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_tele` int(11) DEFAULT NULL,
  `adresse` mediumtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'etudiant',
  PRIMARY KEY (`code_massar`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`code_massar`, `nom`, `prenom`, `date_naiss`, `filiere`, `num_tele`, `adresse`, `email`, `mdps`, `type`) VALUES
(1, 'OMARI', 'AYOUB', '2000-12-25', 'GI', 615489745, 'Meknes', 'ayoub.om@gmail.com', 'ayoub125125', 'etudiant'),
(3, 'HASSANI', 'MANAL', '2001-08-07', 'TCC', 614985235, 'MEKNES', 'manal.hassani14@gmail.com', '1234', 'etudiant'),
(27, 'elhassani', 'hesna', '2020-03-20', 'FBA', 645466, 'Meknes', 'hessna@gmail.com', '0000', 'etudiant'),
(23, 'elbouayadi', 'ayman', '2020-02-13', 'GC', 84651, 'tanger', 'hassan.el@gmail.com', '1234', 'etudiant'),
(9, 'EL ACHI', 'AYMAN', '1999-11-30', 'GE', 615357595, 'SALE', 'ayman.elachi@gmail.com', '1234', 'etudiant'),
(10, 'REHALI', 'MARYAME', '2000-01-18', 'GIM', 695754545, 'MEKNES', 'maryame.rahali@gmail.com', '1234', 'etudiant'),
(11, 'BOUHALI', 'IMANE', '1999-09-17', 'TCC', 635393887, 'MEKNES', 'imane.bouhali12@gmail.com', '1234', 'etudiant'),
(12, 'ZERYOUH', 'KHAOULA', '2000-12-22', 'TM', 625284719, 'MEKNES', 'khaoula.zrh@gmail.com', '1234', 'etudiant'),
(14, 'JAMALI', 'TAHA', '2000-11-07', 'GI', 654318974, 'SIDI KACEM', 'taha.jamali@gmail.com', '1234', 'etudiant'),
(28, 'akhawayni', 'ayoub', '2015-01-01', 'GE', 456546, 'Fes', 'ayoub@gmail.com', '0000', 'etudiant'),
(16, 'MAANINOU', 'KHAOULA', '2000-04-18', 'GIM', 625974581, 'KENITRA', 'khaoula.maaninou@gmail.com', '1234', 'etudiant'),
(17, 'OUFKIR', 'MANAL', '2001-08-24', 'GC', 615348974, 'CASABLANCA', 'manal.oufkir@gmail.com', '1234', 'etudiant'),
(18, 'BOURIKA', 'MARYAME', '2000-02-17', 'GE', 619475654, 'TANGER', 'maryame.bourika@gmail.com', '1234', 'etudiant'),
(21, 'Hammam', 'Maryame', '2001-12-15', 'TM', 615458954, 'MEKNES', 'maryhamama45@gmail.com', '1234', 'etudiant'),
(29, 'hassan', 'senhaji', '2020-04-26', 'TSI', 1645, 'casa', 'senhaji@gmail.com', 'ztiktk', 'etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id_pdf` int(11) NOT NULL AUTO_INCREMENT,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prof` int(11) NOT NULL,
  `commantaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `type_cour` enum('cour','tp','td','bibliotheque') COLLATE utf8mb4_unicode_ci DEFAULT 'cour',
  `nbr_telechargement` int(11) DEFAULT '0',
  `date_ajoute` datetime DEFAULT CURRENT_TIMESTAMP,
  `nom_pdf` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_lien` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pdf`),
  KEY `id_filiere` (`id_filiere`),
  KEY `code_prof` (`code_prof`),
  KEY `id_cour` (`id_cour`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `file`
--

INSERT INTO `file` (`id_pdf`, `id_filiere`, `code_prof`, `commantaire`, `id_cour`, `type_cour`, `nbr_telechargement`, `date_ajoute`, `nom_pdf`, `pdf_lien`, `titre`) VALUES
(17, 'TCC', 6, 'un exemple de maryame', 47, 'td', 3, '2020-04-13 13:14:26', 'Cours-HTML.pdf', '../file/TCC/Cours-HTML.pdf', 'un pdf de x'),
(21, 'bibl', 6, 'test biblio', -1, 'bibliotheque', 1, '2020-04-13 15:18:37', '@ReadMe.txt', '../file/bibliotheque/@ReadMe.txt', 'biblio 1 ');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `filiere_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filiere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filiere_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`filiere_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`filiere_id`, `filiere`, `filiere_description`, `departement`) VALUES
('GI', 'GENIE INFORMATIQUE', 'Le développement de l\'informatique, des systèmes d’information et des systèmes de télécommunication élargissent considérablement les domaines d\'application de l\'informatique en renforçant les interactions entre les aspects matériels et logiciels. La filière d’informatique d’EST est une réponse à ces développements.', 'genie informatique'),
('TM', 'TECHNIQUE DE MANAGEMENT', 'Former des techniciens supérieurs en techniques de management (privées et publiques) disposant de connaissances et compétences appréciables.\r\nFavoriser une meilleure collaboration entre l\'université et les entreprises.\r\nAcquérir des compétences directement opérationnelles liées à la maîtrise technique des emplois ciblés.', 'techniques de management'),
('TSI', 'TECHNIQUE DE SON ET D IMAGE', 'Cette formation a pour objectif d\'apporter des compétences professionnelles dans le domaine de la création numérique (Images fixes ou animées, sons, vidéos, compositing,...). Les compétences acquises par les lauréats leurs permettent de s\'engager dans des métiers différents.', 'genie informatique'),
('GIM', 'GENIE INDUSTRIEL ET MAINTENANCE', 'Génie industriel et Maintenance a pour but de former en deux ans des techniciens supérieurs généralistes capables de gérer et d’organiser les opérations de maintenance des installations, pour optimiser la disponibilité des outils de production et de service.', 'genie electrique'),
('GC', 'GENEIE CIVIL', 'L’enseignement vise à la formation en deux ans de cadres polyvalents participant à la responsabilité de l’étude et de l’exécution des travaux de génie civil:\r\nDans un bureau d’études, ils élaborent, suivant les directives des ingénieurs, les plans, devis, programmes et calculs, tant en ce qui concerne la conception que la préparation des ouvrages.\r\nSur les chantiers, ils ont la responsabilité de l’exécution : conduite des travaux, coordination des corps d’état, etc.\r\nDans les laboratoires d’essais ou de recherche, ils sont chargés de l’organisation, de l’exécution et du dépouillement des programmes d’essais.', 'genie electrique'),
('GE', 'GENIE ELECTRIQUE', 'L’objectif est de former de futurs techniciens supérieurs aptes à intervenir sur des systèmes pluri- technologiques de haute valeur industrielle afin d’en assurer leur fonctionnement, conduite, gestion et maintenance dans des conditions optimales.', 'genie electrique'),
('GTE', 'GENIE TERMIQUE ET ENERGETIQUE', 'L\'objectif du DUT GTE est de former des techniciens maîtrisant la production, la maîtrise et la gestion de l\'énergie. La formation portera sur la connaissance de toutes les formes d\'énergies, y compris les énergies renouvelables, les équipements (moteurs, chauffage, climatisation, ...) et sur l\'examen de l\'impact de la production et de la consommation sur l\'environnement.', 'genie electrique'),
('FBA', 'FINANCE BANQUE ET ASSURANCE', 'L’objectif du DUT professionnelle «Banque» est de former des conseillers et gestionnaires de clientèle «», qui soient polyvalents et évolutifs. La polyvalence fait référence à la diversité des opérations traitées qui doit permettre de répondre à tous les besoins exprimés par le client particulier. Le potentiel évolutif concerne l’aptitude à exercer, à terme, des responsabilités d’encadrement.', 'techniques de management'),
('TCC', 'TECHNIQUE DE COMMUNICATION COMMERCIALISATION', 'Techniques de Commercialisation et de Communication\r\nFormer des étudiants en vue d’occuper des postes de commerciaux polyvalents, autonomes et évolutifs.\r\nSélectionner des étudiants capables de piloter la gestion commerciale d’une entreprise par le biais d’une parfaite maîtrise des outils de gestion indispensables à la conduite de toute politique commerciale entrepreneuriale.', 'techniques de commercialisation et de communication'),
('IA', 'Inteligence artificiel', 'Filiere de inteligence artificiel', 'genie informatique');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `login_etd`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `login_etd`;
CREATE TABLE IF NOT EXISTS `login_etd` (
`code_massar` int(11)
,`nom_complet` varchar(51)
,`mdps` mediumtext
,`type` varchar(10)
,`email` varchar(30)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `login_prof`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `login_prof`;
CREATE TABLE IF NOT EXISTS `login_prof` (
`code_massar_prof` int(11)
,`nom_cmplt` varchar(51)
,`login` varchar(30)
,`mdps` mediumtext
,`type` varchar(10)
);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `emetteur_id` int(11) NOT NULL,
  `emetteur_nom` text NOT NULL,
  `emetteur_email` text NOT NULL,
  `emetteur_telephone` int(11) NOT NULL,
  `emetteur_type` enum('admin','professeur','etudiant','visiteur') DEFAULT NULL,
  `message` text NOT NULL,
  `etat` enum('0','1') DEFAULT '0',
  `date_env` datetime DEFAULT CURRENT_TIMESTAMP,
  `recepteur_id` int(11) NOT NULL,
  `recepteur_email` text NOT NULL,
  `recepteur_type` enum('admin','professeur','etudiant','visiteur') DEFAULT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_msg`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`) VALUES
(1, 6, 'LOUKILI HASSAN', 'hassan.loukili@gmail.com', 603254861, 'professeur', 'ffffff', '1', '2020-04-10 23:54:14', 1, 'ayman.elbou@gmail.com', 'admin'),
(2, 6, 'LOUKILI HASSAN', 'hassan.loukili@gmail.com', 603254861, 'professeur', 'un test de message apres etat change', '1', '2020-04-10 23:57:41', 1, 'ayman.elbou@gmail.com', 'admin'),
(3, -1, 'karam binou', 'karam@gmail.com', 5555, 'visiteur', 'bnjr ana karam', '1', '2020-04-10 23:58:23', 1, 'ayman.elbou@gmail.com', 'admin'),
(9, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'salam ayoub msg recu', '0', '2020-04-14 04:55:09', 1, 'ayoub.om@gmail.com', 'etudiant'),
(7, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'une reponse vers karam', '0', '2020-04-11 01:19:56', -1, 'karam@gmail.com', 'visiteur'),
(8, 1, 'OMARI AYOUB', 'ayoub.om@gmail.com', 615489745, 'etudiant', 'salam', '1', '2020-04-13 02:45:14', 1, 'ayman.elbou@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `code_massar_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `filiere` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_tele` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'professeur',
  `adresse` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`code_massar_prof`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`code_massar_prof`, `nom`, `prenom`, `date_naiss`, `filiere`, `num_tele`, `email`, `mdps`, `type`, `adresse`) VALUES
(6, 'LOUKILI', 'HASSAN', '1987-07-24', 'TCC', 603254861, 'hassan.loukili@gmail.com', '1234', 'professeur', 'Tanger'),
(24, 'alaoui', 'imane', '2015-01-01', 'TM', 456546, 'imane@gmail.com', '0000', 'professeur', NULL),
(8, 'BOUDIRI', 'MOHAMED', '1983-08-30', 'GC', 605887411, 'mohamed.boudiri@gmail.com', '1234', 'professeur', NULL),
(9, 'SEBANI', 'BOUCHTA', '1985-09-14', 'GE', 612349856, 'bouchta.sebani@gmail.com', '1234', 'professeur', NULL),
(10, 'TAOUIL', 'KARAM', '1987-10-02', 'GIM', 654123265, 'karam.taouil@gmail.com', '1234', 'professeur', NULL),
(11, 'FEKKAK', 'HASSAN', '1970-05-01', 'GI', 678946525, 'hassan.fekkak@gmail.com', '1234', 'professeur', NULL),
(25, 'ayman', 'ztakatak', '2020-04-18', 'TSI', 6544461, 'aimanztktk@gmail.com', '147', 'professeur', NULL),
(13, 'EL ANDALOUSI', 'MOUAD', '1972-04-22', 'TSI', 615544898, 'mouad.elandalousi@gmail.com', '1234', 'professeur', NULL),
(14, 'BENKIRAN', 'ABDELAH', '1973-04-25', 'TCC', 607258495, 'abdelah.ben@gmail.com', '1234', 'professeur', NULL),
(15, 'EL RHAZRANI', 'WISSAL', '1991-03-24', 'GC', 631654895, 'wissal.elrhz@gmail.com', '1234', 'professeur', NULL),
(17, 'ROUBAI', 'CHAFIKA', '1989-10-13', 'GIM', 694326548, 'chafika.roub@gmail.com', '1234', 'professeur', NULL),
(18, 'SOUBAI', 'BOUCHRA', '1987-11-20', 'GC', 654987451, 'bouchra.soubai@gmail.com', '1234', 'professeur', NULL),
(19, 'KHATOURI', 'ILHAM', '1981-10-10', 'GR', 614748525, 'ilham.khat@gmail.com', '1234', 'professeur', NULL),
(20, 'WAKRIM', 'JAWAD', '1982-05-12', 'FBA', 654876525, 'jawad.wak@gmail.com', '1234', 'professeur', NULL),
(21, 'ROUSSI', 'SANAE', '1974-04-02', 'GI', 699788488, 'sanae.roussi@gmail.com', '1234', 'professeur', NULL),
(23, 'hassani', 'aya', '2020-03-25', 'GI', 89456, 'hassani@gmail.com', '0000', 'professeur', NULL),
(1, 'ELASOULI', 'ABDERAHMAN', '1988-04-05', 'FBA', 658459874, 'elasouli.abd@gmail.com', '2222', 'professeur', NULL),
(2, 'ELAHMADI', 'ABDELKADER', '1987-04-05', 'TM', 625455475, 'elahmadi.abd@gmail.com', '1234', 'professeur', NULL);

-- --------------------------------------------------------

--
-- Structure de la vue `login_etd`
--
DROP TABLE IF EXISTS `login_etd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login_etd`  AS  select `etudiant`.`code_massar` AS `code_massar`,concat(`etudiant`.`nom`,' ',`etudiant`.`prenom`) AS `nom_complet`,`etudiant`.`mdps` AS `mdps`,`etudiant`.`type` AS `type`,`etudiant`.`email` AS `email` from `etudiant` ;

-- --------------------------------------------------------

--
-- Structure de la vue `login_prof`
--
DROP TABLE IF EXISTS `login_prof`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login_prof`  AS  select `professeur`.`code_massar_prof` AS `code_massar_prof`,concat(`professeur`.`nom`,' ',`professeur`.`prenom`) AS `nom_cmplt`,`professeur`.`email` AS `login`,`professeur`.`mdps` AS `mdps`,`professeur`.`type` AS `type` from `professeur` ;

DELIMITER $$
--
-- Évènements
--
DROP EVENT `drop_demande`$$
CREATE DEFINER=`root`@`localhost` EVENT `drop_demande` ON SCHEDULE EVERY 1 SECOND STARTS '2020-04-13 03:14:04' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM demande where etat='0'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
