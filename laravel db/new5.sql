-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 26 mai 2020 à 13:13
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom`, `description`, `id_filiere`, `created_at`, `updated_at`) VALUES
(1, 'Learn Laravel', 'Learn Laravel description', 'GI', NULL, NULL),
(2, 'Learn html', 'Learn html description', 'TM', NULL, NULL),
(3, 'Programmation C', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(4, 'Programmation JAVA', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(5, 'Securiter Réseau', 'Ce cours sert a prends les et la base principe de ...', 'TSI', NULL, NULL),
(6, 'Gestion Projet', 'Ce cours sert a prends les et la base principe de ...', 'TM', NULL, NULL);

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
('IA', 'Inteligence artificiel', 'Filiere de inteligence artificiel', 'genie informatique', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `id_filiere`, `code_prof`, `commantaire`, `id_cour`, `type_cour`, `nbr_telechargement`, `date_ajoute`, `nom_pdf`, `pdf_lien`, `titre`, `created_at`, `updated_at`) VALUES
(29, 'tcc', 141, 'n', 45, 'cour', 0, '2020-04-17 08:57:00', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'un pdf de x et y ', NULL, NULL),
(27, 'tcc', 141, 'tp de macro a rendre', 47, 'tp', 0, '2020-04-17 08:29:42', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'TP MACRO', NULL, NULL),
(28, 'tcc', 141, 'a rendre', 46, 'td', 0, '2020-04-17 08:45:14', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'test ', NULL, NULL),
(23, 'tcc', 141, 'chapitre N 1 du Module', 45, 'cour', 0, '2020-04-17 04:10:31', 'VIDEO_10s_hd.mp4', '../file/tcc/VIDEO_10s_hd.mp4', 'Video de cours Module', NULL, NULL),
(24, 'tcc', 141, 'TP 1 ', 46, 'tp', 0, '2020-04-17 04:11:43', 'cv.txt', '../file/tcc/cv.txt', 'TP1', NULL, NULL),
(25, 'tcc', 141, 'A rendre avant le 20/04/2020 a 12:00 ', 45, 'td', 0, '2020-04-17 04:15:18', 'HTML-partie1.pdf', '../file/tcc/HTML-partie1.pdf', 'TD 3 ', NULL, NULL),
(21, 'bibl', 6, 'test biblio', -1, 'bibliotheque', 1, '2020-04-13 13:18:37', '@ReadMe.txt', '../file/bibliotheque/@ReadMe.txt', 'Exemple PFE', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'Bonjour Mr.Hassan , merci de passe a la Direction avant le 20/04/2020', '0', '2020-05-18 09:48:00', 3, 'hassan.loukili@gmail.com', 'professeur', NULL, NULL),
(2, 2, 'admin', 'ayman.admin@gmail.com\r\n', 548615, 'admin', 'salam ayoub msg recu', '0', '2020-05-18 09:50:15', 5, 'ayoub.om@gmail.com', 'etudiant', NULL, NULL),
(3, 7, 'lahbili salma', 'salma@gmail.com', 677884433, NULL, 'ggg', '0', '2020-05-26 10:54:52', 1, '1', NULL, '2020-05-26 08:54:52', '2020-05-26 08:54:52'),
(4, 7, 'lahbili salma', 'salma@gmail.com', 677884433, NULL, 'ydtjkuk', '0', '2020-05-26 10:57:33', 1, 'admin@gmail.com', NULL, '2020-05-26 08:57:33', '2020-05-26 08:57:33');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_05_23_021345_create_classes_table', 1),
(16, '2020_05_23_021536_create_fields_table', 1),
(17, '2020_05_23_021653_create_files_table', 1),
(18, '2020_05_23_021807_create_messages_table', 1),
(19, '2020_05_23_021906_create_questions_table', 1),
(20, '2020_05_23_022015_create_quizzes_table', 1),
(21, '2020_05_23_022112_create_requests_table', 1),
(22, '2020_05_23_022246_create_results_table', 1);

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
(1, 3, 'Mon prenom est', 'elbouayadi', 'asraoui', 'ahmadi', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizzes`
--

INSERT INTO `quizzes` (`id_quiz`, `nom_quiz`, `id_prof`, `id_filiere`, `dernier_delai`, `date_pub`, `created_at`, `updated_at`) VALUES
(1, 'quiz de test', 4, 'GI', NULL, '2020-06-17 20:00:00', NULL, NULL),
(2, 'quiz de Semestre', 3, 'TCC', NULL, '2020-07-08 20:00:00', NULL, NULL);

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
(1, 5, 3, '1', '1', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email`, `password`, `adresse_user`, `type_user`, `created_at`, `updated_at`) VALUES
(1, 'EL KHABBAZ', 'Mohamed', '2020-05-09', '0649566183', 'gi', 'elkhabbaz91@gmail.com', '$2y$10$SNb2nRMm6nmmKmqzQKrnm.W8zj02M.tqL8bhHlQCpQPMtyljLQMTS', 'Meknes Anassi', 'professeur', '2020-05-22 21:15:16', '2020-05-22 21:15:16'),
(2, 'elkhabbaz', 'elkhabbaz', '2020-05-19', '065566535467', 'GI', 'elkhabbaz@gmail.com', '1234', 'meknes', 'etudiant', NULL, NULL),
(3, 'elbouayadi', 'aiman', '2020-05-19', '677441100', 'GI', 'aiman.elbou@gmail.com', 'elbouayadi1234', 'rabat', 'admin', NULL, NULL),
(4, 'loukili', 'hassan', '2020-05-15', '0621548700', 'TCC', 'hassan.loukili@gmail.com', '1234', 'meknes', 'professeur', NULL, NULL),
(5, 'AMANI', 'AMANI', '2020-05-03', '3246577', 'GI', 'salmaJK@gmail.com', '1234567890', 'marjan 3 , Méknes', 'professeur', NULL, NULL),
(7, 'lahbili', 'salmaaa', '2020-05-02', '0677884433', 'tm', 'salma@gmail.com', '$2y$10$RAyE80jdDthvHYZKZ7VRd.OuZPN9RunLBOdK4MhsQvmhj12sswKUS', 'meknes', 'etudiant', '2020-05-25 08:57:18', '2020-05-26 10:43:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
