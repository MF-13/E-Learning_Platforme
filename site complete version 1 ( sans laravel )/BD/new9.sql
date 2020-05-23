-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  Dim 19 avr. 2020 à 16:40
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
(31, 'Programmation JAVA', 'Ce cours sert a prends les principe de programmation JAVa', 'GI'),
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
(19, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '0', 'Meknes'),
(21, 'laasili', 'soufian', '1111-11-11', 'GIM', 45555, 'bassma@gmail.com', '0000', 'etudiant', '0', 'Meknes'),
(22, 'corona', 'corona', '2020-03-20', 'GIM', 0, 'corona@gmail.com', 'corona', 'professeur', '0', 'china');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `file`
--

INSERT INTO `file` (`id_pdf`, `id_filiere`, `code_prof`, `commantaire`, `id_cour`, `type_cour`, `nbr_telechargement`, `date_ajoute`, `nom_pdf`, `pdf_lien`, `titre`) VALUES
(23, 'tcc', 141, 'chapitre N 1 du Module', 45, 'cour', 0, '2020-04-17 06:10:31', 'VIDEO_10s_hd.mp4', '../file/tcc/VIDEO_10s_hd.mp4', 'Video de cours Module'),
(24, 'tcc', 141, 'TP 1 ', 46, 'tp', 0, '2020-04-17 06:11:43', 'cv.txt', '../file/tcc/cv.txt', 'TP1'),
(25, 'tcc', 141, 'A rendre avant le 20/04/2020 a 12:00 ', 45, 'td', 0, '2020-04-17 06:15:18', 'HTML-partie1.pdf', '../file/tcc/HTML-partie1.pdf', 'TD 3 ');

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
('FBA', 'FINANCE BANQUE ET ASSURANCe', 'L’objectif du DUT professionnelle «Banque» est de former des conseillers et gestionnaires de clientèle «», qui soient polyvalents et évolutifs. La polyvalence fait référence à la diversité des opérations traitées qui doit permettre de répondre à tous les besoins exprimés par le client particulier. Le potentiel évolutif concerne l’aptitude à exercer, à terme, des responsabilités d’encadrement.', 'techniques de management'),
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_msg`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`) VALUES
(34, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'Bonjour Mr.Hassan , merci de passe a la Direction avant le 20/04/2020', '0', '2020-04-17 06:26:30', 141, 'hassan.loukili@gmail.com', 'professeur'),
(35, -1, 'loukili', 'ana@gmail.com', 4587, 'visiteur', '<script>alert(\'hi\');</script>', '0', '2020-04-17 09:24:26', 100, 'aiman.elbou@gmail.com', 'admin'),
(3, -1, 'karam binou', 'karam@gmail.com', 5555, 'visiteur', 'bnjr ana karam', '1', '2020-04-10 23:58:23', 1, 'ayman.elbou@gmail.com', 'admin'),
(9, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'salam ayoub msg recu', '0', '2020-04-14 04:55:09', 1, 'ayoub.om@gmail.com', 'etudiant'),
(7, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'une reponse vers karam', '0', '2020-04-11 01:19:56', -1, 'karam@gmail.com', 'visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `question_quiz`
--

DROP TABLE IF EXISTS `question_quiz`;
CREATE TABLE IF NOT EXISTS `question_quiz` (
  `id_quiz` int(11) NOT NULL,
  `n_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `rep_correcte` text NOT NULL,
  `rep_2` text NOT NULL,
  `rep_3` text NOT NULL,
  KEY `id_quiz` (`id_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `question_quiz`
--

INSERT INTO `question_quiz` (`id_quiz`, `n_question`, `question`, `rep_correcte`, `rep_2`, `rep_3`) VALUES
(1, 1, 'Mon nom est ', 'aiman', 'hassan', 'ayoub'),
(1, 2, 'Mon age est ', '20', '10', '22'),
(1, 3, 'Mon prenom est ', 'elbouayadi', 'asraoui', 'ahmadi'),
(4, 2, 'je suis ', 'maroc', 'algerie', 'tunisie'),
(4, 1, 'j habite ou', 'bassatin', 'hamriya', 'casa');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id_quiz` int(11) NOT NULL AUTO_INCREMENT,
  `nom_quiz` text NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_filiere` varchar(4) NOT NULL,
  `dernier_delai` datetime DEFAULT NULL,
  `date_pub` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_quiz`),
  KEY `id_prof` (`id_prof`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `nom_quiz`, `id_prof`, `id_filiere`, `dernier_delai`, `date_pub`) VALUES
(1, 'quiz de test', 141, 'tcc', '2020-04-08 11:11:11', '2020-05-05 13:13:13'),
(3, 'quiz de GC', 162, 'gc', '2020-04-08 11:12:13', '2020-08-08 14:15:15'),
(4, 'quiz titre de test', 141, 'tcc', NULL, '2020-04-19 15:58:20');

-- --------------------------------------------------------

--
-- Structure de la table `resultat_quiz`
--

DROP TABLE IF EXISTS `resultat_quiz`;
CREATE TABLE IF NOT EXISTS `resultat_quiz` (
  `id_quiz` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `resultat` int(11) NOT NULL,
  `quesiont_corrcete` text,
  `question_incorrecte` text NOT NULL,
  KEY `id_quiz` (`id_quiz`),
  KEY `id_etudiant` (`id_etudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat_quiz`
--

INSERT INTO `resultat_quiz` (`id_quiz`, `id_etudiant`, `resultat`, `quesiont_corrcete`, `question_incorrecte`) VALUES
(1, 161, 2, '2 3 ', '1 '),
(1, 182, 3, '4 5', '1'),
(1, 183, 1, '4 5', '1'),
(4, 161, 1, '1 ', '2 ');

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
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

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
(163, 'oudghiri', 'lamiae', '2015-01-01', '5774444', 'TM', 'lamiae@gmail.com', '0000', 'casa', 'etudiant'),
(182, 'asr', 'taha', '2020-04-09', '4571', 'gmi', 'taha@gmail.com', '444', 'meknes', 'etudiant'),
(183, 'telha', 'ayoub', '2010-12-15', '54646', 'tcc', 'telha@gmail.com', '1234', 'agadir', 'etudiant');

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
