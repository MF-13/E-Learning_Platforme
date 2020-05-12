-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 mai 2020 à 20:25
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
-- Base de données : `elearninglaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id_cour` int(11) NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fields`
--

INSERT INTO `fields` (`filiere_id`, `filiere`, `filiere_description`, `departement`, `created_at`, `updated_at`) VALUES
('fba', 'finance baque et assurance', 'une filiere pour la banque et l assurance', 'technique de management', NULL, NULL),
('gi', 'genie informatique', 'une filiere pour les genies informatiques', 'genie informatique', NULL, NULL),
('tm', 'technique de management', 'une filiere pour le mnagement', 'technique de management', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id_pdf` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_msg` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_30_131647_create_classes_table', 1),
(2, '2020_04_30_131647_create_fields_table', 1),
(3, '2020_04_30_131647_create_files_table', 1),
(4, '2020_04_30_131647_create_messages_table', 1),
(5, '2020_04_30_131647_create_questions_table', 1),
(6, '2020_04_30_131647_create_quizzes_table', 1),
(7, '2020_04_30_131647_create_requests_table', 1),
(8, '2020_04_30_131647_create_results_table', 1),
(9, '2020_04_30_131647_create_users_table', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `mdps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur') COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` enum('-1','0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `email_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdps_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` enum('etudiant','professeur','admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom_user`, `prenom_user`, `date_naiss_user`, `num_tele_user`, `filiere_user`, `email_user`, `mdps_user`, `adresse_user`, `type_user`, `created_at`, `updated_at`) VALUES
(1, 'elbouayadi', 'aiman', '2020-05-19', '21111', 'gi', 'elbouayadi@gmail.com', '114477', 'meknes', 'admin', NULL, '2020-05-03 15:47:37'),
(2, 'errou', 'hamza', '2015-05-05', '0548546', 'gi', 'errou@gmail.com', '874569', 'meknes', 'etudiant', '2020-05-03 15:48:03', '2020-05-03 15:48:03'),
(3, 'omari', 'soufian', '2020-04-04', '454569', 'tm', 'omari@gmail.com', 'aa4789', 'fes', 'professeur', '2020-05-03 15:48:30', '2020-05-03 15:48:30'),
(4, 'maalmi', 'bilal', '2020-08-08', '05612458', 'fba', 'maalmi@gmail.com', '2227788', 'meknes', 'professeur', '2020-05-03 15:49:04', '2020-05-03 15:49:04');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_filiere` (`id_filiere`);

--
-- Index pour la table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`filiere_id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_pdf`),
  ADD KEY `id_filiere` (`id_filiere`),
  ADD KEY `code_prof` (`code_prof`),
  ADD KEY `id_cour` (`id_cour`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_msg`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id_pdf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
