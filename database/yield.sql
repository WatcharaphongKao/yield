-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for yield
CREATE DATABASE IF NOT EXISTS `yield` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `yield`;

-- Dumping structure for table yield.add_yield
CREATE TABLE IF NOT EXISTS `add_yield` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at_yeild` date NOT NULL,
  `yield_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_yield` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `status_notify` int NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.add_yield: ~15 rows (approximately)
DELETE FROM `add_yield`;
INSERT INTO `add_yield` (`id`, `created_at_yeild`, `yield_code`, `line`, `count`, `color`, `quality`, `type_yield`, `weight`, `status`, `status_notify`, `description`, `department`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(8, '2024-09-19', 'YC-24091900001', 'A', '20', 'BL', 'CB', 'TYC-0001', 999, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 01:23:04', '2024-09-25 07:59:48'),
	(9, '2024-09-20', 'YC-24091900002', 'A', '20', 'BL', 'CB', 'TYC-0002', 1107, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 01:24:16', '2024-09-25 07:59:48'),
	(10, '2024-09-20', 'YC-24091900003', 'B', '20', 'BL', 'CZ', 'TYC-0001', 1107, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 01:24:33', '2024-09-25 07:59:48'),
	(11, '2024-09-20', 'YC-24091900004', 'A', '20', 'BL', 'CB', 'TYC-0001', 1000, 1, 0, 'test', 'test', 'test', NULL, '2024-09-19 08:39:04', '2024-09-25 07:59:48'),
	(12, '2024-09-20', 'YC-24091900005', 'A', '20', 'BL', 'CB', 'TYC-0003', 1107, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 09:58:02', '2024-09-25 07:59:48'),
	(13, '2024-09-20', 'YC-24091900006', 'A', '20', 'BL', 'CB', 'TYC-0004', 500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 09:58:16', '2024-09-25 07:59:48'),
	(14, '2024-09-20', 'YC-24091900007', 'A', '20', 'BL', 'CB', 'TYC-0001', 1500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 10:06:01', '2024-09-25 07:59:48'),
	(15, '2024-09-20', 'YC-24091900008', 'A', '20', 'BL', 'CB', 'TYC-0001', 1500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 10:06:01', '2024-09-25 07:59:48'),
	(16, '2024-09-20', 'YC-24091900009', 'A', '20', 'BL', 'CB', 'TYC-0001', 1500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 10:06:01', '2024-09-25 07:59:48'),
	(17, '2024-09-20', 'YC-24091900010', 'A', '20', 'BL', 'CB', 'TYC-0001', 1500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 10:06:01', '2024-09-25 07:59:48'),
	(18, '2024-09-20', 'YC-24091900011', 'A', '20', 'BL', 'CB', 'TYC-0001', 1500, 0, 0, 'test', 'test', 'test', NULL, '2024-09-19 10:06:01', '2024-09-25 07:59:48'),
	(19, '2024-09-20', 'YC-24092000001', 'J', '48', 'NT', 'CZ', 'TYC-0001', 1107, 1, 0, 'testa', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', 'Watcharaphong', '2024-09-20 08:20:16', '2024-09-25 07:59:48'),
	(20, '2024-09-20', 'YC-24092000002', 'B', '23', 'GR', 'CZ', 'TYC-0002', 810, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-20 09:45:04', '2024-09-25 07:59:48'),
	(21, '2024-09-20', 'YC-24092000003', 'B', '20', 'GR', 'CZ', 'TYC-0004', 1000, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-20 09:48:22', '2024-09-25 07:59:48'),
	(22, '2024-09-23', 'YC-24092300001', 'C', '20', 'BL', 'CZ', 'TYC-0003', 93, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-23 06:42:14', '2024-09-25 07:59:48'),
	(23, '2024-09-24', 'YC-24092400001', 'M', '28', 'NT', 'CZ', 'TYC-0018', 100, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-24 02:15:49', '2024-09-25 07:59:48'),
	(24, '2024-09-25', 'YC-24092500001', 'B', '23', 'GR', 'FJ', 'TYC-0005', 508, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-25 08:20:20', '2024-09-25 09:03:23'),
	(25, '2024-09-25', 'YC-24092500002', 'B', '20', 'GR', 'CZ', 'TYC-0001', 1107, 0, 0, 'test', 'เทคโนโลยีสารสนเทศ', 'Watcharaphong', NULL, '2024-09-25 08:22:04', '2024-09-25 09:03:23');

-- Dumping structure for table yield.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.cache: ~0 rows (approximately)
DELETE FROM `cache`;

-- Dumping structure for table yield.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.cache_locks: ~0 rows (approximately)
DELETE FROM `cache_locks`;

-- Dumping structure for table yield.color
CREATE TABLE IF NOT EXISTS `color` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.color: ~4 rows (approximately)
DELETE FROM `color`;
INSERT INTO `color` (`id`, `color`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'BL', 0, NULL, NULL, NULL, NULL),
	(2, 'SW', 0, NULL, NULL, NULL, NULL),
	(3, 'GR', 0, NULL, NULL, NULL, NULL),
	(4, 'NT', 0, NULL, NULL, NULL, NULL);

-- Dumping structure for table yield.count
CREATE TABLE IF NOT EXISTS `count` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.count: ~28 rows (approximately)
DELETE FROM `count`;
INSERT INTO `count` (`id`, `count`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, '20', 0, NULL, NULL, NULL, NULL),
	(2, '23', 0, NULL, NULL, NULL, NULL),
	(3, '24', 0, NULL, NULL, NULL, NULL),
	(4, '28', 0, NULL, NULL, NULL, NULL),
	(5, '30', 0, NULL, NULL, NULL, NULL),
	(6, '32', 0, NULL, NULL, NULL, NULL),
	(7, '34', 0, NULL, NULL, NULL, NULL),
	(8, '36', 0, NULL, NULL, NULL, NULL),
	(9, '37', 0, NULL, NULL, NULL, NULL),
	(10, '38', 0, NULL, NULL, NULL, NULL),
	(11, '40', 0, NULL, NULL, NULL, NULL),
	(12, '42', 0, NULL, NULL, NULL, NULL),
	(13, '44', 0, NULL, NULL, NULL, NULL),
	(14, '46', 0, NULL, NULL, NULL, NULL),
	(15, '48', 0, NULL, NULL, NULL, NULL),
	(16, '50', 0, NULL, NULL, NULL, NULL),
	(17, '52', 0, NULL, NULL, NULL, NULL),
	(18, '55', 0, NULL, NULL, NULL, NULL),
	(19, '60', 0, NULL, NULL, NULL, NULL),
	(20, '63', 0, NULL, NULL, NULL, NULL),
	(21, '70', 0, NULL, NULL, NULL, NULL),
	(22, '75', 0, NULL, NULL, NULL, NULL),
	(23, '80', 0, NULL, NULL, NULL, NULL),
	(24, '88', 0, NULL, NULL, NULL, NULL),
	(25, '90', 0, NULL, NULL, NULL, NULL),
	(26, '95', 0, NULL, NULL, NULL, NULL),
	(27, '100', 0, NULL, NULL, NULL, NULL),
	(28, '110', 0, NULL, NULL, NULL, NULL);

-- Dumping structure for table yield.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table yield.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.jobs: ~0 rows (approximately)
DELETE FROM `jobs`;

-- Dumping structure for table yield.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.job_batches: ~0 rows (approximately)
DELETE FROM `job_batches`;

-- Dumping structure for table yield.line
CREATE TABLE IF NOT EXISTS `line` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.line: ~14 rows (approximately)
DELETE FROM `line`;
INSERT INTO `line` (`id`, `line`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'A', 0, NULL, NULL, NULL, NULL),
	(2, 'B', 0, NULL, NULL, NULL, NULL),
	(3, 'C', 0, NULL, NULL, NULL, NULL),
	(4, 'D', 0, NULL, NULL, NULL, NULL),
	(5, 'E', 0, NULL, NULL, NULL, NULL),
	(6, 'F', 0, NULL, NULL, NULL, NULL),
	(7, 'G', 0, NULL, NULL, NULL, NULL),
	(8, 'H', 0, NULL, NULL, NULL, NULL),
	(9, 'I', 0, NULL, NULL, NULL, NULL),
	(10, 'J', 0, NULL, NULL, NULL, NULL),
	(11, 'K', 0, NULL, NULL, NULL, NULL),
	(12, 'L', 0, NULL, NULL, NULL, NULL),
	(13, 'M', 0, NULL, NULL, NULL, NULL),
	(14, 'N', 0, NULL, NULL, NULL, NULL);

-- Dumping structure for table yield.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.migrations: ~9 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_09_17_090101_add_yield', 2),
	(5, '2024_09_17_090704_type_yield', 2),
	(6, '2024_09_18_014045_type', 3),
	(7, '2024_09_18_014106_quality', 4),
	(8, '2024_09_18_014136_color', 4),
	(9, '2024_09_18_014224_count', 4),
	(10, '2024_09_18_065009_line', 5);

-- Dumping structure for table yield.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table yield.quality
CREATE TABLE IF NOT EXISTS `quality` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.quality: ~9 rows (approximately)
DELETE FROM `quality`;
INSERT INTO `quality` (`id`, `quality`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'CB', 0, NULL, NULL, NULL, NULL),
	(2, 'CZ', 0, NULL, NULL, NULL, NULL),
	(3, 'FJ', 0, NULL, NULL, NULL, NULL),
	(4, 'GJ', 0, NULL, NULL, NULL, NULL),
	(5, 'MD', 0, NULL, NULL, NULL, NULL),
	(6, 'RD', 0, NULL, NULL, NULL, NULL),
	(7, 'RG', 0, NULL, NULL, NULL, NULL),
	(8, 'SG', 0, NULL, NULL, NULL, NULL),
	(9, 'SR', 0, NULL, NULL, NULL, NULL);

-- Dumping structure for table yield.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.sessions: ~1 rows (approximately)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('ZLjHNvHRtZVqWWnjEVyBHvPiTc7pGXCq58hfE5vz', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN05wd3VwMnZ2M2ZNMHB6Z1ZLZWNrOTFLQTBOamVnY1hBUktmcWNiNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly9sb2NhbGhvc3Q6OTk5OS95aWVsZC9wdWJsaWMvc3VtX3lpZWxkcz9lbmQ9MjAyNC0wOS0yNSZzdGFydD0yMDI0LTA5LTI1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJ1c2VyIjthOjc6e3M6ODoidXNlcm5hbWUiO3M6MTM6IndhdGNoYXJhcGhvbmciO3M6NToiZW1wbm8iO3M6NDoiMzA5MSI7czo0OiJuYW1lIjtzOjEzOiJXYXRjaGFyYXBob25nIjtzOjc6InN1cm5hbWUiO3M6MTE6IlBoaW1waGF0aGFtIjtzOjg6IjFzdXJuYW1lIjtzOjI6IlAuIjtzOjEwOiJkZXBhcnRtZW50IjtzOjQ6IkQwMDUiO3M6NToibGV2ZWwiO3M6NToiQWRtaW4iO31zOjEwOiJkZXBhcnRtZW50IjthOjE6e3M6MTU6ImRlcGFydG1lbnRfbmFtZSI7czo1MToi4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Liq4Liy4Lij4Liq4LiZ4LmA4LiX4LioIjt9fQ==', 1727255023);

-- Dumping structure for table yield.type_yield
CREATE TABLE IF NOT EXISTS `type_yield` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type_yield_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_yield` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.type_yield: ~37 rows (approximately)
DELETE FROM `type_yield`;
INSERT INTO `type_yield` (`id`, `type_yield_code`, `type_yield`, `grade`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'TYC-0001', '1ST', '1', 0, NULL, NULL, NULL, NULL),
	(2, 'TYC-0002', '1ST (2L)', '1', 0, NULL, NULL, NULL, NULL),
	(3, 'TYC-0003', '2ND', '2', 0, NULL, NULL, NULL, NULL),
	(4, 'TYC-0005', 'WASTAGE', 'D', 0, NULL, NULL, NULL, NULL),
	(5, 'TYC-0006', 'ยางจาก LAB (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(6, 'TYC-0009', 'ยาง 1L รอเข้า (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(7, 'TYC-0012', 'ยาง 2L รอเข้า (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(8, 'TYC-0015', '2ND ก่อนเที่ยงคืน (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(9, 'TYC-0016', 'ค้างใน LINE (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(10, 'TYC-0019', 'ค้างใน STOCK(1L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(11, 'TYC-0022', 'ค้างใน STOCK(2L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(12, 'TYC-0025', 'ยาง REWORK ผลิต(1L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(13, 'TYC-0028', 'ยาง REWORK ผลิต(2L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(14, 'TYC-0031', 'ทานเฟอร์ค้างใน line(1L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(15, 'TYC-0034', 'ทานเฟอร์ค้างใน line(2L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(16, 'TYC-0037', 'ทานเฟอร์ค้างใน STOCK(1L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(17, 'TYC-0040', 'ทานเฟอร์ค้างใน STOCK(2L) (Grade 1)', '1', 0, NULL, NULL, NULL, NULL),
	(18, 'TYC-0004', '3RD', '3', 0, NULL, NULL, NULL, NULL),
	(22, 'TYC-0007', 'ยางจาก LAB (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(23, 'TYC-0008', 'ยางจาก LAB (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(24, 'TYC-0010', 'ยาง 1L รอเข้า (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(25, 'TYC-0011', 'ยาง 1L รอเข้า (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(26, 'TYC-0013', 'ยาง 2L รอเข้า (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(27, 'TYC-0014', 'ยาง 2L รอเข้า (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(28, 'TYC-0017', 'ค้างใน LINE (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(29, 'TYC-0018', 'ค้างใน LINE (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(30, 'TYC-0020', 'ค้างใน STOCK(1L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(31, 'TYC-0021', 'ค้างใน STOCK(1L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(32, 'TYC-0023', 'ค้างใน STOCK(2L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(33, 'TYC-0024', 'ค้างใน STOCK(2L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(34, 'TYC-0026', 'ยาง REWORK ผลิต(1L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(35, 'TYC-0027', 'ยาง REWORK ผลิต(1L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(36, 'TYC-0029', 'ยาง REWORK ผลิต(2L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(37, 'TYC-0030', 'ยาง REWORK ผลิต(2L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(38, 'TYC-0032', 'ทานเฟอร์ค้างใน line(1L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(39, 'TYC-0033', 'ทานเฟอร์ค้างใน line(1L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(40, 'TYC-0035', 'ทานเฟอร์ค้างใน line(2L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(41, 'TYC-0036', 'ทานเฟอร์ค้างใน line(2L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(42, 'TYC-0038', 'ทานเฟอร์ค้างใน STOCK(1L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(43, 'TYC-0039', 'ทานเฟอร์ค้างใน STOCK(1L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL),
	(44, 'TYC-0041', 'ทานเฟอร์ค้างใน STOCK(2L) (Grade 2)', '2', 0, NULL, NULL, NULL, NULL),
	(45, 'TYC-0042', 'ทานเฟอร์ค้างใน STOCK(2L) (Grade 3)', '3', 0, NULL, NULL, NULL, NULL);

-- Dumping structure for table yield.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yield.users: ~0 rows (approximately)
DELETE FROM `users`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
