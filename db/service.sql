-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for service
CREATE DATABASE IF NOT EXISTS `service` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `service`;

-- Dumping structure for table service.appointments
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `numberPlate` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `package` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `appointmentDate` date DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.appointments: ~24 rows (approximately)
REPLACE INTO `appointments` (`id`, `name`, `numberPlate`, `phone`, `package`, `status`, `appointmentDate`, `user_id`, `created_at`, `updated_at`) VALUES
	(3, 'test', 'PC-5742', '+94770000000', 'Extra Budget pack', 'Approved', '2024-05-20', NULL, '2024-03-08 12:23:04', '2024-06-04 04:38:30'),
	(4, 'test', 'PR-2456', '+94770000000', 'Extra Budget pack', 'Canceled', '2024-05-20', NULL, '2024-03-08 12:29:46', '2024-05-20 09:40:28'),
	(5, 'user', 'CAA-4562', '+94742975739', 'Full Package', 'Canceled', '2024-05-20', '3', '2024-03-08 12:31:29', '2024-05-20 09:40:29'),
	(22, 'isuru', 'CBB-4568', '+94766033442', 'Budget pack', 'Canceled', '2024-05-20', '7', '2024-03-15 07:33:18', '2024-05-20 09:40:30'),
	(23, 'isuru', 'CBC-4568', '+94770000000', 'Select Package', 'Canceled', '2024-05-20', NULL, '2024-05-20 03:00:15', '2024-05-20 09:40:31'),
	(24, 'apple', 'CAK-5685', '+94766033442', 'Budget pack', 'Approved', '2024-05-20', NULL, '2024-05-20 03:09:48', '2024-05-20 09:40:35'),
	(25, 'admin', 'CBI-7658', '+94770000000', 'Budget pack', 'Approved', '2024-05-20', NULL, '2024-05-20 03:16:17', '2024-05-20 09:40:34'),
	(35, 'user', 'KI-8435', '+94766033442', 'Budget pack', 'Approved', '2024-05-21', '8', '2024-05-20 04:21:35', '2024-05-20 09:40:35'),
	(36, 'apple', 'KC-8674', '+94770000000', 'Custom', 'Approved', '2024-06-04', NULL, '2024-05-28 06:58:17', '2024-06-04 04:27:06'),
	(37, 'isuru', '65-8464', '+94770000000', 'Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:41:57', '2024-06-04 03:43:18'),
	(38, 'shan', 'GG-2454', '+94770000000', 'Semi Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:42:08', '2024-06-04 03:43:23'),
	(39, 'apple', 'HH-2486', '+94770000000', 'Semi Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:42:18', '2024-06-04 03:43:25'),
	(40, 'apple', 'KW-5846', '+94766033442', 'Full Package', 'Approved', '2024-06-05', NULL, '2024-06-04 03:42:27', '2024-06-04 03:43:28'),
	(41, 'admin', 'KR-5846', '+94770000000', 'Semi Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:42:39', '2024-06-04 03:43:30'),
	(42, 'admin', 'CAA-5498', '+94770000000', 'Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:43:48', '2024-06-04 08:09:05'),
	(43, 'user', 'PH-3785', '+94770000000', 'Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 03:43:57', '2024-06-04 08:09:51'),
	(44, 'apple', 'PE-5348', '+94770000000', 'Budget pack', 'In progress', '2024-06-05', NULL, '2024-06-04 03:44:07', '2024-06-04 07:14:23'),
	(45, 'DEV HUB', 'CAA-5834', '+94770000000', 'Budget pack', 'In progress', '2024-06-05', NULL, '2024-06-04 03:44:15', '2024-06-04 07:14:56'),
	(47, 'shan', 'CBA-4538', '+94770000000', 'Budget pack', 'In progress', '2024-06-05', NULL, '2024-06-04 04:35:59', '2024-06-04 07:16:30'),
	(48, 'Isuru', '300-4538', '+94766033442', 'Budget pack', 'In progress', '2024-06-05', NULL, '2024-06-04 05:36:41', '2024-06-04 07:14:33'),
	(49, 'shan', 'PC-9538', '+947660333442', 'Budget pack', 'In Progress', '2024-06-05', NULL, '2024-06-04 07:23:15', '2024-06-04 07:23:15'),
	(50, 'admin', 'KW-5983', '+947660333442', 'Budget pack', 'In Progress', '2024-06-05', NULL, '2024-06-04 07:28:25', '2024-06-04 07:28:25'),
	(51, 'test phone', 'KV-2846', '0766033442', 'Full Package', 'In Progress', '2024-06-05', NULL, '2024-06-04 07:40:49', '2024-06-04 07:40:49'),
	(52, 'testnumber2', 'CBC-5985', '+947660333442', 'Budget pack', 'In Progress', '2024-06-05', NULL, '2024-06-04 07:45:41', '2024-06-04 07:45:41'),
	(53, 'test0', 'CAG-5946', '+947660333442', 'Full Package', 'In Progress', '2024-06-05', NULL, '2024-06-04 08:06:57', '2024-06-04 08:06:57'),
	(54, 'final test isuru', 'CBC-8283', '+94766033442', 'Full Package', 'In Progress', '2024-06-05', NULL, '2024-06-04 08:08:21', '2024-06-04 08:08:21'),
	(55, 'isuru', 'CAC-6880', '+94766033442', 'Budget pack', 'Approved', '2024-06-05', NULL, '2024-06-04 08:18:24', '2024-06-04 08:25:20');

-- Dumping structure for table service.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table service.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.migrations: ~8 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2024_03_07_070103_create_sessions_table', 1),
	(7, '2024_03_08_104303_create_packages_table', 2),
	(8, '2024_03_08_111229_create_packages_table', 3),
	(9, '2024_03_08_111606_create_packages_table', 4),
	(10, '2024_03_08_170452_create_appointments_table', 5),
	(11, '2024_03_14_160032_create_notifications_table', 6),
	(12, '2024_05_20_093542_drop_appointments_table', 7),
	(13, '2024_05_20_093934_drop_appointments_table', 8);

-- Dumping structure for table service.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.notifications: ~0 rows (approximately)

-- Dumping structure for table service.packages
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pack_name` varchar(255) DEFAULT NULL,
  `pack_price` varchar(255) DEFAULT NULL,
  `seats_wash` varchar(255) DEFAULT NULL,
  `vacuum_cleaning` varchar(255) DEFAULT NULL,
  `exterior_cleaning` varchar(255) DEFAULT NULL,
  `interior_wet_cleaning` varchar(255) DEFAULT NULL,
  `window_wiping` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.packages: ~4 rows (approximately)
REPLACE INTO `packages` (`id`, `pack_name`, `pack_price`, `seats_wash`, `vacuum_cleaning`, `exterior_cleaning`, `interior_wet_cleaning`, `window_wiping`, `created_at`, `updated_at`) VALUES
	(19, 'Budget pack', '2900', NULL, 'on', 'on', NULL, NULL, '2024-03-08 07:37:47', '2024-05-07 12:48:50'),
	(21, 'Full Package', '22000', 'on', 'on', 'on', 'on', 'on', '2024-03-08 08:27:50', '2024-05-07 12:47:40'),
	(22, 'Semi Budget pack', '15000', NULL, NULL, 'on', 'on', 'on', '2024-03-08 12:58:35', '2024-05-07 12:47:47');

-- Dumping structure for table service.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.password_reset_tokens: ~2 rows (approximately)
REPLACE INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('isurushe427@gmail.com', '$2y$12$QIhGcvViBL/i34A.PxIxSu9TDSPGMs35FPKtjDKPWT7tc5SjUlHJa', '2024-05-07 10:58:52'),
	('isuruwickramasinghe427@gmail.com', '$2y$12$R/ppdvt9/wkcU7lQ1CYXD.aU/TWh71H9R16wJPk3oLLeaafZ8k3j6', '2024-05-07 10:59:45');

-- Dumping structure for table service.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table service.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.sessions: ~2 rows (approximately)
REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('CnACbAVfflBM6PkZ6RvfZLdWryQ3ATGhCRlbXN0O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEtxRlhwZE8xb0ZuZW9GQTQxVmNVNGxoTmdNdnMxbmdRS1hoY0hEVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1717509968),
	('ZutrwtiyB3yKK4TxZ4IZtHw3jriYzRZ3UQV5jLwB', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSEJCWlN2U3dQQzYyamlFSm9seE9ROVkydFg4WlBlMUhpbkFxejJHUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1717509531);

-- Dumping structure for table service.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table service.users: ~2 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(3, 'Isuru', 'isuruwickramasinghe427@gmail.com', '0766033442', 'Ihalamudugamuwa,maeliya', '0', '2024-03-14 08:19:14', '$2y$12$m3h7vxP4x7J2/zyDNnFGtuidB2xaUse33HJq.3wRuDSUU9QeeEqjS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-07 04:17:19', '2024-03-15 12:11:46'),
	(4, 'admin', 'admin@gmail.com', '0770000000', 'Kurunegala', '1', '2024-03-14 14:07:08', '$2y$12$8sCUUHhFNvFk1v1SvxQaAucahqOJeOXvmwgKtcEDV4fr1xPBesNe2', NULL, NULL, '2024-03-14 14:08:04', NULL, NULL, NULL, '2024-03-07 04:18:10', '2024-03-07 04:18:10'),
	(7, 'isuru shehan', 'isurushe427@gmail.com', '0766033442', 'Kurunegala', '0', '2024-03-14 08:34:14', '$2y$12$5T2vV5zq6l6uSqI7XuxHwOfPoh0Muq74uv8ZlGk5ghpbG.4zQD1fW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-14 07:18:26', '2024-03-14 08:34:14'),
	(8, 'user', 'user@gmail.com', '0770000000', 'Kurunegala', '0', '2024-05-07 16:39:34', '$2y$12$uYvlujxn1Bk4WmA3RLzX5eBWt6zDZuosxRBXZOaf9.k8REaIWRJqu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-07 11:00:45', '2024-05-07 11:00:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
