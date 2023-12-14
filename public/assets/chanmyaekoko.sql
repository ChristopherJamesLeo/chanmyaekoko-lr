-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 06:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chanmyaekoko`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit incidunt dolorum saepe eligendi doloribus! Neque expedita ipsa rerum ducimus quisquam vel. Fuga tempora quo laborum dolor unde itaque enim amet.\r\n', '2023-12-14 05:25:44', '2023-12-14 05:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `collaborates`
--

CREATE TABLE `collaborates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collaborates`
--

INSERT INTO `collaborates` (`id`, `name`, `slug`, `status_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ninth Programming', 'ninth-programming', 1, '657a94c0775571702532288656c275a184ac1701586778logonp.png', '2023-12-14 05:38:08', '2023-12-14 05:38:08'),
(2, 'Bo Mobile', 'bo-mobile', 1, '657a94d097a701702532304656c04d5757ef1701577941logobo.jpg', '2023-12-14 05:38:24', '2023-12-14 05:38:24'),
(3, 'Superior', 'superior', 1, '657a94e3d82001702532323656c27c7010491701586887logosuperior.jpg', '2023-12-14 05:38:43', '2023-12-14 05:38:43'),
(4, 'Aung Myint Mo', 'aung-myint-mo', 1, '657a94f5633c11702532341656c044f591001701577807aungmyintmo.png', '2023-12-14 05:39:01', '2023-12-14 05:39:01'),
(5, 'Crystal Dream', 'crystal-dream', 1, '657a9508cd94e1702532360656c058fdb5621701578127logocrystal_dream.jpg', '2023-12-14 05:39:20', '2023-12-14 05:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `editions`
--

CREATE TABLE `editions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editions`
--

INSERT INTO `editions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '657a94a5ced591702532261656c04d5dcad91701577941videointrovideo.mp4', '2023-12-14 05:37:00', '2023-12-14 05:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institude` varchar(255) NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institude`, `degree`, `subject`, `slug`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Associateship Government Technical Institute (AGTI)', 'IT Major (Present)', 'AGTI', 'associateship-government-technical-institute-agti', 1, 1, '2023-12-14 05:27:25', '2023-12-14 05:27:25'),
(2, 'UK', 'Diploma In Graphic Design', 'Diploma In Graphic Design', 'uk', 1, 1, '2023-12-14 05:27:46', '2023-12-14 05:27:46'),
(3, 'ATBC Local University', 'Diploma In Graphic Design', 'Diploma In Graphic Design', 'atbc-local-university', 1, 1, '2023-12-14 05:28:27', '2023-12-14 05:28:27'),
(4, 'Alpha X Training Center', 'Photoshop And Video Editing', 'Photoshop And Video Editing', 'alpha-x-training-center', 1, 1, '2023-12-14 05:28:52', '2023-12-14 05:28:52'),
(5, 'Yixel Online Class', 'Expert Certified In Photoshop & Illustrator', 'Expert Certified In Photoshop & Illustrator', 'yixel-online-class', 1, 1, '2023-12-14 05:29:13', '2023-12-14 05:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `duration` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company`, `position`, `duration`, `description`, `slug`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'First Azure Construction Co. Ltd', 'Office Computer Staff', 18, 'I started my job at FAC Company as an office computer staffer on February 21, 2020, after GTC was paused because of COVID-19.\r\nInitially, I am a junior, and the working process is really heavy for me. I\'m also a site supervisor.\r\nAfter 2021, I\'ve become particularly proficient with the working process, such as supervising the sites, managing vehicles, machines, and back-holes, as well as their fuel, working hours, and how much each is done in their own tasks.\r\nThe company will cease operations in December 2021. And yeah, I go my way ahead...\r\nThis experience taught me about Microsoft Office (Word, Excel, and PowerPoint), Adobe Photoshop, printing skills, and some management theories.', 'first-azure-construction-co-ltd', 1, '2023-12-14 05:32:29', '2023-12-14 05:32:29'),
(2, 'MAY Construction', 'Graphic Designer & Video Editor', 8, 'Actually, I make not only flyers, vendors, banners, and photoboots but also social media ad designs and commercial motion graphics. But also shooting cinematic commercial videos and announcement videos. I\'ve developed stronger skills in Premiere Pro and some other video editing software.', 'may-construction', 1, '2023-12-14 05:32:54', '2023-12-14 05:32:54'),
(3, 'Freelance Graphic Designer', 'Freelance Graphic Designer', 14, 'Currently, I\'m a freelancer. I work freelance and collaborate with my friends\' companies.\r\nAnd also accept WFH jobs.', 'freelance-graphic-designer', 1, '2023-12-14 05:33:33', '2023-12-14 05:33:33');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `taggable` bigint(20) UNSIGNED NOT NULL,
  `imageable` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `taggable`, `imageable`, `created_at`, `updated_at`) VALUES
(4, '657a8dfd9d4cb1702530557products656c04d5ce1d11701577941productsbo_card.jpg', 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(5, '657a8dfda12f31702530557products656c04d5d95cf1701577941productsbo_voucher.jpg', 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(6, '657a8dfda48eb1702530557products656c04d5d27501701577941productsbo_fb.jpg', 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(7, '657a8dfda7e981702530557products656c04d5d60291701577941productsbo_poster.jpg', 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(8, '657a960a1aa961702532618products656c04d5d27501701577941productsbo_fb.jpg', 5, 'App\\Models\\Portfolio', '2023-12-14 05:43:38', '2023-12-14 05:43:38'),
(9, '657a960a1f32f1702532618products656c04d5d60291701577941productsbo_poster.jpg', 5, 'App\\Models\\Portfolio', '2023-12-14 05:43:38', '2023-12-14 05:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_21_105358_create_abouts_table', 1),
(6, '2023_11_21_150942_create_education_table', 1),
(7, '2023_11_21_151414_create_statuses_name', 1),
(8, '2023_11_22_060642_create_skills_table', 1),
(9, '2023_11_22_070820_create_experiences_table', 1),
(10, '2023_11_22_092635_create_services_table', 1),
(11, '2023_11_22_160546_create_editions_table', 1),
(12, '2023_11_24_054014_create_collaborates_table', 1),
(13, '2023_11_24_071034_create_images_table', 1),
(14, '2023_11_24_071316_create_videos_table', 1),
(15, '2023_11_24_071430_create_portfolios_table', 1),
(16, '2023_11_24_075609_create_types_table', 1),
(17, '2023_11_24_075709_create_tags_table', 1),
(18, '2023_11_26_040755_add_column_firstname_to_users', 1),
(19, '2023_11_27_031950_create_links_table', 1),
(20, '2023_11_27_035935_create_phones_table', 1),
(21, '2023_11_27_065008_create_titles_table', 1),
(22, '2023_11_29_111957_add_column_cv_to_users', 1),
(23, '2023_12_14_110540_create_typeables_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `kind`, `image`, `slug`, `status_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Bo Mobile', 'Phone Sale', '657a8acc762c11702529740logo656c043b174311701577787bo.jpg', 'bo-mobile', 1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam voluptate consectetur adipisci labore provident harum ut numquam at nostrum cupiditate ex pariatur deserunt, nesciunt sed magnam odit consequuntur exercitationem dolores.', '2023-12-14 04:49:52', '2023-12-14 04:55:40'),
(3, 'Superior', '1XBet Agent', '657a9585139f61702532485logo656c27c7010491701586887logosuperior.jpg', 'superior', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:41:25', '2023-12-14 05:41:25'),
(4, 'Aung Myint Mo', 'Yoe Yar Nan Ti Yar', '657a95c1aeafc1702532545logo656c044f591001701577807aungmyintmo.png', 'aung-myint-mo', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:42:25', '2023-12-14 05:42:25'),
(5, 'Crystal Dream', 'Fashion Store', '657a960a11c2f1702532618logo656c058fdb5621701578127logocrystal_dream.jpg', 'crystal-dream', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:43:38', '2023-12-14 05:43:38'),
(6, 'Pyae Phyo Aung', '1XBet Agent', '657a9632f2ff11702532658logo656c277e36ca41701586814logopyaephyoaung.jpg', 'pyae-phyo-aung', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:44:18', '2023-12-14 05:44:18'),
(7, 'Shine', 'Bag Store', '657a965ec5e041702532702logo656c279ea0c071701586846logoshine.jpg', 'shine', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:45:02', '2023-12-14 05:45:02'),
(8, 'Ninth Programming', 'Web Development', '657a9695e875a1702532757logo656c275a184ac1701586778logonp.png', 'ninth-programming', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:45:57', '2023-12-14 05:45:57'),
(9, 'ISSAC', 'Server Company', '657a96f574bbd1702532853logo656c2724cf9801701586724logoissac.jpg', 'issac', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:47:33', '2023-12-14 05:47:33'),
(10, 'Myint Mobile', 'Mobile shop', '657a971fdc57a1702532895logo656c04729c5351701577842pyaephyoaung.jpg', 'myint-mobile', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2023-12-14 05:48:15', '2023-12-14 05:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `status_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Graphic design', 'graphic-design', 1, '657a9415b01dd1702532117656c038f8c14a1701577615motion-graphic.png', '2023-12-14 05:34:27', '2023-12-14 05:35:17'),
(2, 'Motion Graphic', 'motion-graphic', 1, '657a943203c961702532146656c03c1cc67b1701577665video-editing.png', '2023-12-14 05:35:46', '2023-12-14 05:35:46'),
(3, 'Video Editing', 'video-editing', 1, '657a944e77afe1702532174656c03ac1e5d31701577644photo.png', '2023-12-14 05:36:14', '2023-12-14 05:36:14'),
(4, 'Video & Photo Shooting', 'video-photo-shooting', 1, '657a9464c74e51702532196656c038f8c14a1701577615motion-graphic.png', '2023-12-14 05:36:36', '2023-12-14 05:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `level` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `subject`, `type`, `level`, `slug`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Adobe', 'Photo Shop', 50, 'adobe', 1, '2023-12-14 05:29:52', '2023-12-14 05:29:52'),
(2, 'Adobe', 'Illustrator', 50, 'adobe', 1, '2023-12-14 05:30:21', '2023-12-14 05:30:21'),
(3, 'Adobe', 'Premiere Pro', 50, 'adobe', 1, '2023-12-14 05:30:44', '2023-12-14 05:30:44'),
(4, 'Adobe', 'After Effects', 50, 'adobe', 1, '2023-12-14 05:31:06', '2023-12-14 05:31:06'),
(5, 'Microsoft Office', 'Word, Excel, Power Point', 50, 'microsoft-office', 1, '2023-12-14 05:31:34', '2023-12-14 05:31:34'),
(6, 'Mobile Apps', 'KineMaster, Cap Cut, Alight Motion, Canva, Procreate', 50, 'mobile-apps', 1, '2023-12-14 05:31:51', '2023-12-14 05:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Enable', 'enable', 1, '2023-12-14 04:31:39', '2023-12-14 04:31:39'),
(2, 'Disable', 'disable', 1, '2023-12-14 04:31:39', '2023-12-14 04:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `name`, `subname`, `image`, `created_at`, `updated_at`) VALUES
(1, 'About', 'LET\'S\r\nINTRODUTE ABOUT MYSELF', '657a8ff05e9ab1702531056banner656c058fdb5621701578127logocrystal_dream.jpg', '2023-12-14 05:12:38', '2023-12-14 05:17:36'),
(2, 'EDUCATION', 'Whose given. Were gathered. There first subdue greater', '657a90009c35e1702531072banner656c05610a6a01701578081logoaungmyintmo.png', '2023-12-14 05:12:38', '2023-12-14 05:17:52'),
(3, 'SKILLS', 'Whose given. Were gathered. There first subdue greater.', NULL, '2023-12-14 05:16:08', '2023-12-13 05:16:45'),
(4, 'WORKING EXPERIENCE', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days', NULL, '2023-12-14 05:16:22', '2023-12-14 05:16:49'),
(5, 'SERVICES', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.', NULL, '2023-12-13 05:16:27', '2023-12-13 05:16:55'),
(6, 'COLLABORATE WITH', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days', NULL, '2023-12-13 05:16:32', '2023-12-13 05:16:59'),
(7, 'SOCIAL AD SHOWCASE', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days', NULL, '2023-12-14 05:16:37', '2023-12-13 05:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `typeables`
--

CREATE TABLE `typeables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `typeable_id` bigint(20) UNSIGNED NOT NULL,
  `typeable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `typeables`
--

INSERT INTO `typeables` (`id`, `type_id`, `user_id`, `typeable_id`, `typeable_type`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(6, 2, 1, 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(7, 3, 1, 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(8, 4, 1, 1, 'App\\Models\\Portfolio', '2023-12-14 05:09:17', '2023-12-14 05:09:17'),
(9, 3, 1, 3, 'App\\Models\\Portfolio', '2023-12-14 05:41:25', '2023-12-14 05:41:25'),
(10, 6, 1, 3, 'App\\Models\\Portfolio', '2023-12-14 05:41:25', '2023-12-14 05:41:25'),
(11, 1, 1, 4, 'App\\Models\\Portfolio', '2023-12-14 05:42:25', '2023-12-14 05:42:25'),
(12, 4, 1, 4, 'App\\Models\\Portfolio', '2023-12-14 05:42:25', '2023-12-14 05:42:25'),
(13, 6, 1, 4, 'App\\Models\\Portfolio', '2023-12-14 05:42:25', '2023-12-14 05:42:25'),
(14, 1, 1, 5, 'App\\Models\\Portfolio', '2023-12-14 05:43:38', '2023-12-14 05:43:38'),
(15, 4, 1, 5, 'App\\Models\\Portfolio', '2023-12-14 05:43:38', '2023-12-14 05:43:38'),
(16, 3, 1, 6, 'App\\Models\\Portfolio', '2023-12-14 05:44:19', '2023-12-14 05:44:19'),
(17, 6, 1, 6, 'App\\Models\\Portfolio', '2023-12-14 05:44:19', '2023-12-14 05:44:19'),
(18, 1, 1, 7, 'App\\Models\\Portfolio', '2023-12-14 05:45:02', '2023-12-14 05:45:02'),
(19, 3, 1, 7, 'App\\Models\\Portfolio', '2023-12-14 05:45:02', '2023-12-14 05:45:02'),
(20, 1, 1, 8, 'App\\Models\\Portfolio', '2023-12-14 05:45:58', '2023-12-14 05:45:58'),
(21, 2, 1, 8, 'App\\Models\\Portfolio', '2023-12-14 05:45:58', '2023-12-14 05:45:58'),
(22, 4, 1, 8, 'App\\Models\\Portfolio', '2023-12-14 05:45:58', '2023-12-14 05:45:58'),
(23, 2, 1, 9, 'App\\Models\\Portfolio', '2023-12-14 05:47:33', '2023-12-14 05:47:33'),
(24, 4, 1, 9, 'App\\Models\\Portfolio', '2023-12-14 05:47:33', '2023-12-14 05:47:33'),
(25, 2, 1, 10, 'App\\Models\\Portfolio', '2023-12-14 05:48:15', '2023-12-14 05:48:15'),
(26, 3, 1, 10, 'App\\Models\\Portfolio', '2023-12-14 05:48:15', '2023-12-14 05:48:15'),
(27, 6, 1, 10, 'App\\Models\\Portfolio', '2023-12-14 05:48:15', '2023-12-14 05:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fashions', '2023-12-14 04:48:29', '2023-12-14 04:48:29'),
(2, 'Models', '2023-12-14 04:48:37', '2023-12-14 04:48:37'),
(3, 'Mobile', '2023-12-14 04:48:45', '2023-12-14 04:48:45'),
(4, 'Hotel', '2023-12-14 04:48:56', '2023-12-14 04:48:56'),
(5, 'Vehicle', '2023-12-14 05:40:03', '2023-12-14 05:40:03'),
(6, 'Casino', '2023-12-14 05:40:10', '2023-12-14 05:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `email`, `email_verified_at`, `password`, `job`, `address`, `image`, `cv`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chan Myae Ko Ko', 'Chan', 'aungaung@gmail.com', NULL, '$2y$12$Bq61AFYJIPBKFaWjwQ5yOeDQzoHKTaqJM5PhY/EFkO0etuCBF2.gi', 'Graphic Designer', 'Mandalay', '657a913b65ff81702531387profile656c045d677491701577821crystal_dream.jpg', '657a91b74d2cf1702531511cv656c4ae0041d81701595872cvthae_oo_zin_.pdf', 'QqjdUN9B3UGPZodUUgrGPUZGMXkj8tyoG6oG6M1i5TY9MZM4aP91squXEaY0', '2023-12-14 04:24:32', '2023-12-14 05:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `taggable` bigint(20) UNSIGNED NOT NULL,
  `videoable` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `taggable`, `videoable`, `created_at`, `updated_at`) VALUES
(2, '657a95c1c65591702532545video656c275a25a5e1701586778videointrovideo.mp4', 4, 'App\\Models\\Portfolio', '2023-12-14 05:42:25', '2023-12-14 05:42:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collaborates`
--
ALTER TABLE `collaborates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editions`
--
ALTER TABLE `editions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
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
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_type_unique` (`type`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typeables`
--
ALTER TABLE `typeables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collaborates`
--
ALTER TABLE `collaborates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `editions`
--
ALTER TABLE `editions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `typeables`
--
ALTER TABLE `typeables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
