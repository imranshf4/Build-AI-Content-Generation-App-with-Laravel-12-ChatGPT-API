-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2025 at 08:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generated_contents`
--

CREATE TABLE `generated_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `input` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`input`)),
  `output` text NOT NULL,
  `word_count` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generated_contents`
--

INSERT INTO `generated_contents` (`id`, `input`, `output`, `word_count`, `created_at`, `updated_at`) VALUES
(1, '\"{\\\"title\\\":\\\"Best AI Software in 2025\\\",\\\"word_count_limit\\\":\\\"200\\\"}\"', '<!DOCTYPE html>\n<html>\n<head>\n<title>Best AI Software in 2025</title>\n</head>\n<body>\n\n<h1>The Future of AI Software: A Look into 2025</h1>\n\n<p>As technology continues to advance at a rapid pace, the world of artificial intelligence is evolving as well. In 2025, we can expect to see even more advanced AI software that will revolutionize various industries. Let\'s take a closer look at some of the best AI software that will dominate the market in 2025.</p>\n\n<h2>1. Natural Language Processing (NLP) Software</h2>\n\n<p>NLP software will continue to improve in 2025, allowing machines to better understand and interact with human language. This will have a significant impact on customer service, content creation, and data analysis.</p>\n\n<h2>2. Autonomous Vehicles Software</h2>\n\n<p>AI-powered autonomous vehicles will become more common in 2025, with software that can navigate roads, make decisions in real-time, and ensure passenger safety. This technology will revolutionize the transportation industry.</p>\n\n<h2>3. Healthcare AI Software</h2>\n\n<p>In 2025, we can expect to see AI software that can assist healthcare professionals in diagnosing diseases, analyzing medical images, and providing personalized treatment plans. This will improve patient outcomes and streamline healthcare processes.</p>\n\n<h2>Conclusion</h2>\n\n<p>The future of AI software in 2025 looks promising, with advancements in NLP, autonomous vehicles, healthcare, and many more industries. As these technologies continue to develop, we can expect to see even more innovative applications that will shape the way we live and work.</p>\n\n</body>\n</html>', 212, '2025-08-30 15:49:09', '2025-08-30 15:49:09'),
(2, '\"{\\\"title\\\":\\\"Best Place in USA\\\",\\\"word_count_limit\\\":\\\"250\\\"}\"', '<h1>The Best Place in USA</h1><p><br></p><h2>Introduction</h2><p>When it comes to choosing the best place to visit in the USA, the o<span class=\"ql-size-large\">ptions are endless. From vibrant cities to breathtaking natural wonders, the United States has something for everyone. In this blog post, we will explore some of the top destinations that should be on your travel bucke</span>t list.</p><p><br></p><h2>New York City, New York</h2><p>New York City is often referred to as the \"City that Never Sleeps\" and for good reason. With iconic landmarks such as Times Square, Central Park, and the Statue of Liberty, there is no shortage of things to see and do in the Big Apple. From world-class museums to Broadway shows, New York City offers a unique blend of culture, history, and entertainment.</p><p><br></p><h2>Grand Canyon, Arizona</h2><p><br></p><p>The Grand Canyon is one of the most awe-inspiring natural wonders in the world. Carved by the Colorado River over millions of years, this massive canyon offers breathtaking views and endless opportunities for outdoor adventure. Whether you\'re hiking along the rim or white-water rafting in the canyon, the Grand Canyon is a must-see destination for nature lovers.</p><p><br></p><h2>Conclusion</h2><p>With so many incredible places to visit in the USA, it can be difficult to choose just one. Whether you prefer the hustle and bustle of the city or the tranquility of the great outdoors, there is something for everyone in this diverse country. So pack your bags and start exploring the best place in the USA today!</p>', 248, '2025-08-30 15:51:39', '2025-08-31 12:06:55'),
(4, '\"{\\\"title\\\":\\\"Best video AI Tools in 2025\\\",\\\"word_count_limit\\\":\\\"300\\\"}\"', '<h1>The Future of Video AI Tools: A Look Ahead to 2025</h1><p><br></p><p><span class=\"ql-size-large\">In recent years, artificial intelligence has made significant advancements in the field of video analysis and editing. As we look ahead to 2025, it\'s clear that video AI tools are only going to become more sophisticated and powerful. In this blog post, we\'ll take a closer look at some of the best video AI tools that are set to revolutionize the way we create and edit videos in the coming years.</span></p><h2><br></h2><h2>1. Adobe Sensei</h2><p>Adobe Sensei is a<span style=\"color: rgb(255, 255, 0);\">n AI-powered platform that is already changing the way creatives work. In 2025, we can expect even more advanced features that will make video editing faster and more efficient. From automatic color correction to intelligent object tracking, Adobe Sensei will continue to lead th</span>e way in video AI tools.</p><h2>2. IBM Watson Video Analyzer</h2><p>IBM Watson Video Analyzer uses AI to analyze video content in real-time. In 2025, we can expect this tool to become even more accurate and reliable, making it an essential tool for content creators and marketers looking to understand their audience better.</p><h2>3. Lumen5</h2><p>Lumen5 is a video creation platform that uses AI to turn text into engaging video content. In 2025, we can expect Lumen5 to become even more intuitive and user-friendly, allowing creators to produce high-quality videos in a fraction of the time.</p><h2>Conclusion</h2><p>As we look ahead to 2025, the future of video AI tools looks bright. With advancements in AI technology, we can expect to see even more powerful and efficient tools that will revolutionize the way we create and edit videos. From Adobe Sensei to IBM Watson Video Analyzer, these tools are set to make video production faster, easier, and more accessible than ever before.</p>', 288, '2025-08-31 14:40:21', '2025-08-31 14:41:27');

-- --------------------------------------------------------

--
-- Table structure for table `generated_images`
--

CREATE TABLE `generated_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prompt` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generated_images`
--

INSERT INTO `generated_images` (`id`, `prompt`, `image_path`, `created_at`, `updated_at`) VALUES
(2, 'A breathtaking fantasy valley at sunset, with glowing bioluminescent plants,\n towering crystal formations, and a serene river reflecting the vibrant sky. \nThe scene is bathed in warm orange and purple hues, with a distant dragon soaring gracefully, hyper-detailed, cinematic lighting, 4K resolution', 'upload/generated_image/generated_1756669541_xl2yEy.png', '2025-08-31 13:45:41', '2025-08-31 13:45:41'),
(3, 'A futuristic cyberpunk city at night, filled with neon signs in vibrant pink, blue, and green. \nSkyscrapers with holographic advertisements tower over bustling streets, flying cars zoom above, and a light rain adds a reflective sheen. \nUltra-realistic, moody atmosphere, 8K detail', 'upload/generated_image/generated_1756669707_cVrdmH.png', '2025-08-31 13:48:27', '2025-08-31 13:48:27'),
(4, 'An underwater city built from coral and crystal, illuminated by glowing jellyfish-like lanterns. \nMerfolk swim gracefully between domed structures, and colorful marine life thrives around. \nThe scene is vibrant, with deep blues and greens, hyper-detailed, National Geographic style.', 'upload/generated_image/generated_1756672979_XCcTuv.png', '2025-08-31 14:42:59', '2025-08-31 14:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `generate_audio`
--

CREATE TABLE `generate_audio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prompt` text DEFAULT NULL,
  `audio_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generate_audio`
--

INSERT INTO `generate_audio` (`id`, `prompt`, `audio_path`, `created_at`, `updated_at`) VALUES
(1, 'An underwater city built from coral and crystal, illuminated by glowing jellyfish-like lanterns.', 'upload/audio/tts_1756672390_ez37Nf.mp3', '2025-08-31 14:33:10', '2025-08-31 14:33:10'),
(2, 'An underwater city built from coral and crystal, illuminated by glowing jellyfish-like lanterns.', 'upload/audio/tts_1756673036_qgb1dj.mp3', '2025-08-31 14:43:56', '2025-08-31 14:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
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
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_29_213822_create_generated_contents_table', 2),
(5, '2025_08_31_182621_create_generated_images_table', 3),
(6, '2025_08_31_200545_create_generate_audio_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
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
('rrlTmdPbJs1UcM1iETbZ811mt8H0zgaZUsHrl3BZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibEJPQXJDZFJ1akJLZWlwMGduZGpUYUtodnRPeWNrblFIeTBkeUlDTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756677668);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$CZ5.blGqTLmt6dzSCsjjeOVpDNBTIu9Cl.NcHoV82KKLoQtoNTqOK', NULL, '2025-08-29 14:23:49', '2025-08-29 14:23:49');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generated_contents`
--
ALTER TABLE `generated_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generated_images`
--
ALTER TABLE `generated_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate_audio`
--
ALTER TABLE `generate_audio`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generated_contents`
--
ALTER TABLE `generated_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `generated_images`
--
ALTER TABLE `generated_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `generate_audio`
--
ALTER TABLE `generate_audio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
