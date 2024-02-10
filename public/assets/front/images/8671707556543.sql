-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2024 at 10:38 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint NOT NULL,
  `image` text,
  `img` text,
  `top_title_ar` varchar(225) DEFAULT NULL,
  `top_title_en` varchar(225) DEFAULT NULL,
  `top_desc_ar` text,
  `top_desc_en` text,
  `happy_clients` bigint DEFAULT NULL,
  `year_ex` int DEFAULT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `img`, `top_title_ar`, `top_title_en`, `top_desc_ar`, `top_desc_en`, `happy_clients`, `year_ex`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/admins/images/3061681284038.jpg', 'assets/uploads/admins/images/77271707553493.jpg', 'Exercitationem non c', 'Dolores exercitation', 'دعم الاقتصاد الدائري من خلال تطبيق حلول بيئية متكاملة لتحقيق مبادئ صفر نفايات وتحقيق أفضل استخدام للموارد مع الوفاء بمسؤوليتنا تجاه أصحاب المصلحة من خلال تحقيق وضع مربح للجانبين على جميع المستويات (العملاء وشركاء الأعمال والموظفون والبيئة الطبيعية).', 'Supporting the circular economy by applying integrated environmental solutions to achieve zero waste principals and making the best utilization of resources while fulfilling our responsibility towards our stakeholders by achieving win-win situation at all levels(customers, business partners, employees and natural environment).', 151, 5, 'Praesentium elit eu', 'Sunt nemo aliquip c', 'قيادة صناعة النفايات المتكاملة في مصر من خلال التعاون مع القطاعات المختلفة نحو بيئة نظيفة واستكمال عملية إعادة التدوير.', 'To lead the integrated waste industry in Egypt through cooperation with the different sectors toward a clean environment and completing the recycled process.', '2023-04-27 12:43:30', '2024-02-10 08:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr Ahmed Ebaid', 'ahmed@envirogroup.io', '$2y$10$pCZa7MXAs91TftTCxx0msOJEavKPyG5N9.kLa.BgncS0oqzjifsGK', 'assets/uploads/admins/48331680089224.webp', '2023-03-18 09:57:49', '2023-04-16 11:35:37'),
(5, 'admin', 'admin@admin.com', '$2y$10$oi.LTiIBpMAKgE610K4L9erKcxlNp/Gew2bmQ2VUv8QELWD7xHLoa', NULL, '2023-04-16 12:47:01', '2023-04-16 12:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `bg_images`
--

CREATE TABLE `bg_images` (
  `id` bigint NOT NULL,
  `about_img` text,
  `service_img` text,
  `product_img` text,
  `career_img` text,
  `news_img` text,
  `contact_img` text,
  `faqs_img` text,
  `qoute_img` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `bg_images`
--

INSERT INTO `bg_images` (`id`, `about_img`, `service_img`, `product_img`, `career_img`, `news_img`, `contact_img`, `faqs_img`, `qoute_img`, `created_at`, `updated_at`) VALUES
(27, 'assets/uploads/admins/background/62911707223071.jpg', 'assets/uploads/admins/background/43221707222936.jpg', 'assets/uploads/admins/background/55591707223071.jpg', 'assets/uploads/admins/background/18521681033385.jpg', 'assets/uploads/admins/background/96151681033385.jpg', 'assets/uploads/admins/background/17921681033385.jpg', 'assets/uploads/admins/background/22561681033385.jpg', 'assets/uploads/admins/background/3081681033385.jpg', '2024-02-06 12:37:51', '2024-02-06 14:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint NOT NULL,
  `file` text,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `salary` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `file`, `name`, `email`, `phone`, `salary`, `created_at`, `updated_at`) VALUES
(59, 'assets/front/images//93471681555758.pdf', 'hi', 'hoxeji5904@fectode.com', '2014612546251', 2000, '2023-04-15 12:49:18', '2023-04-15 12:49:18'),
(60, 'assets/front/images//49071681555813.pdf', 'hi', 'hoxeji5904@fectode.com', '2014612546251', 2000, '2023-04-15 12:50:13', '2023-04-15 12:50:13'),
(61, 'assets/front/images//72911681555846.jpg', 'eldapour', 'eldapour@duck.com', '201098604983', 20000, '2023-04-15 12:50:46', '2023-04-15 12:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(2, 'اكياس بلاستيكية', 'films and bags', '2023-04-04 10:26:21', '2023-04-16 12:05:27'),
(3, 'كرتون', 'Cartoon', '2023-04-05 10:04:07', '2023-04-16 12:01:07'),
(4, 'خرز معاد تدويره', 'Recycled pellets', '2023-04-05 10:04:13', '2023-04-16 11:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint NOT NULL,
  `comment` text,
  `users_id` bigint NOT NULL,
  `posts_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `subject` varchar(225) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Lois Underwood', 'homogumi@mailinator.com', '+1 (636) 665-9194', 'Vel perspiciatis mo', 'Reiciendis dolorum v', '2023-04-11 19:06:51', '2023-04-11 19:06:51'),
(3, 'Rhona Alvarez', 'vinypivot@mailinator.com', '+1 (184) 777-1544', 'Accusamus dolor alia', 'Voluptatem praesenti', '2023-04-11 19:09:55', '2023-04-11 19:09:55'),
(5, 'abdallah', 'aa@email.com', '2014612546251', 'test', 'test', '2023-04-16 14:10:52', '2023-04-16 14:10:52'),
(6, NULL, NULL, NULL, NULL, NULL, '2023-04-16 15:05:28', '2023-04-16 15:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint NOT NULL,
  `question` varchar(225) DEFAULT NULL,
  `answer` text,
  `question_ar` text,
  `answer_ar` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `question_ar`, `answer_ar`, `created_at`, `updated_at`) VALUES
(6, 'who are we?', 'Enviro group is an Egyptian company specialized in in plastic recycling for production of different types of recycled pellets to satisfy the needs of Egyptian market.', 'من نحن ؟', 'Enviro Group هي شركة مصرية متخصصة في إعادة تدوير البلاستيك لإنتاج أنواع مختلفة من الكريات المعاد تدويرها لتلبية احتياجات السوق المصري.', '2023-04-11 20:02:56', '2023-04-17 10:13:18');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` bigint NOT NULL,
  `email` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(11, 'abdullahalhomsi520@gmail.com', '2023-04-16 12:39:56', '2023-04-16 12:39:56'),
(12, 'abdalluhmahmoud55@gmail.com', '2023-04-16 14:12:54', '2023-04-16 14:12:54'),
(13, 'haorui006@petjixie.com', '2023-07-25 05:15:13', '2023-07-25 05:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `partner_successes`
--

CREATE TABLE `partner_successes` (
  `id` bigint NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Debitis qui sit mol', 'Non laborum Possimu', 'Eligendi consectetur', 'Earum rerum ea Nam u', 'slide-3.jpg', '2023-04-13 07:40:24', '2023-04-13 07:40:24'),
(7, 'Laboris nostrum illo', 'Impedit voluptas la', 'Fugiat sint pariatu', 'Pariatur Provident', 'slide-2.jpg', '2023-04-13 07:40:31', '2023-04-13 07:40:31'),
(8, 'Anim nihil et quis e', 'Dolores esse in illo', 'Culpa porro voluptat', 'Et sint dolor ipsum', 'slide-2.jpg', '2023-04-13 07:40:38', '2023-04-13 07:40:38'),
(9, 'Commodi duis provide', 'Quibusdam praesentiu', 'Itaque cumque offici', 'Id autem et accusant', '6.jpg', '2023-04-15 00:21:17', '2023-04-15 00:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `sub_title_ar` text,
  `sub_title_en` text,
  `desc_ar` text,
  `desc_en` text,
  `images` text,
  `details` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_categories_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `desc_ar`, `desc_en`, `images`, `details`, `created_at`, `updated_at`, `sub_categories_id`) VALUES
(23, 'كرتون معاد تدويره', 'Recycled cartoons', 'Dolorum fuga Molest', 'Aspernatur quo quide', 'Molestiae alias volu', 'Molestiae ea cum ut', '[\"assets\\/uploads\\/products\\/3941681639036.jfif\"]', '{\"1\":{\"key\":\"Pariatur Sint culpa\",\"value\":\"In autem voluptate i\"}}', '2023-04-15 00:18:25', '2023-04-16 12:16:35', 4);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` bigint NOT NULL,
  `first_name` varchar(225) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `company` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `created_at`, `updated_at`) VALUES
(9, 'hi', 'hi', 'rwer@gmali.com', '78387676466', NULL, '2023-04-15 12:42:22', '2023-04-15 12:42:22'),
(10, 'ji', 'ji', 'hoxeji5904@fectode.com', '5645645645645', NULL, '2023-04-15 12:43:24', '2023-04-15 12:43:24'),
(11, 'hh', 'h', 'hoxeji5904@fectode.com', '56356345677', '7567', '2023-04-15 12:44:28', '2023-04-15 12:44:28'),
(12, 'Hi', 'Hi', 'abdalluhmahmoud55@gmail.com', '0108989494949', 'Hi', '2023-04-15 17:13:47', '2023-04-15 17:13:47'),
(13, 'Grace', 'Jia', 'haorui006@petjixie.com', '8617692167107', 'Baoding Haorui Machinery Manufacturing Co.,Ltd', '2023-07-25 05:15:00', '2023-07-25 05:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint NOT NULL,
  `images` text,
  `image_logo` text,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `images`, `image_logo`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(3, '[\"assets\\/uploads\\/services\\/17371707234116.jpg\"]', 'assets/uploads/services/63301681046435.png', 'إدارة المخلفات', 'waste management', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:42:09', '2024-02-06 17:41:56'),
(4, '[\"assets\\/uploads\\/services\\/6211707234080.jpg\"]', 'assets/uploads/services/37361681046428.png', 'إعادة تدوير البلاستيك', 'Plastic Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:43:28', '2024-02-06 17:41:20'),
(6, '[\"assets\\/uploads\\/services\\/69981707234150.jpg\"]', 'assets/uploads/services/78811681046415.png', 'إعادة تدوير الألمنيوم', 'Aluminium Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:46:31', '2024-02-06 17:42:30'),
(7, '[\"assets\\/uploads\\/services\\/37001707234173.jpg\"]', 'assets/uploads/services/6591681046402.png', 'إعادة تدوير الإلكترونيات', 'Electronics Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:47:29', '2024-02-06 17:42:53'),
(8, '[\"assets\\/uploads\\/services\\/1551707234202.jpg\"]', 'assets/uploads/services/21781681046394.png', 'إعادة تدوير المعادن', 'Metal Recycling', 'النوع الأكثر تكلفة من خدمات إعادة التدوير المتاحة للإرسال.', 'The most expensive type of recycling service available for mailing.', '2023-04-08 03:48:15', '2024-02-06 17:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `desc_ar` text,
  `desc_en` text,
  `logo` varchar(225) DEFAULT NULL,
  `location_url` text,
  `address_ar` text,
  `address_en` text,
  `open` text,
  `phone` varchar(255) NOT NULL,
  `email` varchar(500) DEFAULT NULL,
  `facebook` text,
  `youtube` text,
  `twitter` text,
  `instagram` text,
  `linkedin` text,
  `profile` text,
  `licenese` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `logo`, `location_url`, `address_ar`, `address_en`, `open`, `phone`, `email`, `facebook`, `youtube`, `twitter`, `instagram`, `linkedin`, `profile`, `licenese`, `created_at`, `updated_at`) VALUES
(1, 'Dolores incidunt ex', 'Amet nulla dolor se', 'Molestias doloremque', 'Molestias doloremque', 'assets/uploads/admins/images/76511707379112.png', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398709.5737104418!2d31.792228048460263!3d30.381593828539284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2z2KfZhNmC2KfZh9ix2KnYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKw!5e0!3m2!1sar!2seg!4v1681719788717!5m2!1sar!2seg', 'مصر', 'Egypt', '08.00 AM-09.00 PM', '01279644666', 'info@envirogroup.io', 'https://www.facebook.com/profile.php?id=100076455974896', 'https://youtube.com/', 'https://twitter.com/', 'https://instagram.com/', 'https://www.linkedin.com/company/enviro-group-for-waste-management-and-plastic-recycling/', 'assets/uploads/admins/images/36551681648731.pdf', 'assets/uploads/admins/images/89531707222228.png', '2023-04-14 12:06:07', '2024-02-08 09:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint NOT NULL,
  `image` text,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `sub_title_ar` varchar(225) DEFAULT NULL,
  `sub_title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `created_at`, `updated_at`) VALUES
(2, 'banner.jpg', 'بيئة أفضل مستقبل أفضل', 'Better Environment Better Future', 'مرحبًا بكم في Enviro Group', 'Welcome to Enviro Group', '2023-04-07 22:21:05', '2024-02-06 14:54:11'),
(5, 'banner.jpg', 'نحن نقدم خدمة إعادة التدوير', 'We Provide Recycling Service', 'إعادة استخدام | إعادة التدوير | اعادة تعبئه', 'Reuse | Recycle | Refield', '2023-04-07 22:23:15', '2024-02-06 14:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) DEFAULT NULL,
  `title_en` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`, `category_id`) VALUES
(3, 'اكياس درجة اولي', 'Pure Film', '2023-04-05 10:06:33', '2023-04-16 12:12:55', 2),
(4, 'كرتون معاد تدويره', 'Recycled cartoons', '2023-04-05 10:06:40', '2023-04-16 12:11:36', 3),
(5, 'صوبا زراعي', 'agricultural', '2023-04-05 10:06:46', '2023-04-16 12:10:50', 4),
(7, 'شفافات', 'Natural', '2023-04-12 11:07:47', '2023-04-16 11:52:02', 4),
(8, 'اكياس معاد تدويرها', 'Recycled film', '2023-04-16 12:14:10', '2023-04-16 12:14:10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_images`
--
ALTER TABLE `bg_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users1_idx` (`users_id`),
  ADD KEY `fk_comments_posts1_idx` (`posts_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_successes`
--
ALTER TABLE `partner_successes`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_sub_categories1_idx` (`sub_categories_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sub_categories_categories1_idx` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bg_images`
--
ALTER TABLE `bg_images`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partner_successes`
--
ALTER TABLE `partner_successes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_sub_categories1` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `fk_sub_categories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
