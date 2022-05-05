-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 mai 2022 à 15:38
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emmaus_synergie`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions`
--

DROP TABLE IF EXISTS `actions`;
CREATE TABLE IF NOT EXISTS `actions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idActivites` bigint(20) UNSIGNED NOT NULL,
  `dateAction` date DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actions_idactivites_foreign` (`idActivites`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actions`
--

INSERT INTO `actions` (`id`, `idActivites`, `dateAction`, `title`, `address`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-06-06', 'One Title', '14 rue cheigneau', 'Image', 'some contents', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 1, NULL, 'This is a action', '6 place roger salengro', 'Action_1650632192.jpg', 'it is about today', '2022-04-22 10:56:32', '2022-04-22 10:56:32');

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idVilles` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_idvilles_foreign` (`idVilles`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activities`
--

INSERT INTO `activities` (`id`, `idVilles`, `type`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'prevention Specialise', 'Villiers Sur Marne', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 2, 'prevention Specialise', 'Plessis Trevise', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(3, 3, 'prevention Specialise', 'La Queue en Brie', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(4, 4, 'prevention Specialise', 'Bry sur Marne', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(5, 1, 'auto-ecole', 'Villiers Sur Marne', '2022-04-22 10:28:46', '2022-04-22 10:28:46');

-- --------------------------------------------------------

--
-- Structure de la table `activity_users`
--

DROP TABLE IF EXISTS `activity_users`;
CREATE TABLE IF NOT EXISTS `activity_users` (
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`activity_id`,`user_id`),
  KEY `activity_users_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_04_09_112615_create_roles_table', 1),
(5, '2022_04_10_040721_create_structures_table', 1),
(6, '2022_04_14_131810_create_activities_table', 1),
(7, '2022_04_14_171426_create_actions_table', 1),
(8, '2022_04_14_180416_create_rapports_table', 1),
(9, '2022_04_15_000138_create_villes_table', 1),
(10, '2022_04_15_050628_create_partenaires_table', 1),
(11, '2022_04_21_031025_create_activity_users_table', 1),
(12, '2023_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

DROP TABLE IF EXISTS `rapports`;
CREATE TABLE IF NOT EXISTS `rapports` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idActivites` bigint(20) UNSIGNED NOT NULL,
  `annee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fichier` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rapports_idactivites_foreign` (`idActivites`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rapports`
--

INSERT INTO `rapports` (`id`, `idActivites`, `annee`, `fichier`, `created_at`, `updated_at`) VALUES
(1, 1, '2019', 'fichier1', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 1, '2021', 'fichier2', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(3, 1, '2022', 'fichier3', '2022-04-22 10:28:46', '2022-04-22 10:28:46');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'superAdmin', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 'admin', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(3, 'customer', '2022-04-22 10:28:46', '2022-04-22 10:28:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idRoles` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_idroles_foreign` (`idRoles`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `idRoles`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'this is a name', 'xxxxxx', 'secretariat@emmaus-synergie.fr', NULL, '$2y$10$MDb2LciBdJA/RVQYHex8w.h7vFG/cqGOERy9.5cw/v5E2qkwxVJri', NULL, '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 1, 'kaisan', 'sayed', 'kaisan@gmail.com', NULL, '$2y$10$v.THX2Y1XzrgmboFuYj5BO66ECs8gVivH7Xz547pUcwpsYVBhgN2C', NULL, '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(3, 2, 'kashif', 'sayed', 'kashif@gmail.com', NULL, '$2y$10$bopBuZK3ko.0Y8xaBvakX.W0RSKNrGSyI8s2kiP3kc2g/kBd5aHxW', NULL, '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(4, 3, 'fahinur', 'haq', 'fahinur@gmail.com', NULL, '$2y$10$193xRCTj.x6JV8FDhrnrIe4QKMHniOa6FFe9bZuqfE9HjdNvTah76', NULL, '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(5, 3, 'jahanara', 'haq', 'jh@gmail.com', NULL, '$2y$10$balZaCrozk1qu7twkpG4FO758IBqvCNI9jW82wdQnMZbFjbX2mfSa', NULL, '2022-04-22 11:09:26', '2022-04-22 11:09:26');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Villiers Sur Marne', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(2, 'Plessis Trevise', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(3, 'La Queue en Brie', '2022-04-22 10:28:46', '2022-04-22 10:28:46'),
(4, 'Bry sur Marne', '2022-04-22 10:28:46', '2022-04-22 10:28:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
