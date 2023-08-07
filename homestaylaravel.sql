-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2023 at 10:40 AM
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
-- Database: `homestaylaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `name`, `image`, `email`, `phone`, `description`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Christelle Grant DVM', 'image/1690703377_person_1-min.jpg', 'glowe@example.org', '973.494.2800', 'Aut quam itaque nihil est quod magni. Et adipisci consequatur pariatur officiis. Laudantium possimus quam qui nobis. Ab eos eligendi omnis veniam non dolores eum.', 'https://wolf.net/sit-vel-rem-excepturi-nesciunt.html', 'http://www.waters.com/ea-commodi-quam-voluptas-in', 'http://www.muller.org/sed-consectetur-rerum-sunt-est-et-aliquam-dolorum', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(2, 'Mrs. Madelynn Reynolds', 'image/1690703377_person_1-min.jpg', 'rempel.alfred@example.com', '+1 (408) 599-1181', 'Enim ratione fuga excepturi cumque. Aut ea quia esse placeat dolores. Placeat architecto officiis ut at et vitae.', 'https://www.wuckert.net/quis-magni-autem-ut-aut-sit-saepe', 'http://www.zemlak.com/accusantium-unde-reiciendis-sed-assumenda-quia', 'http://stroman.org/', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(3, 'Mason Harvey', 'image/1690703377_person_1-min.jpg', 'pabbott@example.com', '580-867-6546', 'Quia expedita labore quasi nobis non fugiat veritatis aut. Alias nihil reiciendis reprehenderit. Aliquid quis architecto perspiciatis est.', 'http://www.kuhlman.info/et-exercitationem-dolorem-ut.html', 'http://mayert.com/', 'http://moore.com/', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(4, 'Aliza Halvorson I', 'image/1690703377_person_1-min.jpg', 'anthony.grimes@example.org', '440.565.0457', 'Ad sunt eveniet quae repellendus libero laboriosam ut. Praesentium quos et est. Facere magni ex doloremque cumque.', 'http://www.macejkovic.com/architecto-dolorem-quia-est-quo-ut-repudiandae', 'https://www.brekke.com/veniam-laudantium-qui-ut-cum-itaque-et', 'http://www.mertz.net/', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(5, 'Winnifred Mayert', 'image/1690703377_person_1-min.jpg', 'ritchie.lexi@example.net', '563.622.8123', 'Praesentium et est pariatur voluptatem non omnis. Sit dolorem est tempore qui. Alias tempora maxime nihil non alias nisi voluptas. Velit aut perferendis et accusantium velit aut suscipit.', 'http://www.williamson.com/iusto-voluptates-molestias-est-harum-expedita-doloremque-neque.html', 'http://gottlieb.com/laborum-ut-ab-dolorem-perferendis-rerum-quod-exercitationem', 'http://www.heller.com/magni-ratione-neque-dolores-nihil-ea-est-dolorum.html', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(6, 'Malinda Gottlieb DVM', 'image/1690703377_person_1-min.jpg', 'casandra.langworth@example.net', '+1.859.510.9158', 'Nisi in consectetur aliquam quia qui natus et officiis. Omnis natus eius repellendus magnam. Dolor dolorum consectetur atque veniam.', 'http://www.koss.info/voluptas-voluptatem-laboriosam-officia-ipsum-odit-temporibus', 'https://www.braun.com/quis-quaerat-ipsa-sed-ratione-maiores', 'http://goodwin.biz/eum-est-consectetur-expedita-aut-quasi-accusamus-aspernatur', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(7, 'Else Dickinson DDS', 'image/1690703377_person_1-min.jpg', 'skunde@example.org', '1-585-339-5995', 'Neque et nihil fuga aperiam dolore ea fugiat. Sit dolor animi similique quo quasi nemo. Eius eveniet voluptate et accusantium exercitationem rerum. Optio laboriosam quasi non sed tenetur sed.', 'http://www.strosin.com/qui-odit-excepturi-ut-commodi-ea-enim.html', 'http://www.lowe.org/voluptatibus-modi-velit-culpa-quibusdam-quam-id-tempore.html', 'http://yost.com/harum-tenetur-accusamus-aut-atque-quod', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(8, 'Janessa Brown V', 'image/1690703377_person_1-min.jpg', 'whitney23@example.org', '(774) 997-2008', 'Et inventore aut quo est. Sit quia odit ut repellat quia dolorem. Sit adipisci odit doloremque incidunt.', 'http://ebert.com/', 'http://zieme.com/', 'http://www.collins.com/veritatis-quibusdam-voluptas-incidunt-nisi-qui-dolores-perferendis-eveniet', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(9, 'Charles Jacobi', 'image/1690703377_person_1-min.jpg', 'kuhlman.luella@example.com', '+1-332-570-2710', 'Atque et dolores incidunt. Facilis nihil expedita saepe voluptas sapiente soluta consectetur rem. Corporis iure illum qui natus ex. Explicabo magnam temporibus quia est perspiciatis cumque.', 'http://morar.com/soluta-est-eos-aliquid-soluta-cupiditate-non-hic-corrupti.html', 'http://green.com/velit-laudantium-repellat-placeat-ut', 'https://rowe.com/est-qui-veritatis-sint-ullam-at-itaque.html', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL),
(10, 'Casey Ryan', 'image/1690703377_person_1-min.jpg', 'ashlynn.rosenbaum@example.net', '1-360-646-6683', 'Non odit nam voluptatibus adipisci. Ad fugiat beatae et quidem. Dolor doloremque corporis occaecati nam. Facilis neque eius omnis excepturi laboriosam.', 'http://www.luettgen.com/', 'http://hermiston.com/saepe-non-atque-quia-et-deserunt-voluptas-dicta-assumenda.html', 'https://www.schaefer.com/hic-harum-nihil-iusto-repudiandae', '2023-08-06 17:35:46', '2023-08-06 17:35:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_banners`
--

CREATE TABLE `marketing_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_banners`
--

INSERT INTO `marketing_banners` (`id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/1691369890_hero_bg_1.jpg', '2023-08-06 17:35:45', '2023-08-06 17:58:10', NULL),
(2, 'image/1691369901_hero_bg_2.jpg', '2023-08-06 17:35:45', '2023-08-06 17:58:21', NULL),
(3, 'image/1691369909_hero_bg_3.jpg', '2023-08-06 17:35:45', '2023-08-06 17:58:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2023_07_18_022610_create_marketing_banners_table', 1),
(6, '2023_07_18_022618_create_news_table', 1),
(7, '2023_07_18_022629_create_real_estates_table', 1),
(8, '2023_07_18_022826_create_real_estate_categories_table', 1),
(9, '2023_07_18_081136_create_new_categories_table', 1),
(10, '2023_07_21_010830_create_contacts_table', 1),
(11, '2023_07_25_173044_create_designers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_category_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `long_description`, `image`, `news_category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr.', 'Unde voluptates repellendus molestiae cupiditate rerum pariatur.', 'Eum aut aut tempore voluptatibus. Et qui vel beatae molestias. At officia vero placeat enim. Aut id vel blanditiis nemo quia quisquam ad. Quia aut labore nisi voluptas facilis.', 'image/1690305649_img_6.jpg', 4, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(2, 'Dr.', 'Adipisci assumenda debitis et delectus nulla qui.', 'Hic at consequatur doloribus illum vel temporibus. Alias maxime iure sed veniam reprehenderit. Possimus sit consequatur quas praesentium cumque sit accusamus. Et ut consectetur vero. Iure enim saepe facere ut alias ut. Minima odio quia eaque. Illum voluptatem est repellendus eius odit dicta et. Cumque rem quis ratione ut aspernatur rerum. Et id omnis hic numquam velit quis.', 'image/1690305649_img_6.jpg', 7, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(3, 'Mrs.', 'Reiciendis ut vel deleniti et modi.', 'Aut quidem sint perspiciatis provident dolores enim. Adipisci rem eos et non omnis voluptatem. Cupiditate ipsam odit distinctio numquam. Eius accusantium illum quos voluptatibus et perferendis iusto. Vel ut porro autem. Odio eum ex aut quidem at consequatur.', 'image/1690305649_img_6.jpg', 1, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(4, 'Prof.', 'Magni magni ipsum deleniti dignissimos ducimus veritatis doloremque provident.', 'Assumenda ducimus perspiciatis et ut laudantium. In quae nesciunt voluptatem voluptatem et dolorum aut. Praesentium maiores id autem quia blanditiis. Fugit accusamus rem delectus. Quidem hic ipsam saepe. Et alias itaque exercitationem quia. Qui ducimus facilis quam. Facere officiis et ea excepturi ullam saepe. Tempore id sapiente ex illo nisi et non. Voluptatum quia ea repudiandae eos nobis.', 'image/1690305649_img_6.jpg', 3, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(5, 'Prof.', 'Ipsam quia blanditiis qui ex.', 'Dolorum dolore officiis necessitatibus omnis optio illum illum. Accusamus placeat dolorem quaerat provident laboriosam. Cum aspernatur aut quam est nulla ut. Omnis esse blanditiis aliquam eligendi. Voluptas quidem facere sed. Quaerat nam eos saepe omnis ab doloribus. Nesciunt quis tempora ex eos ratione. Quidem error quo est aut ea. In accusantium consectetur error voluptatem veniam odio.', 'image/1690305649_img_6.jpg', 5, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(6, 'Mrs.', 'Et voluptas officia mollitia commodi architecto.', 'Mollitia optio minima unde dignissimos sequi sequi autem. Optio nisi necessitatibus est sit sequi enim magnam. Nihil quis ad quibusdam et. Recusandae veritatis officia facere quisquam fugiat provident eligendi. Nulla molestiae distinctio fugiat inventore officia. Doloremque neque reiciendis magnam incidunt. Aperiam ad omnis totam beatae fugiat excepturi. Eos excepturi ut nihil omnis hic ipsam. Sunt quam corrupti et labore a deserunt. Consequatur harum nesciunt cum dicta officiis natus ipsa.', 'image/1690305649_img_6.jpg', 8, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(7, 'Dr.', 'Quia veniam enim vel.', 'Voluptates laborum placeat natus hic explicabo magnam ratione. Veritatis sed et ullam odit autem. Est cum quaerat libero ut odio cupiditate. Non aut adipisci qui eligendi ea illo voluptatem perferendis. Sint et consequatur ea aut rem iure dicta. Reiciendis quia et sed nostrum minus. Facilis sunt dolore blanditiis vel consequatur dolor in. Quia ullam non odit excepturi repellendus.', 'image/1690305649_img_6.jpg', 4, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(8, 'Prof.', 'Aut tempora tempora magni tenetur praesentium dolorem.', 'Nulla autem dicta deserunt aliquid porro. Dolor adipisci facere veniam rerum vitae est. Adipisci esse eos porro. Et natus nisi illum itaque ut officiis. Similique illo id maiores cupiditate quod voluptas. Voluptatem quo rerum et qui unde. Non laborum doloremque consequatur quasi fugiat eos. Velit officiis beatae rerum eos qui.', 'image/1690305649_img_6.jpg', 5, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(9, 'Mr.', 'Exercitationem rem molestias consectetur et fugit.', 'Consequatur ut est distinctio. Temporibus ut dolor rerum voluptatem. Quis aspernatur excepturi qui. Qui magnam repudiandae itaque. Qui nam quia officia voluptatum harum. Inventore qui dicta quae non dolores. Minus soluta dolores vero iusto minima. Omnis quis exercitationem deleniti rerum sed excepturi animi aliquam. Amet aperiam dolor dolor quisquam nemo temporibus possimus. Soluta vero facilis dolorum omnis explicabo.', 'image/1690305649_img_6.jpg', 10, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(10, 'Prof.', 'Consectetur rerum quae minima.', 'Quas nihil distinctio rerum quia. Mollitia culpa quam qui vitae possimus saepe in. Ipsa pariatur magnam temporibus repudiandae dicta eaque corporis. Dolore sint omnis qui impedit voluptatem. Aut fugiat consectetur et et in odit eveniet. Hic consectetur at voluptatem sunt non occaecati. Harum consequatur repudiandae dicta non recusandae. In vel aliquid ducimus corporis asperiores corrupti totam perspiciatis. Ad est sit perspiciatis suscipit velit autem.', 'image/1690305649_img_6.jpg', 10, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `new_categories`
--

CREATE TABLE `new_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_categories`
--

INSERT INTO `new_categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ms. Luz Hermann', 'Eos delectus illum incidunt eius sit quidem culpa. Asperiores non amet voluptate rerum quis. Explicabo architecto voluptatem dignissimos ea aut ex.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:48:25', '2023-08-06 17:48:25'),
(2, 'Esmeralda Leannon DDS', 'Deserunt enim est reiciendis corrupti. Officiis id distinctio eius ab beatae. Ex dolorem illo minus accusamus possimus nobis.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(3, 'Gaetano Hickle I', 'Cum natus necessitatibus quia et voluptas voluptatem. Sint dolorem nihil eius quam delectus. Rerum maxime facilis ipsam dolor sit doloremque.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(4, 'Yadira McGlynn', 'Quas est et deserunt doloribus distinctio. Quibusdam illum nam beatae dolorum asperiores nemo voluptates laboriosam. Quisquam nihil sed non consequatur porro amet assumenda.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(5, 'Ms. Lauriane Bogan Jr.', 'Hic consequuntur voluptas accusantium quae qui. Ut beatae fuga numquam esse optio non. Et dolor repellendus officia pariatur voluptatem autem incidunt nostrum.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(6, 'Yoshiko Funk', 'Sunt aspernatur veniam ut voluptas. Et culpa ut voluptas eos quibusdam rem rerum enim. Expedita earum et dolore dignissimos tempore ab. Doloremque aliquid molestiae a optio.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(7, 'Peter Kuhn', 'Non asperiores illo id labore. Deserunt eum perspiciatis eos necessitatibus necessitatibus a. Officia maxime quasi velit facere et. Odio quia sunt aut.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(8, 'Lenora Altenwerth', 'Debitis est asperiores assumenda. Aut voluptatibus magni esse distinctio optio qui. Expedita ut id rerum doloremque. Repellendus doloremque itaque pariatur quidem quas laudantium.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(9, 'Harrison O\'Connell', 'Nostrum similique natus voluptates tenetur doloribus dolor. Architecto facilis aut ab quam consequatur eius eos. Rerum consectetur adipisci occaecati placeat ea ipsa.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(10, 'Kaya Lubowitz', 'Culpa dolores odit velit nesciunt quam iusto consequatur. Similique amet totam consequuntur debitis perspiciatis dolores. Aut iure deserunt ut.', 'image/1690305649_img_6.jpg', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_estates`
--

CREATE TABLE `real_estates` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `baths` int NOT NULL,
  `beds` int NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_estate_category_id` int DEFAULT NULL,
  `designer_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estates`
--

INSERT INTO `real_estates` (`id`, `name`, `image`, `description`, `price`, `baths`, `beds`, `address`, `real_estate_category_id`, `designer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rocio Skiles', 'image/1690305649_img_6.jpg', 'Nulla error ut quis. Ipsum velit maxime illum ducimus. Velit ut qui voluptatem. Officiis ipsa rerum aut odit ut a alias voluptatibus.', 529674, 4, 10, '115 Leonardo Mountains Apt. 163\nSimonehaven, GA 93001', 9, 9, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(2, 'Keara Bins', 'image/1690305649_img_6.jpg', 'At minima nulla dicta eos qui autem. Unde id quibusdam alias exercitationem consectetur nihil. Deleniti earum nihil maxime magni architecto voluptatem aut.', 238998, 4, 5, '4613 Yolanda Junction\nNew Randyside, RI 55593-6064', 10, 7, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(3, 'Prof. Jalyn Bartoletti I', 'image/1690305649_img_6.jpg', 'Facilis quia aut hic nostrum voluptatem ipsa voluptas. Voluptas consequatur in voluptates asperiores dicta minima. Enim non repellat labore consectetur. Quas sunt maiores quis rem.', 735104, 8, 9, '13706 Quigley Loop\nNorth Janaport, OH 16027-2161', 4, 9, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(4, 'Miss Angie Goyette MD', 'image/1690305649_img_6.jpg', 'Non libero inventore dolor repudiandae autem. Laudantium reprehenderit ea autem aspernatur. Non quas est nisi explicabo fugiat unde sint tempora.', 106929, 2, 7, '9976 Dietrich Meadows Suite 527\nWittingville, NM 23202', 4, 2, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(5, 'Jayne Rau', 'image/1690305649_img_6.jpg', 'Perferendis sequi voluptate debitis quia corrupti amet. Dignissimos rerum labore iste. Nobis qui neque repellendus quis nulla dolorem.', 826749, 7, 2, '25840 Genevieve Tunnel\nPort Augustaland, NC 02201', 10, 10, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(6, 'Minnie Kovacek', 'image/1690305649_img_6.jpg', 'Itaque iusto recusandae ea debitis. Ipsam error officia a aut. Eos aut soluta est porro. Ut voluptatibus est hic corrupti odit. Suscipit magnam quae odit porro aliquid doloribus.', 887905, 1, 1, '666 Pedro Motorway\nHarrisberg, WV 03443-4027', 10, 9, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(7, 'Lewis Jast PhD', 'image/1690305649_img_6.jpg', 'Sit explicabo labore reiciendis ut. Exercitationem non hic quibusdam exercitationem officia voluptatem. Qui non omnis vero dolores. Voluptatem quasi aliquid quisquam ipsam doloremque quia aut esse.', 164636, 1, 7, '712 Omer Alley Apt. 425\nMonahanfort, IL 67542-9019', 8, 2, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(8, 'Prof. Devonte Thiel', 'image/1690305649_img_6.jpg', 'Veritatis non sit vero modi veniam omnis veniam. Necessitatibus provident earum aut voluptas sed vel. Aspernatur mollitia veniam qui quia dolorem et voluptas.', 607161, 1, 1, '68874 Klocko Unions Apt. 252\nLake Pearlie, IL 27834-5336', 1, 5, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(9, 'Mattie Douglas', 'image/1690305649_img_6.jpg', 'Possimus necessitatibus qui error ut. At quis alias delectus quis rerum inventore. Dolor adipisci dolor ea itaque repudiandae velit. Rem rerum autem voluptatum iusto et sint non.', 614908, 6, 1, '8096 Clarabelle Prairie Apt. 135\nDawnstad, MN 03567', 5, 1, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(10, 'Jordyn Larson', 'image/1690305649_img_6.jpg', 'Odit est porro impedit dolores possimus. Ab est placeat rerum nesciunt mollitia aut quia architecto. Qui et dolorem enim eligendi aut veniam. Consequatur tempora et dignissimos alias saepe.', 690127, 7, 7, '77376 Christina Rapids\nLylaburgh, MN 23650-3901', 10, 3, '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(11, 'Thành Cao Xuân', 'image/1691368611_download-removebg-preview.png', 'tdtdt', 132321, 4, 4, 'Hà nộ', 1, 1, '2023-08-06 17:36:51', '2023-08-06 17:45:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_categories`
--

CREATE TABLE `real_estate_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estate_categories`
--

INSERT INTO `real_estate_categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Jerel Ziemann', 'Eaque impedit consequuntur molestiae cumque nam perferendis. Omnis facere voluptatibus ipsa rem. Ab unde inventore accusantium dolore aliquid ut.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(2, 'Amara Skiles', 'Id odit odit quaerat ipsum natus dolorum nesciunt. Debitis perferendis nihil illum et voluptas dolor sit. Culpa rerum et aut error odio.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(3, 'Mr. Bennett Purdy Jr.', 'Consequatur quod nemo architecto unde id saepe. Pariatur nobis vel ab. Est velit quae eos vel aut nostrum. Tempore sed eligendi odio illo est exercitationem sint.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(4, 'Foster Schaden', 'Aut fugit eius quibusdam iste nobis. Vel consequatur consequatur est. At aut ipsam ut omnis omnis ut. Quisquam aut consequatur fugit omnis sit quae aliquam.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(5, 'Athena Beatty', 'Quibusdam recusandae rerum autem et repellendus non neque. Animi quo reiciendis nam iste velit. Blanditiis pariatur impedit id est.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(6, 'Wiley Trantow', 'Porro nam inventore id. Eveniet possimus suscipit aut quo sapiente at. Placeat amet non dolor nesciunt excepturi omnis tempore. Occaecati autem fugit et assumenda exercitationem.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(7, 'Americo Schaden', 'Impedit non qui molestiae dolores. Eius molestiae nostrum voluptate dolor qui dolorum. Commodi doloribus excepturi aut est ullam.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(8, 'Mrs. Mollie Bechtelar', 'Sint eius consequatur ea tenetur et esse. Ex ipsum quia dolores nihil ullam ut. Aut occaecati eveniet veniam repellat doloribus. Tempore eum nam ut.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(9, 'Rosalinda Botsford', 'Incidunt qui eum officiis commodi saepe officia quae. Nihil rerum enim quas qui animi ut eos. Consequatur expedita porro qui quas. Cumque et quod aut adipisci similique officia ducimus.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(10, 'Quinten Wolf Sr.', 'Qui fugiat reiciendis sint fugit. Quo qui nihil harum et. Voluptatem autem in non quisquam aut nostrum blanditiis. Consectetur voluptate optio pariatur.', '2023-08-06 17:35:45', '2023-08-06 17:35:45', NULL),
(11, 'admin', 'tdtdt', '2023-08-06 17:36:32', '2023-08-06 17:36:57', '2023-08-06 17:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Rod Wisoky', 'constance83@example.com', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Jz2GKoRZqz', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(2, 'Alene Mann', 'simone88@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'yePJ0yRp22', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(3, 'Kris Gleason', 'itoy@example.com', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'NjVYpKJml3', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(4, 'Justyn Beer', 'gennaro.volkman@example.org', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'b0VDzAfFUu', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(5, 'Dessie Sipes', 'daniel.abbey@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'AlHZqWCfE9', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(6, 'Brendan Bogisich', 'ioconnell@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'LwhFnokKVI', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(7, 'Polly Farrell', 'gilda.feeney@example.org', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'FClEYHvPdr', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(8, 'Nils Emard DVM', 'ahammes@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'cfiwnk1XyD', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(9, 'Stephania Swaniawski', 'erin.dickinson@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'zDr5Tg2qGm', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(10, 'Delfina Hills', 'logan.goldner@example.net', NULL, '2023-08-06 17:35:45', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'I29AToHWKa', '2023-08-06 17:35:45', '2023-08-06 17:35:45'),
(11, 'Thangcxph 2 3 9 4 5 FPL HN', 'thangcxph23945@fpt.edu.vn', NULL, NULL, '$2y$10$uY.k7Y2lOoMzkM6ICJs5WOl1TO2tJAqmQIRIxkpBmu9N7yBzVudra', 1, 'tMrBu56RQCSybgWSL7efONQ0gaUplgHRAIYMWsa1rf3gKlJ0SsCP49pv6b0g', '2023-08-06 17:36:00', '2023-08-06 17:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `marketing_banners`
--
ALTER TABLE `marketing_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_categories`
--
ALTER TABLE `new_categories`
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
-- Indexes for table `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_categories`
--
ALTER TABLE `real_estate_categories`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_banners`
--
ALTER TABLE `marketing_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_categories`
--
ALTER TABLE `new_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `real_estate_categories`
--
ALTER TABLE `real_estate_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
