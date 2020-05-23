-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 15 avr. 2020 à 14:29
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `nom`, `prenom`, `date_naiss`, `filiere`, `num_tele`, `email`, `mdps`, `type_user`, `etat`, `adresse`) VALUES
(16, 'salhi', 'anas', '2020-03-12', 'GIM', 5412, 'salhi@gmail.com', '0000', 'professeur', '-1', 'TANGER'),
(17, 'izm', 'amina', '2001-01-11', 'GI', 451, 'izm@gmail.com', '1111', 'etudiant', '-1', 'MEKNES'),
(18, 'laasili', 'basma', '1111-11-11', 'GIM', 47862, 'bassma@gmail.com', '0000', 'professeur', '-1', 'Meknes'),
(19, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '-1', 'Meknes'),
(21, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '-1', 'Meknes'),
(22, 'corona', 'corona', '2020-03-20', 'GIM', 0, 'corona@gmail.com', 'corona', 'professeur', '-1', 'china');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_msg`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`) VALUES
(2, 6, 'LOUKILI HASSAN', 'hassan.loukili@gmail.com', 603254861, 'professeur', 'un test de message apres etat change', '1', '2020-04-10 23:57:41', 1, 'ayman.elbou@gmail.com', 'admin'),
(3, -1, 'karam binou', 'karam@gmail.com', 5555, 'visiteur', 'bnjr ana karam', '1', '2020-04-10 23:58:23', 1, 'ayman.elbou@gmail.com', 'admin'),
(9, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'salam ayoub msg recu', '0', '2020-04-14 04:55:09', 1, 'ayoub.om@gmail.com', 'etudiant'),
(28, 100, 'admin elbouayadi aiman', 'admin@gmail.com', 544778899, 'admin', 'nta rak test ', '0', '2020-04-15 14:56:53', 141, 'hassan.loukili@gmail.com', 'professeur'),
(7, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'une reponse vers karam', '0', '2020-04-11 01:19:56', -1, 'karam@gmail.com', 'visiteur'),
(29, 141, 'loukili hassan', 'hassan.loukili@gmail.com', 621548700, 'professeur', 'merci ana test ah\r\n', '1', '2020-04-15 14:59:14', 100, 'aiman.elbou@gmail.com', 'admin'),
(31, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'ewea ok', '0', '2020-04-15 15:01:31', 141, 'hassan.loukili@gmail.com', 'professeur'),
(32, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'jj\r\n', '0', '2020-04-15 15:02:13', 141, 'hassan.loukili@gmail.com', 'professeur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` mediumtext NOT NULL,
  `prenom_user` mediumtext NOT NULL,
  `date_naiss_user` date NOT NULL,
  `num_tele_user` text NOT NULL,
  `filiere_user` varchar(6) NOT NULL,
  `email_user` text NOT NULL,
  `mdps_user` text NOT NULL,
  `adresse_user` text NOT NULL,
  `type_user` enum('etudiant','professeur','admin') DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `filiere_user` (`filiere_user`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email_user`, `mdps_user`, `adresse_user`, `type_user`) VALUES
(100, 'elbouayadi', 'aiman', '2020-04-08', '677441100', 'all', 'aiman.elbou@gmail.com', 'elbouayadi1234', '14', 'admin'),
(102, 'elkhebbaz', 'mohammed', '2020-04-16', '0655441188', 'all', 'mohammed.elkh@gmail.com', 'elkhebbaz1234', '69 MERJANE MEKNES', 'admin'),
(121, 'elhecnaoui', 'lahcen', '2020-04-12', '06777871155', 'all', 'lahcen.elhec@gmail.com', 'elhecnaoui1234', '14 hamriya MEKNES', 'admin'),
(141, 'loukili', 'hassan', '2020-06-12', '0621548700', 'tcc', 'hassan.loukili@gmail.com', '1234', 'Meknes', 'professeur'),
(161, 'omari', 'ayoub', '2020-05-12', '0697468521', 'tcc', 'ayoub.om@gmail.com', '1234', '25 sebata MEKNES', 'etudiant'),
(162, 'manal', 'benchlikha', '2015-01-01', '456546', 'GC', 'benchlikha@gmail.com', '0000', 'casablanca', 'professeur'),
(163, 'oudghiri', 'lamiae', '2015-01-01', '456546', 'TM', 'lamiae@gmail.com', '0000', 'Rabat', 'etudiant'),
(165, 'badouri', 'lamiae', '2015-01-01', '456546', 'FBA', 'lamia@gmail.com', '0000', 'marakech', 'professeur'),
(166, 'badouri', 'safae', '2015-01-01', '456546', 'TCC', 'safae@gmail.com', '0000', 'tanger', 'etudiant'),
(167, 'achbihi', 'kenza', '2015-01-01', '456546', 'TSI', 'kenza@gmail.com', '0000', 'sale', 'etudiant'),
(169, 'nhari', 'ayoub', '2020-03-06', '654824', 'GC', 'ayoub.nh@gmail.com', '123456', 'Meknes', 'etudiant'),
(170, 'popo', 'karam', '2020-03-06', '456546', 'TSI', 'popo@gmail.com', 'popo123', 'RABAT', 'etudiant'),
(171, 'sanousi', 'mohamed', '2020-02-28', '45654', 'TSI', 'sanousi@gmail.com', 'simans', 'MEKNES', 'professeur'),
(173, 'meraji', 'aya', '2020-04-11', '46515', 'TSI', 'aya.marji@gmail.com', '159', '15 meknes', 'professeur'),
(174, 'bennaoui', 'ayoub', '2020-04-11', '7895412', 'TM', 'bennaoui.ayoub@gmail.com', '987456', '14 RABAT', 'professeur');

DELIMITER $$
--
-- Évènements
--
DROP EVENT `drop_demande`$$
CREATE DEFINER=`root`@`localhost` EVENT `drop_demande` ON SCHEDULE EVERY 1 SECOND STARTS '2020-04-13 03:14:04' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM demande where etat='0' or etat='1'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
