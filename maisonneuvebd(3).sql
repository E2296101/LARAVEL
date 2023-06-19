-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 19 juin 2023 à 15:04
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maisonneuvebd`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu_fr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_publication` datetime NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_etudiant_id_foreign` (`etudiant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu_fr`, `contenu_en`, `date_publication`, `etudiant_id`, `created_at`, `updated_at`) VALUES
(2, 'Les frameworks JavaScript ', 'Le développement web moderne repose largement sur l\'utilisation de frameworks JavaScript pour accélérer le processus de développement et faciliter la création d\'interfaces utilisateur interactives. Parmi les frameworks les plus populaires, on retrouve Angular, React et Vue.js. Angular, développé par Google, offre un cadre complet pour le développement d\'applications web. React, créé par Facebook, se concentre sur la construction d\'interfaces utilisateur réactives et réutilisables. Quant à Vue.js, il est apprécié pour sa simplicité et sa flexibilité. Tous ces frameworks ont une communauté active et proposent une large gamme de fonctionnalités pour répondre aux besoins des développeurs web d\'aujourd\'hui.', 'Modern web development heavily relies on the use of JavaScript frameworks to expedite the development process and facilitate the creation of interactive user interfaces. Among the most popular frameworks are Angular, React, and Vue.js. Angular, developed by Google, provides a comprehensive framework for web application development. React, created by Facebook, focuses on building reactive and reusable user interfaces. Vue.js, on the other hand, is appreciated for its simplicity and flexibility. All of these frameworks have active communities and offer a wide range of features to cater to the needs of today\'s web developers.', '2023-06-06 00:00:00', 1, NULL, NULL),
(3, 'La programmation orientée objet ', 'La programmation orientée objet (POO) est un paradigme de programmation puissant qui offre de nombreux avantages dans le développement logiciel. En utilisant la POO, les développeurs peuvent organiser leur code en objets autonomes qui encapsulent à la fois des données et des fonctionnalités. Cela facilite la modularité, la réutilisabilité et la maintenance du code, car les objets peuvent être développés indépendamment les uns des autres et utilisés dans différentes parties de l\'application. De plus, la POO permet de mettre en œuvre des concepts tels que l\'héritage et le polymorphisme, ce qui améliore la flexibilité et l\'extensibilité du code. En somme, la programmation orientée objet est un choix judicieux pour les projets de développement logiciel à grande échelle.', 'Object-oriented programming (OOP) is a powerful programming paradigm that offers numerous advantages in software development. By using OOP, developers can organize their code into autonomous objects that encapsulate both data and functionality. This facilitates code modularity, reusability, and maintenance, as objects can be developed independently and used in different parts of the application. Moreover, OOP enables the implementation of concepts such as inheritance and polymorphism, enhancing code flexibility and extensibility. Overall, object-oriented programming is a wise choice for large-scale software development projects.', '2023-06-14 00:00:00', 1, NULL, NULL),
(9, 'La sécurité en programmation', 'La sécurité est un aspect essentiel de la programmation, car les applications et les systèmes sont constamment exposés à des menaces potentielles. Il existe plusieurs bonnes pratiques de sécurité que les développeurs doivent suivre pour protéger leurs applications. Tout d\'abord, ils devraient toujours valider et échapper les entrées utilisateur pour prévenir les attaques d\'injection de code. Ensuite, l\'utilisation de bibliothèques et de frameworks sécurisés et régulièrement mis à jour est fortement recommandée. De plus, la mise en œuvre de l\'authentification et de l\'autorisation, ainsi que le chiffrement des données sensibles, sont des mesures essentielles pour renforcer la sécurité. Enfin, la réalisation de tests de pénétration réguliers et la formation continue des développeurs sur les nouvelles vulnérabilités sont des pratiques indispensables pour garantir la sécurité des applications.', 'Security is a crucial aspect of programming, as applications and systems are constantly exposed to potential threats. There are several security best practices that developers should follow to protect their applications. Firstly, they should always validate and sanitize user inputs to prevent code injection attacks. Secondly, the use of secure and regularly updated libraries and frameworks is highly recommended. Additionally, implementing authentication and authorization, as well as encrypting sensitive data, are essential measures to strengthen security. Lastly, conducting regular penetration testing and providing ongoing training to developers on emerging vulnerabilities are indispensable practices to ensure application security.', '2023-06-04 00:00:00', 1, NULL, NULL),
(10, 'la communication interpersonnelle', '\r\nTitre du paragraphe 1 : L\'importance de la communication interpersonnelle\r\n\r\nLa communication interpersonnelle joue un rôle essentiel dans nos vies quotidiennes. C\'est un moyen essentiel de transmettre des idées, d\'établir des relations significatives et de résoudre les conflits. Une communication efficace permet de construire des liens solides et de renforcer la confiance entre les individus. Elle favorise également la compréhension mutuelle et la résolution de problèmes. En développant nos compétences en communication, nous pouvons éviter les malentendus, exprimer nos besoins et nos opinions de manière claire, et écouter activement les autres. En somme, la communication interpersonnelle est une compétence précieuse qui contribue à des relations harmonieuses et à un meilleur fonctionnement de la société.', 'Interpersonal communication plays a crucial role in our daily lives. It is an essential means of conveying ideas, establishing meaningful relationships, and resolving conflicts. Effective communication helps build strong bonds and enhances trust among individuals. It also fosters mutual understanding and problem-solving. By developing our communication skills, we can avoid misunderstandings, express our needs and opinions clearly, and actively listen to others. In essence, interpersonal communication is a valuable skill that contributes to harmonious relationships and better societal functioning.', '2023-06-18 00:00:00', 2, NULL, NULL),
(11, ' l\'exercice physique', 'L\'exercice physique régulier apporte de nombreux avantages pour la santé et le bien-être. Tout d\'abord, il améliore la condition physique générale en renforçant les muscles et les os, en améliorant l\'endurance et en favorisant la flexibilité. De plus, l\'exercice régulier réduit le risque de développer des maladies chroniques telles que les maladies cardiaques, le diabète de type 2 et l\'obésité. Il contribue également à maintenir un poids santé en brûlant des calories et en favorisant la perte de graisse. En outre, l\'exercice physique a des effets positifs sur la santé mentale en réduisant le stress, en améliorant l\'humeur et en favorisant un sommeil de meilleure qualité. En incluant régulièrement de l\'exercice dans notre routine quotidienne, nous pouvons améliorer notre qualité de vie globale.', 'Regular physical exercise brings numerous advantages for health and well-being. Firstly, it improves overall fitness by strengthening muscles and bones, enhancing endurance, and promoting flexibility. Additionally, regular exercise reduces the risk of developing chronic diseases such as heart disease, type 2 diabetes, and obesity. It also helps maintain a healthy weight by burning calories and facilitating fat loss. Moreover, physical exercise has positive effects on mental health by reducing stress, improving mood, and promoting better sleep. By incorporating exercise regularly into our daily routine, we can enhance our overall quality of life.', '2023-06-01 00:00:00', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `ville_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etudiants_ville_id_foreign` (`ville_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `adresse`, `phone`, `date_naissance`, `ville_id`, `created_at`, `updated_at`) VALUES
(1, 'Amine', '3591 Boul Lévesque O', '514 466-4650', '1985-01-01', 2, '2023-06-19 05:28:58', '2023-06-19 05:28:58'),
(2, 'HANI', '3591 Boul Lévesque O', '514 466-4650', '1985-01-01', 1, '2023-06-19 05:29:37', '2023-06-19 05:29:37');

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
-- Structure de la table `fichiers`
--

DROP TABLE IF EXISTS `fichiers`;
CREATE TABLE IF NOT EXISTS `fichiers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chemin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_upload` date NOT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fichiers_etudiant_id_foreign` (`etudiant_id`)
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_01_134719_etudiant', 1),
(6, '2023_06_01_134735_ville', 1),
(7, '2023_06_14_234245_article', 1),
(8, '2023_06_14_234401_fichier', 1);

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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amine@gmail.com', NULL, '$2y$10$f/aWcedlCIJTawDtubMVzeLah8gQxGTO1cZkvOTCDybIXLUKqPDJa', NULL, '2023-06-19 05:28:58', '2023-06-19 05:28:58'),
(2, 'hani@gmail.com', NULL, '$2y$10$jayTB4ouA70U81JajhvIFORiqeIcDy9KgPeyR3AXeQq7X5bZkzbCG', NULL, '2023-06-19 05:29:37', '2023-06-19 05:29:37');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Montréal', NULL, NULL),
(2, 'Laval', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
