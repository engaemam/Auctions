-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 09:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `address`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'مصطفى محمد', 'mostafadeveloper2016@gmail.com', '$2y$10$d0zrNKQN.MLSajaLtaJXzerDH1eC3hcOCi7LSY0STQgY1z1HD4ZEC', 'القاهره مصر', '1538859004.Photo Effects _ PhotoMania_ 111.png', '7VW2FXiffbBR8iqnSIWr5pNEazaPBxEiAU3h1AyBm1if3Z5qv35jMBOJG3PF', '2018-10-06 18:50:04', '2018-10-06 18:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_price` int(11) NOT NULL,
  `end_price` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0',
  `auc_status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auc.png',
  `date_to` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `name`, `description`, `start_price`, `end_price`, `address`, `admin_status`, `auc_status`, `user_id`, `category_id`, `img`, `date_to`, `created_at`, `updated_at`) VALUES
(1, 'سياره جيب شيروكى', 'السياره جيب اول فئه - كامله اوتوماتيك ستيترونييك - تكييف - باور - سنتر - زجاج كهرباء - مرايات كهرباء - 2AIRBAGS - ABS- EBD - سينسور خلفي - كاسيت AUX- USB - IPOD - فوج لايت - مخادع رأس كامله- مخدع امامي وخلفي - السياره فابريقه بالكامل بحاله الزيرو من الاكصدام للاكصدام بدون ملاحظات .', 200000, NULL, 'امبابه جيزه', 1, 0, 1, 2, 'jeep.jpg', '2018-10-21 22:36:00', NULL, '2018-10-10 21:40:07'),
(2, 'شقه بالطابق الارضى', 'بمدينتى شقة 78 م2 بالطابق ارضي + حديقة المرحلة السادسة نموذج 11 قبلى تطل على حديقه كبيره عبارة عن 2 نوم 1 حمام تشطيب خاص للبيع كاش كود 32224\r\n.', 100000, 1500, 'مدينه الرحاب الجديده', 1, 1, 1, 3, 'building.jpg', '2018-10-07 09:30:00', NULL, '2018-10-10 21:42:54'),
(3, 'جهاز ايفون للبيع ', 'الجهاز وارد أبل دبي إستلام فوري مع سنة ضمان أبل \r\n\r\n٦٤ جيجا - سيلفر و جراي\r\n٢٥٦ جيجا - جولد و سيلفر', 5000, NULL, 'مدينه 6 اكتوبر ', 1, 0, 2, 1, 'samsung.jpg', '2018-10-23 13:00:00', NULL, '2018-10-07 20:55:24'),
(4, 'سياره نيسان صنى', 'السياره نيسان صني اول فئه - كامله اوتوماتيك ستيترونييك - تكييف - باور - سنتر - زجاج كهرباء - مرايات كهرباء - 2AIRBAGS - ABS- EBD - سينسور خلفي - كاسيت AUX- USB - IPOD - فوج لايت - مخادع رأس كامله- مخدع امامي وخلفي - السياره فابريقه بالكامل بحاله الزيرو من الاكصدام للاكصدام بدون ملاحظات .', 80000, 90000, 'امبابه جيزه', 1, 1, 1, 2, 'nissan_sunny.jpg', '2018-10-02 07:00:00', NULL, '2018-10-10 21:40:07'),
(5, 'شقه بالطابق الارضى', 'بمدينتى شقة 78 م2 بالطابق ارضي + حديقة المرحلة السادسة نموذج 11 قبلى تطل على حديقه كبيره عبارة عن 2 نوم 1 حمام تشطيب خاص للبيع كاش كود 32224\r\n.', 100000, NULL, 'مدينه الرحاب الجديده', 1, 0, 2, 3, 'building1.jpg', '2018-10-31 19:30:00', NULL, '2018-10-12 15:41:07'),
(6, 'جهاز هوواوى للبيع ', 'الجهاز وارد أبل دبي إستلام فوري مع سنة ضمان هوواوى\r\n\r\n٦٤ جيجا - سيلفر و جراي\r\n٢٥٦ جيجا - جولد و سيلفر', 2000, NULL, 'مدينه الشيخ زايد', 1, 0, 2, 1, 'haw.jpg', '2018-11-20 13:00:00', NULL, NULL),
(7, 'جهاز سامسونج للبيع', 'الجهاز وارد أبل دبي إستلام فوري مع سنة ضمان أبل', 800, NULL, 'القاهره', 1, 0, 1, 1, 'samsung.jpg', '2018-11-08 08:07:29', NULL, NULL),
(8, 'جهاز لابتوب ديل', 'ديل انسبيرون 3567 لاب توب - انتل كور i5-7200U، شاشة 15.6 انش، 500 جيجا، 4 جيجا، 2 جيجا في جي ايه، ويندوز 10، كيبورد عربي-انجليزي، اسود', 4500, NULL, 'الرياض السعوديه', 1, 0, 1, 1, '1538948854.dell_inspiron_laptop.jpg', '2018-10-24 10:00:00', '2018-10-07 19:47:34', '2018-10-07 20:55:42'),
(9, 'اتش بي لاب توب 15.6 INCH,500', 'يو إس بي\r\nUSB 2.0 & 3.0\r\nحجم الشاشة (انش)\r\n15.6 Inch\r\nالعلامة التجارية لمتحكم الفيديو\r\nايه ام دي\r\nالعلامة التجارية\r\nاتش بي\r\n اتش بى اى ام دى 255 7110 رام 4 جيجا هارد 500 فيجا اى تى اى  شاشه 15.6', 8000, NULL, 'الرياض السعوديه', 1, 0, 3, 1, '1539358299.3BS04PA-1_T1527146601.png', '2018-10-30 11:59:00', '2018-10-12 15:31:39', '2018-10-12 15:41:05'),
(10, 'لابتوب اتش بي', 'لابتوب اتش بي ....لابتوب اتش بي ...لابتوب اتش بي ...لابتوب اتش بي ..لابتوب اتش بي ..لابتوب اتش بي ...لابتوب اتش بي', 5000, NULL, 'الرياض السعوديه', 1, 0, 2, 1, '1539541417.Photo Effects _ PhotoMania_ 111.png', '2018-10-24 06:02:00', '2018-10-14 18:23:37', '2018-10-14 18:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `biddings`
--

CREATE TABLE `biddings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `auction_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `pay_status` int(11) NOT NULL DEFAULT '0',
  `pay_method` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biddings`
--

INSERT INTO `biddings` (`id`, `user_id`, `auction_id`, `price`, `status`, `pay_status`, `pay_method`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 5000, 0, 0, NULL, '2018-10-07 19:11:14', '2018-10-07 19:11:14'),
(4, 1, 3, 5500, 0, 0, NULL, '2018-10-07 19:14:11', '2018-10-07 19:14:11'),
(5, 2, 1, 700000, 0, 0, NULL, '2018-10-07 19:11:14', '2018-10-10 21:40:07'),
(6, 2, 8, 6000, 0, 0, NULL, '2018-10-07 21:22:12', '2018-10-07 21:22:12'),
(7, 2, 4, 90000, 1, 0, NULL, '2018-10-09 21:12:11', '2018-10-10 21:40:07'),
(8, 2, 2, 1500, 1, 1, 1, '2018-10-09 23:00:00', '2018-10-13 23:15:37'),
(9, 2, 7, 1000, 0, 0, NULL, '2018-10-10 22:39:12', '2018-10-10 22:39:12'),
(10, 3, 1, 750000, 0, 0, NULL, '2018-10-12 14:52:45', '2018-10-12 14:52:45'),
(11, 3, 8, 6200, 0, 0, NULL, '2018-10-12 15:16:47', '2018-10-12 15:16:47'),
(12, 1, 5, 120000, 0, 0, NULL, '2018-10-12 15:47:04', '2018-10-12 15:47:04'),
(13, 1, 9, 8100, 0, 0, NULL, '2018-10-12 15:47:39', '2018-10-12 15:47:39'),
(14, 2, 1, 800000, 0, 0, NULL, '2018-10-14 18:18:10', '2018-10-14 18:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'اجهزه موبايلات', 'عرض جميع انواع الابات واجهزه المحمول فى المزاد الالكترونى', NULL, NULL),
(2, 'سيارات', 'عرض جميع انواع السيارات فى المزاد الالكترونى', NULL, NULL),
(3, 'عقارات', 'عرض جميع انواع العقارات فى المزاد الالكترونى', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'محمد عبدالله', 'mo_mo_2018@gmail.com', 'هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا....هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا....هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا', '2018-10-07 21:10:25', '2018-10-07 21:10:25'),
(2, 'حسام صلاح', 'hossam2018@gmail.com', 'هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا....هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا....هذه الرساله لاختبار  ان الرسائل تعمل بطريقه صحيحه ليس الا', '2018-10-07 21:11:04', '2018-10-07 21:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_04_230744_create_categories_table', 1),
(4, '2018_10_04_185820_create_admins_table', 1),
(5, '2018_10_04_185926_create_auctions_table', 1),
(6, '2018_10_04_190001_create_biddings_table', 1),
(7, '2018_10_04_190032_create_messages_table', 1),
(8, '2018_10_06_121937_create_newsletters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nid`, `email`, `password`, `country`, `phone`, `gender`, `address`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'احمد حسن', '29401206351', 'mo_2012@gmail.com', '$2y$10$2PgGfp18kXwEC8Uo4yQJs.s/D.mFOw6gadL0Ei0kPdmDpfz01hNvq', 'مصر', '01026220967', '1', 'القاهره', '1538872001.user.png', 'uJr3uPdfWeBsxFOuJUBaCXf1724UdrcGTECewa1QFMPyUNwZHRDbeRxTlKXp', '2018-10-06 22:26:42', '2018-10-06 22:26:42'),
(2, 'محمد اسامه', '29354846583', 'mo_osama@gmail.com', '$2y$10$P0iLTE.CxC4uzSK/Hu7SsuTj5R65wtlVF20kIDfyzdD1zc9C0jJcC', 'السعوديه', '01026220967', '1', 'جده', '1538938789.user.png', 'cVQR4G2hZz9OpndzpKgDyvDWPBWAJd3xvtwZcDRpuKUxu3YutnZFuLwerdoh', '2018-10-07 16:59:49', '2018-10-07 16:59:49'),
(3, 'حسين عبدالله', '200125896386', 'hussin_2018@gmail.com', '$2y$10$1dwCVspcMZn13P8r0w6wjOVEV1a.4hJBJ81l/FiHKkc1h/c8Qmyem', 'السعوديه', '01575665558', '1', 'جده', '1539355039.gallery2.jpg', '4g3KaxGm6URnjo4AkLbW3k9M6q45xYWl2P6CrWoxSdYNZoTX5a9UwMSwM9oc', '2018-10-12 14:37:20', '2018-10-12 14:37:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auctions_user_id_index` (`user_id`),
  ADD KEY `auctions_category_id_index` (`category_id`);

--
-- Indexes for table `biddings`
--
ALTER TABLE `biddings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biddings_user_id_index` (`user_id`),
  ADD KEY `biddings_auction_id_index` (`auction_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `biddings`
--
ALTER TABLE `biddings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctions`
--
ALTER TABLE `auctions`
  ADD CONSTRAINT `auctions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auctions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `biddings`
--
ALTER TABLE `biddings`
  ADD CONSTRAINT `biddings_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `biddings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
