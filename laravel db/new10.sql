-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 juin 2020 à 12:14
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elearningnew`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom`, `description`, `id_filiere`, `created_at`, `updated_at`) VALUES
(1, 'Learn Laravel', 'Learn Laravel description', 'GI', NULL, NULL),
(2, 'Learn management', 'Learn html description', 'TM', NULL, NULL),
(3, 'Programmation C', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(4, 'Programmation JAVA', 'Ce cours sert a prends les et la base principe de ..', 'GI', NULL, NULL),
(5, 'Securiter Réseau', 'Ce cours sert a prends les et la base principe de ...', 'TSI', NULL, NULL),
(6, 'Gestion Projet', 'Ce cours sert a prends les et la base principe de ...', 'TM', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `nom`, `email`, `opinion`, `created_at`, `updated_at`) VALUES
(4, 'EL KHABBAZ', 'elkhabbaz91@gmail.com', 'Opinion 3', '2020-06-01 18:14:34', '2020-06-01 18:14:34'),
(6, 'hassan ayoubi', 'hassan@gmail.com', 'Un bon site merci', '2020-06-02 14:06:53', '2020-06-02 14:06:53'),
(7, 'khadija bilala', 'bilala@gmail.com', 'Merci pour cette plateform', '2020-06-02 14:39:19', '2020-06-02 14:39:19'),
(8, 'aya zerouali', 'zerouali_aya@gmail.com', 'beaucoup de cours et de fichier utile ! merci', '2020-06-02 14:40:16', '2020-06-02 14:40:16'),
(9, 'elbouayadi ayman', 'aiman.elbou@gmail.com', 'Bonjour je suis un admin', '2020-06-02 14:50:24', '2020-06-02 14:50:24');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fields`
--

CREATE TABLE `fields` (
  `filiere_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filiere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filiere_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
('DWA', 'dev web et media', 'ok', 'genie informatique', '2020-06-02 19:12:51', '2020-06-02 19:25:30');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prof` int(11) NOT NULL,
  `commantaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `type_cour` enum('cour','tp','td','bibliotheque') COLLATE utf8mb4_unicode_ci DEFAULT 'cour',
  `nbr_telechargement` int(11) DEFAULT 0,
  `date_ajoute` timestamp NULL DEFAULT current_timestamp(),
  `nom_pdf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_lien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `id_filiere`, `code_prof`, `commantaire`, `id_cour`, `type_cour`, `nbr_telechargement`, `date_ajoute`, `nom_pdf`, `pdf_lien`, `titre`, `created_at`, `updated_at`) VALUES
(29, 'tcc', 141, 'n', 45, 'cour', 0, '2020-04-17 08:57:00', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'un pdf de x et y ', NULL, NULL),
(27, 'tcc', 141, 'tp de macro a rendre', 47, 'tp', 0, '2020-04-17 08:29:42', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'TP MACRO', NULL, NULL),
(28, 'tcc', 141, 'a rendre', 46, 'td', 0, '2020-04-17 08:45:14', '@ReadMe.txt', '../file/tcc/@ReadMe.txt', 'test ', NULL, NULL),
(23, 'tcc', 14, 'chapitre N 1 du Module', 45, 'cour', 0, '2020-04-17 04:10:31', 'VIDEO_10s_hd.mp4', '../file/tcc/VIDEO_10s_hd.mp4', 'Video de cours Module', NULL, NULL),
(24, 'tcc', 14, 'TP 1 ', 46, 'tp', 0, '2020-04-17 04:11:43', 'cv.txt', '../file/tcc/cv.txt', 'TP1', NULL, NULL),
(25, 'tcc', 141, 'A rendre avant le 20/04/2020 a 12:00 ', 45, 'td', 0, '2020-04-17 04:15:18', 'HTML-partie1.pdf', '../file/tcc/HTML-partie1.pdf', 'TD 3 ', NULL, NULL),
(21, 'TM', 15, 'test 1', 2, 'tp', 1, '2020-04-13 13:18:37', '@ReadMe.txt', '../file/bibliotheque/@ReadMe.txt', 'Exemple PFE', NULL, NULL),
(31, 'bibl', 15, 'eze', NULL, 'bibliotheque', 0, '2020-06-01 12:06:33', 'webhost.txt', 'public/file/bibl/webhost.txt', 'khbz', '2020-06-01 11:06:33', '2020-06-01 11:06:33'),
(32, 'bibl', 15, 'testsssssss', NULL, 'bibliotheque', 0, '2020-06-01 12:32:19', 'TP1_PHP.pdf', 'public/file/bibl/TP1_PHP.pdf', 'testdasdadsd', '2020-06-01 11:32:19', '2020-06-01 11:32:19'),
(33, 'TM', 15, 'test', 6, 'tp', 0, '2020-06-02 18:54:56', 'webhost.txt', 'public/file//webhost.txt', 'tessst', '2020-06-02 17:54:56', '2020-06-02 17:54:56');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `emetteur_id` int(11) NOT NULL,
  `emetteur_nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emetteur_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `emetteur_telephone` int(11) NOT NULL,
  `emetteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date_env` timestamp NULL DEFAULT current_timestamp(),
  `recepteur_id` int(11) NOT NULL,
  `recepteur_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `recepteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `emetteur_id`, `emetteur_nom`, `emetteur_email`, `emetteur_telephone`, `emetteur_type`, `message`, `etat`, `date_env`, `recepteur_id`, `recepteur_email`, `recepteur_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'ayman.admin@gmail.com', 548615, 'admin', 'Bonjour Mr.Hassan , merci de passe a la Direction avant le 20/04/2020', '0', '2020-05-18 09:48:00', 3, 'hassan.loukili@gmail.com', 'professeur', NULL, NULL),
(2, 2, 'admin', 'ayman.admin@gmail.com\r\n', 548615, 'admin', 'salam ayoub msg recu', '0', '2020-05-18 09:50:15', 5, 'ayoub.om@gmail.com', 'etudiant', NULL, NULL),
(12, -1, 'karam athmani', 'karam@gmail.com', 678987454, 'visiteur', 'Bonjour , je veux etre un etudiant a l\'EST au future', '0', '2020-06-02 15:53:19', -1, 'admin@gmail.com', 'admin', '2020-06-02 14:53:19', '2020-06-02 14:53:19'),
(4, 7, 'lahbili salma', 'salma@gmail.com', 677884433, NULL, 'ydtjkuk', '0', '2020-05-26 10:57:33', 1, 'admin@gmail.com', 'admin', '2020-05-26 08:57:33', '2020-05-26 08:57:33'),
(5, 12, 'elbou aiman', 'aiman.elbou@gmail.com', 666666665, NULL, 'bnjr', '0', '2020-05-29 08:54:59', 1, 'admin@gmail.com', NULL, '2020-05-29 08:54:59', '2020-05-29 08:54:59'),
(6, 12, 'elbou aiman', 'aiman.elbou@gmail.com', 666666665, NULL, 'test apres changes de hidden', '0', '2020-05-29 09:00:04', 1, 'admin@gmail.com', NULL, '2020-05-29 09:00:04', '2020-05-29 09:00:04'),
(7, 12, 'elbou aiman', 'aiman.elbou@gmail.com', 666666665, NULL, 'hhh', '0', '2020-05-29 09:01:23', 1, 'admin@gmail.com', 'admin', '2020-05-29 09:01:23', '2020-05-29 09:01:23'),
(8, 0, 'test', 'test@gmail.com', 45454545, NULL, 'teeeest', '0', '2020-05-29 09:18:39', 1, 'admin@gmail.com', NULL, '2020-05-29 09:18:39', '2020-05-29 09:18:39'),
(9, 0, 'test', 'test@gmail.com', 454545454, NULL, 'ssss', '0', '2020-05-29 09:23:39', 1, 'admin@gmail.com', NULL, '2020-05-29 09:23:39', '2020-05-29 09:23:39'),
(10, -1, 'teeeeest', 'teeest@haha.com', 4568987, 'visiteur', 'bnjr teeest 31', '0', '2020-05-31 11:52:50', -1, 'admin@gmail.com', 'admin', '2020-05-31 10:52:50', '2020-05-31 10:52:50'),
(11, 13, 'test tessst', 'test@gmail.com', 4789654, 'professeur', 'salam ana proff', '0', '2020-05-31 11:54:31', -1, 'admin@gmail.com', 'admin', '2020-05-31 10:54:31', '2020-05-31 10:54:31'),
(13, -1, 'ayoub bousmouni', 'bousmouni@gmail.com', 784561165, 'visiteur', 'hello , i want the course of OOP', '0', '2020-06-02 16:04:24', -1, 'admin@gmail.com', 'admin', '2020-06-02 15:04:24', '2020-06-02 15:04:24');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, '2020_05_23_022246_create_results_table', 1),
(23, '2020_05_28_161633_laratrust_setup_tables', 2),
(24, '2020_06_01_202620_create_comments_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2020-05-28 14:27:31', '2020-05-28 14:27:31'),
(2, 'read-users', 'Read Users', 'Read Users', '2020-05-28 14:27:31', '2020-05-28 14:27:31'),
(3, 'update-users', 'Update Users', 'Update Users', '2020-05-28 14:27:31', '2020-05-28 14:27:31'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(5, 'create-profile', 'Create Profile', 'Create Profile', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(6, 'read-profile', 'Read Profile', 'Read Profile', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(7, 'update-profile', 'Update Profile', 'Update Profile', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(8, 'delete-profile', 'Delete Profile', 'Delete Profile', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(9, 'create-module_1_name', 'Create Module_1_name', 'Create Module_1_name', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(10, 'read-module_1_name', 'Read Module_1_name', 'Read Module_1_name', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(11, 'update-module_1_name', 'Update Module_1_name', 'Update Module_1_name', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(12, 'delete-module_1_name', 'Delete Module_1_name', 'Delete Module_1_name', '2020-05-28 14:27:32', '2020-05-28 14:27:32');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
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

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_quiz` int(11) NOT NULL,
  `n_question` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_correcte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_quiz`, `n_question`, `question`, `rep_correcte`, `rep_2`, `rep_3`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mon nom est', 'aiman', 'hassan', 'ayoub', NULL, NULL),
(1, 2, 'Mon age est', '20', '100', '80', NULL, NULL),
(1, 3, 'Mon prenom est', 'elbouayadi', 'asraoui', 'ahmadi', NULL, NULL),
(24, 1, 'un test est :', 'un test est :', 'un test est :', 'un test est :', '2020-06-02 11:49:14', '2020-06-02 11:49:14'),
(24, 2, 'prof est', 'prof est', 'prof est', 'prof est', '2020-06-02 11:49:14', '2020-06-02 11:49:14'),
(31, 1, 'q1', 'a', 'b', 'c', '2020-06-02 12:10:57', '2020-06-02 12:10:57'),
(31, 2, 'q2', 'd', 'e', 'f', '2020-06-02 12:10:57', '2020-06-02 12:10:57');

-- --------------------------------------------------------

--
-- Structure de la table `quizzes`
--

CREATE TABLE `quizzes` (
  `id_quiz` int(11) NOT NULL,
  `nom_quiz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dernier_delai` datetime DEFAULT NULL,
  `date_pub` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `quizzes`
--

INSERT INTO `quizzes` (`id_quiz`, `nom_quiz`, `id_prof`, `id_filiere`, `dernier_delai`, `date_pub`, `created_at`, `updated_at`) VALUES
(1, 'quiz de test', 15, 'TM', NULL, '2020-06-17 20:00:00', NULL, NULL),
(2, 'quiz de Semestre', 3, 'TCC', NULL, '2020-07-08 20:00:00', NULL, NULL),
(31, 'titre quiz', 15, 'TM', NULL, '2020-06-02 13:10:57', '2020-06-02 12:10:57', '2020-06-02 12:10:57');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`id`, `nom`, `prenom`, `date_naiss`, `filiere`, `num_tele`, `email`, `password`, `type_user`, `etat`, `adresse`, `created_at`, `updated_at`) VALUES
(1, 'elmallmi', 'bilal', '2003-06-12', 'gi', 678549878, 'elmallmi@gmail.com', '$2y$10$nxHQhJeo6SYokxmWQh49SeC3eeYTDBRLXOp1.lKx3lCplFizkOdTS', 'etudiant', '0', 'sidi bouzkri', '2020-06-02 15:38:52', '2020-06-02 15:38:52');

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

CREATE TABLE `results` (
  `id_quiz` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `resultat` int(11) NOT NULL,
  `quesiont_corrcete` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_incorrecte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `results`
--

INSERT INTO `results` (`id_quiz`, `id_etudiant`, `resultat`, `quesiont_corrcete`, `question_incorrecte`, `created_at`, `updated_at`) VALUES
(1, 10, 3, '1', '1', NULL, NULL),
(31, 14, 1, '1 , ', '2 , ', '2020-06-02 13:33:19', '2020-06-02 13:33:19'),
(1, 14, 2, '1 , 2 , ', '3 , ', '2020-06-01 09:29:38', '2020-06-01 09:29:38');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2020-05-28 14:27:31', '2020-05-28 14:27:31'),
(2, 'user', 'User', 'User', '2020-05-28 14:27:32', '2020-05-28 14:27:32'),
(3, 'role_name', 'Role Name', 'Role Name', '2020-05-28 14:27:32', '2020-05-28 14:27:32');

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
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
(2, 48, 'App\\User');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email`, `password`, `adresse_user`, `type_user`, `created_at`, `updated_at`) VALUES
(11, 'RHATTOYE', 'Ahmed', '2020-05-03', '0505678439', 'gi', 'rhattoy@gmail.com', '$2y$10$jbxyMySkcEvSjlZEaDKf/e7FSj.cOVGpLahWm9yId99EZZieqlWty', 'EST MEKNES', 'professeur', '2020-05-28 14:45:37', '2020-06-01 12:30:46'),
(18, 'asraoui', 'taha', '1994-09-29', '0612549858', 'gim', 'asr@gmail.com', '$2y$10$iB5u.dSTXCbEGfwS5JRq8uP5Z8t77FtaQQg/XUfvZMeWCPzXKw02C', 'meknes', 'professeur', '2020-06-03 08:08:29', '2020-06-03 08:08:29'),
(8, 'EL KHABBAZ', 'Mohamed', '2000-09-24', '0649566183', 'all', 'elkhabbaz91@gmail.com', '$2y$10$Wmz3EWTfhv6ZsC.7fePWWeWnjfG8Ix5EJapYlCoOOTp3HDeBaMoXy', '247 LOT RIAD ISMAILIA TRANCHE E MEKNES', 'admin', '2020-05-28 14:33:41', '2020-05-28 14:33:41'),
(9, 'EL BOU3AYDI', 'Ayman', '2020-04-30', '0600000001', 'all', 'admin@gmail.com', '$2y$10$Qxw.D4Cj24qkqkApQ.HDxeN6Ko77UQx3L7E.yI/rbioWD1xzsSDue', 'AL BASSATINE MEKNES', 'admin', '2020-05-28 14:35:26', '2020-05-28 14:35:26'),
(14, 'elbouayadi', 'ayman', '2020-05-07', '0666060606', 'all', 'aiman.elbou@gmail.com', '$2y$10$6v3K8GJ3Wmi81quInrxI3OfXQBtKPWyyZCBLypKOd1QXRZ6opiAuC', 'meknes', 'admin', '2020-05-29 10:39:04', '2020-06-01 03:40:53'),
(16, 'omari', 'soufian', '2002-06-13', '0648975489', 'gi', 'omari@gmail.com', '$2y$10$HPVFnQbAD3rrWQdXhdPTO.6VD61edX5//XfuafJhEV7jM.NeeLZGK', 'Fes', 'etudiant', '2020-06-02 15:29:12', '2020-06-02 15:29:12'),
(15, 'hamame', 'maryame', '2020-06-11', '0685214765', 'TM', 'hammam@gmail.com', '$2y$10$E4ZmSzlVzkhkjI08xza73u.fYwxGV0YkgDh406Eonrq1yO/qWUdNm', 'mor chelmch', 'professeur', '2020-06-01 03:42:54', '2020-06-01 03:42:54'),
(17, 'elmallmi', 'bilal', '2003-06-12', '0678549878', 'gi', 'elmallmi@gmail.com', '$2y$10$GbmT5mNbfyZMCVCcdeJMZeDIMDO84IyD07nZ8AMaitXiu1eiIznOG', 'sidi bouzkri', 'etudiant', '2020-06-02 15:44:52', '2020-06-02 15:44:52'),
(19, 'dehbi', 'mehdi', '2000-06-07', '0745982358', 'dwa', 'dehbi@gmail.com', '$2y$10$fGyVZeMJ/9NtNKFuPPJ.tOui2eURxsC1FasPJfCj2QDpRv6mOEBPq', 'Khnifra', 'professeur', '2020-06-03 08:10:01', '2020-06-03 08:10:01'),
(20, 'djili', 'oumaima', '1999-07-12', '0653796888', 'gc', 'djili@gmail.com', '$2y$10$xdZsQy6SkT29I5PUYEZW2uFbzHIAnEjn46nE2OXcqNFRP4wjyZCVG', 'Rabat', 'professeur', '2020-06-03 08:11:35', '2020-06-03 08:11:35'),
(21, 'alami', 'azzedine', '1995-10-06', '0657211147', 'ia', 'alami@gmail.com', '$2y$10$6Slo04Eh.aAXkQ6lU1.S.uNrj8y2byPuCRTFrcVhVfQ1vpwKiWcKS', 'Laayoune', 'professeur', '2020-06-03 08:13:19', '2020-06-03 08:13:19'),
(22, 'houyakoun', 'hajar', '1997-09-17', '0713466428', 'tsi', 'houyakoun@gmail.com', '$2y$10$VrV16tmmez16NEFVzPRBNefT99sCj6OpQKq2KB0kEKeRvBMmdqdD.', 'Tanger', 'professeur', '2020-06-03 08:14:28', '2020-06-03 08:14:28'),
(23, 'bensbae', 'bader', '2001-04-11', '0645789874', 'dwa', 'bensbae@gmail.com', '$2y$10$Cg4xaXygxJ4k/GVBIN5ZaeoQjPR5b3i6bgWFgsA5gld08z3lbe4ji', 'ukrania', 'etudiant', '2020-06-03 08:20:29', '2020-06-03 08:20:29'),
(24, 'fatine', 'zakaria', '2000-06-09', '0758899984', 'dwa', 'fatine@gmail.com', '$2y$10$uE.KS98bP7jxBDK1M3W/m.9YFGLs5OaePbYfTpxFFnkxV4/9AkfHm', 'Rabat', 'etudiant', '2020-06-03 08:21:32', '2020-06-03 08:21:32'),
(25, 'ayoubi', 'salah eddine', '1995-07-11', '0615974685', 'gc', 'ayoubi@gmail.com', '$2y$10$ZfzwQPEtxyz/CNMq07w7KeXax5petabyrMHVQ/yNH.HXrxQoHGcEa', 'tanger', 'etudiant', '2020-06-03 08:22:38', '2020-06-03 08:22:38'),
(26, 'bouaicha', 'anouar', '2001-07-10', '0777885987', 'gc', 'bouaicha@gmail.com', '$2y$10$/vTXtjgRcm6AhVGQa12qheH7MvDnmm3Iy2PrFMa4SR/q0AXbKNo2S', 'Sale', 'etudiant', '2020-06-03 08:33:14', '2020-06-03 08:33:14'),
(27, 'mazin', 'houssam', '2001-06-30', '0666225588', 'gim', 'mazin@gmail.com', '$2y$10$6XMNKFoUxCDm3eADeFgjL.jf8Ge3ObsW27xMvxP4064ixlFlBx6LS', 'marrakech', 'etudiant', '2020-06-03 08:34:37', '2020-06-03 08:34:37'),
(28, 'rais', 'anas', '2000-02-28', '0698897887', 'gim', 'rais@gmail.com', '$2y$10$Km2b03a0BOXQrlrXbf8Ct.FBdanhcWEdgb92./TvSgwlxT1QqSRTC', 'Tetouane', 'etudiant', '2020-06-03 08:37:18', '2020-06-03 08:37:18'),
(29, 'bouras', 'ayoub', '2000-06-14', '0655889947', 'ia', 'bouras@gmail.com', '$2y$10$ME8o2UH3fgy11XenphmTQOjNi1N6bSP2vAlxr5j.E9e8wINA2YjtO', 'Fqih ben saleh', 'etudiant', '2020-06-03 08:39:34', '2020-06-03 08:39:34'),
(30, 'ajendouz', 'alae', '1996-06-10', '0665458237', 'ia', 'ajendouz@gmail.com', '$2y$10$83Hgy1aIkpQ1.qcVpFguXeKlwRC2ZalGopjafONbY6ozgEcI71PmC', 'Chefchaouen', 'etudiant', '2020-06-03 08:40:36', '2020-06-03 08:40:36'),
(31, 'ahoual', 'chaymae', '2000-05-11', '0606050809', 'tm', 'ahoual@gmail.com', '$2y$10$PEqmFp4ogyL9oXEO/bcCouKhbH4xHF0POnh3IKgHozynxyuj6lk7q', 'kenitra', 'etudiant', '2020-06-03 08:42:23', '2020-06-03 08:42:23'),
(32, 'ouzzine', 'wiam', '2001-07-04', '0708090405', 'tm', 'ouzzine@gmail.com', '$2y$10$qSVz2HcXtPgxHlqW0c7KoeVt.InLrGIlmSz2AB5yNPTEcrM5sa6Iu', 'kenitra', 'etudiant', '2020-06-03 08:43:13', '2020-06-03 08:43:13'),
(33, 'sadki', 'kenza', '2002-05-31', '0624582525', 'tsi', 'sadki@gmail.com', '$2y$10$avLkhp7.7GY6c/.olHSa5e92hVIRhPJZRd.7h.mbsVQw/X1zgYXEi', 'Meknes', 'etudiant', '2020-06-03 08:44:02', '2020-06-03 08:44:02'),
(34, 'elmrabet', 'nouhaila', '2001-06-06', '0788556612', 'tsi', 'elmrabet@gmail.com', '$2y$10$wPkVtTiOJr3wF6tUlNCW4Oo.MVJROhQqMy5zo9ypXOis/AfRyrTnC', 'Tanger', 'etudiant', '2020-06-03 08:45:11', '2020-06-03 08:45:11'),
(35, 'dahman', 'israe', '2003-06-12', '0614658247', 'dwa', 'dahman@gmail.com', '$2y$10$nHngvXCc1.of/myFe0zFs.S9Ff.k0S87UNHd/aQjbRGfbPgPkROU2', 'Fes', 'etudiant', '2020-06-03 08:46:53', '2020-06-03 08:46:53'),
(36, 'bouchta', 'othman', '2001-05-19', '0655147895', 'dwa', 'bouchta@gmail.com', '$2y$10$4PpDksSXZfMoivSaYfq2..s9Q5mtWWyEi3LPTECjsnA6K9zKYuqkW', 'saidia', 'professeur', '2020-06-03 08:48:31', '2020-06-03 08:48:31'),
(37, 'elkholti', 'asmae', '2002-05-11', '0688253697', 'gc', 'elkholti@gmail.com', '$2y$10$Zr6jLCB1ZskQliq4hhButuegndAyVZJadeve/.86wz.x0xo0N9IPu', 'rachidia', 'etudiant', '2020-06-03 08:50:20', '2020-06-03 08:50:20'),
(38, 'hakouni', 'rabie', '1998-05-14', '0632654985', 'gc', 'hakouni@gmail.com', '$2y$10$ioCQdok.s8y99myg4uJLteFegHU/AOwkdxB0gskcZ1IX3X0DP7yIG', 'tifelt', 'professeur', '2020-06-03 08:51:19', '2020-06-03 08:51:19'),
(39, 'heddadi', 'doha', '1998-06-19', '0710202893', 'gi', 'heddadi@gmail.com', '$2y$10$kAdTkuwRK.1hSfyZIwUii.hXSnk/fCj38UK.MShTm2dlkzjlUsIXq', 'Tetouan', 'professeur', '2020-06-03 08:53:50', '2020-06-03 08:53:50'),
(40, 'hellami', 'thami', '1999-12-22', '0789463778', 'gi', 'hellami@gmail.com', '$2y$10$Jlravbs5qrnpbcBiFxJ6q.V/worW7nGNzutFCGPwYW2Fk9g/QM.9m', 'Taza', 'etudiant', '2020-06-03 08:54:54', '2020-06-03 08:54:54'),
(41, 'naciri', 'ahlam', '2003-05-27', '0666664566', 'gim', 'naciri@gmail.com', '$2y$10$vOKSFxen.c2urAPvJkl1neISyKqirtWgG3DmEQTRmddsLYrtYLUCy', 'Meknes', 'etudiant', '2020-06-03 08:56:36', '2020-06-03 08:56:36'),
(42, 'elouazzani', 'akram', '1997-06-06', '0879286458', 'gim', 'elouazzani@gmail.com', '$2y$10$OM5UWmeQ1XlyH6cma8AWc.BxMkIWmW.j45BeArG2FQWE59rsL8a7e', 'tanger', 'professeur', '2020-06-03 08:59:43', '2020-06-03 08:59:43'),
(43, 'elandalousi', 'sanae', '2001-05-26', '065522331144', 'ia', 'elandalousi@gmail.com', '$2y$10$Al3X/qm50wAdC1OvI5jWyuLJoCbF6f/vcoVoqKXNqA4Pmp8wuF5.a', 'Casa blanca', 'etudiant', '2020-06-03 09:01:05', '2020-06-03 09:01:05'),
(44, 'omari', 'hassan', '2002-06-05', '0788994564', 'ia', 'omari47@gmail.com', '$2y$10$o3m4XKVn05v5Ad3y3gK58.mJ5b5TLOt4CzNjmeyMqsYDbWB2SI29i', 'elyoussoufiya', 'etudiant', '2020-06-03 09:04:05', '2020-06-03 09:04:05'),
(45, 'akhdouch', 'hassana', '1999-06-18', '0685234987', 'tm', 'akhdouch@gmail.com', '$2y$10$C9O9wjJcjime6PJYfhM9Mu3pm35xG6FKhTary87s.A4ONBtuupuJq', 'Elhajeb', 'etudiant', '2020-06-03 09:05:10', '2020-06-03 09:05:10'),
(46, 'benjeloun', 'asmae', '1998-07-26', '0655359715', 'tm', 'benjeloun@gmail.com', '$2y$10$KNvgSMA5eQkEPUGkj3sqW.2/roFdTMVlC5in6QQXDQ9Q2XRhQWLGa', 'Fes', 'professeur', '2020-06-03 09:06:30', '2020-06-03 09:06:30'),
(47, 'salama', 'ahmed', '1999-09-17', '0754921536', 'tsi', 'salama@gmail.com', '$2y$10$zoTNGwDN9dLPjHUkmVfU/.RiqiHvnD/765W.247dT1iHe6rqVLaVa', 'sale', 'etudiant', '2020-06-03 09:07:34', '2020-06-03 09:07:34'),
(48, 'ghoumari', 'salah', '1999-11-30', '0758213565', 'tsi', 'ghoumari@gmail.com', '$2y$10$9vJBKiC69DEFLHRpes1FHerNFSPWNvuRP59LT/cjFNOtG3peZrcu6', 'casablanka', 'professeur', '2020-06-03 09:08:27', '2020-06-03 09:08:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_filiere` (`id_filiere`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`filiere_id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_filiere` (`id_filiere`),
  ADD KEY `code_prof` (`code_prof`),
  ADD KEY `id_cour` (`id_cour`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Index pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Index pour la table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD KEY `id_quiz` (`id_quiz`);

--
-- Index pour la table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_filiere` (`id_filiere`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere` (`filiere`);

--
-- Index pour la table `results`
--
ALTER TABLE `results`
  ADD KEY `id_quiz` (`id_quiz`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Index pour la table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere_user` (`filiere_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
