-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 01 mai 2020 à 18:44
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
-- Base de données :  `elearninglaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id_cour` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cour`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fields`
--

DROP TABLE IF EXISTS `fields`;
CREATE TABLE IF NOT EXISTS `fields` (
  `filiere_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `filiere` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filiere_description` text COLLATE utf8_unicode_ci NOT NULL,
  `departement` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`filiere_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id_pdf` int(11) NOT NULL AUTO_INCREMENT,
  `id_filiere` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `code_prof` int(11) NOT NULL,
  `commantaire` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `type_cour` enum('cour','tp','td','bibliotheque') COLLATE utf8_unicode_ci DEFAULT 'cour',
  `nbr_telechargement` int(11) DEFAULT '0',
  `date_ajoute` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_pdf` text COLLATE utf8_unicode_ci NOT NULL,
  `pdf_lien` text COLLATE utf8_unicode_ci NOT NULL,
  `titre` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pdf`),
  KEY `id_filiere` (`id_filiere`),
  KEY `code_prof` (`code_prof`),
  KEY `id_cour` (`id_cour`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `emetteur_id` int(11) NOT NULL,
  `emetteur_nom` text COLLATE utf8_unicode_ci NOT NULL,
  `emetteur_email` text COLLATE utf8_unicode_ci NOT NULL,
  `emetteur_telephone` int(11) NOT NULL,
  `emetteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `etat` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0',
  `date_env` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `recepteur_id` int(11) NOT NULL,
  `recepteur_email` text COLLATE utf8_unicode_ci NOT NULL,
  `recepteur_type` enum('admin','professeur','etudiant','visiteur') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_04_30_131647_create_classes_table', 1),
(3, '2020_04_30_131647_create_fields_table', 1),
(4, '2020_04_30_131647_create_files_table', 1),
(5, '2020_04_30_131647_create_messages_table', 1),
(6, '2020_04_30_131647_create_questions_table', 1),
(7, '2020_04_30_131647_create_quizzes_table', 1),
(8, '2020_04_30_131647_create_requests_table', 1),
(9, '2020_04_30_131647_create_results_table', 1),
(10, '2020_04_30_131647_create_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_quiz` int(11) NOT NULL,
  `n_question` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `rep_correcte` text COLLATE utf8_unicode_ci NOT NULL,
  `rep_2` text COLLATE utf8_unicode_ci NOT NULL,
  `rep_3` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id_quiz` (`id_quiz`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id_quiz` int(11) NOT NULL AUTO_INCREMENT,
  `nom_quiz` text COLLATE utf8_unicode_ci NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `dernier_delai` datetime DEFAULT NULL,
  `date_pub` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_quiz`),
  KEY `id_prof` (`id_prof`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `date_naiss` date NOT NULL,
  `filiere` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `num_tele` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mdps` text COLLATE utf8_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur') COLLATE utf8_unicode_ci NOT NULL,
  `etat` enum('-1','0','1') COLLATE utf8_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id_quiz` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `resultat` int(11) NOT NULL,
  `quesiont_corrcete` text COLLATE utf8_unicode_ci,
  `question_incorrecte` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id_quiz` (`id_quiz`),
  KEY `id_etudiant` (`id_etudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` text COLLATE utf8_unicode_ci NOT NULL,
  `prenom_user` text COLLATE utf8_unicode_ci NOT NULL,
  `date_naiss_user` date NOT NULL,
  `num_tele_user` text COLLATE utf8_unicode_ci NOT NULL,
  `filiere_user` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `email_user` text COLLATE utf8_unicode_ci NOT NULL,
  `mdps_user` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse_user` text COLLATE utf8_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur','admin') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere_user` (`filiere_user`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email_user`, `mdps_user`, `adresse_user`, `type_user`, `created_at`, `updated_at`) VALUES
(1, 'elbouayadi', 'aiman', '2020-08-08', '05488964', 'all', 'elbouayadi@gmail.com', '12345', 'meknes', 'admin', '2020-04-30 15:21:00', '2020-04-30 15:21:00'),
(2, 'elkhebaz', 'mohammed', '2020-08-08', '0587485', 'all', 'elkhebaz@gmail.com', 'elkhebaz55', 'rabat', 'admin', '2020-04-30 15:22:10', '2020-04-30 15:54:01'),
(3, 'omari', 'soufian', '2015-05-05', '0548546', 'gi', 'omari@gmail.com', '222', 'fes', 'professeur', '2020-04-30 19:00:00', '2020-04-30 19:00:00'),
(4, 'maalmi', 'bilal', '2020-04-04', '05612', 'gi', 'maalmi@gmail.com', '5555', 'meknes', 'professeur', '2020-04-30 19:05:54', '2020-04-30 19:05:54'),
(5, 'hakouni', 'rabie', '2020-08-08', '45', 'tm', 'rabie@gmail.com', '65', 'meknes', 'etudiant', '2020-05-01 15:34:34', '2020-05-01 15:34:34'),
(8, 'test', 'test11', '2015-05-05', '4544', 'gi', 'testeee@gmail.com', '22244445', 'meknes', 'professeur', '2020-05-01 16:49:58', '2020-05-01 17:46:17'),
(7, 'hakouni', 'rabie', '2020-08-08', '45', 'tm', 'rabie@gmail.com', '65', 'meknes', 'etudiant', '2020-05-01 15:35:27', '2020-05-01 15:35:27');

DELIMITER $$
--
-- Évènements
--
DROP EVENT `drop_demande`$$
CREATE DEFINER=`root`@`localhost` EVENT `drop_demande` ON SCHEDULE EVERY 1 SECOND STARTS '2020-04-13 03:14:04' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM requests where etat='0' or etat='1'$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
