-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  jeu. 04 juin 2020 à 00:05
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
-- Base de données :  `new_version`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom`, `description`, `id_filiere`, `created_at`, `updated_at`) VALUES
(16, 'Droit d\'entreorise', 'Ce Cour permet d\'enregistrer la valeur des opérations réalisées par une entreprise et aussi de recenser le détail de ce qu\'elle possède et ce qu\'elle doit.', 'TM', '2020-06-03 17:58:43', '2020-06-03 17:58:43'),
(2, 'Learn html 2', 'Learn html description', 'GC', NULL, '2020-06-01 08:41:33'),
(3, 'Programmation C', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(4, 'Programmation JAVA', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(5, 'Securiter Réseau', 'Ce cours sert a prends les et la base principe de ...', 'TSI', NULL, NULL),
(6, 'Gestion Projet', 'Ce cours sert a prends les et la base principe de ...', 'TM', NULL, NULL),
(10, 'Réseaux & Services sur Réseaux', 'Ce Modules contient les principe des systémes Réseaux et ca sécuriter.', 'TSI', '2020-06-03 14:10:05', '2020-06-03 14:10:05'),
(17, 'Electronique', 'Ce cour contient les basics d\'electronique.', 'GIM', '2020-06-03 18:59:53', '2020-06-03 18:59:53'),
(18, 'Automatisées', 'Ce cour contient les basics de Systemes Automatisées.', 'GIM', '2020-06-03 19:00:53', '2020-06-03 19:03:30'),
(19, 'Physique de base', 'Ce cour contiant les principes de Physique.', 'GC', '2020-06-03 20:22:59', '2020-06-03 20:22:59'),
(13, 'Techniques Comptables', 'Ce cours sert a prends a consiste à donner des renseignements chiffrés d’ordre économique et juridique, exprimés dans des comptes.', 'TM', '2020-06-03 14:36:21', '2020-06-03 14:36:21'),
(20, 'Organisation sécurité', 'Ce cours contient les basics d\'Organisation du Projet', 'GC', '2020-06-03 20:24:37', '2020-06-03 20:24:37'),
(21, 'Programmation java', 'Ce cours permet d\'améliorer les compétences du programmation avec langage JAVA', 'GI', '2020-06-03 20:59:07', '2020-06-03 20:59:07'),
(22, 'Réseaux Informatique', 'Ce cour contient les méthodes pour construire un réseaux locale et sécuriser.', 'GI', '2020-06-03 21:10:56', '2020-06-03 21:10:56'),
(23, 'Sérvice Réseaux', 'Ce cours contient les différents service réseaux.', 'TSI', '2020-06-03 21:35:38', '2020-06-03 21:35:38'),
(24, 'Systémes d\'exploitation', 'Ce cour permet d\'avoir travallier avec les différents systemes d\'exploitation existe', 'TSI', '2020-06-03 21:38:04', '2020-06-03 21:38:04');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `nom`, `email`, `opinion`, `created_at`, `updated_at`) VALUES
(2, 'ihab ihab', 'MF_13@gmail.com', 'Opinion', '2020-06-01 19:13:46', '2020-06-01 19:13:46'),
(3, 'ihab ihab', 'MF_13@gmail.com', 'opinion 2', '2020-06-01 19:14:01', '2020-06-01 19:14:01'),
(4, 'EL KHABBAZ', 'elkhabbaz91@gmail.com', 'Opinion 3', '2020-06-01 19:14:34', '2020-06-01 19:14:34'),
(5, 'houyakoun hajar', 'houyakoun@gmail.com', 'Bonjour, est-ce-que le cour de sécuriter réseau est existe', '2020-06-03 13:30:47', '2020-06-03 13:30:47'),
(6, 'ouzzine wiam', 'ouzzine@gmail.com', 'Ou ce truve les cours de S5', '2020-06-03 18:10:10', '2020-06-03 18:10:10'),
(7, 'heddadi doha', 'heddadi@gmail.com', 'Merci pour cette platforme.', '2020-06-03 21:00:04', '2020-06-03 21:00:04');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fields`
--

DROP TABLE IF EXISTS `fields`;
CREATE TABLE IF NOT EXISTS `fields` (
  `filiere_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filiere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filiere_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`filiere_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fields`
--

INSERT INTO `fields` (`filiere_id`, `filiere`, `filiere_description`, `departement`, `created_at`, `updated_at`) VALUES
('GI', 'GENIE INFORMATIQUE', 'Le développement de l\'informatique, des systèmes d’information et des systèmes de télécommunication élargissent considérablement les domaines d\'application de l\'informatique en renforçant les interactions entre les aspects matériels et logiciels. La filière d’informatique d’EST est une réponse à ces développements.', 'genie informatique', NULL, NULL),
('TM', 'TECHNIQUE DE MANAGEMENT', 'Former des techniciens supérieurs en techniques de management (privées et publiques) disposant de connaissances et compétences appréciables.\r\nFavoriser une meilleure collaboration entre l\'université et les entreprises.\r\nAcquérir des compétences directement opérationnelles liées à la maîtrise technique des emplois ciblés.', 'techniques de management', NULL, NULL),
('TSI', 'TECHNIQUE DE SON ET D IMAGE', 'Cette formation a pour objectif d\'apporter des compétences professionnelles dans le domaine de la création numérique (Images fixes ou animées, sons, vidéos, compositing,...). Les compétences acquises par les lauréats leurs permettent de s\'engager dans des métiers différents.', 'genie informatique', NULL, NULL),
('GIM', 'GENIE INDUSTRIEL ET MAINTENANCE', 'Génie industriel et Maintenance a pour but de former en deux ans des techniciens supérieurs généralistes capables de gérer et d’organiser les opérations de maintenance des installations, pour optimiser la disponibilité des outils de production et de service.', 'genie electrique', NULL, NULL),
('GC', 'GENEIE CIVIL', 'L’enseignement vise à la formation en deux ans de cadres polyvalents participant à la responsabilité de l’étude et de l’exécution des travaux de génie civil:\r\nDans un bureau d’études, ils élaborent, suivant les directives des ingénieurs, les plans, devis, programmes et calculs, tant en ce qui concerne la conception que la préparation des ouvrages.\r\nSur les chantiers, ils ont la responsabilité de l’exécution : conduite des travaux, coordination des corps d’état, etc.\r\nDans les laboratoires d’essais ou de recherche, ils sont chargés de l’organisation, de l’exécution et du dépouillement des programmes d’essais.', 'genie electrique', NULL, NULL),
('IA', 'Inteligence artificiel', 'Filiere de inteligence artificiel', 'genie informatique', NULL, NULL),
('TEST', 'test', 'test test', 'test', NULL, NULL),
('ZE', 'ZERG', 'test test test', 'test', '2020-06-01 13:57:14', '2020-06-01 13:57:14'),
('DWA', 'developpement web et media', 'ok apres modification', 'genie informatique', '2020-06-02 17:12:51', '2020-06-03 07:28:20');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prof` int(11) NOT NULL,
  `commantaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `type_cour` enum('cour','tp','td','bibliotheque') COLLATE utf8mb4_unicode_ci DEFAULT 'cour',
  `nbr_telechargement` int(11) DEFAULT '0',
  `date_ajoute` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_pdf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_lien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_filiere` (`id_filiere`),
  KEY `code_prof` (`code_prof`),
  KEY `id_cour` (`id_cour`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `id_filiere`, `code_prof`, `commantaire`, `id_cour`, `type_cour`, `nbr_telechargement`, `date_ajoute`, `nom_pdf`, `pdf_lien`, `titre`, `created_at`, `updated_at`) VALUES
(29, 'tcc', 141, 'n', 45, 'cour', 0, '2020-04-17 06:57:00', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'un pdf de x et y ', NULL, NULL),
(27, 'tcc', 141, 'tp de macro a rendre', 47, 'tp', 0, '2020-04-17 06:29:42', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'TP MACRO', NULL, NULL),
(28, 'tcc', 141, 'a rendre', 46, 'td', 0, '2020-04-17 06:45:14', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'test ', NULL, NULL),
(23, 'tcc', 141, 'chapitre N 1 du Module', 45, 'cour', 0, '2020-04-17 02:10:31', 'VIDEO_10s_hd.mp4', '../file/tcc/VIDEO_10s_hd.mp4', 'Video de cours Module', NULL, NULL),
(24, 'tcc', 141, 'TP 1 ', 46, 'tp', 0, '2020-04-17 02:11:43', 'cv.txt', '../file/tcc/cv.txt', 'TP1', NULL, NULL),
(25, 'tcc', 141, 'A rendre avant le 20/04/2020 a 12:00 ', 45, 'td', 0, '2020-04-17 02:15:18', 'HTML-partie1.pdf', '../file/tcc/HTML-partie1.pdf', 'TD 3 ', NULL, NULL),
(21, 'bibl', 6, 'test biblio', -1, 'bibliotheque', 1, '2020-04-13 11:18:37', '@ReadMe.txt', '../file/bibliotheque/@ReadMe.txt', 'Exemple PFE', NULL, NULL),
(32, 'ia', 28, 'grrhthhh', NULL, 'td', 0, '2020-06-01 00:32:30', 'file.sql', 'public/file/ia/file.sql', 'langage C', '2020-05-31 22:32:30', '2020-05-31 22:32:30'),
(33, 'gim', 28, 'gfjsjkfn', NULL, 'tp', 0, '2020-06-02 18:41:08', 'new_version (1).sql', 'public/file/gim/new_version (1).sql', 'langage C', '2020-06-02 16:41:08', '2020-06-02 16:41:08'),
(34, 'gi', 28, 'tryjrfb', NULL, 'cour', 0, '2020-06-02 18:45:42', 'new_version (1).sql', 'public/file/gi/new_version (1).sql', 'langage C', '2020-06-02 16:45:42', '2020-06-02 16:45:42'),
(35, 'tm', 46, 'Le polycopié du Travaux d\'inventaire et logiciels', 13, 'cour', 0, '2020-06-03 16:56:38', 'Travaux d\'inventaire et logiciels.txt', 'public/file//Travaux d\'inventaire et logiciels.txt', 'Travaux d\'inventaire et logiciels', '2020-06-03 14:56:38', '2020-06-03 14:56:38'),
(36, 'tm', 46, 'Le polycopié Droit des affaires.', 13, 'cour', 0, '2020-06-03 17:00:13', 'Droit des affaires.txt', 'public/file//Droit des affaires.txt', 'Droit des affaires', '2020-06-03 15:00:13', '2020-06-03 15:00:13'),
(37, 'tm', 46, 'TD 1 pour Droit des affaires', 13, 'td', 0, '2020-06-03 17:12:18', 'TD_Droit des affaires.txt', 'public/file//TD_Droit des affaires.txt', 'Droit des affaires', '2020-06-03 15:12:18', '2020-06-03 15:12:18'),
(38, 'tm', 46, 'TP du Travaux d\'inventaire et logiciels', 13, 'tp', 0, '2020-06-03 17:13:32', 'TP_Travaux d\'inventaire et logiciels.txt', 'public/file//TP_Travaux d\'inventaire et logiciels.txt', 'Travaux d\'inventaire et logiciels', '2020-06-03 15:13:32', '2020-06-03 15:13:32'),
(39, 'tm', 15, 'Le polycopié de Marketing Fondamental', 16, 'cour', 0, '2020-06-03 20:24:54', 'Marketing Fondamental.txt', 'public/file//Marketing Fondamental.txt', 'Marketing Fondamental', '2020-06-03 18:24:54', '2020-06-03 18:24:54'),
(40, 'tm', 15, 'TP a faire de Marketing Fondamental', 16, 'tp', 0, '2020-06-03 20:26:16', 'TP_Marketing Fondamental.txt', 'public/file//TP_Marketing Fondamental.txt', 'Marketing Fondamental', '2020-06-03 18:26:16', '2020-06-03 18:26:16'),
(41, 'tm', 15, 'Des questions pour le cour Marketing Fondamental vous devais faire.', 16, 'td', 0, '2020-06-03 20:28:07', 'TD_Marketing Fondamental.txt', 'public/file//TD_Marketing Fondamental.txt', 'Marketing Fondamental TD', '2020-06-03 18:28:07', '2020-06-03 18:28:07'),
(42, 'GIM', 50, 'Le polycopié pour Systemes Automatisées_Automatique', 17, 'cour', 0, '2020-06-03 21:06:12', 'Systemes Automatisées_Automatique.txt', 'public/file//Systemes Automatisées_Automatique.txt', 'Automatique', '2020-06-03 19:06:12', '2020-06-03 19:06:12'),
(43, 'GIM', 50, 'Le polycopié pour Informatique Industrielle', 17, 'cour', 0, '2020-06-03 21:18:41', 'Informatique Industrielle.txt', 'public/file//Informatique Industrielle.txt', 'Informatique Industrielle', '2020-06-03 19:18:41', '2020-06-03 19:18:41'),
(44, 'GIM', 50, 'Ce TP a faire .', 17, 'tp', 0, '2020-06-03 21:21:30', 'TP_Informatique Industrielle.txt', 'public/file//TP_Informatique Industrielle.txt', 'Informatique Industrielle', '2020-06-03 19:21:30', '2020-06-03 19:21:30'),
(45, 'GIM', 50, 'Ce Td a faire . et Merci', 17, 'td', 0, '2020-06-03 21:22:10', 'Td_Informatique Industrielle.txt', 'public/file//Td_Informatique Industrielle.txt', 'Informatique Industrielle', '2020-06-03 19:22:10', '2020-06-03 19:22:10'),
(46, 'gc', 38, 'Lire ce polycopié d\'Hydraulique.', 19, 'cour', 0, '2020-06-03 22:26:38', 'Hydraulique.txt', 'public/file//Hydraulique.txt', 'Hydraulique', '2020-06-03 20:26:38', '2020-06-03 20:26:38'),
(47, 'gc', 38, 'Le polycopié de cour Electricité', 19, 'cour', 0, '2020-06-03 22:28:04', 'Electricité.txt', 'public/file//Electricité.txt', 'Electricité', '2020-06-03 20:28:04', '2020-06-03 20:28:04'),
(48, 'gc', 38, 'Premiére TP d\'Electricité', 19, 'tp', 0, '2020-06-03 22:29:13', 'TP_Electricité.txt', 'public/file//TP_Electricité.txt', 'Electricité', '2020-06-03 20:29:13', '2020-06-03 20:29:13'),
(49, 'gc', 38, 'TP du HYDRAULIQUE', 19, 'cour', 0, '2020-06-03 22:30:36', 'TP_HYDRAULIQUE.txt', 'public/file//TP_HYDRAULIQUE.txt', 'HYDRAULIQUE', '2020-06-03 20:30:36', '2020-06-03 20:30:36'),
(50, 'gc', 38, 'Ce TD contient des exercices trés important pour HYDRAULIQUE.', 19, 'td', 0, '2020-06-03 22:32:22', 'TD_HYDRAULIQUE.txt', 'public/file//TD_HYDRAULIQUE.txt', 'HYDRAULIQUE', '2020-06-03 20:32:22', '2020-06-03 20:32:22'),
(51, 'gi', 39, 'Policopié contient les premier principe du langage Java', 4, 'cour', 0, '2020-06-03 23:04:07', 'JAVA.txt', 'public/file//JAVA.txt', 'Java 8.0', '2020-06-03 21:04:07', '2020-06-03 21:04:07'),
(52, 'gi', 39, 'Ce Policopié pour la partie 2 contient partie graphique et ...', 4, 'cour', 0, '2020-06-03 23:05:33', 'JAVA_p2.txt', 'public/file//JAVA_p2.txt', 'Java 8.0 partie 2', '2020-06-03 21:05:33', '2020-06-03 21:05:33'),
(53, 'gi', 39, 'Fait une application de gestion de zoo pour la séance prochaine.', 4, 'tp', 0, '2020-06-03 23:08:10', 'TP_Java_Zoo.txt', 'public/file//TP_Java_Zoo.txt', 'Gestion de Zoo', '2020-06-03 21:08:10', '2020-06-03 21:08:10'),
(54, 'gi', 39, 'Fait une application de gestion de café avec partie graphique.', 4, 'tp', 0, '2020-06-03 23:09:20', 'TP_Java_Café.txt', 'public/file//TP_Java_Café.txt', 'Gestion de Café', '2020-06-03 21:09:20', '2020-06-03 21:09:20');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emetteur_id` int(11) NOT NULL,
  `emetteur_nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emetteur_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emetteur_telephone` int(11) NOT NULL,
  `emetteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date_env` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `recepteur_id` int(11) NOT NULL,
  `recepteur_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recepteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'Bonjour Mr.Hassan , merci de passe a la Direction avant le 20/04/2020', '0', '2020-05-18 07:48:00', 28, 'hassan.loukili@gmail.com', 'professeur', NULL, NULL),
(6, -1, 'admin', 'admin@gmail.com', 600000001, 'admin', 'test de Réponse a user id 28', '0', '2020-06-01 09:25:55', 28, 'testtest@gmail.com', 'professeur', '2020-06-01 07:25:55', '2020-06-01 08:19:58'),
(3, 7, 'lahbili salma', 'salma@gmail.com', 677884433, NULL, 'ggg', '0', '2020-05-26 08:54:52', 1, '1', NULL, '2020-05-26 06:54:52', '2020-05-26 06:54:52'),
(4, 7, 'lahbili salma', 'salma@gmail.com', 677884433, NULL, 'ydtjkuk', '0', '2020-05-26 08:57:33', 1, 'admin@gmail.com', NULL, '2020-05-26 06:57:33', '2020-05-26 06:57:33'),
(7, -1, 'ihab ihab', 'MF_13@gmail.com', 649566183, 'visiteur', 'from visiteur ihab ihab', '0', '2020-06-01 17:13:46', -1, 'admin@gmail.com', 'admin', '2020-06-01 15:13:46', '2020-06-01 15:13:46'),
(8, 28, 'ihabEEEE ihab', 'testtest@gmail.com', 649566183, 'professeur', 'test from id 28 user test', '0', '2020-06-01 17:14:35', -1, 'admin@gmail.com', 'admin', '2020-06-01 15:14:35', '2020-06-01 15:14:35'),
(9, -1, 'admin', 'admin@gmail.com', 600000001, 'admin', 'reponce', '0', '2020-06-01 17:18:30', 28, 'testtest@gmail.com', 'professeur', '2020-06-01 15:18:30', '2020-06-01 15:18:30'),
(10, -1, 'admin', 'admin@gmail.com', 600000001, 'admin', 'hhhhhhhhhhhhhhhhhhhhhhhh', '0', '2020-06-01 17:20:57', 28, 'testtest@gmail.com', 'professeur', '2020-06-01 15:20:57', '2020-06-01 15:20:57'),
(11, 32, 'ouzzine wiam', 'ouzzine@gmail.com', 708090405, 'etudiant', 'Bonjours S\'il vous plait j\'ai pas trouver le quiz de Marketing Fondamental', '0', '2020-06-03 20:19:17', -1, 'admin@gmail.com', 'admin', '2020-06-03 18:19:17', '2020-06-03 18:19:17'),
(12, 50, 'Ihab Amire', 'IhabAmire@gmail.com', 649566183, 'professeur', 'Je ponse qu\'il y a un probléme au niveau du cours espace', '0', '2020-06-03 21:11:33', -1, 'admin@gmail.com', 'admin', '2020-06-03 19:11:33', '2020-06-03 19:11:33'),
(13, -1, 'admin', 'admin@gmail.com', 600000001, 'admin', 'Merci pour votre message , nous aurons consulter l\'erreur.', '0', '2020-06-03 21:13:21', 50, 'IhabAmire@gmail.com', 'professeur', '2020-06-03 19:13:21', '2020-06-03 19:13:21'),
(14, 27, 'mazin houssam', 'mazin@gmail.com', 666225588, 'etudiant', 'Probléme au niveau de cours espace', '0', '2020-06-03 21:34:32', -1, 'admin@gmail.com', 'admin', '2020-06-03 19:34:32', '2020-06-03 19:34:32');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_23_021345_create_classes_table', 1),
(5, '2020_05_23_021536_create_fields_table', 1),
(6, '2020_05_23_021653_create_files_table', 1),
(7, '2020_05_23_021807_create_messages_table', 1),
(8, '2020_05_23_021906_create_questions_table', 1),
(9, '2020_05_23_022015_create_quizzes_table', 1),
(10, '2020_05_23_022112_create_requests_table', 1),
(11, '2020_05_23_022246_create_results_table', 1),
(12, '2020_05_28_161633_laratrust_setup_tables', 1),
(13, '2020_06_01_202620_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('elkhabbaz91@gmail.com', '$2y$10$Muu./WskqsFKR8uG/6UVd.kwRTPZpg3QOKHE9Coawzo.RwLPNJ6Ga', '2020-06-02 06:37:43');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2020-05-28 10:27:31', '2020-05-28 10:27:31'),
(2, 'read-users', 'Read Users', 'Read Users', '2020-05-28 10:27:31', '2020-05-28 10:27:31'),
(3, 'update-users', 'Update Users', 'Update Users', '2020-05-28 10:27:31', '2020-05-28 10:27:31'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(5, 'create-profile', 'Create Profile', 'Create Profile', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(6, 'read-profile', 'Read Profile', 'Read Profile', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(7, 'update-profile', 'Update Profile', 'Update Profile', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(8, 'delete-profile', 'Delete Profile', 'Delete Profile', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(9, 'create-module_1_name', 'Create Module_1_name', 'Create Module_1_name', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(10, 'read-module_1_name', 'Read Module_1_name', 'Read Module_1_name', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(11, 'update-module_1_name', 'Update Module_1_name', 'Update Module_1_name', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(12, 'delete-module_1_name', 'Delete Module_1_name', 'Delete Module_1_name', '2020-05-28 10:27:32', '2020-05-28 10:27:32');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(9, 3),
(10, 3),
(11, 3),
(12, 3);

-- --------------------------------------------------------

--
-- Structure de la table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_quiz` int(11) NOT NULL,
  `n_question` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_correcte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id_quiz` (`id_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_quiz`, `n_question`, `question`, `rep_correcte`, `rep_2`, `rep_3`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mon nom est', 'aiman', 'hassan', 'ayoub', NULL, NULL),
(1, 2, 'Mon age est', '20', '100', '80', NULL, NULL),
(1, 3, 'Mon prenom est', 'elbouayadi', 'asraoui', 'ahmadi', NULL, NULL),
(3, 1, 'Parmi les qualificatifs suivants quel est celui que ne correspond pas à un profil de chef de projet ?', 'Généraliste', 'Autoritaire', 'Disponible', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(3, 2, 'Pour être chef de projet, il suffit de ?', 'Être bien perçu par la direction', 'Avoir des compétences techniques', 'Savoir organiser et mobiliser', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(3, 3, 'Le chef de projet tire sa légitimité de :', 'Son pouvoir d\'influence', 'Sa position hiérarchique', 'Son statut', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(3, 4, 'Quel est, parmi la liste suivante, l\'atout qui ne caractérise pas le chef de projet ?', 'Savoir déléguer', 'Avoir une capacité d\'écoute', 'Être vigilent', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(3, 5, 'Un gestionnaire de projet peut être comparé à :', 'Un contrôleur de gestion', 'Un chef d\'orchestre', 'Un planificateur', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(4, 1, 'Parmi les qualificatifs suivants quel est celui que ne correspond pas à un profil de chef de projet ?', 'Généraliste', 'Autoritaire', 'Disponible', '2020-06-03 15:34:50', '2020-06-03 15:34:50'),
(4, 2, 'Pour être chef de projet, il suffit de ?', 'Être bien perçu par la direction', 'Avoir des compétences techniques', 'Savoir organiser et mobiliser', '2020-06-03 15:34:50', '2020-06-03 15:34:50'),
(4, 3, 'Le chef de projet tire sa légitimité de :', 'Son pouvoir d\'influence', 'Sa position hiérarchique', 'Son statut', '2020-06-03 15:34:50', '2020-06-03 15:34:50'),
(4, 4, 'Quel est, parmi la liste suivante, l\'atout qui ne caractérise pas le chef de projet ?', 'Savoir déléguer', 'Avoir une capacité d\'écoute', 'Être vigilent', '2020-06-03 15:34:50', '2020-06-03 15:34:50'),
(4, 5, 'Un gestionnaire de projet peut être comparé à :', 'Un contrôleur de gestion', 'Un chef d\'orchestre', 'Un planificateur', '2020-06-03 15:34:50', '2020-06-03 15:34:50'),
(5, 1, 'L\'étape de terminaison de projet signifie :', 'La fin inopinée du projet en cours de réalisation, suite à un événement interne', 'La fin du projet suite à son passage à l\'opérationnel', 'La décision d\'arrêter le projet lors du point de gel', '2020-06-03 17:55:29', '2020-06-03 17:55:29'),
(5, 2, 'Durant la phase de terminaison, le chef de projet doit :', 'Suivre le planning', 'Suivre les techniques à utiliser', 'Suivre les coûts', '2020-06-03 17:55:29', '2020-06-03 17:55:29'),
(5, 3, 'La fiche de capitalisation d\'expérience peut être accompagnée :', 'D\'une fiche de documentation,', 'D\'une fiche d\'incidents', 'De ces trois fiches', '2020-06-03 17:55:29', '2020-06-03 17:55:29'),
(5, 4, 'Quelle est l\'action qui ne se produit pas dans la phase de terminaison de projet :', 'Le démantèlement de l\'équipe', 'La gestion des risques', 'Le transfert de l\'œuvre au maître d\'ouvrage', '2020-06-03 17:55:29', '2020-06-03 17:55:29'),
(6, 1, 'FGG', 'FGFG', 'FGFG', 'FGFG', '2020-06-03 18:57:11', '2020-06-03 18:57:11'),
(7, 1, 'Parmi les qualificatifs suivants quel est celui que ne correspond pas à un profil de chef de projet ?', 'Généraliste', 'Autoritaire', 'Disponible', '2020-06-03 19:09:15', '2020-06-03 19:09:15'),
(7, 2, 'Pour être chef de projet, il suffit de ?', 'Être bien perçu par la direction', 'Avoir des compétences techniques', 'Savoir organiser et mobiliser', '2020-06-03 19:09:15', '2020-06-03 19:09:15'),
(8, 1, 'Qu\'est ce qu\'un automate programmable?', 'C\'est un microcontroleur qui se programme', 'C\'est un dispositif électronique programmable destiné à la commande de processus industriels par un traitement séquentiel', 'C\'est un ordinateur super puissant', '2020-06-03 19:26:40', '2020-06-03 19:26:40'),
(8, 2, 'Parmi ces différents composants lequel est un actionneur?', 'Distributeur pneumatique', 'Bouton poussoir', 'Vérin pneumatique', '2020-06-03 19:26:40', '2020-06-03 19:26:40'),
(8, 3, 'Qu\'est ce qu\'une partie opérative en automatisme?', 'C\'est la partie qui agit sur la matière d\'oeuvre afin de lui procurer de la valeur ajoutée', 'C\'est la partie qui commande le processus', 'C\'est la partie qui s\'occupe de la communication entre les différents équipements', '2020-06-03 19:26:40', '2020-06-03 19:26:40'),
(9, 1, 'Quel est le rôle d\'un contacteur?', 'Etablir ou interrompre un circuit de charge', 'Arrêter un moteur', 'Démarrer un moteur', '2020-06-03 19:30:08', '2020-06-03 19:30:08'),
(9, 2, 'Quel est le composant qui permet d\'isoler un circuit afin d\'effectuer des opérations de maintenance ?', 'Sectionneur', 'Contacteur auxilliaire', 'Disjoncteur', '2020-06-03 19:30:08', '2020-06-03 19:30:08'),
(9, 3, 'Quel est le rôle d\'un relais thermique?', 'Protèger le moteur contre les court-circuits', 'Protèger le moteur contre les emballements', 'Protèger le moteur contre les surcharges partie qui s\'occupe de la communication entre les différents équipements', '2020-06-03 19:30:08', '2020-06-03 19:30:08'),
(10, 1, 'Quels sont les éléments de base d\'un circuit électrique simple ?', 'Un amplificateur', 'Un interrupteur', 'Un générateur', '2020-06-03 20:36:58', '2020-06-03 20:36:58'),
(10, 2, 'Que se passerait-il si l\'on permutte les bornes + et - d\'un générateur relié à un moteur électrique ?', 'L\'intensité du courant alternatif diminue', 'Il y a perte d\'énergie', 'Rien ne se passe car c\'est relié à un moteur électrique', '2020-06-03 20:36:58', '2020-06-03 20:36:58'),
(10, 3, 'Au XIX ème siècle, qui a inventé la première pile ?', 'Voltère', 'Volta', 'Volt', '2020-06-03 20:36:58', '2020-06-03 20:36:58'),
(11, 1, 'Laquelle de ces matières était/étaient présente(s) dans la première pile qui fut inventée ?', 'Le cuivre', 'L\'argent', 'Le nickel', '2020-06-03 20:40:22', '2020-06-03 20:40:22'),
(11, 2, 'Comment la puissance électrique se caractérise-t-elle ?', 'Par la rapidité avec laquelle l\'énergie est transformée', 'Grâce au flux d\'énergie présent dans le courant principal', 'Par la puissance du débit à partir du point de départ', '2020-06-03 20:40:22', '2020-06-03 20:40:22'),
(11, 3, 'Comment appelle-t-on l\'/les élément(s) qui transforme(nt) l\'énergie reçue en une autre forme d\'énergie ?', 'Le condensateur', 'Le générateur', 'Le sectionneur', '2020-06-03 20:40:22', '2020-06-03 20:40:22'),
(12, 1, 'Lesquelles des affirmations suivantes sont vraies ?', 'Toutes les méthodes déclarées dans une interface sont abstraites.', 'Les champs déclarés dans une interface peuvent être changés.', 'Les méthodes avec le mot clé default doivent fournir une implémentation.', '2020-06-03 21:20:35', '2020-06-03 21:20:35'),
(12, 2, 'How do you insert COMMENTS in Java code?', '#', '//', '/*', '2020-06-03 21:20:35', '2020-06-03 21:20:35'),
(12, 3, 'Quel est le droit d\'accès le plus restrictif pour donner l\'accès aux membres d\'une autre classe de même package ?', 'public', 'protected', 'default access', '2020-06-03 21:20:35', '2020-06-03 21:20:35'),
(13, 1, 'En Linux, quelle commande est utilisée pour créer un compte utilisateur ?', 'Useradd', 'Passwd', 'Mkaccount', '2020-06-03 21:53:23', '2020-06-03 21:53:23'),
(13, 2, 'Un administrateur système souhaite programmer un arrêt du système dans une heure en informant les utilisateurs, alors il exécute la commande...', 'Shutdown -t +60 \'Arrêt maintenance\'', 'Shutdown -c +60 \'Arrêt maintenance\'', 'Shutdown -s -h +60 \'Arrêt maintenance\'', '2020-06-03 21:53:23', '2020-06-03 21:53:23'),
(13, 3, 'Par quel moyen sont indexés les fichiers par le système Linux ?', 'Lien symbolique', 'Inode', 'Lien physique', '2020-06-03 21:53:23', '2020-06-03 21:53:23'),
(14, 1, 'En linux , le répertoire /lost+found :', 'Utilisé par la commande fsck pour stocker les clusters endommagés.', 'Ne contient aucun fichier.', 'Sert à récupérer des fichiers endommagés.', '2020-06-03 21:56:34', '2020-06-03 21:56:34'),
(14, 2, 'Quelle commande permet d\'avoir un affichage en temps réel des processus lancés ?', 'Nice', 'Ps', 'Top', '2020-06-03 21:56:34', '2020-06-03 21:56:34'),
(14, 3, 'Qu\'est ce qu\'un service Cron ?', 'Un script de prise de contrôle à distance', 'Un chargeur d\'amorçage libre', 'Une tâche planifiée', '2020-06-03 21:56:34', '2020-06-03 21:56:34');

-- --------------------------------------------------------

--
-- Structure de la table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id_quiz` int(11) NOT NULL AUTO_INCREMENT,
  `nom_quiz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dernier_delai` datetime DEFAULT NULL,
  `date_pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_quiz`),
  KEY `id_prof` (`id_prof`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizzes`
--

INSERT INTO `quizzes` (`id_quiz`, `nom_quiz`, `id_prof`, `id_filiere`, `dernier_delai`, `date_pub`, `created_at`, `updated_at`) VALUES
(1, 'quiz de test', 11, 'GI', NULL, '2020-06-17 16:00:00', NULL, NULL),
(2, 'quiz de Semestre', 3, 'TCC', NULL, '2020-07-08 16:00:00', NULL, NULL),
(3, 'méthode et outils - Les essentiels - Exercice d\'auto-évaluation', 46, 'tm', '2020-06-30 14:00:00', '2020-06-03 17:21:06', '2020-06-03 15:21:06', '2020-06-03 15:21:06'),
(5, 'Gestion de projets : Exercice d\'auto-évaluation', 46, 'tm', '2020-07-01 18:00:00', '2020-06-03 19:55:29', '2020-06-03 17:55:29', '2020-06-03 17:55:29'),
(6, 'GFHN', 50, 'GIM', NULL, '2020-06-03 20:57:11', '2020-06-03 18:57:11', '2020-06-03 18:57:11'),
(7, 'méthode et outils - Les essentiels - Exercice d\'auto-évaluation', 50, 'GIM', '2020-06-13 23:09:00', '2020-06-03 21:09:15', '2020-06-03 19:09:15', '2020-06-03 19:09:15'),
(8, 'Généralités sur les automatismes Partie 1', 50, 'GIM', '2020-07-12 08:00:00', '2020-06-03 21:26:40', '2020-06-03 19:26:40', '2020-06-03 19:26:40'),
(9, 'Généralités sur les automatismes Partie 2', 50, 'GIM', '2020-07-13 08:00:00', '2020-06-03 21:30:08', '2020-06-03 19:30:08', '2020-06-03 19:30:08'),
(10, 'Electricité Simple Quiz', 38, 'gc', '2020-06-26 00:35:00', '2020-06-03 22:36:58', '2020-06-03 20:36:58', '2020-06-03 20:36:58'),
(11, 'Electricité Simple Quiz partié 2', 38, 'gc', '2020-07-03 00:38:00', '2020-06-03 22:40:22', '2020-06-03 20:40:22', '2020-06-03 20:40:22'),
(12, 'Quiz Rapide : Java', 39, 'gi', '2020-06-21 01:14:00', '2020-06-03 23:20:35', '2020-06-03 21:20:35', '2020-06-03 21:20:35'),
(13, 'Linux : Quiz Commandes', 22, 'tsi', '2020-07-05 01:51:00', '2020-06-03 23:53:23', '2020-06-03 21:53:23', '2020-06-03 21:53:23'),
(14, 'Commande Linux Partie 2', 22, 'tsi', '2020-07-07 01:54:00', '2020-06-03 23:56:34', '2020-06-03 21:56:34', '2020-06-03 21:56:34');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_tele` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur') COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('-1','0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id_quiz` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `resultat` int(11) NOT NULL,
  `quesiont_corrcete` text COLLATE utf8mb4_unicode_ci,
  `question_incorrecte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id_quiz` (`id_quiz`),
  KEY `id_etudiant` (`id_etudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `results`
--

INSERT INTO `results` (`id_quiz`, `id_etudiant`, `resultat`, `quesiont_corrcete`, `question_incorrecte`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1', '1', NULL, NULL),
(1, 5, 3, '1', '1', NULL, NULL),
(3, 32, 1, '1 , ', '2 , 3 , 4 , 5 , ', '2020-06-03 18:15:42', '2020-06-03 18:15:42'),
(3, 32, 2, '1 , 2 , ', '3 , 4 , 5 , ', '2020-06-03 18:16:18', '2020-06-03 18:16:18'),
(5, 32, 2, '1 , 3 , ', '2 , 4 , ', '2020-06-03 18:17:22', '2020-06-03 18:17:22'),
(3, 31, 1, '1 , ', '2 , 3 , 4 , 5 , ', '2020-06-03 18:33:18', '2020-06-03 18:33:18'),
(5, 31, 2, '1 , 4 , ', '2 , 3 , ', '2020-06-03 18:34:00', '2020-06-03 18:34:00'),
(10, 26, 1, '1 , ', '2 , 3 , ', '2020-06-03 20:45:41', '2020-06-03 20:45:41'),
(11, 26, 2, '1 , 3 , ', '2 , ', '2020-06-03 20:46:05', '2020-06-03 20:46:05');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2020-05-28 10:27:31', '2020-05-28 10:27:31'),
(2, 'user', 'User', 'User', '2020-05-28 10:27:32', '2020-05-28 10:27:32'),
(3, 'role_name', 'Role Name', 'Role Name', '2020-05-28 10:27:32', '2020-05-28 10:27:32');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(1, 8, 'App\\User'),
(1, 9, 'App\\User'),
(2, 10, 'App\\User'),
(2, 11, 'App\\User'),
(2, 12, 'App\\User'),
(1, 14, 'App\\User'),
(2, 15, 'App\\User'),
(2, 16, 'App\\User'),
(2, 17, 'App\\User'),
(2, 18, 'App\\User'),
(2, 19, 'App\\User'),
(2, 20, 'App\\User'),
(2, 21, 'App\\User'),
(2, 22, 'App\\User'),
(2, 23, 'App\\User'),
(2, 24, 'App\\User'),
(2, 25, 'App\\User'),
(2, 26, 'App\\User'),
(2, 27, 'App\\User'),
(2, 28, 'App\\User'),
(2, 29, 'App\\User'),
(2, 30, 'App\\User'),
(2, 31, 'App\\User'),
(2, 32, 'App\\User'),
(2, 33, 'App\\User'),
(2, 34, 'App\\User'),
(2, 35, 'App\\User'),
(2, 36, 'App\\User'),
(2, 37, 'App\\User'),
(2, 38, 'App\\User'),
(2, 39, 'App\\User'),
(2, 40, 'App\\User'),
(2, 41, 'App\\User'),
(2, 42, 'App\\User'),
(2, 43, 'App\\User'),
(2, 44, 'App\\User'),
(2, 45, 'App\\User'),
(2, 46, 'App\\User'),
(2, 47, 'App\\User'),
(2, 48, 'App\\User'),
(2, 49, 'App\\User'),
(2, 50, 'App\\User');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss_user` date NOT NULL,
  `num_tele_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filiere_user` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur','admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere_user` (`filiere_user`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email`, `password`, `adresse_user`, `type_user`, `created_at`, `updated_at`) VALUES
(17, 'elmallmi', 'bilal', '2003-06-12', '0678549878', 'gi', 'elmallmi@gmail.com', '$2y$10$GbmT5mNbfyZMCVCcdeJMZeDIMDO84IyD07nZ8AMaitXiu1eiIznOG', 'sidi bouzkri', 'etudiant', '2020-06-02 13:44:52', '2020-06-02 13:44:52'),
(19, 'dehbi', 'mehdi', '2000-06-07', '0745982358', 'dwa', 'dehbi@gmail.com', '$2y$10$fGyVZeMJ/9NtNKFuPPJ.tOui2eURxsC1FasPJfCj2QDpRv6mOEBPq', 'Khnifra', 'professeur', '2020-06-03 06:10:01', '2020-06-03 06:10:01'),
(20, 'djili', 'oumaima', '1999-07-12', '0653796888', 'gc', 'djili@gmail.com', '$2y$10$xdZsQy6SkT29I5PUYEZW2uFbzHIAnEjn46nE2OXcqNFRP4wjyZCVG', 'Rabat', 'professeur', '2020-06-03 06:11:35', '2020-06-03 06:11:35'),
(21, 'alami', 'azzedine', '1995-10-06', '0657211147', 'ia', 'alami@gmail.com', '$2y$10$6Slo04Eh.aAXkQ6lU1.S.uNrj8y2byPuCRTFrcVhVfQ1vpwKiWcKS', 'Laayoune', 'professeur', '2020-06-03 06:13:19', '2020-06-03 06:13:19'),
(22, 'houyakoun', 'hajar', '1997-09-17', '0713466428', 'tsi', 'houyakoun@gmail.com', '$2y$10$Z.6twKBWzpA3KktfdlJ.kefrM7UMvF9p20u11cKFL6H.crcWjWT3q', 'Tanger', 'professeur', '2020-06-03 06:14:28', '2020-06-03 21:40:40'),
(1, 'admin', 'admin', '2020-04-30', '0600000001', 'all', 'admin@gmail.com', '$2y$10$rBj9StQAmgnrNDURDVj0GeKTZAErgvB2jhHrCz4DlMIAQM4d9YiYO', 'AL BASSATINE MEKNES', 'admin', '2020-05-28 10:35:26', '2020-05-31 16:27:30'),
(15, 'hamame', 'maryame', '2020-06-11', '0685214765', 'tm', 'hammam@gmail.com', '$2y$10$DtyeV3D8MSq3TgZUFHTFQeLME7mPei3Cs48sSg3BvHCyyQbfZgg6i', 'mor chelmch', 'professeur', '2020-06-01 01:42:54', '2020-06-03 18:22:11'),
(11, 'RHATTOYE', 'Ahmed', '2020-05-03', '0505678439', 'gi', 'rhattoy@gmail.com', '$2y$10$jbxyMySkcEvSjlZEaDKf/e7FSj.cOVGpLahWm9yId99EZZieqlWty', 'EST MEKNES', 'professeur', '2020-05-28 12:45:37', '2020-06-01 10:30:46'),
(18, 'asraoui', 'taha', '1994-09-29', '0612549858', 'gim', 'asr@gmail.com', '$2y$10$IV7Nerxtc83/lh/BFUVL1u0CDFPUq8MUNXoEwItaE8ba2h2.7GH9.', 'meknes', 'professeur', '2020-06-03 06:08:29', '2020-06-03 18:42:26'),
(8, 'EL KHABBAZ', 'Mohamed', '2000-09-24', '0649566183', 'all', 'elkhabbaz91@gmail.com', '$2y$10$Wmz3EWTfhv6ZsC.7fePWWeWnjfG8Ix5EJapYlCoOOTp3HDeBaMoXy', '247 LOT RIAD ISMAILIA TRANCHE E MEKNES', 'admin', '2020-05-28 12:33:41', '2020-05-28 12:33:41'),
(9, 'EL BOU3AYDI', 'Ayman', '2020-04-30', '0600000001', 'all', 'admin@gmail.com', '$2y$10$Qxw.D4Cj24qkqkApQ.HDxeN6Ko77UQx3L7E.yI/rbioWD1xzsSDue', 'AL BASSATINE MEKNES', 'admin', '2020-05-28 12:35:26', '2020-05-28 12:35:26'),
(14, 'elbouayadi', 'ayman', '2020-05-07', '0666060606', 'all', 'aiman.elbou@gmail.com', '$2y$10$6v3K8GJ3Wmi81quInrxI3OfXQBtKPWyyZCBLypKOd1QXRZ6opiAuC', 'meknes', 'admin', '2020-05-29 08:39:04', '2020-06-01 01:40:53'),
(16, 'omari', 'soufian', '2002-06-13', '0648975489', 'gi', 'omari69@gmail.com', '$2y$10$cvO8z1oeauv/gHMVErWP9uz9agslgzhI.MCxnMvYQ9TuAOMCO.3f2', 'fes', 'etudiant', '2020-06-02 13:29:12', '2020-06-03 21:29:32'),
(23, 'bensbae', 'bader', '2001-04-11', '0645789874', 'dwa', 'bensbae@gmail.com', '$2y$10$Cg4xaXygxJ4k/GVBIN5ZaeoQjPR5b3i6bgWFgsA5gld08z3lbe4ji', 'ukrania', 'etudiant', '2020-06-03 06:20:29', '2020-06-03 06:20:29'),
(24, 'fatine', 'zakaria', '2000-06-09', '0758899984', 'dwa', 'fatine@gmail.com', '$2y$10$uE.KS98bP7jxBDK1M3W/m.9YFGLs5OaePbYfTpxFFnkxV4/9AkfHm', 'Rabat', 'etudiant', '2020-06-03 06:21:32', '2020-06-03 06:21:32'),
(25, 'ayoubi', 'salah eddine', '1995-07-11', '0615974685', 'gc', 'ayoubi@gmail.com', '$2y$10$ZfzwQPEtxyz/CNMq07w7KeXax5petabyrMHVQ/yNH.HXrxQoHGcEa', 'tanger', 'etudiant', '2020-06-03 06:22:38', '2020-06-03 06:22:38'),
(26, 'bouaicha', 'anouar', '2001-07-10', '0777885987', 'gc', 'bouaicha@gmail.com', '$2y$10$/vTXtjgRcm6AhVGQa12qheH7MvDnmm3Iy2PrFMa4SR/q0AXbKNo2S', 'Sale', 'etudiant', '2020-06-03 06:33:14', '2020-06-03 06:33:14'),
(27, 'mazin', 'houssam', '2001-06-30', '0666225588', 'gim', 'mazin@gmail.com', '$2y$10$6XMNKFoUxCDm3eADeFgjL.jf8Ge3ObsW27xMvxP4064ixlFlBx6LS', 'marrakech', 'etudiant', '2020-06-03 06:34:37', '2020-06-03 06:34:37'),
(28, 'rais', 'anas', '2000-02-28', '0698897887', 'gim', 'rais@gmail.com', '$2y$10$/0A5zhoqKtx9lSx72GhPlOHSLAfv05LtcVBo1RMrGDhKJJqaAUzuu', 'Tetouane', 'etudiant', '2020-06-03 06:37:18', '2020-06-03 19:41:23'),
(29, 'bouras', 'ayoub', '2000-06-14', '0655889947', 'ia', 'bouras@gmail.com', '$2y$10$ME8o2UH3fgy11XenphmTQOjNi1N6bSP2vAlxr5j.E9e8wINA2YjtO', 'Fqih ben saleh', 'etudiant', '2020-06-03 06:39:34', '2020-06-03 06:39:34'),
(30, 'ajendouz', 'alae', '1996-06-10', '0665458237', 'ia', 'ajendouz@gmail.com', '$2y$10$83Hgy1aIkpQ1.qcVpFguXeKlwRC2ZalGopjafONbY6ozgEcI71PmC', 'Chefchaouen', 'etudiant', '2020-06-03 06:40:36', '2020-06-03 06:40:36'),
(31, 'ahoual', 'chaymae', '2000-05-11', '0606050809', 'tm', 'ahoual@gmail.com', '$2y$10$LIT2Ve58U28RdRW72n6hGOPdX92gTI5msrdjlu4J9.PBbJJLJC3.a', 'kenitra', 'etudiant', '2020-06-03 06:42:23', '2020-06-03 18:31:35'),
(32, 'ouzzine', 'wiam', '2001-07-04', '0708090405', 'tm', 'ouzzine@gmail.com', '$2y$10$qSVz2HcXtPgxHlqW0c7KoeVt.InLrGIlmSz2AB5yNPTEcrM5sa6Iu', 'kenitra', 'etudiant', '2020-06-03 06:43:13', '2020-06-03 06:43:13'),
(33, 'sadki', 'kenza', '2002-05-31', '0624582525', 'tsi', 'sadki@gmail.com', '$2y$10$avLkhp7.7GY6c/.olHSa5e92hVIRhPJZRd.7h.mbsVQw/X1zgYXEi', 'Meknes', 'etudiant', '2020-06-03 06:44:02', '2020-06-03 06:44:02'),
(34, 'elmrabet', 'nouhaila', '2001-06-06', '0788556612', 'tsi', 'elmrabet@gmail.com', '$2y$10$wPkVtTiOJr3wF6tUlNCW4Oo.MVJROhQqMy5zo9ypXOis/AfRyrTnC', 'Tanger', 'etudiant', '2020-06-03 06:45:11', '2020-06-03 06:45:11'),
(35, 'dahman', 'israe', '2003-06-12', '0614658247', 'dwa', 'dahman@gmail.com', '$2y$10$nHngvXCc1.of/myFe0zFs.S9Ff.k0S87UNHd/aQjbRGfbPgPkROU2', 'Fes', 'etudiant', '2020-06-03 06:46:53', '2020-06-03 06:46:53'),
(36, 'bouchta', 'othman', '2001-05-19', '0655147895', 'dwa', 'bouchta@gmail.com', '$2y$10$4PpDksSXZfMoivSaYfq2..s9Q5mtWWyEi3LPTECjsnA6K9zKYuqkW', 'saidia', 'professeur', '2020-06-03 06:48:31', '2020-06-03 06:48:31'),
(37, 'elkholti', 'asmae', '2002-05-11', '0688253697', 'gc', 'elkholti@gmail.com', '$2y$10$Zr6jLCB1ZskQliq4hhButuegndAyVZJadeve/.86wz.x0xo0N9IPu', 'rachidia', 'etudiant', '2020-06-03 06:50:20', '2020-06-03 06:50:20'),
(38, 'hakouni', 'rabie', '1998-05-14', '0632654985', 'gc', 'hakouni@gmail.com', '$2y$10$ioCQdok.s8y99myg4uJLteFegHU/AOwkdxB0gskcZ1IX3X0DP7yIG', 'tifelt', 'professeur', '2020-06-03 06:51:19', '2020-06-03 06:51:19'),
(39, 'heddadi', 'doha', '1998-06-19', '0710202893', 'gi', 'heddadi@gmail.com', '$2y$10$kAdTkuwRK.1hSfyZIwUii.hXSnk/fCj38UK.MShTm2dlkzjlUsIXq', 'Tetouan', 'professeur', '2020-06-03 06:53:50', '2020-06-03 06:53:50'),
(40, 'hellami', 'thami', '1999-12-22', '0789463778', 'gi', 'hellami@gmail.com', '$2y$10$Jlravbs5qrnpbcBiFxJ6q.V/worW7nGNzutFCGPwYW2Fk9g/QM.9m', 'Taza', 'etudiant', '2020-06-03 06:54:54', '2020-06-03 06:54:54'),
(41, 'naciri', 'ahlam', '2003-05-27', '0666664566', 'gim', 'naciri@gmail.com', '$2y$10$vOKSFxen.c2urAPvJkl1neISyKqirtWgG3DmEQTRmddsLYrtYLUCy', 'Meknes', 'etudiant', '2020-06-03 06:56:36', '2020-06-03 06:56:36'),
(42, 'elouazzani', 'akram', '1997-06-06', '0879286458', 'gim', 'elouazzani@gmail.com', '$2y$10$OM5UWmeQ1XlyH6cma8AWc.BxMkIWmW.j45BeArG2FQWE59rsL8a7e', 'tanger', 'professeur', '2020-06-03 06:59:43', '2020-06-03 06:59:43'),
(43, 'elandalousi', 'sanae', '2001-05-26', '065522331144', 'ia', 'elandalousi@gmail.com', '$2y$10$Al3X/qm50wAdC1OvI5jWyuLJoCbF6f/vcoVoqKXNqA4Pmp8wuF5.a', 'Casa blanca', 'etudiant', '2020-06-03 07:01:05', '2020-06-03 07:01:05'),
(44, 'omari', 'hassan', '2002-06-05', '0788994564', 'ia', 'omari47@gmail.com', '$2y$10$o3m4XKVn05v5Ad3y3gK58.mJ5b5TLOt4CzNjmeyMqsYDbWB2SI29i', 'elyoussoufiya', 'etudiant', '2020-06-03 07:04:05', '2020-06-03 07:04:05'),
(45, 'akhdouch', 'hassana', '1999-06-18', '0685234987', 'tm', 'akhdouch@gmail.com', '$2y$10$C9O9wjJcjime6PJYfhM9Mu3pm35xG6FKhTary87s.A4ONBtuupuJq', 'Elhajeb', 'etudiant', '2020-06-03 07:05:10', '2020-06-03 07:05:10'),
(46, 'benjeloun', 'asmae', '1998-07-26', '0655359715', 'tm', 'benjeloun@gmail.com', '$2y$10$KNvgSMA5eQkEPUGkj3sqW.2/roFdTMVlC5in6QQXDQ9Q2XRhQWLGa', 'Fes', 'professeur', '2020-06-03 07:06:30', '2020-06-03 07:06:30'),
(47, 'salama', 'ahmed', '1999-09-17', '0754921536', 'tsi', 'salama@gmail.com', '$2y$10$zoTNGwDN9dLPjHUkmVfU/.RiqiHvnD/765W.247dT1iHe6rqVLaVa', 'sale', 'etudiant', '2020-06-03 07:07:34', '2020-06-03 07:07:34'),
(48, 'ghoumari', 'salah', '1999-11-30', '0758213565', 'tsi', 'ghoumari@gmail.com', '$2y$10$9vJBKiC69DEFLHRpes1FHerNFSPWNvuRP59LT/cjFNOtG3peZrcu6', 'casablanka', 'professeur', '2020-06-03 07:08:27', '2020-06-03 07:08:27'),
(49, 'HATIMI', 'Hanan', '2000-05-05', '0649566183', 'tm', 'HATIMI@gmail.com', '$2y$10$E7o01CoDEtFrvIp/zq5LIekox3ff9yDu7/EpAg31vfx01xFZrqZ8G', 'NO 257 LOT RIAD AL ISMAILIA', 'professeur', '2020-06-03 18:05:14', '2020-06-03 18:06:13'),
(50, 'Ihab', 'Amire', '1985-02-14', '0649566183', 'GIM', 'IhabAmire@gmail.com', '$2y$10$zTbCIskgC1DcCIWHDV178e4lFJXwEGsGN9u3vrQLKJZ2lKTlP8gs2', 'NO 247 LOT RIAD AL ISMAILIA TRANCHE E MEKNÈS', 'professeur', '2020-06-03 18:52:05', '2020-06-03 18:52:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
