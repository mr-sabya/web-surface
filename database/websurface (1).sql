-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2025 at 11:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websurface`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_sections`
--

CREATE TABLE `about_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `title_span` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sections`
--

INSERT INTO `about_sections` (`id`, `title_span`, `title`, `description`, `button_text`, `button_link`, `button_icon`, `button_target`, `created_at`, `updated_at`) VALUES
(1, 'Web Surface', 'Mobile App Development Company', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>\n        <p><strong>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Simply dummy text of the printing and typesetting industry.</strong></p>', 'Request A Quote', '#', 'fas fa-chevron-right fa-icon', '_self', '2025-05-19 00:29:07', '2025-05-19 00:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `about_section_features`
--

CREATE TABLE `about_section_features` (
  `id` bigint UNSIGNED NOT NULL,
  `about_section_id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_section_features`
--

INSERT INTO `about_section_features` (`id`, `about_section_id`, `icon`, `title`, `text`, `counter`, `counter_icon`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'about-features/eBwHCWHUeNVDWzAAmYUN9x2RI2fMJZP1PXy0Q375.svg', 'Experience', 'Years Experience', '20', '+', 'srcl1', '2025-05-19 00:46:09', '2025-05-19 00:46:09'),
(2, 1, 'about-features/fyyHmUUrKo8cveFwj9mZTUHFO6nVz7U3EHBIjd8A.svg', 'Talented Squad', 'Talented Squad', '250', '+', 'srcl2', '2025-05-19 01:05:26', '2025-05-19 01:05:26'),
(3, 1, 'about-features/Gq9PjBjxffPc6LDKvG0NajHDQ4SWQcPeRXEtOHdI.svg', 'Apps Developed', 'Apps Developed', '1200', '+', 'srcl3', '2025-05-19 01:06:07', '2025-05-19 01:06:07'),
(4, 1, 'about-features/bzgd4N5IrsCWydPk3pUG7hTWanfYfRSwWT7WnCvx.svg', 'Projects Delivered', 'Projects Delivered', '100', '%', 'srcl4', '2025-05-19 01:07:05', '2025-05-19 01:07:05'),
(5, 1, 'about-features/H16OfUEAW5kkV7jhJ8uD56LbBLr6pQHORaccckUY.svg', 'Countries Served', 'Countries Served', '120', '+', 'srcl5', '2025-05-19 01:07:42', '2025-05-19 01:07:42'),
(6, 1, 'about-features/oVehHPnsGW5MdziM5OODhWKPQm9ik7S3JJZEwjY3.svg', 'Client Satisfaction', 'Client Satisfaction', '100', '%', 'srcl1', '2025-05-19 01:08:15', '2025-05-19 01:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `paragraph`, `video_link`, `image`, `btn_text`, `btn_link`, `created_at`, `updated_at`) VALUES
(1, 'Take your business to the next level with Web Surface — your trusted partner.', 'Whether you\'re a startup or an established brand, our expert team is here to craft tailored solutions that drive growth, enhance user experience, and ensure long-term success.', 'https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0', 'banners/YLC97lkRc2ova3a7xWVZdyb2NhqLmGjVp4Atgnxt.png', 'Get Started', '/get-started', '2025-05-07 04:01:23', '2025-05-07 04:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'The Retro Studio', 'client_logos/Zj8e5BrSNmkDYyrLBWjPJC2KWe22rjR1lEgg62cW.png', 'https://websurface.info/', '2025-05-07 05:24:17', '2025-05-07 05:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_06_114512_create_settings_table', 2),
(6, '2025_05_07_094852_create_banners_table', 3),
(7, '2025_05_07_102240_create_clients_table', 4),
(8, '2025_05_07_121430_create_services_table', 5),
(9, '2025_05_07_121439_create_technologies_table', 5),
(10, '2025_05_07_121511_create_service_features_table', 5),
(11, '2025_05_07_122355_create_service_processes_table', 5),
(12, '2025_05_07_122517_create_service_addons_table', 5),
(13, '2025_05_07_122529_create_pricings_table', 5),
(14, '2025_05_10_100619_add_section_fields_to_services_table', 6),
(15, '2025_05_11_095702_create_pricing_features_table', 7),
(16, '2025_05_13_065018_create_portfolios_table', 8),
(17, '2025_05_15_071719_create_testimonials_table', 9),
(24, '2025_05_15_110854_create_about_sections_table', 10),
(25, '2025_05_15_110904_create_about_section_features_table', 10),
(26, '2025_05_19_042942_create_why_choose_us_table', 10),
(27, '2025_05_19_044125_create_why_choose_us_features_table', 11),
(28, '2025_05_25_063151_create_our_service_sections_table', 12),
(29, '2025_05_25_070621_create_portfolio_sections_table', 13),
(30, '2025_05_25_073149_create_our_client_sections_table', 14),
(31, '2025_06_01_051032_create_service_technology_table', 14),
(32, '2025_06_01_053505_add_banner_image_to_services_table', 15),
(33, '2025_06_04_071357_create_portfolio_galleries_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `our_client_sections`
--

CREATE TABLE `our_client_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_service_sections`
--

CREATE TABLE `our_service_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `section_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_service_sections`
--

INSERT INTO `our_service_sections` (`id`, `section_text`, `title`, `subtitle`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Service', 'Our Services', 'We think big and have hands in all leading technology platforms to provide you wide array of services.', '2025-05-25 01:13:12', '2025-05-25 01:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `slug`, `title`, `short_description`, `description`, `image`, `service_id`, `client_id`, `start_date`, `end_date`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Branding Creative', 'branding-creative', 'Justo Erat Tempor Eros Adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus, risus sit amet auctor sodales, justo erat tempor eros.', '<p class=\"ql-align-justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><span style=\"color: rgb(0, 0, 0);\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</span>Ipsum et ut qui poss.</p><p><br></p><p class=\"ql-align-center\"><img src=\"data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABkAAD/4QMraHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA3LjEtYzAwMCA3OS5kYWJhY2JiLCAyMDIxLzA0LzE0LTAwOjM5OjQ0ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDNzBGOUIzNDI2MTYxMUVDQjRGQjg3RDFGN0U4NTkxMyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDNzBGOUIzMzI2MTYxMUVDQjRGQjg3RDFGN0U4NTkxMyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjAyMSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NDU5RDc5NjgyNjEwMTFFQzkzMjdEMTdERkQ2NEIzOUIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDU5RDc5NjkyNjEwMTFFQzkzMjdEMTdERkQ2NEIzOUIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAABAQEBAQEBAQEBAQEBAQEBAQEB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\"></p><p><br></p>', 'portfolios/PIs7ubdEHbax5FIOoYTKm59nU2CfSLXGamJ8csul.jpg', 1, 1, '2025-02-01', '2025-03-11', 'https://websurface.info/', 'published', '2025-05-15 00:42:36', '2025-06-04 01:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_galleries`
--

CREATE TABLE `portfolio_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `portfolio_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_sections`
--

CREATE TABLE `portfolio_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_sections`
--

INSERT INTO `portfolio_sections` (`id`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'Our Work', 'Our Latest Creative Work', '2025-05-25 01:13:03', '2025-05-25 01:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_start` decimal(8,2) NOT NULL,
  `price_end` decimal(8,2) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `icon`, `title`, `sub_title`, `price_start`, `price_end`, `duration`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'pricing-icons/Iy4AKeV5YzxqAE9OlUH00xKpIpBVhhskTGDczVog.svg', 'Personal', 'Great For Small Business', 100.00, 500.00, 'One time', 1, '2025-05-13 00:19:46', '2025-05-13 00:19:46'),
(2, 'pricing-icons/gy2fkcmnoRTEua5B2o31xnIDCGGmCxr8wnhtZGFx.svg', 'Advance', 'Great For Small Business', 200.00, 1000.00, 'One Time', 1, '2025-06-01 04:51:21', '2025-06-01 04:51:21'),
(3, 'pricing-icons/zn9FibUKOONMfJ1g2KVysL18DnwquJhmiy9iFmtM.svg', 'Ultimate', 'Great For Small Business', 200.00, 1500.00, 'One Time', 1, '2025-06-01 04:54:46', '2025-06-01 04:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_features`
--

CREATE TABLE `pricing_features` (
  `id` bigint UNSIGNED NOT NULL,
  `pricing_id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing_features`
--

INSERT INTO `pricing_features` (`id`, `pricing_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'Social Media Marketing', '2025-05-13 00:29:15', '2025-05-13 00:29:15'),
(2, 1, '2.100 Keywords', '2025-05-13 00:29:22', '2025-05-13 00:29:22'),
(3, 1, 'One Way Link Building', '2025-05-13 00:29:27', '2025-05-13 00:29:27'),
(4, 1, '5 Free Optimization', '2025-05-13 00:29:33', '2025-05-13 00:29:33'),
(5, 1, '3 Press Releases', '2025-05-13 00:29:39', '2025-05-13 00:29:39'),
(6, 2, 'Social Media Marketing', '2025-06-01 04:53:50', '2025-06-01 04:53:50'),
(7, 2, '2.100 Keywords', '2025-06-01 04:53:54', '2025-06-01 04:53:54'),
(8, 2, 'One Way Link Building', '2025-06-01 04:53:59', '2025-06-01 04:53:59'),
(9, 2, '5 Free Optimization', '2025-06-01 04:54:03', '2025-06-01 04:54:03'),
(10, 2, '3 Press Releases', '2025-06-01 04:54:08', '2025-06-01 04:54:08'),
(11, 3, 'Social Media Marketing', '2025-06-01 04:55:05', '2025-06-01 04:55:05'),
(12, 3, '2.100 Keywords', '2025-06-01 04:55:08', '2025-06-01 04:55:08'),
(13, 3, 'One Way Link Building', '2025-06-01 04:55:11', '2025-06-01 04:55:11'),
(14, 3, '5 Free Optimization', '2025-06-01 04:55:14', '2025-06-01 04:55:14'),
(15, 3, '3 Press Releases', '2025-06-01 04:55:19', '2025-06-01 04:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_section_text` text COLLATE utf8mb4_unicode_ci,
  `process_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_section_text` text COLLATE utf8mb4_unicode_ci,
  `addon_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_section_text` text COLLATE utf8mb4_unicode_ci,
  `pricing_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_section_text` text COLLATE utf8mb4_unicode_ci,
  `portfolio_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_section_text` text COLLATE utf8mb4_unicode_ci,
  `testimonial_section_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_section_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_section_text` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `heading`, `sub_heading`, `short_description`, `description_title`, `description`, `image`, `banner_image`, `created_at`, `updated_at`, `feature_section_title`, `feature_section_sub_title`, `feature_section_text`, `process_section_title`, `process_section_sub_title`, `process_section_text`, `addon_section_title`, `addon_section_sub_title`, `addon_section_text`, `pricing_section_title`, `pricing_section_sub_title`, `pricing_section_text`, `portfolio_section_title`, `portfolio_section_sub_title`, `portfolio_section_text`, `testimonial_section_title`, `testimonial_section_sub_title`, `testimonial_section_text`) VALUES
(1, 'Web Development', 'web-development', 'Need A Premium & Creative Website Designing?', 'From Startup to Enterprise be ready and don\'t worry about design and user experience.', 'Design and develop a creative website with our microscopic detailing and scrupulous strategies.', 'Creative Web Design Service', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry.</p>', 'services/RCtBaVz5phlQLo8GUS2wFGOPllcWjhT5p6iOd50p.jpg', 'services/banner/OxrODm2UnN5S4lIuBvmVx8hoNY9zxHL9WTdUhtbb.jpg', '2025-05-07 07:50:39', '2025-05-31 23:42:42', 'Service', 'Our Services', 'We think big and have hands in all leading technology platforms to provide you wide array of services.', 'Process', 'Our App Development Process', 'Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.', 'We Deliver Our Best', 'Why Choose Niwax', 'Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.', 'Pricing', 'Pricing Table', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Our Projects', 'Some of Our Works', 'We think big and have hands in all leading technology platforms to provide you wide array of services.', 'Service Testimonials', 'Client Speaks', 'Check our customers success stories.');

-- --------------------------------------------------------

--
-- Table structure for table `service_addons`
--

CREATE TABLE `service_addons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_addons`
--

INSERT INTO `service_addons` (`id`, `title`, `text`, `icon`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'Reliable Service. In House Team', 'In vel hendrerit nisi. Vestibulum eget risus velit.', 'service-addons/WkCpFFU0HZQ5ykei5EpOQl06DxHR8ocUE8IpqnOX.svg', 1, '2025-05-13 00:32:51', '2025-05-13 00:32:51'),
(2, 'Trusted by People Like You', 'In vel hendrerit nisi. Vestibulum eget risus velit.', 'service-addons/ygi4XXKi5mcXXRkOinPGx7l3ztH14G4iWRbT9nJR.svg', 1, '2025-06-01 04:49:24', '2025-06-01 04:49:24'),
(3, 'Complete Technical Competency', 'In vel hendrerit nisi. Vestibulum eget risus velit.', 'service-addons/spx67biFIS9ZZChpef7o8jKEJtMgcfEFH5N6niqG.svg', 1, '2025-06-01 04:49:47', '2025-06-01 04:49:47'),
(4, 'Friendly & Cordial in Nature', 'In vel hendrerit nisi. Vestibulum eget risus velit.', 'service-addons/5aX0zhxGxv8x2JEZdYV2mX6TKkDtPAtmZWwGUbxd.svg', 1, '2025-06-01 04:50:06', '2025-06-01 04:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `service_features`
--

CREATE TABLE `service_features` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_features`
--

INSERT INTO `service_features` (`id`, `title`, `text`, `icon`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Designing Services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'service_features/krQFZaddZbgDyghnQrVRkAgZP3RTn54CHOe5J7cr.svg', 1, '2025-05-08 07:30:18', '2025-05-08 07:30:18'),
(2, 'Responsive Web Designing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'service_features/VgFYA3UlcXMSRAgEEYdxcnx3Sj6AqIcl1Jg6oo3n.svg', 1, '2025-06-01 04:48:13', '2025-06-01 04:48:13'),
(3, 'Static Website Designing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'service_features/YnBASuXZ6fKHEd2yeXeIcYfDO6FInZ2PkxjEfSQX.svg', 1, '2025-06-01 04:48:38', '2025-06-01 04:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `service_processes`
--

CREATE TABLE `service_processes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_processes`
--

INSERT INTO `service_processes` (`id`, `title`, `text`, `image`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'Requirement Gathering', 'Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.', 'service_processes/bu35GsSISKQSsDc84cA99mEe2pcbGj258NdtD7Yq.jpg', 1, '2025-05-10 03:57:30', '2025-05-10 03:57:30'),
(2, 'Prototype', 'Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.', 'service_processes/FBaUH7MjVEMbPDq2EXMhoTdaYMbAcSkhYjv336OW.jpg', 1, '2025-06-01 04:40:05', '2025-06-01 04:40:05'),
(3, 'Planing', 'Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.', 'service_processes/YrefTJ1WGBUvZxb7ulQKxNEyBIAPZoVtbBoD0qsF.jpg', 1, '2025-06-01 04:41:24', '2025-06-01 04:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `service_technology`
--

CREATE TABLE `service_technology` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `technology_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_technology`
--

INSERT INTO `service_technology` (`id`, `service_id`, `technology_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `white_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_tags` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` text COLLATE utf8mb4_unicode_ci,
  `og_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenance_mode` tinyint(1) NOT NULL DEFAULT '0',
  `google_analytics_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UTC',
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` int DEFAULT NULL,
  `smtp_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_auth_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `max_failed_login_attempts` int NOT NULL DEFAULT '5',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `tagline`, `logo`, `white_logo`, `favicon`, `email`, `phone`, `address`, `website_link`, `footer_about`, `copyright`, `meta_description`, `meta_tags`, `meta_title`, `og_title`, `og_description`, `og_image`, `maintenance_mode`, `google_analytics_id`, `keywords`, `seo_title`, `currency_symbol`, `language`, `timezone`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `two_factor_auth_enabled`, `max_failed_login_attempts`, `created_at`, `updated_at`) VALUES
(1, 'MY WEBSITE', 'Best website in the world!', 'default-logo.png', 'default-white-logo.png', 'favicon.ico', 'contact@mywebsite.com', '123-456-7890', '123 Main Street, City, Country', 'https://www.mywebsite.com', 'This is a great website that provides amazing services.', '© 2025 My Website. All Rights Reserved.', 'Welcome to My Website, the best website in the world!', 'website, blog, ecommerce', 'My Website - Best Website', 'My Website', 'Welcome to My Website, your source for amazing content.', 'og-image.png', 0, NULL, NULL, NULL, '$', 'English', 'Asia/Dhaka', NULL, NULL, NULL, NULL, 0, 5, '2025-05-06 06:29:52', '2025-05-07 01:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `slug`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'php', 'technologies/kRXd8TMgktoy2PQDe2Uri293eSZ9gyX8tJ5n63e5.png', '2025-05-08 04:39:41', '2025-05-08 04:39:41'),
(2, 'Java', 'java', 'technologies/kz9cJ2FEiBE8B03w4B5uHim0HDzACwWRJbfqkT7X.svg', '2025-05-31 23:08:09', '2025-05-31 23:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `service_id`, `name`, `position`, `company`, `image`, `content`, `rating`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sue Vaneer', 'SEO', 'Web Surface', 'testimonials/EuRbVCftXL92aFsSJBNoGjABkKplOf2GxmdpwKdJ.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '5', 0, '2025-05-15 04:35:27', '2025-05-15 04:57:34'),
(2, 1, 'Sue Vaneer', 'SEO', 'Web Surface', 'testimonials/u0JSPfu1kLEcSNOqAHN4h1AenMRkmdWG8LN4mtwk.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '5', 1, '2025-05-15 04:36:00', '2025-05-15 04:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `phone`, `avatar`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', NULL, '$2y$12$ir9MRqpJkt2uAmLnptiTY.h8FOLMlre3S8J4W1kz0Y97JiwTQTVOK', 1, NULL, NULL, NULL, NULL, '2025-05-06 05:10:32', '2025-05-06 05:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint UNSIGNED NOT NULL,
  `section_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_normal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_highlighted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cta_title_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_title_highlight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_title_suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_description` text COLLATE utf8mb4_unicode_ci,
  `cta_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `section_heading`, `title_normal`, `title_highlighted`, `title_suffix`, `description`, `cta_title_prefix`, `cta_title_highlight`, `cta_title_suffix`, `cta_description`, `cta_button_text`, `image`, `image_text`, `created_at`, `updated_at`) VALUES
(1, 'Why Choose Us', 'Why The Niwax', 'Ranked Top', 'Among The Leading Web & App Development Companies', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Let\'s Start a', 'New Project', 'Together', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.', 'Request A Quote', 'why_choose_us/n7x94cEPBcga7dRDpM8EzmRYEu36qCOXKYeV3gxQ.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '2025-06-01 06:03:36', '2025-06-01 06:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_features`
--

CREATE TABLE `why_choose_us_features` (
  `id` bigint UNSIGNED NOT NULL,
  `why_choose_us_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_features`
--

INSERT INTO `why_choose_us_features` (`id`, `why_choose_us_id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Streamlined Project Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.', 'whychooseus/icons/tJtUZBuo48J4cOX7wL7VGN0ZN6c52gzXcGN4ZaHN.svg', '2025-06-02 03:26:13', '2025-06-02 03:26:13'),
(2, 1, 'A Dedicated Team of Experts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.', 'whychooseus/icons/VAcJEvQR9MJNara15AHXQ4UHhUE4fcHQoKKIZn2A.svg', '2025-06-02 03:26:43', '2025-06-02 03:26:43'),
(3, 1, 'Completion of Project in Given Time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.', 'whychooseus/icons/WUYUF57Bflu6SBpSy0MvyKUiWqWDvt22JxEZ9mQc.svg', '2025-06-02 03:27:07', '2025-06-02 03:27:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_sections`
--
ALTER TABLE `about_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_section_features`
--
ALTER TABLE `about_section_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_section_features_about_section_id_foreign` (`about_section_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_client_sections`
--
ALTER TABLE `our_client_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service_sections`
--
ALTER TABLE `our_service_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_slug_unique` (`slug`),
  ADD KEY `portfolios_service_id_foreign` (`service_id`),
  ADD KEY `portfolios_client_id_foreign` (`client_id`);

--
-- Indexes for table `portfolio_galleries`
--
ALTER TABLE `portfolio_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_galleries_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `portfolio_sections`
--
ALTER TABLE `portfolio_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_sections_subtitle_unique` (`subtitle`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_features`
--
ALTER TABLE `pricing_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_features_pricing_id_foreign` (`pricing_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `service_addons`
--
ALTER TABLE `service_addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_features`
--
ALTER TABLE `service_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_processes`
--
ALTER TABLE `service_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_technology`
--
ALTER TABLE `service_technology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_technology_service_id_foreign` (`service_id`),
  ADD KEY `service_technology_technology_id_foreign` (`technology_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `technologies_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_service_id_foreign` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_features`
--
ALTER TABLE `why_choose_us_features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_us_features_why_choose_us_id_foreign` (`why_choose_us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_sections`
--
ALTER TABLE `about_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_section_features`
--
ALTER TABLE `about_section_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `our_client_sections`
--
ALTER TABLE `our_client_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_service_sections`
--
ALTER TABLE `our_service_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_galleries`
--
ALTER TABLE `portfolio_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_sections`
--
ALTER TABLE `portfolio_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricing_features`
--
ALTER TABLE `pricing_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_addons`
--
ALTER TABLE `service_addons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_features`
--
ALTER TABLE `service_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_processes`
--
ALTER TABLE `service_processes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_technology`
--
ALTER TABLE `service_technology`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us_features`
--
ALTER TABLE `why_choose_us_features`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_section_features`
--
ALTER TABLE `about_section_features`
  ADD CONSTRAINT `about_section_features_about_section_id_foreign` FOREIGN KEY (`about_section_id`) REFERENCES `about_sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `portfolios_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `portfolio_galleries`
--
ALTER TABLE `portfolio_galleries`
  ADD CONSTRAINT `portfolio_galleries_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pricing_features`
--
ALTER TABLE `pricing_features`
  ADD CONSTRAINT `pricing_features_pricing_id_foreign` FOREIGN KEY (`pricing_id`) REFERENCES `pricings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_technology`
--
ALTER TABLE `service_technology`
  ADD CONSTRAINT `service_technology_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_technology_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_choose_us_features`
--
ALTER TABLE `why_choose_us_features`
  ADD CONSTRAINT `why_choose_us_features_why_choose_us_id_foreign` FOREIGN KEY (`why_choose_us_id`) REFERENCES `why_choose_us` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
