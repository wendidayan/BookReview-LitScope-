-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 06:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_view_models`
--

CREATE TABLE `book_view_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `rating` int(11) NOT NULL,
  `genres` varchar(191) NOT NULL,
  `published` date NOT NULL,
  `format` varchar(191) NOT NULL,
  `language` varchar(191) NOT NULL,
  `about` text NOT NULL,
  `review` text NOT NULL,
  `about_author` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `book_id`, `user_id`, `parent_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(4, 16, 3, NULL, 'this was genuinely so magical and special. I felt like a kid again reading this.', 5, '2024-12-20 09:29:03', '2024-12-20 09:29:03'),
(5, 16, 3, 4, 'yes it was!!!', NULL, '2024-12-20 09:29:18', '2024-12-20 09:29:18'),
(6, 16, 2, NULL, 'Not gonna lie, I had to push myself to get through this.\r\n\r\nI just didn’t find it enjoyable in the slightest, which makes me feel like a loser since it’s such a beloved children’s classic.', 3, '2024-12-20 09:31:11', '2024-12-20 09:31:11'),
(7, 16, 4, 6, 'Agreeee!!!', NULL, '2024-12-20 09:32:28', '2024-12-20 09:32:28'),
(8, 16, 4, NULL, 'Merry Christmas Sirrr!!!', 5, '2024-12-20 09:32:53', '2024-12-20 09:32:53'),
(9, 16, 4, 8, 'We did it!!!', NULL, '2024-12-20 09:33:10', '2024-12-20 09:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `author` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_views`
--

CREATE TABLE `landing_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `genres` varchar(191) NOT NULL,
  `published` date NOT NULL,
  `format` varchar(191) NOT NULL,
  `language` varchar(191) NOT NULL,
  `about` text NOT NULL,
  `about_author` text NOT NULL,
  `approval_status` varchar(191) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_views`
--

INSERT INTO `landing_views` (`id`, `title`, `author`, `genres`, `published`, `format`, `language`, `about`, `about_author`, `approval_status`, `created_at`, `updated_at`) VALUES
(7, 'df', 'fsdf', 'Cultural', '2004-03-10', '12', 'French', 'sdfsf', 'dfsdf', 'rejected', '2024-12-20 07:24:55', '2024-12-20 07:25:27'),
(16, 'Carrie', 'Stephen King', 'Contemporary, Fantasy, Contemporary, Genre Fiction', '2005-01-01', '272', 'English', 'A modern classic, Carrie introduced a distinctive new voice in American fiction -- Stephen King. The story of misunderstood high school girl Carrie White, her extraordinary telekinetic powers, and her violent rampage of revenge, remains one of the most barrier-breaking and shocking novels of all time.\r\n\r\nMake a date with terror and live the nightmare that is...Carrie --back cover', 'Stephen King, born in Portland, Maine, is a renowned author celebrated for his contributions to horror, mystery, and fiction. Raised by his mother after his father left, King spent much of his childhood in Maine and later graduated with a B.A. in English from the University of Maine in 1970. Struggling financially in his early career, he worked various jobs while writing short stories, with his first professional sale being \"The Glass Floor\" in 1967. King began teaching English in 1971 but continued writing, eventually becoming one of the most successful and prolific authors of modern times, with works that have shaped contemporary literature and popular culture.', 'approved', '2024-12-20 07:53:40', '2024-12-20 07:54:37'),
(17, 'Carrie', 'Stephen King', 'Animals, Activity Books, Cultural, European', '2005-01-10', '272', 'English', 'A modern classic, Carrie introduced a distinctive new voice in American fiction -- Stephen King. The story of misunderstood high school girl Carrie White, her extraordinary telekinetic powers, and her violent rampage of revenge, remains one of the most barrier-breaking and shocking novels of all time.\r\nMake a date with terror and live the nightmare that is...Carrie--back cover', 'Stephen King, born in Portland, Maine, is a renowned author celebrated for his contributions to horror, mystery, and fiction. Raised by his mother after his father left, King spent much of his childhood in Maine and later graduated with a B.A. in English from the University of Maine in 1970. Struggling financially in his early career, he worked various jobs while writing short stories, with his first professional sale being \"The Glass Floor\" in 1967. King began teaching English in 1971 but continued writing, eventually becoming one of the most successful and prolific authors of modern times, with works that have shaped contemporary literature and popular culture.', 'pending', '2024-12-20 07:57:03', '2024-12-20 07:57:03'),
(18, 'hdhsghdgs', 'sagfsgf', 'Animals', '2005-05-05', '666', 'English', 'sgfgaffafffsdf', 'gfsfafsf', 'rejected', '2024-12-20 08:13:38', '2024-12-20 08:30:32'),
(19, 'The Maid', 'Nita Prose', 'Fantasy, Genre Fiction', '2022-01-02', '304 pages', 'English', 'Molly Gray is not like everyone else. She struggles with social skills and misreads the intentions of others. Her gran used to interpret the world for her, codifying it into simple rules that Molly could live by.', 'NITA PROSE is the #1 New York Times bestselling author of The Mystery Guest and The Maid, which has sold more than two million copies worldwide. A Good Morning America Book Club pick, The Maid won the Ned Kelly Award for International Crime Fiction, the Fingerprint Award for Debut Book of the Year, the Anthony Award for Best First Novel, and the Barry Award for Best First Mystery.', 'approved', '2024-12-20 08:22:10', '2024-12-20 08:30:57'),
(20, '1984', 'George Orwell', 'Historical, Contemporary', '2022-07-01', '368 pages', 'English', 'A masterpiece of rebellion and imprisonment where war is peace freedom is slavery and Big Brother is watching. Thought Police, Big Brother, Orwellian - these words have entered our vocabulary because of George Orwell\'s classic dystopian novel 1984. The story of one man\'s Nightmare Odyssey as he pursues a forbidden love affair through a world ruled by warring states and a power structure that controls not only information but also individual thought and memory 1984 is a prophetic haunting tale More relevant than ever before 1984 exposes the worst crimes imaginable the destruction of truth freedom and individuality.', 'Eric Arthur Blair, better known by his pen name George Orwell, was an English author and journalist. His work is marked by keen intelligence and wit, a profound awareness of social injustice, an intense opposition to totalitarianism, a passion for clarity in language, and a belief in democratic socialism.', 'approved', '2024-12-20 08:26:02', '2024-12-20 08:30:40'),
(21, 'The Outsiders', 'S.E. Hinton', 'Historical, Contemporary', '2021-01-01', '214 pages', 'English', 'No one ever said life was easy. But Ponyboy is pretty sure that he\'s got things figured out. He knows that he can count on his brothers, Darry and Sodapop. And he knows that he can count on his friends - true friends who would do anything for him, like Johnny and Two-Bit. And when it comes to the beating up on \"greasers\" like him and his friends - he knows that he can count on them for trouble. But one night someone takes things too far, and Ponyboy\'s world is turned upside down...', 'S.E. Hinton, was and still is, one of the most popular and best known writers of young adult fiction. Her books have been taught in some schools, and banned from others. Her novels changed the way people look at young adult literature. Susan Eloise Hinton was born in Tulsa, Oklahoma. She has always enjoyed reading but wasn\'t satisfied with the literature that was being written for young adults, which influenced her to write novels like The Outsiders.', 'pending', '2024-12-20 08:29:47', '2024-12-20 08:29:47'),
(22, 'Beloved', 'Toni Morrison', 'Historical, Contemporary', '2008-06-08', '325 pages', 'English', 'Sethe, its protagonist, was born a slave and escaped to Ohio, but eighteen years later she is still not free. She has too many memories of Sweet Home, the beautiful farm where so many hideous things happened. And Sethe\'s new home is haunted by the ghost of her baby, who died nameless and whose tombstone is engraved with a single word: Beloved. Filled with bitter poetry and suspense as taut as a rope, Beloved is a towering achievement by Nobel Prize laureate Toni Morrison', 'Her novels are known for their epic themes, vivid dialogue, and richly detailed African American characters; among the best known are her novels The Bluest Eye , Song of Solomon , and Beloved , which won the Pulitzer Prize for Fiction in 1988. In 2001 she was named one of \"The 30 Most Powerful Women in America\" by Ladies\' Home Journal.', 'approved', '2024-12-20 08:34:18', '2024-12-20 08:39:09'),
(23, 'Peter Pan', 'J.M. Barrie', 'Action & Adventure, Fantasy', '2003-10-01', '155 pages', 'English', 'One starry night, Peter Pan and Tinker Bell lead the three Darling children over the rooftops of London and away to Neverland - the island where lost boys play, mermaids splash and fairies make mischief. But a villainous-looking gang of pirates lurk in the docks, led by the terrifying Captain James Hook.', 'James Matthew Barrie was a Scottish novelist and playwright, best remembered as the creator of Peter Pan. He was born and educated in Scotland and then moved to London, where he wrote several successful novels and plays.', 'approved', '2024-12-20 08:38:37', '2024-12-20 08:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(103, '0001_01_01_000000_create_users_table', 1),
(104, '0001_01_01_000001_create_cache_table', 1),
(105, '0001_01_01_000002_create_jobs_table', 1),
(106, '2024_12_16_132514_create_landings_table', 1),
(107, '2024_12_16_183154_create_user_logins_table', 1),
(108, '2024_12_17_112459_create_book_view_models_table', 1),
(109, '2024_12_17_135718_create_reviews_table', 1),
(110, '2024_12_17_155046_create_landing_views_table', 1),
(111, '2024_12_18_141831_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_code` varchar(191) NOT NULL,
  `comments` text NOT NULL,
  `rate` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1zTrKagXNzvQ2UA7eJrYhmviDbgzMk2hxMgGEV8n', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRENBUlpNdkdpN0JiUjZIY2hoY0JWWURLaTNLMk1JNUpGMUtBWDNhbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ib29rLzE2Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1734715990);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `username`, `birthday`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2000-01-01', '$2y$12$4m94aX5FiPxCN6ZDKQ7z/.UFlLq8Wv22Hp1J/q6LbmFbHqEXIbJBe', '2024-12-20 07:00:13', '2024-12-20 07:00:13'),
(2, 'karylle', '2003-03-10', '$2y$12$i8HKu8S32fNDkW2l0vwfJeTUv3ZptdRb2t.2xAcYZpigwelGV7Mq6', '2024-12-20 07:03:53', '2024-12-20 07:03:53'),
(3, 'kristelle', '2003-11-23', '$2y$12$Lt2vVV1R0fkw1iqbiL51.OJFPJMHHHY0.7kmXsouYZpZZGBXFhJg2', '2024-12-20 07:58:56', '2024-12-20 07:58:56'),
(4, 'wendee', '2002-12-12', '$2y$12$sDcyBUKdXaaeiRo8/3eoJe5Bs0BTVXa3PRlhiZMTzTCTmckQu3b1W', '2024-12-20 09:31:54', '2024-12-20 09:31:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_view_models`
--
ALTER TABLE `book_view_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_book_id_foreign` (`book_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_views`
--
ALTER TABLE `landing_views`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_code`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_logins_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_view_models`
--
ALTER TABLE `book_view_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_views`
--
ALTER TABLE `landing_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `landing_views` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user_logins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
