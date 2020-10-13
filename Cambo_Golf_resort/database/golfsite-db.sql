-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2020 at 11:30 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `golfresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `position`, `description`, `updated_at`, `created_at`, `active`) VALUES
(2, 'Robat Jacobson', 'Founder and Manager', 'Practice Areas: Corporate and Securities Commercial Lending, Real Estate', '2020-10-12 00:07:40', '2020-10-12 00:07:40', 1),
(3, 'Marcos Zoom', 'Founder and Manager', 'Practice Areas: Corporate and Securities Commercial Lending, Real Estate', '2020-10-12 00:07:57', '2020-10-12 00:07:57', 1),
(4, 'Alana Morkoni', 'Founder and Manager', 'Practice Areas: Corporate and Securities Commercial Lending, Real Estate', '2020-10-12 00:08:13', '2020-10-12 00:08:13', 1),
(5, 'Kiley ferry', 'Founder and Manager', 'Practice Areas: Corporate and Securities Commercial Lending, Real Estate', '2020-10-12 00:08:29', '2020-10-12 00:08:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `content`, `public`, `created_at`, `updated_at`) VALUES
(1, 'Position: Sale & Marketing Officer', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<h1><span style=\"color:#e74c3c\">Position: Sale &amp; Marketing Officer</span></h1>\r\n\r\n			<p>Posted on June 13th, 2019</p>\r\n\r\n			<p>Application deadline June 30th, 2019</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>ROLES AND RESPONSIBILITIES</strong></p>\r\n\r\n			<ul>\r\n				<li>Preparing, planning and project managing the publication of all publicity material to maximize brand promotion.</li>\r\n				<li>Creating marketing campaigns and leading the event.</li>\r\n				<li>Creating and developing new innovative ways to communicate the company message to their existing customers.</li>\r\n				<li>Contributing to the annual sales and marketing plan.</li>\r\n				<li>Planning and project managing marketing events and evaluating their success.</li>\r\n				<li>Evaluating the effectiveness of all marketing activity.</li>\r\n				<li>Developing and implementing an internal marketing program.</li>\r\n				<li>Supporting the marketing manager in day to day marketing activities.</li>\r\n				<li>Plan, develop and deliver campaigns as agreed within timescales.</li>\r\n			</ul>\r\n\r\n			<p><strong>REQUIREMENT</strong></p>\r\n\r\n			<ul>\r\n				<li>Bachelor Degree in field of Business Administration or related BBA</li>\r\n				<li>3 years&rsquo; experience with Real Estate sector</li>\r\n				<li>Strong and confident communicator both Khmer and English</li>\r\n				<li>Dynamic and result based</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Interested candidates, please submit your Cover Letter &amp; CVs with salary expectation to the following email or address:</p>\r\n\r\n			<p><strong>*Phone: 017 738 574, 093 246 767</strong></p>\r\n\r\n			<p><strong>*Email:</strong><a href=\"mailto:hr@vattanacproperties.com\">hr@vattanacproperties.com</a></p>\r\n\r\n			<p><strong>*Address:</strong>Vattanac Capital Tower &ndash; Level 8, # 66, Preah Monivong Blvd, Sangkat Wat</p>\r\n\r\n			<p>Phnom, Khan Daun Penh, Phnom Penh, Cambodia.</p>\r\n\r\n			<p><strong>*Website:</strong><a href=\"http://www.vattanaccapital.com/\">www.vattanaccapital.com</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, '2019-08-01 00:07:16', '2019-08-01 00:07:26'),
(2, 'Position: Training Supervisor', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<h1><span style=\"color:#2980b9\">Position: Training Supervisor</span></h1>\r\n\r\n			<p>Posted on June 12th, 2019</p>\r\n\r\n			<p>Application deadline June 30th, 2019</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>ROLES AND RESPONSIBILITIES</strong></p>\r\n\r\n			<ul>\r\n				<li>Identify capabilities developing function to support business performance.</li>\r\n				<li>Conduct and analyst TNA</li>\r\n				<li>Organize training and budget plan</li>\r\n				<li>Prepare, lead, training courses</li>\r\n				<li>Coordinate and deploy the learning plan for staff.</li>\r\n				<li>Measure impact/efficiency of learning solution</li>\r\n				<li>Ensure all training course are implemented as schedule agreed;</li>\r\n				<li>Sourcing the training courses and providers and reporting as well as requesting it to superiors,</li>\r\n				<li>Develop and maintain employee training record and report.</li>\r\n				<li>Work closely with internal and external training team to facilitate all training courses</li>\r\n				<li>Ensure a strong professional relationship with all department with the company.</li>\r\n				<li>Other tasks assigned by Manage&nbsp;<br />\r\n				<strong>REQUIREMENT</strong></li>\r\n				<li>Bachelor Degree of Management or related degree</li>\r\n				<li>At least 5 years working experience in Training Function and another both soft skill and hard skill</li>\r\n				<li>Knowledge of Ms. Word, Excel and Power Point,</li>\r\n				<li>Fluent of English both writing and speaking</li>\r\n				<li>Good at communication, interpersonal, presentation &amp; analytical skills,</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Interested candidates, please submit your Cover Letter &amp; CVs with salary expectation to the following email or address:</p>\r\n\r\n			<p><strong>*Phone: 017 738 574, 081 802 481</strong></p>\r\n\r\n			<p><strong>*Email:</strong><a href=\"mailto:hr@vattanacproperties.com\">hr@vattanacproperties.com</a></p>\r\n\r\n			<p><strong>*Address:</strong>Vattanac Capital Tower &ndash; Level 8, # 66, Preah Monivong Blvd, Sangkat Wat</p>\r\n\r\n			<p>Phnom, Khan Daun Penh, Phnom Penh, Cambodia.</p>\r\n\r\n			<p><strong>*Website:</strong><a href=\"http://www.vattanaccapital.com/\">www.vattanaccapital.com</a></p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, '2019-08-01 00:09:28', '2019-08-01 00:09:34'),
(3, 'Position: Training Supervisor', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<h1><span style=\"color:#2980b9\">Position: Training Supervisor</span></h1>\r\n\r\n			<p>Posted on June 12th, 2019</p>\r\n\r\n			<p>Application deadline June 30th, 2019</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>ROLES AND RESPONSIBILITIES</strong></p>\r\n\r\n			<ul>\r\n				<li>Identify capabilities developing function to support business performance.</li>\r\n				<li>Conduct and analyst TNA</li>\r\n				<li>Organize training and budget plan</li>\r\n				<li>Prepare, lead, training courses</li>\r\n				<li>Coordinate and deploy the learning plan for staff.</li>\r\n				<li>Measure impact/efficiency of learning solution</li>\r\n				<li>Ensure all training course are implemented as schedule agreed;</li>\r\n				<li>Sourcing the training courses and providers and reporting as well as requesting it to superiors,</li>\r\n				<li>Develop and maintain employee training record and report.</li>\r\n				<li>Work closely with internal and external training team to facilitate all training courses</li>\r\n				<li>Ensure a strong professional relationship with all department with the company.</li>\r\n				<li>Other tasks assigned by Manage&nbsp;<br />\r\n				<strong>REQUIREMENT</strong></li>\r\n				<li>Bachelor Degree of Management or related degree</li>\r\n				<li>At least 5 years working experience in Training Function and another both soft skill and hard skill</li>\r\n				<li>Knowledge of Ms. Word, Excel and Power Point,</li>\r\n				<li>Fluent of English both writing and speaking</li>\r\n				<li>Good at communication, interpersonal, presentation &amp; analytical skills,</li>\r\n			</ul>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Interested candidates, please submit your Cover Letter &amp; CVs with salary expectation to the following email or address:</p>\r\n\r\n			<p><strong>*Phone: 017 738 574, 081 802 481</strong></p>\r\n\r\n			<p><strong>*Email:</strong><a href=\"mailto:hr@vattanacproperties.com\">hr@vattanacproperties.com</a></p>\r\n\r\n			<p><strong>*Address:</strong>Vattanac Capital Tower &ndash; Level 8, # 66, Preah Monivong Blvd, Sangkat Wat</p>\r\n\r\n			<p>Phnom, Khan Daun Penh, Phnom Penh, Cambodia.</p>\r\n\r\n			<p><strong>*Website:</strong><a href=\"http://www.vattanaccapital.com/\">www.vattanaccapital.com</a></p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 1, '2019-08-01 00:17:08', '2019-08-01 00:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `open_post` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `sector`, `position`, `open_post`, `location`, `deadline`, `description`, `updated_at`, `created_at`, `active`) VALUES
(1, 'Marketing Communications', 'Events Officer', 1, 'Phnom Penh', 'October 31, 2020', 'Degree in Communication- Willing to travel', '2020-10-12 00:40:43', '2020-10-12 00:40:43', 1),
(2, 'Database/Data Engineering/Data Analytics', 'Junior Data Analyst', 1, 'Phnom Penh', 'October 20, 2020', 'Bachelor’s degree in statistics, mathematics, economics, computer science, engineering', '2020-10-12 00:42:37', '2020-10-12 00:42:37', 1),
(3, 'Database/Data Engineering/Data Analytics', 'Senior Data Engineer', 1, 'Phnom Penh', 'October 31, 2020', '3 years of working experience working in a data engineering', '2020-10-12 00:43:15', '2020-10-12 00:43:15', 1),
(4, 'Programmers/Information Technology', 'Junior Application Developer', 1, 'Phnom Penh', 'October 31, 2020', 'Fresh graduate up to 1 year of relevant working experience', '2020-10-12 00:43:56', '2020-10-12 00:43:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'folder.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `category_img`, `created_at`, `updated_at`) VALUES
(1, 'Company review', 'photo_2019-07-10_14-46-04.jpg', '2019-07-30 19:37:50', '2019-07-30 19:37:50'),
(2, 'customer action', 'photo_2019-07-10_14-45-59.jpg', '2019-07-30 19:39:17', '2019-07-30 19:39:17'),
(3, 'category 3', 'ft2 (2).jpg', '2019-07-30 19:41:24', '2019-07-30 20:02:37'),
(4, 'category 4', 'photo_2019-07-10_14-45-28.jpg', '2019-07-30 19:41:39', '2019-07-30 19:41:39'),
(5, 'category 5', 'ft2 (2).jpg', '2019-07-30 19:41:55', '2019-07-30 19:42:19'),
(6, 'category 6', 'photo_2019-07-10_14-46-11.jpg', '2019-07-30 19:43:00', '2019-07-30 19:43:00'),
(7, 'category 7', 'photo_2019-07-10_14-46-01.jpg', '2019-07-30 19:43:17', '2019-07-30 19:43:17'),
(8, 'category 8', 'photo_2019-07-10_14-45-28.jpg', '2019-07-30 19:43:37', '2019-07-30 19:43:37'),
(9, 'category 9', 'photo_2019-07-10_14-45-50.jpg', '2019-07-30 19:44:21', '2019-07-30 19:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `catvideos`
--

CREATE TABLE `catvideos` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'folder.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catvideos`
--

INSERT INTO `catvideos` (`id`, `category`, `category_img`, `created_at`, `updated_at`) VALUES
(1, 'Golf serve', 'video-category.PNG', '2019-07-30 18:52:12', '2019-07-30 20:29:17'),
(2, 'Company review', 'golf review.PNG', '2019-07-30 20:42:53', '2019-07-30 20:42:53'),
(3, 'category 3', 'video2.PNG', '2019-07-30 20:49:24', '2019-07-30 20:49:24'),
(4, 'category 4', 'videoo.PNG', '2019-07-30 20:49:36', '2019-07-30 20:49:36'),
(5, 'category 5', 'VD.PNG', '2019-07-30 20:50:38', '2019-07-30 20:50:38'),
(6, 'category 6', 'video3.PNG', '2019-07-30 20:51:09', '2019-07-30 20:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'folder.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Solo', 'The solo life are brilliant', 'solo.png', '2019-07-30 18:34:09', '2019-07-30 19:50:31'),
(3, 'couple', 'let teach your love', 'couple.jpg', '2019-07-30 19:50:58', '2019-07-30 19:50:58'),
(4, 'Friends', 'Make close with you friends', 'friend.jpg', '2019-07-30 19:51:59', '2019-07-30 19:51:59'),
(5, 'Family', 'The happiness life of family', 'family.jpg', '2019-07-30 19:55:19', '2019-07-30 19:55:19'),
(6, 'Teammate', 'Let make more close', 'team-word.jpg', '2019-07-30 19:56:31', '2019-07-30 19:56:31'),
(7, 'Matching', 'We can assign match for you', 'simple-match.jpg', '2019-07-30 19:57:40', '2019-07-30 19:57:40'),
(8, 'National matching', 'The professional  score/rate', 'match.jpg', '2019-07-30 19:58:52', '2019-07-30 19:58:52'),
(9, 'Relaxing', 'Get fresh environment', 'meeting.jpg', '2019-07-30 19:59:23', '2019-07-30 19:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'photo_2019-07-10_14-45-25.jpg', 1, '2019-07-30 20:56:36', '2019-07-30 20:56:36'),
(2, 'photo_2019-07-10_14-45-37.jpg', 1, '2019-07-30 20:56:46', '2019-07-30 20:56:46'),
(3, 'photo_2019-07-10_14-46-04.jpg', 1, '2019-07-30 20:56:54', '2019-07-30 20:56:54'),
(4, 'photo_2019-07-10_14-45-31.jpg', 1, '2019-07-30 20:57:04', '2019-07-30 20:57:04'),
(5, 'photo_2019-07-10_14-46-11.jpg', 1, '2019-07-30 20:57:15', '2019-07-30 20:57:15'),
(7, 'photo_2019-07-10_14-45-31.jpg', 1, '2019-08-11 23:10:24', '2019-08-11 23:10:24');

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
(3, '2019_06_17_100542_create_slides_table', 1),
(4, '2019_06_27_032706_create_static_table', 1),
(5, '2019_06_27_091033_create_categories_table', 1),
(6, '2019_06_27_091138_create_images_table', 1),
(7, '2019_07_03_084501_create_catvideos_table', 1),
(8, '2019_07_03_090450_create_videos_table', 1),
(9, '2019_07_16_024554_create_career_table', 1),
(10, '2019_07_24_075925_create_customer_table', 1),
(11, '2019_08_05_035952_create_reservation_table', 2),
(12, '2019_08_06_084535_create_reservation_table', 3),
(13, '2019_08_07_042643_create_reservation_table', 4),
(14, '2019_08_08_041739_create_reservation_table', 5),
(15, '2019_08_08_041831_create_reservation_table', 6),
(16, '2019_08_08_075539_create_roles_table', 7),
(17, '2019_08_08_075624_create_role_user_table', 7),
(18, '2019_08_08_095811_add_role_to_users_table', 8);

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
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `phone`, `member`, `start_date`, `end_date`, `hour`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rothana suos', 'manager@example.com', '0963806701', '3', '2020-02-02', '2020-02-02', '14:01 to 02:01', 'Requesting', '2019-08-07 21:24:48', '2019-08-07 21:24:48'),
(2, 'e ddd', 'manager@example.com', '03994944', '4', '2020-03-02', '2021-02-02', '04:01 to 02:01', 'Accepted', '2019-08-07 21:25:52', '2019-08-07 21:48:19'),
(3, 'zzz zzz', 'manager@example.com', '096865433', '5', '2020-02-02', '2020-02-02', '14:01 to 14:03', 'Accepted', '2019-08-07 21:26:39', '2019-08-07 21:47:32'),
(4, 'rothana suos', 'manager@example.com', '096303013', '3', '2020-01-02', '2020-01-02', '14:01 to 14:01', 'Accepted', '2019-08-08 21:19:27', '2019-08-11 18:57:52'),
(6, 'Thida Yen', 'ammrothana007@gmail.com', '096374859', '4', '2019-08-22', '2019-08-23', '15:15 to 16:25', 'Requesting', '2019-08-11 23:15:57', '2019-08-11 23:15:57'),
(7, 'sreynich ty', 'ammrothana007@gmail.com', '0963806701', '4', '2020-02-06', '2020-02-02', '15:01 to 02:01', 'Refused', '2019-08-12 01:08:59', '2019-08-12 01:10:45'),
(8, 'Test User', 'new@example.com', '123213123', '11', '2020-09-21', '2020-09-21', '08:32 to 09:33', 'Requesting', '2020-09-06 04:32:45', '2020-09-06 04:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `active`, `created_at`) VALUES
(5, 'Hello', 'Testing DEscriotion', 1, NULL),
(6, 'Hello1', 'Description1\r\n', 1, NULL),
(7, 'Hello2', 'Description3', 1, NULL),
(8, 'Hello3', 'Desctiion5', 1, NULL),
(9, 'Hello4', 'Description555\r\n', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_category`
--

CREATE TABLE `services_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_category`
--

INSERT INTO `services_category` (`id`, `title`, `active`, `created_at`) VALUES
(4, 'HEllo', 1, NULL),
(5, 'Hi', 1, NULL),
(6, 'Doing?', 1, NULL),
(7, 'I love you', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_contact`
--

CREATE TABLE `services_contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `description` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_contact`
--

INSERT INTO `services_contact` (`id`, `phone`, `email`, `active`, `description`) VALUES
(3, '012 345 282', 'touchteng@gmail.com', 1, 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imgname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `imgname`, `maintext`, `desc`, `created_at`, `updated_at`) VALUES
(2, 'photo_2019-07-10_14-45-28.jpg', 'Vattanac golf resort', 'Get fresh air and romantic', '2019-07-30 19:26:45', '2019-08-16 01:36:16'),
(3, 'photo_2019-07-10_14-45-54.jpg', 'Standard field', 'The are 1000 x 2000 m of play field', '2019-07-30 19:27:14', '2019-07-30 19:27:14'),
(4, 'photo_2019-07-10_14-45-33.jpg', 'Ankor wat on the field', 'You can see the small ankor wat', '2019-07-30 19:28:59', '2019-07-30 19:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Pagename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'about page',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`id`, `Pagename`, `content`, `preview`, `created_at`, `updated_at`) VALUES
(1, 'about', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><span style=\"font-size:24px\"><strong>Introduction</strong></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-size:12.0pt\">Established in 2013, <strong>Vattanac Investment</strong> is Cambodia&rsquo;s leading purveyor of luxury retail experiences. Over the years, Vattanac Investment is home to 8 international luxury brands in 3 different sectors - beauty, fashion and home. The brands are Brioni, Christofle, Clarins, Hugo Boss, L&#39;Occitane, Longchamp, Petit Bateau.&nbsp;<br />\r\n			<br />\r\n			Our deep knowledge in local consumer markets, relationships with customer, retail expertise make Vattanac Investment a highly sought-after partner in new business opportunities. Our main priority is to ensure the development of each brands while respecting their identities and their autonomy.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><strong><span style=\"font-size:12.0pt\"><span style=\"color:#e74c3c\">Vision:</span> </span></strong><span style=\"font-size:12.0pt\">To be the leading retail company in delivering style and constant quality services and products.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"color:#e74c3c\"><strong><span style=\"font-size:12.0pt\">Mission:</span></strong></span><span style=\"font-size:12.0pt\"> To deliver quality retail experiences with integrity that helps our customers to truly express their style in life.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"color:#e74c3c\"><strong><span style=\"font-size:12.0pt\">Core Values:</span></strong></span><span style=\"font-size:12.0pt\"> Our continuous success at Vattanac Investment relies on the four core values that defines our corporate culture.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Respect</strong>:</span> We commit to respect the planet and the environment for the future of our mankind. We believe in treating others the way we wish to be treated and respecting diversities among cultures, communities and points of view.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Teamwork</strong>:</span> We nurture team spirit to strive towards a common goal based on open and honest communication while showing concern and support for one another.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Innovation</strong>:</span> We turn ideas into reality. When opportunities or challenges arise, we believe solutions exist. We persevere till the end, stay optimistic and maintain our sense of wonder.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Deliver Excellence</strong>:</span> We pay meticulous attention to detail and to perfection. From products to services, we cultivate our difference through this relentless pursuit for excellence.</span></span></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><span style=\"font-size:24px\"><strong>Introduction</strong></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"font-size:12.0pt\">Established in 2013, <strong>Vattanac Investment</strong> is Cambodia&rsquo;s leading purveyor of luxury retail experiences. Over the years, Vattanac Investment is home to 8 international luxury brands in 3 different sectors - beauty, fashion and home. The brands are Brioni, Christofle, Clarins, Hugo Boss, L&#39;Occitane, Longchamp, Petit Bateau.&nbsp;<br />\r\n			<br />\r\n			Our deep knowledge in local consumer markets, relationships with customer, retail expertise make Vattanac Investment a highly sought-after partner in new business opportunities. Our main priority is to ensure the development of each brands while respecting their identities and their autonomy.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><strong><span style=\"font-size:12.0pt\"><span style=\"color:#e74c3c\">Vision:</span> </span></strong><span style=\"font-size:12.0pt\">To be the leading retail company in delivering style and constant quality services and products.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"color:#e74c3c\"><strong><span style=\"font-size:12.0pt\">Mission:</span></strong></span><span style=\"font-size:12.0pt\"> To deliver quality retail experiences with integrity that helps our customers to truly express their style in life.</span></span></p>\r\n\r\n			<p><span style=\"font-size:11pt\"><span style=\"color:#e74c3c\"><strong><span style=\"font-size:12.0pt\">Core Values:</span></strong></span><span style=\"font-size:12.0pt\"> Our continuous success at Vattanac Investment relies on the four core values that defines our corporate culture.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Respect</strong>:</span> We commit to respect the planet and the environment for the future of our mankind. We believe in treating others the way we wish to be treated and respecting diversities among cultures, communities and points of view.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Teamwork</strong>:</span> We nurture team spirit to strive towards a common goal based on open and honest communication while showing concern and support for one another.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Innovation</strong>:</span> We turn ideas into reality. When opportunities or challenges arise, we believe solutions exist. We persevere till the end, stay optimistic and maintain our sense of wonder.<br />\r\n			<br />\r\n			<span style=\"color:#e74c3c\"><strong>Deliver Excellence</strong>:</span> We pay meticulous attention to detail and to perfection. From products to services, we cultivate our difference through this relentless pursuit for excellence.</span></span></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-15 21:30:14'),
(2, 'service', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><strong><span style=\"font-size:22px\">Our Service</span></strong></p>\r\n\r\n			<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, &nbsp;more recently.</p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-002.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-002.png\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n\r\n			<ol>\r\n				<li>Testing Content 1</li>\r\n				<li>Testing Content 2</li>\r\n				<li>Testing Content 3</li>\r\n				<li>Testing Content 4</li>\r\n			</ol>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><strong><span style=\"font-size:22px\">Our Service</span></strong></p>\r\n\r\n			<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, &nbsp;more recently.</p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-002.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-002.png\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>\r\n\r\n			<ol>\r\n				<li>Testing Content 1</li>\r\n				<li>Testing Content 2</li>\r\n				<li>Testing Content 3</li>\r\n				<li>Testing Content 4</li>\r\n			</ol>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<div class=\"layoutmanager\">&nbsp;</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-15 23:21:56'),
(3, 'feature', '<div class=\"container-fluid layout-container\">\r\n<div class=\"layout-row row\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n<div class=\"layout-column-editable layout-column-one\">\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:22px\">Features Introduction</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">The opening introduces the Maison&rsquo;s one-of-a-kind world to the Cambodian capital and strengthens the brand&rsquo;s presence in South-East Asia.The new boutique covers 100 square meters and offers brand&rsquo;s iconic formalwear, leisurewear and accessories.<br />\r\nThe architecture reflects the universe of Creative Director Brendan Mullane and melds the masculine character of a gentleman&rsquo;s club with the elegance of a private &ldquo;Dressing Room&rdquo;.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Both traditional and contemporary, it is defined by prized materials &ndash; glass surfaces and bronzed brass, Eramosa marble, Bahia wood with shiny brass inserts; the Navona travertine floors evoke the brand&rsquo;s historic origins and ties with Rome, while the ceilings are enriched with a sophisticated lighting system designed to give each ambience a moody and exclusive&nbsp; atmosphere.</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Gianluca Flore, Chief Executive Officer of Brioni, declared: &ldquo;We are very proud to open our first boutique in Cambodia; the economy in this market is seeing a robust growth and we believe in its potential. The ambience of the mall that houses our boutique reflects with its contemporary soul the image of Brioni, that is delighted to present to the Cambodian clients its exclusive sartorial and artisanal collections.&rdquo;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong>BRIONI</strong><br />\r\nFounded in Rome in 1945, Brioni is recognized as the most prestigious Italian luxury menswear couture house &minus; an authority on masculine elegance. Under the leadership of CEO Gianluca Flore and Creative Director Brendan Mullane, Brioni designs, develops and manufactures exclusive and highly-coveted Su Misura garments and sartorial ready-to-wear collections as well as leather goods (handbags, small leather goods and luggage), shoes, eyewear and fragrance.</span></span></span></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<p>&nbsp;</p>\r\n			</div>\r\n\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-005.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-005.png\" style=\"height:450px; max-height:100%; max-width:100%; width:1211px\" /></a></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<div class=\"container-fluid layout-container\">\r\n<div class=\"layout-row row\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n<div class=\"layout-column-editable layout-column-one\">\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:22px\">Features Introduction</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">The opening introduces the Maison&rsquo;s one-of-a-kind world to the Cambodian capital and strengthens the brand&rsquo;s presence in South-East Asia.The new boutique covers 100 square meters and offers brand&rsquo;s iconic formalwear, leisurewear and accessories.<br />\r\nThe architecture reflects the universe of Creative Director Brendan Mullane and melds the masculine character of a gentleman&rsquo;s club with the elegance of a private &ldquo;Dressing Room&rdquo;.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Both traditional and contemporary, it is defined by prized materials &ndash; glass surfaces and bronzed brass, Eramosa marble, Bahia wood with shiny brass inserts; the Navona travertine floors evoke the brand&rsquo;s historic origins and ties with Rome, while the ceilings are enriched with a sophisticated lighting system designed to give each ambience a moody and exclusive&nbsp; atmosphere.</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Gianluca Flore, Chief Executive Officer of Brioni, declared: &ldquo;We are very proud to open our first boutique in Cambodia; the economy in this market is seeing a robust growth and we believe in its potential. The ambience of the mall that houses our boutique reflects with its contemporary soul the image of Brioni, that is delighted to present to the Cambodian clients its exclusive sartorial and artisanal collections.&rdquo;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"><strong>BRIONI</strong><br />\r\nFounded in Rome in 1945, Brioni is recognized as the most prestigious Italian luxury menswear couture house &minus; an authority on masculine elegance. Under the leadership of CEO Gianluca Flore and Creative Director Brendan Mullane, Brioni designs, develops and manufactures exclusive and highly-coveted Su Misura garments and sartorial ready-to-wear collections as well as leather goods (handbags, small leather goods and luggage), shoes, eyewear and fragrance.</span></span></span></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<p>&nbsp;</p>\r\n			</div>\r\n\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-005.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-005.png\" style=\"height:450px; max-height:100%; max-width:100%; width:1211px\" /></a></p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-15 21:37:19'),
(4, 'customer', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#c0392b\">Lorem ipsum dolor sit amet</span>, </span></span>&nbsp;<span style=\"font-size:14px\">habitasse, felis morbi wisi, mauris feugiat in, id lobortis. Sem arcu curabitur cum volutpat est dignissimos. Auctor nunc nec aliquam, aenean euismod. Laoreet morbi integer enim quisque, auctor a risus erat egestas neque. Nunc nulla amet porttitor nulla dictum id, eu quasi vestibulum nam blandit, adipiscing accumsan. Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam.</span></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/1.jpg\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/1.jpg\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:center\"><span style=\"color:#c0392b\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"font-size:26px\"><span style=\"background-color:#16a085\">Lorem ipsum it the example text</span></span></span></span></p>\r\n\r\n			<p>Lorem ipsum dolor sit amet, lacus urna neque habitasse, felis morbi wisi, mauris feugiat in, id lobortis. Sem arcu curabitur cum volutpat est dignissimos. Auctor nunc nec aliquam, aenean euismod. Laoreet morbi integer enim quisque, auctor a risus erat egestas neque. Nunc nulla amet porttitor nulla dictum id, eu quasi vestibulum nam blandit, adipiscing accumsan. Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.</p>\r\n\r\n			<p style=\"text-align:justify\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-004.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-004.png\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:justify\"><span style=\"font-size:22px\"><span style=\"font-family:Trebuchet MS,Helvetica,sans-serif\"><span style=\"color:#c0392b\">Lorem ipsum dolor sit amet</span>, </span></span>&nbsp;<span style=\"font-size:14px\">habitasse, felis morbi wisi, mauris feugiat in, id lobortis. Sem arcu curabitur cum volutpat est dignissimos. Auctor nunc nec aliquam, aenean euismod. Laoreet morbi integer enim quisque, auctor a risus erat egestas neque. Nunc nulla amet porttitor nulla dictum id, eu quasi vestibulum nam blandit, adipiscing accumsan. Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam.</span></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-8 col-md-8 col-sm-8 col-xs-8 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/1.jpg\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/1.jpg\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:center\"><span style=\"color:#c0392b\"><span style=\"font-family:Verdana,Geneva,sans-serif\"><span style=\"font-size:26px\"><span style=\"background-color:#16a085\">Lorem ipsum it the example text</span></span></span></span></p>\r\n\r\n			<p>Lorem ipsum dolor sit amet, lacus urna neque habitasse, felis morbi wisi, mauris feugiat in, id lobortis. Sem arcu curabitur cum volutpat est dignissimos. Auctor nunc nec aliquam, aenean euismod. Laoreet morbi integer enim quisque, auctor a risus erat egestas neque. Nunc nulla amet porttitor nulla dictum id, eu quasi vestibulum nam blandit, adipiscing accumsan. Non mattis malesuada, interdum quis erat in wisi. Leo vestibulum, mauris quam, integer a vitae nullam purus risus sapien, amet lorem, eu ligula nascetur nullam sodales vel.</p>\r\n\r\n			<p style=\"text-align:justify\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p><a href=\"https://www.vattanaccapital.com/assets/img/splash/vc-004.png\" target=\"_self\"><img alt=\"\" class=\"img-responsive\" src=\"https://www.vattanaccapital.com/assets/img/splash/vc-004.png\" style=\"max-height:100%; max-width:100%\" /></a></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-16 02:02:54'),
(5, 'Improving short game', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><img alt=\"\" src=\"https://i2.cdn.turner.com/dr/pga/sites/default/files/articles/AAG%20Moneyball%20Distance%20Short%20Game%20Article.jpg?1437264360\" style=\"height:281px; width:500px\" /></p>\r\n\r\n			<p style=\"text-align:center\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus,</p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><img alt=\"\" src=\"https://img-aws.ehowcdn.com/750x428p/photos.demandstudios.com/getty/article/149/12/117431620.jpg\" style=\"height:285px; width:500px\" /></p>\r\n\r\n			<p style=\"text-align:center\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus,</p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p style=\"text-align:center\"><span style=\"color:#27ae60\"><span style=\"font-size:36px\"><span style=\"background-color:#f39c12\">The&nbsp;Short game for practicing</span></span></span></p>\r\n\r\n			<p>Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p>Placerat integer venenatis luctus ligula platea, sem massa consectetuer irure ridiculus. Elit massa fringilla, nibh enim faucibus convallis, molestie ac dui amet elit sociis amet. Non nisl consectetuer orci vel, volutpat illo etiam porttitor penatibus exercitation, malesuada sagittis vitae metus orci integer lorem. Sagittis fusce amet integer sit, cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus, et massa duis auctor amet natoque tempor. Orci eget semper luctus nunc habitasse, porttitor nec voluptatem vitae, urna wisi malesuada a eu mollis vel, mollis quam, ut ut imperdiet sit semper. Cursus suspendisse fusce massa.</p>\r\n\r\n			<p><img alt=\"\" src=\"https://golfchannel.akamaized.net/ramp/470/182/2019-04-24T06-47-24.633Z--1280x720.jpg\" style=\"height:627px; width:1115px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><img alt=\"\" src=\"https://i2.cdn.turner.com/dr/pga/sites/default/files/articles/AAG%20Moneyball%20Distance%20Short%20Game%20Article.jpg?1437264360\" style=\"height:281px; width:500px\" /></p>\r\n\r\n			<p style=\"text-align:center\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus,</p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p><img alt=\"\" src=\"https://img-aws.ehowcdn.com/750x428p/photos.demandstudios.com/getty/article/149/12/117431620.jpg\" style=\"height:285px; width:500px\" /></p>\r\n\r\n			<p style=\"text-align:center\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus,</p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p style=\"text-align:center\"><span style=\"color:#27ae60\"><span style=\"font-size:36px\"><span style=\"background-color:#f39c12\">The&nbsp;Short game for practicing</span></span></span></p>\r\n\r\n			<p>Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p>Placerat integer venenatis luctus ligula platea, sem massa consectetuer irure ridiculus. Elit massa fringilla, nibh enim faucibus convallis, molestie ac dui amet elit sociis amet. Non nisl consectetuer orci vel, volutpat illo etiam porttitor penatibus exercitation, malesuada sagittis vitae metus orci integer lorem. Sagittis fusce amet integer sit, cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus, et massa duis auctor amet natoque tempor. Orci eget semper luctus nunc habitasse, porttitor nec voluptatem vitae, urna wisi malesuada a eu mollis vel, mollis quam, ut ut imperdiet sit semper. Cursus suspendisse fusce massa.</p>\r\n\r\n			<p><img alt=\"\" src=\"https://golfchannel.akamaized.net/ramp/470/182/2019-04-24T06-47-24.633Z--1280x720.jpg\" style=\"height:627px; width:1115px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-01 01:07:00');
INSERT INTO `static` (`id`, `Pagename`, `content`, `preview`, `created_at`, `updated_at`) VALUES
(6, 'Improving gold slide', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/07/slide.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/08/Screen-Shot-2016-10-08-at-2.47.24-PM.png\" style=\"height:169px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/10/ARTICLE-1-pic-1.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://www.golf-in-japan.com/sites/default/files/article/thumbnails/GOOD-BODY-ANGLES.jpg\" style=\"height:180px; width:270px\" /></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p style=\"text-align:justify\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p style=\"text-align:justify\">Placerat integer venenatis luctus ligula platea, sem massa consectetuer irure ridiculus. Elit massa fringilla, nibh enim faucibus convallis, molestie ac dui amet elit sociis amet. Non nisl consectetuer orci vel, volutpat illo etiam porttitor penatibus exercitation, malesuada sagittis vitae metus orci integer lorem. Sagittis fusce amet integer sit, cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus, et massa duis auctor amet natoque tempor. Orci eget semper luctus nunc habitasse, porttitor nec voluptatem vitae, urna wisi malesuada a eu mollis vel, mollis quam, ut ut imperdiet sit semper. Cursus suspendisse fusce massa.</p>\r\n\r\n			<p style=\"text-align:justify\">cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus.</p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-three\">\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/05/Screen-Shot-2016-10-08-at-2.53.34-PM.png\" style=\"height:164px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/06/HIT-YOUR-DRIVER-ARROW-STRAIGHT.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://golfdashblog.com/wp-content/uploads/2013/07/spine_angle.jpg\" style=\"height:183px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://media.golfdigest.com/photos/5a2eb0d95b4b29561ee9828b/16:9/w_768,c_limit/Byeong-Hun-swing-sequence-faceon-2.jpg\" style=\"height:152px; width:270px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:36px\">Let fix you slide first.</span></p>\r\n\r\n			<p>Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p style=\"text-align:center\"><img alt=\"\" class=\"img-responsive\" src=\"http://mikescaduto.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-31-at-2.03.40-PM.png\" style=\"height:641px; width:1115px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/07/slide.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/08/Screen-Shot-2016-10-08-at-2.47.24-PM.png\" style=\"height:169px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/10/ARTICLE-1-pic-1.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://www.golf-in-japan.com/sites/default/files/article/thumbnails/GOOD-BODY-ANGLES.jpg\" style=\"height:180px; width:270px\" /></p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-two\">\r\n			<p style=\"text-align:justify\">Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p style=\"text-align:justify\">Placerat integer venenatis luctus ligula platea, sem massa consectetuer irure ridiculus. Elit massa fringilla, nibh enim faucibus convallis, molestie ac dui amet elit sociis amet. Non nisl consectetuer orci vel, volutpat illo etiam porttitor penatibus exercitation, malesuada sagittis vitae metus orci integer lorem. Sagittis fusce amet integer sit, cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus, et massa duis auctor amet natoque tempor. Orci eget semper luctus nunc habitasse, porttitor nec voluptatem vitae, urna wisi malesuada a eu mollis vel, mollis quam, ut ut imperdiet sit semper. Cursus suspendisse fusce massa.</p>\r\n\r\n			<p style=\"text-align:justify\">cras dis maecenas ac, gravida ultrices. Et porta eu sed integer, hac torquent mauris vestibulum non vel accumsan, sed facilisi felis luctus pharetra, vestibulum porttitor, vitae elit gravida velit. Sollicitudin ac, ipsum proin condimentum pede, elit bibendum netus neque mattis varius. Consequatur nunc sapien sed commodo sed lacus.</p>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-three\">\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/05/Screen-Shot-2016-10-08-at-2.53.34-PM.png\" style=\"height:164px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://meandmygolf.com/wp-content/uploads/2015/06/HIT-YOUR-DRIVER-ARROW-STRAIGHT.jpg\" style=\"height:180px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://golfdashblog.com/wp-content/uploads/2013/07/spine_angle.jpg\" style=\"height:183px; width:270px\" /></p>\r\n\r\n			<p><img alt=\"\" class=\"img-responsive\" src=\"https://media.golfdigest.com/photos/5a2eb0d95b4b29561ee9828b/16:9/w_768,c_limit/Byeong-Hun-swing-sequence-faceon-2.jpg\" style=\"height:152px; width:270px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"layoutmanager\">\r\n			<div class=\"container-fluid layout-container\">\r\n			<div class=\"layout-row row\">\r\n			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n			<div class=\"layout-column-editable layout-column-one\">\r\n			<p style=\"text-align:center\"><span style=\"font-size:36px\">Let fix you slide first.</span></p>\r\n\r\n			<p>Diam pharetra tincidunt duis neque quis in. Consectetuer ipsum, eleifend proin quam sit ligula ut massa, suscipit vel ut a, morbi integer ut et nunc nullam aliquam, tortor ridiculus nullam. Sit nonummy vestibulum tristique, veniam euismod id tellus pulvinar, amet imperdiet lectus ut eleifend. Ut nulla nibh erat et, mauris dui erat turpis pretium, iaculis nullam nisi neque vehicula pellentesque phasellus, dapibus vulputate neque pharetra, at tristique. Et lacinia nam nec cursus luctus mattis, augue integer enim nonummy suscipit cursus. Curabitur sed nunc potenti sem curabitur nibh, vestibulum ut. At nunc turpis cursus amet feugiat pharetra, in amet ut felis, vitae lacus metus, curabitur nam amet blandit id pede non, a eros. Ante felis, in amet neque sollicitudin. Per convallis. In consectetuer posuere varius aliquam, porta ipsum metus lacus, fusce in sed turpis nulla non nulla.</p>\r\n\r\n			<p style=\"text-align:center\"><img alt=\"\" class=\"img-responsive\" src=\"http://mikescaduto.com/wp-content/uploads/2018/01/Screen-Shot-2018-01-31-at-2.03.40-PM.png\" style=\"height:641px; width:1115px\" /></p>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', NULL, '2019-08-15 23:24:23'),
(7, 'Improving golf serve', '<div class=\"layoutmanager\">\r\n<div class=\"container-fluid layout-container\">\r\n<div class=\"layout-row row\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n<div class=\"layout-column-editable layout-column-one\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>', '<div class=\"layoutmanager\">\r\n<div class=\"container-fluid layout-container\">\r\n<div class=\"layout-row row\">\r\n<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 layout-column\">\r\n<div class=\"layout-column-editable layout-column-one\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>', NULL, '2019-08-01 20:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Dara', 'dara@yahoo.com', 'user.jpg', NULL, '$2y$10$cdh1L0VXtf0s4aCT7qTHCemAQJxuRx2J1rF4Xv1L0PlBpapH8QKkm', 'Px0jTviHQM', NULL, '2019-08-08 03:04:43', 'user'),
(2, 'Administrator', 'manager@example.com', 'CheckBox.jpg', NULL, '$2y$10$zHgA0LDA/kCnsk/ayKXdu.1mnz6E.32X2Et1GzCOh0d7PHf40WS8u', 'uvZqG9zSu8P4GEPWGlwkQZCEzBue15c2pM3Yl955ltgxUxM5btwyHjzuE6GP', NULL, '2019-08-15 23:39:30', 'administrator'),
(11, 'rothana', 'ammrothana123@gmail.com', 'user.jpg', NULL, '$2y$10$4g5iUz43MLUxZcTea433Z.IlTuIjd21OCDlYKdriKOXJUhlqSWpDq', NULL, '2019-08-08 19:36:46', '2019-08-08 19:36:46', 'user'),
(13, 'rothana', 'ammrothana007@gmail.com', 'user.jpg', NULL, '$2y$10$h12S2SpBVzjVg3EkGSElf.JDdlla9nw00xz62aLo3FVrl2Mkuv6lG', NULL, '2019-08-08 19:37:10', '2019-08-08 19:37:10', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catvideo_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video`, `catvideo_id`, `created_at`, `updated_at`) VALUES
(1, 'XrQFT0g6QSs', 1, '2019-07-30 20:40:57', '2019-07-30 20:40:57'),
(3, '8dTOxwzFKUg', 1, '2019-07-30 20:44:18', '2019-07-30 20:44:18'),
(4, 'Z-Gn1-eKB-U', 1, '2019-07-30 20:44:51', '2019-07-30 20:44:51'),
(5, '9WXM-ekQysE', 1, '2019-07-30 20:45:23', '2019-07-30 20:45:23'),
(6, '9WXM-ekQysE', 1, '2019-07-30 20:45:24', '2019-07-30 20:45:24'),
(7, 'rEve1JXwIvE', 1, '2019-07-30 20:45:44', '2019-07-30 20:45:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
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
-- Indexes for table `catvideos`
--
ALTER TABLE `catvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_category`
--
ALTER TABLE `services_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_contact`
--
ALTER TABLE `services_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_catvideo_id_foreign` (`catvideo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `catvideos`
--
ALTER TABLE `catvideos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services_category`
--
ALTER TABLE `services_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services_contact`
--
ALTER TABLE `services_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_catvideo_id_foreign` FOREIGN KEY (`catvideo_id`) REFERENCES `catvideos` (`id`) ON DELETE CASCADE;
