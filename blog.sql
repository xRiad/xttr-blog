-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2023 at 09:00 AM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img`, `title`, `about_content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'About this xtra blog', '<p>\r\n                    You can immediately download \r\n                        <a rel=\"nofollow\" href=\"https://templatemo.com/tm-553-xtra-blog\" target=\"_blank\">Xtra Blog Template</a> \r\n                        from TemplateMo website for 100% free of charge. Etiam vehicula, tortor ac eleifend tincidunt, diam neque pellentesque ipsum, \r\n                        a geugiat eros mauris eget lorem. Quisque in\r\n                    bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut, viverra vel\r\n                    mauris. Duis congue luctus metus, sodales tincidunt lectus fringilla ut. Nunc tempus at magna sed vestibulum.\r\n                </p>\r\n                <p>\r\n                    Proin et arcu ligula. Praesent quis erat eu est solliditudin tristique ut in arcu. Donec bibendum ex id ligula semper dictum.\r\n                    Proin malesuada luctus auctor. Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in\r\n                    malesuada nulla magna ut enim. Morbi lacinia magna sed sapien auctor, vitae luctus nunc cursus.\r\n                </p>', '2023-07-24 11:55:56', '2023-07-26 14:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `about_cards`
--

CREATE TABLE `about_cards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_cards`
--

INSERT INTO `about_cards` (`id`, `title`, `content`, `icon`, `created_at`, `updated_at`) VALUES
(5, 'Background', '\n                    Phasellus pulvinar nisl ornare leo porttitor, et vestibulum lorem semper. \n                    Duis risus ex, molestie sit amet magna in,\n                    pharetra pellentesque est. Curabitur elit metus.\n                ', 'fas fa-bezier-curve fa-4x tm-color-primary', NULL, NULL),
(6, 'Teamwork', '\n                    Suspendisse ullamcorper, mi vel molestie ornare, arcu magna euismod ipsum, in malesuada nulla magna ut enim. \n                    Morbi lacinia magna sed auctor, vitae nunc cursus.\n                ', 'fas fa-users-cog fa-4x tm-color-primary', NULL, NULL),
(7, 'Our Core Value', 'Nunc mi ante, suscipit vel dapibus et, volutpat sit amet ante. In tempor nec sem vitae varius. Aliquam tincidunt orci sem, et imperdiet massa consectetur nec.', 'fab fa-creative-commons-sampling fa-4x tm-color-primary', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_employes`
--

CREATE TABLE `about_employes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_employes`
--

INSERT INTO `about_employes` (`id`, `name`, `avatar`, `position`, `about`, `created_at`, `updated_at`) VALUES
(5, 'John Henry', '', 'CEO/Founder', 'Aliquam non vulputate lectus, vel ultricies diam. Suspendisse at ipsum hendrerit, vestibulum mi id, mattis tortor.', '2023-07-26 14:51:34', '2023-07-26 14:51:34'),
(6, 'Timy Cake', '', 'Project Director', 'Quisque in bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue. Aliquam lorem mi, maximus at iaculis ut.', '2023-07-26 14:51:59', '2023-07-26 14:51:59'),
(7, 'Jay Zoona', '', 'Supervisor', 'Maecenas eu mi eu dui cursus consequat non eu metus. Morbi ac turpis eleifend, commodo purus eget, commodo mauris.', '2023-07-26 14:52:15', '2023-07-26 14:52:15'),
(8, 'Image Catherine Soft', '', 'Team Leader', 'Integer eu sapien hendrerit, imperdiet arcu sit amet, sollicitudin ipsum. Phasellus consequat suscipit ligula eget bibendum.', '2023-07-26 14:52:36', '2023-07-26 14:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Visual Designs', 'visual-designs', '2023-07-26 13:39:37', '2023-07-26 13:39:37'),
(4, 'Travel Events', 'travel-events', '2023-07-26 13:39:41', '2023-07-26 13:39:41'),
(5, 'Web Development', 'web-development', '2023-07-26 13:39:45', '2023-07-26 13:39:45'),
(6, 'Video and Audio', 'video-and-audio', '2023-07-26 13:39:49', '2023-07-26 13:39:49'),
(7, 'Etiam auctor ac arcu', 'etiam-auctor-ac-arcu', '2023-07-26 13:39:52', '2023-07-26 13:39:52'),
(8, 'Sed im justo diam', 'sed-im-justo-diam', '2023-07-26 13:39:57', '2023-07-26 13:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `commentary_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `parent_id`, `commentary_content`, `post_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Mark Sonny', 'email@email.com', NULL, 'Praesent aliquam ex vel lectus ornare tritique. Nunc et eros quis enim feugiat tincidunt et vitae dui. Nullam consectetur justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus sapien vel, euismod turpis.', 12, 'July 26, 2023', '2023-07-26 13:45:16', '2023-07-26 13:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `adress`, `phone`, `email`, `info`, `facebook`, `twitter`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '120 Lorem ipsum dolor sit amet, consectetur adipiscing 10550', '060-070-0980', 'info@company.com', 'Maecenas eu mi eu dui cursus consequat non eu metus. Morbi ac turpis eleifend, commodo purus eget, commodo mauris.', '', '', '', '', '2023-07-26 15:19:31', '2023-07-26 15:19:31');

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
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(86, '2014_10_12_000000_create_users_table', 1),
(87, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(88, '2019_08_19_000000_create_failed_jobs_table', 1),
(89, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(90, '2023_07_18_084938_create_categories_table', 1),
(91, '2023_07_18_090314_create_about_table', 1),
(92, '2023_07_18_094501_create_tags_table', 1),
(93, '2023_07_18_115604_create_about_cards_table', 1),
(94, '2023_07_18_115859_create_about_employes_table', 1),
(95, '2023_07_19_110357_create_posts_table', 1),
(96, '2023_07_20_111618_create_posts_tags_table', 1),
(97, '2023_07_20_151317_create_comments_table', 1),
(98, '2023_07_20_163725_create_letters_table', 1),
(99, '2023_07_21_073153_create_contacts_table', 1),
(100, '2023_07_22_172032_create_statuses_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` bigint UNSIGNED NOT NULL DEFAULT '0',
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `video`, `img`, `desc`, `slug`, `status_id`, `visibility`, `author`, `views`, `category_slug`, `date`, `created_at`, `updated_at`) VALUES
(12, 'Single Post of Xtra Blog HTML Template', 'videos/e10c76de-cc19-47dc-b7c9-75e7415b7309.mp4', 'images/16a87b4d-0105-47d9-8626-d7a03ea7d3fd.jpg', '<p>\r\n                                This is a description of the video post. You can also have an image instead of\r\n                                the video. You can free download \r\n                                <a rel=\"nofollow\" href=\"https://templatemo.com/tm-553-xtra-blog\" target=\"_blank\">Xtra Blog Template</a> \r\n                                from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum\r\n                                lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu\r\n                                est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,\r\n                        pharetra lacus. </p>\r\n                            <p>\r\n                                Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque\r\n                                dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis\r\n                                quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent\r\n                                aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt\r\n                                et vitae dui.\r\n                            </p><p></p>', 'single-post-of-xtra-blog-html-template', 1, 1, 'Admin Nat', 15, 'visual-designs', 'July 26, 2023', '2023-07-26 13:42:25', '2023-07-27 00:27:07'),
(13, 'Multi-purpose blog template', 'videos/cb5d0843-4613-4822-a46d-91324500a9a8.mp4', 'images/6e2d9c6c-8e52-4e85-9f88-a45b0a2f35ce.jpg', '<p>\r\n                                This is a description of the video post. You can also have an image instead of\r\n                                the video. You can free download \r\n                                <a rel=\"nofollow\" href=\"https://templatemo.com/tm-553-xtra-blog\" target=\"_blank\">Xtra Blog Template</a> \r\n                                from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum\r\n                                lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu\r\n                                est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,\r\n                        pharetra lacus. </p>\r\n                            <p>\r\n                                Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque\r\n                                dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis\r\n                                quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent\r\n                                aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt\r\n                                et vitae dui.\r\n                            </p><p></p>', 'multi-purpose-blog-template', 1, 1, 'Admin Sam', 1, '3', 'July 26, 2023', '2023-07-26 16:02:27', '2023-07-27 00:28:05'),
(14, 'How can you apply Xtra Blog', 'videos/11224ffd-22fb-4892-91a0-167360c779e3.mp4', 'images/43799148-483c-4d94-b32c-c77737d8a964.jpg', '<p>\r\n                                This is a description of the video post. You can also have an image instead of\r\n                                the video. You can free download \r\n                                <a rel=\"nofollow\" href=\"https://templatemo.com/tm-553-xtra-blog\" target=\"_blank\">Xtra Blog Template</a> \r\n                                from TemplateMo website. Phasellus maximus quis est sit amet maximus. Vestibulum vel rutrum\r\n                                lorem, ac sodales augue. Aliquam erat volutpat. Duis lectus orci, blandit in arcu\r\n                                est, elementum tincidunt lectus. Praesent vel justo tempor, varius lacus a,\r\n                        pharetra lacus. </p>\r\n                            <p>\r\n                                Duis pretium efficitur nunc. Mauris vehicula nibh nisi. Curabitur gravida neque\r\n                                dignissim, aliquet nulla sed, condimentum nulla. Pellentesque id venenatis\r\n                                quam, id cursus velit. Fusce semper tortor ac metus iaculis varius. Praesent\r\n                                aliquam ex vel lectus ornare tristique. Nunc et eros quis enim feugiat tincidunt\r\n                                et vitae dui.\r\n                            </p><p></p>', 'how-can-you-apply-xtra-blog', 1, 1, 'John Walker', 1, 'video-and-audio', 'July 27, 2023', '2023-07-27 00:49:42', '2023-07-27 00:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE `posts_tags` (
  `tag_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_tags`
--

INSERT INTO `posts_tags` (`tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(3, 12, '2023-07-26 13:42:25', '2023-07-26 13:42:25'),
(3, 13, '2023-07-26 16:02:27', '2023-07-26 16:02:27'),
(4, 12, '2023-07-26 13:42:25', '2023-07-26 13:42:25'),
(4, 13, '2023-07-26 16:02:27', '2023-07-26 16:02:27'),
(5, 12, '2023-07-26 13:42:25', '2023-07-26 13:42:25'),
(5, 13, '2023-07-26 16:02:27', '2023-07-26 16:02:27'),
(6, 14, '2023-07-27 00:49:42', '2023-07-27 00:49:42'),
(7, 14, '2023-07-27 00:49:42', '2023-07-27 00:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'New', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Creative', '2023-07-26 13:39:12', '2023-07-26 13:39:12'),
(4, 'Design', '2023-07-26 13:39:18', '2023-07-26 13:39:18'),
(5, 'Business', '2023-07-26 13:39:22', '2023-07-26 13:39:22'),
(6, 'Music', '2023-07-27 00:46:08', '2023-07-27 00:46:08'),
(7, 'Audio', '2023-07-27 00:46:14', '2023-07-27 00:46:14');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.admin', NULL, '$2y$10$sWUYxBgU.7oAMpNBv/TM1uTIDni8yCHnNrJ8kEJJv9ruWS19.Qa0K', 'XRpcfBYUOGXc5SjWwKl5DbaCvJCt6zdetPzq5MS2TFyFH9KObm2zfxQy55r9', '2023-07-25 14:30:22', '2023-07-25 14:30:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_cards`
--
ALTER TABLE `about_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_employes`
--
ALTER TABLE `about_employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`tag_id`,`post_id`),
  ADD KEY `posts_tags_post_id_foreign` (`post_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_cards`
--
ALTER TABLE `about_cards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `about_employes`
--
ALTER TABLE `about_employes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD CONSTRAINT `posts_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
