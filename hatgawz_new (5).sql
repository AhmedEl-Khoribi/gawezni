-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 11:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hatgawz_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `desc`) VALUES
(1, 'Gawzni SIte about us', '<p>dhcbdbc csadjcjkcd scdjckacds dhkfkds fkajfbdf sfsdjkggdf cdjadjcdjc djcdjcndac dcdjcaalkcdjc dkcjdncndciecd cadkcjcjdcnjac ajkcdcjkdscj d caljdkcndajc dj cadjc djc jdaadjc dlj cldjc djc d jc dljcjdc d ca cc dja d djdjj d cdjcjdlsdld cdjcjs</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` int(11) DEFAULT NULL,
  `online_status` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `permission`, `online_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AhmedReda', 'reda@example.com', '$2y$10$VeMpeLMYeudpKekWYZ9v8ugrH1GaZyE0vgJRIg1zarzkwyWboI78u', 1, 'online', 'dYlFnbo6VrhjHKOPAEUBdf6oiMKAuWruy0yNQFfPbapPP2TmQAw2HkPwJE5q', '2018-06-09 22:00:00', '2018-06-09 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_to_client_messages`
--

CREATE TABLE `admin_to_client_messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `is_read` enum('seen','unseen') NOT NULL DEFAULT 'unseen',
  `body` longtext NOT NULL,
  `is_admin` enum('yes','no') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_to_client_messages`
--

INSERT INTO `admin_to_client_messages` (`id`, `sender_id`, `receiver_id`, `is_read`, `body`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'unseen', '<p>grgwgfew</p>', 'yes', '2018-06-19 09:06:40', '2018-06-19 09:06:40'),
(2, 1, 3, 'unseen', '<p>rtghrhbgeg</p>', 'yes', '2018-06-19 09:12:36', '2018-06-19 09:12:36'),
(3, 2, 3, 'unseen', '<p>rtghrhbgeg</p>', 'no', '2018-06-19 09:14:17', '2018-06-19 09:14:17'),
(4, 9, 3, 'unseen', '<p>rtghrhbgeg</p>', 'no', '2018-06-19 09:14:45', '2018-06-19 09:14:45'),
(5, 10, 3, 'unseen', '<p>rtghrhbgeg</p>', 'no', '2018-06-19 09:15:53', '2018-06-19 09:15:53'),
(6, 1, 3, 'unseen', '<p>rtghrhbgeg</p>', 'yes', '2018-06-19 09:16:33', '2018-06-19 09:16:33'),
(7, 1, 3, 'unseen', '<p>rtghrhbgeg</p>', 'yes', '2018-06-19 09:16:52', '2018-06-19 09:16:52'),
(8, 1, 3, 'unseen', '<p>rtghrhbgeg</p>', 'yes', '2018-06-19 09:16:59', '2018-06-19 09:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `blacklists`
--

CREATE TABLE `blacklists` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cairo', NULL, NULL),
(2, 13, 'Batzstad', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(3, 18, 'Dougshire', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(4, 4, 'New Luisaborough', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(5, 16, 'Douglashaven', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(6, 2, 'Morganborough', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(7, 16, 'Lake Otilia', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(8, 6, 'Ankundingmouth', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(9, 7, 'Port Carley', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(10, 10, 'New Stewart', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(11, 24, 'Lake Taryn', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(12, 17, 'Sonyaberg', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(13, 7, 'New Daphnee', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(14, 22, 'Esmeraldaburgh', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(15, 11, 'Berenicehaven', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(16, 7, 'Glennieshire', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(17, 2, 'Glovertown', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(18, 4, 'New Liza', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(19, 24, 'Angelitaburgh', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(20, 9, 'East Lillianachester', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(21, 4, 'East Johnathon', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(22, 3, 'West Tate', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(23, 4, 'Lake Cameronbury', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(24, 23, 'Yvettebury', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(25, 25, 'Kraigfort', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(26, 8, 'Lake Norenemouth', '2018-06-12 10:09:25', '2018-06-12 10:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `other_person_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marraige_status` enum('first','second','third','fourth') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_status` enum('single','married','divorced','willow') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'single',
  `children_number` tinyint(4) DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skin_color` enum('white','black','dark_brown','brown','7enty_dark','7enty_white') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'white',
  `physique` enum('thin','medium_thin','sporty','fat','huge') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sporty',
  `education` enum('medium_school','high_school','university','PHD','self_study') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'high_school',
  `financial_status` enum('poor','lower_than_medium','medium','more_than_medium','good','mastora','rich') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'rich',
  `health_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `career_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` enum('online','offline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'online',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` enum('approved','not_approved') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not_approved',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `lname`, `email`, `password`, `username`, `phone`, `gender`, `main_description`, `city_id`, `other_person_description`, `dob`, `marraige_status`, `social_status`, `children_number`, `weight`, `height`, `skin_color`, `physique`, `education`, `financial_status`, `health_details`, `career_field`, `job`, `salary`, `online`, `image`, `approved`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Oren', 'Block', 'adams.elyse@example.org', '$2y$10$UUJod/Rqw13yVBnHLznJs./2k4M5hd6k79X05.vUY7l4jwWE7ICX2', 'nbayer', '320-616-5334 x8165', 'male', 'Eos ab quibusdam magnam consequatur. Est sed sint exercitationem inventore voluptas atque aut. Fuga minima alias ut qui qui soluta maiores suscipit. Quis minima aut ut aliquid est.', 1, 'Et dolor ipsam doloremque quia quaerat assumenda. Ut aut est excepturi incidunt delectus molestiae qui. Laboriosam nesciunt nulla harum. Autem harum qui accusamus in.', '1975-01-22', NULL, 'single', 4, '74', '145', 'white', 'sporty', 'high_school', 'rich', 'Libero labore sint et.', 'Cartoonist', 'Adams, Buckridge and Mann', '7', 'online', NULL, 'approved', NULL, '2018-06-12 09:58:56', '2018-06-12 10:43:37'),
(3, 'Chanel', 'Bayer', 'justen.hammes@example.com', '$2y$10$Zz5Ljq2JLFu0dvLlNpKaIO8mIghNwPJIJ1W.h5ISvrVJMDc7Htgpq', 'thurman.bernhard', '(668) 999-5427', 'male', 'Voluptas molestiae dolorem suscipit nemo enim dignissimos ipsam. Dolore nihil et qui dolorum. Laborum sed vel quaerat incidunt doloremque quae eos.', 1, 'Rerum repellendus facilis porro quos similique et est. Sunt eaque sit ipsum beatae qui praesentium ut. Et est ut ut nesciunt pariatur veritatis.', '1984-06-13', NULL, 'single', 5, '82', '191', 'white', 'sporty', 'high_school', 'rich', 'Id fugiat quia sit.', 'Bookbinder', 'Walter PLC', '4', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:58:57', '2018-06-12 09:58:57'),
(6, 'Alice', 'Price', 'nwalsh@example.org', '$2y$10$EP28nfQYrk59ho/BsWZPDuHoqWui2KlOmytEZOxZNzsJGJ6c70Ytu', 'mabelle64', '+18238324943', 'male', 'Facilis numquam in expedita dolorum. Reprehenderit mollitia voluptate error molestias explicabo. Sequi asperiores sunt ex et.', 1, 'Minima soluta sunt ex adipisci officiis earum qui. Autem hic praesentium necessitatibus voluptatem. Optio perspiciatis sed aut possimus qui blanditiis culpa. Sunt sit asperiores atque earum.', '1980-08-28', NULL, 'single', 5, '66', '194', 'white', 'sporty', 'high_school', 'rich', 'Sit aut rerum adipisci.', 'Photographic Developer', 'Hansen-Sawayn', '1', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:58:57', '2018-06-12 09:58:57'),
(9, 'Geraldine', 'Schowalter', 'torp.caesar@example.net', '$2y$10$AWoLnOCg6R71DKdvFvK8f.TVVBhO9q3HcpoGvz27Fj01eYtUcyfm.', 'cartwright.octavia', '+1 (280) 360-4040', 'male', 'Minus reprehenderit qui earum est sed praesentium culpa molestiae. Cum adipisci consequatur molestiae minima tenetur doloribus reprehenderit molestias.', 1, 'Nam qui aut beatae. Sed voluptas quaerat quod totam. Minima sequi tenetur soluta corporis sit.', '1994-07-29', NULL, 'single', 4, '61', '186', 'white', 'sporty', 'high_school', 'rich', 'Nesciunt quo velit ex et.', 'Furnace Operator', 'Bernier, Gibson and Ernser', '9', 'online', NULL, 'approved', NULL, '2018-06-12 09:58:57', '2018-06-19 06:39:42'),
(10, 'Kali', 'Hettinger', 'reva72@example.com', '$2y$10$nvNzRZefCXv01Mu1M453reve70x7yojFmWmHgkyn/5/egKzyWBZ5e', 'conroy.collin', '+13932486475', 'male', 'Sit eius qui modi praesentium sint quia. Deserunt at consectetur fugiat deserunt maxime voluptates. Odit ullam excepturi quia nostrum rerum aut cupiditate.', 1, 'Labore harum aut nesciunt velit quis quis architecto. Occaecati voluptatem explicabo quisquam beatae qui. Eum consequatur sapiente repellendus quae voluptas nam animi enim.', '1979-01-01', NULL, 'single', 2, '77', '164', 'white', 'sporty', 'high_school', 'rich', 'Id vel accusamus quaerat.', 'Personal Trainer', 'Champlin PLC', '7', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:58:57', '2018-06-12 09:58:57'),
(11, 'Paolo', 'Buckridge', 'luz62@example.net', '$2y$10$Po0VAm3do2dmRt7FL29RJ.I/AOQk6TgSWbhzFeHsM.T03TsJVsk4e', 'tyson.prohaska', '(852) 542-5876 x136', 'male', '<p>Nisi et qui animi aut est minima eveniet ea. Odio rem est omnis tenetur debitis quae reprehenderit. Et aperiam commodi totam quia. Ut dicta provident et laboriosam atque dolores.</p>', 1, 'Eum dolor ea aut facilis commodi. Rem dolore et necessitatibus eos odit. Labore aliquam cum nihil minima qui. Nemo sit nemo vitae.', '1986-10-02', 'first', 'single', 6, '93', '187', 'white', 'sporty', 'high_school', 'rich', 'Sunt labore nobis eveniet ut.', 'Cement Mason and Concrete Finisher', 'Mertz, Wiegand and Johnston', '3', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:24', '2018-06-19 06:39:04'),
(12, 'Katelin', 'Cormier', 'ryder.kuvalis@example.net', '$2y$10$JCHhxvBTK7ccVyo2gAT/Vu2RR/qX5.HS1KdoVb15wldLuhaGkGNES', 'mgusikowski', '+1 (918) 953-4790', 'male', 'Eligendi voluptatem accusantium enim voluptatem aspernatur. Modi qui hic minima ad accusamus. Ducimus facere sunt consequuntur qui et autem. Alias minima amet ipsa et.', 1, 'Incidunt et iste fuga omnis eum ea veritatis. Quis veniam enim illo dolorem. Laudantium eum sequi eum qui quia.', '1988-03-18', NULL, 'single', 4, '89', '196', 'white', 'sporty', 'high_school', 'rich', 'Et reiciendis aut corrupti.', 'Farmer', 'Daugherty, Denesik and Dickinson', '3', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:24', '2018-06-12 09:59:24'),
(13, 'Unique', 'Lang', 'cyrus49@example.com', '$2y$10$Kz2.5sS2qd1TTfQA3g3BBuovrbBd9O3d64dv4OFTd869opLc0psMK', 'marina.haag', '+14793289316', 'male', 'Aliquam sit cum aut expedita. In qui molestiae ipsum totam repellendus quia sit deserunt. Asperiores et sapiente eligendi officiis itaque totam.', 1, 'Autem excepturi voluptatem possimus cum ad omnis. Perspiciatis vero amet sed suscipit vel. Rerum odit et commodi eum tempore. Et similique deleniti similique reiciendis.', '1998-08-11', NULL, 'single', 5, '71', '195', 'white', 'sporty', 'high_school', 'rich', 'Eos ullam et vero.', 'Home', 'Keebler and Sons', '2', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:24', '2018-06-12 09:59:24'),
(14, 'Kyle', 'Heidenreich', 'donna.greenholt@example.com', '$2y$10$9OsH7y9eN7N0O6ttGXQ93OQ8mY7cEe9ygq3suahvseLl5LEDHIeF.', 'tweimann', '(431) 601-1353', 'male', 'Nobis id at omnis at dignissimos. Soluta odit nulla consequatur. Et incidunt dicta voluptate sed rerum voluptate.', 1, 'Repellendus eaque soluta labore dignissimos ex. Aut officia in nihil aut minus tenetur. In repellendus ut quae eius praesentium maiores.', '1988-09-09', NULL, 'single', 5, '74', '176', 'white', 'sporty', 'high_school', 'rich', 'Et ipsum enim et quia.', 'Mechanical Engineer', 'Torphy and Sons', '1', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(15, 'Georgiana', 'Feest', 'tatum.kassulke@example.com', '$2y$10$TOHz4HJii0OhCDSWrz2m2ujWtgU5dwN/U6gs1Y7adN3SfKiBy/sNG', 'breana28', '686.348.6419', 'male', 'Quia quae repellendus magni ullam voluptatem. Et laudantium et debitis eos necessitatibus odio.', 1, 'Optio enim et qui rerum. Voluptatem eaque omnis aut suscipit. Praesentium ducimus delectus nihil et nulla quos voluptatem. Nesciunt aut possimus perspiciatis ullam nobis quos culpa.', '1981-12-22', NULL, 'single', 4, '108', '180', 'white', 'sporty', 'high_school', 'rich', 'Hic nulla eligendi et sit.', 'Aircraft Assembler', 'Conn-Osinski', '2', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(16, 'Eden', 'Howe', 'royal.hoppe@example.net', '$2y$10$fyRXKCjWBVnYgxflbZvame9duQExamSHnFCk4mQCZDYuMu5RiBktq', 'theo52', '921.523.4214', 'male', 'Ab officia magni omnis quis sit praesentium. Numquam dolores accusantium et sint aut. Voluptatem quia vitae repudiandae quaerat. Repellendus voluptatum harum rerum ut rerum explicabo blanditiis.', 1, 'Officiis sint ut iure. Rerum eos tenetur doloremque molestiae eius laudantium omnis. Qui ad optio repudiandae sed illum.', '1977-07-01', NULL, 'single', 4, '63', '194', 'white', 'sporty', 'high_school', 'rich', 'Aut aperiam aut ab ut.', 'Immigration Inspector OR Customs Inspector', 'Yost, Breitenberg and Mosciski', '5', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(17, 'Freeda', 'Heller', 'amani.homenick@example.org', '$2y$10$O8YVNUQBsKLVOLSlyMBW0.w11vkQtBVd1C7LLsmpkpiyJSTm9nPFG', 'mathilde37', '1-307-910-9715 x94597', 'male', 'Vel ut quo neque ullam temporibus aut aut. Quaerat eos illum consequatur soluta sit numquam vitae. Voluptate itaque molestiae repudiandae ad sed. Perferendis voluptatem qui aut est qui voluptas.', 1, 'Distinctio nihil error maiores voluptas numquam quidem. Quod asperiores cupiditate autem. Quos sint est at qui et.', '1977-04-28', NULL, 'single', 5, '105', '171', 'white', 'sporty', 'high_school', 'rich', 'Est et vitae sapiente magni.', 'MARCOM Manager', 'Romaguera-Little', '2', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(18, 'Isaac', 'Streich', 'wtorp@example.net', '$2y$10$Kq1I/bAjgogxsAt3xKbXQOE2iFs22wrTcqUePJyAB4Eo.lBnmtz0e', 'langosh.norberto', '(592) 766-4047 x22392', 'male', 'Eligendi rerum dolor atque. Voluptas quisquam repudiandae fugit ipsam adipisci quos velit. Porro totam odit rerum amet. Quia enim aperiam modi placeat quisquam.', 1, 'Iste enim quia enim quo. Earum reprehenderit velit deleniti quo consequuntur. Tempora voluptatibus aspernatur ducimus corrupti quia nihil. Accusantium rerum ut architecto nemo.', '1986-11-19', NULL, 'single', 3, '68', '181', 'white', 'sporty', 'high_school', 'rich', 'Nostrum soluta qui et quas.', 'Rehabilitation Counselor', 'Tremblay-Zboncak', '3', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(19, 'Richmond', 'Wilkinson', 'lafayette.frami@example.com', '$2y$10$Bef8an/ZTID15oHYpjMP/eiKAikb7z1I.KL4XTgs4uIz27PPeT0YO', 'chanelle.welch', '616.865.6229 x8161', 'male', 'Consequuntur id et dignissimos. Nihil minus tempore asperiores laudantium ex molestiae provident. Excepturi eligendi vel iure vitae excepturi.', 1, 'Earum autem corrupti non qui. Recusandae aliquam consectetur alias in quia quibusdam libero. Vero ea occaecati iusto omnis. Maxime vitae ullam amet eos dolor.', '1983-03-24', NULL, 'single', 2, '83', '179', 'white', 'sporty', 'high_school', 'rich', 'Ut et quia fugit ut quis hic.', 'Real Estate Appraiser', 'Sipes Inc', '5', 'online', NULL, 'not_approved', NULL, '2018-06-12 09:59:25', '2018-06-12 09:59:25'),
(20, 'Quentin', 'Farrell', 'okeefe.guillermo@example.org', '$2y$10$HapyhjRT8krYPMHk707L2OfTRAOnFltEug6ynr3Z4pCMG.2ouThQ.', 'bechtelar.viva', '(250) 468-2422 x786', 'male', 'Repellendus iusto quasi ea cumque. Id velit quae dolores aliquam quia et mollitia. Ducimus cupiditate accusantium molestiae voluptatem dolor et. Et qui et dolores eum.', 1, 'Sunt ipsam distinctio eum facilis pariatur ipsa ducimus. Dolore harum et perspiciatis cumque non veniam nam. Rerum aliquid repellat corporis consequuntur. Laudantium perferendis dolor et non eos ut.', '1984-12-05', NULL, 'single', 3, '72', '170', 'white', 'sporty', 'high_school', 'rich', 'Repellat et velit pariatur.', 'Ceiling Tile Installer', 'Schultz, Fadel and Abernathy', '3', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(21, 'Gloria', 'Hoeger', 'saige83@example.com', '$2y$10$hNhu.n8vTaS9NJwvE/Fe.OD4eHOzUWgpGAD0YJqcXJrPfrCvbWVp2', 'jast.felton', '643.451.8231 x4911', 'male', 'Aut possimus fugit quisquam possimus aut corrupti et eaque. Quas ut praesentium similique reprehenderit eos minus qui. Doloribus nihil animi ullam iste incidunt.', 1, 'Esse est eos delectus dolor et rerum magni. Iste cum unde quia delectus. Nobis quasi deserunt fugiat aliquam unde perferendis.', '1986-04-03', NULL, 'single', 3, '110', '195', 'white', 'sporty', 'high_school', 'rich', 'Dolorum et nostrum id et.', 'Alteration Tailor', 'Mills-Cronin', '2', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(22, 'Stephon', 'Armstrong', 'orn.raphaelle@example.net', '$2y$10$w2oxGVsiPrBSQnMdvmuJ.uvfzRjp0XB5V3nhH0x1rKDhCBUr4Yw4q', 'koepp.jordane', '+17752965508', 'male', 'Non rerum consequuntur quibusdam deleniti blanditiis qui. Quasi deleniti quia consequuntur a eveniet. Optio velit fugit et deserunt perferendis consequatur id ut. Ad suscipit culpa nulla.', 1, 'Sequi enim culpa illo est. Aut officia ut non unde quis. Corrupti ut et illum perferendis dolorem dolorem.', '1982-04-20', NULL, 'single', 1, '82', '180', 'white', 'sporty', 'high_school', 'rich', 'Saepe sed qui soluta est.', 'Assembler', 'Olson-Walter', '6', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(23, 'Donald', 'Wiza', 'eweber@example.net', '$2y$10$QN6/nryPtAEjkUvMNbTc6.xiZziS5ic0rco2ydgld9AWr/sOK.7tW', 'piper.lueilwitz', '(570) 797-4867', 'male', 'Doloribus dicta velit ut qui consectetur atque. Et dolorem eum inventore ex quibusdam est. Optio occaecati dicta rerum labore ad in ea.', 1, 'Ut fugit voluptate et qui repudiandae. Non autem voluptatem iusto iure occaecati temporibus. Qui ipsa voluptatem quam possimus. Quis aliquam aut libero recusandae et quaerat accusamus.', '1997-11-18', NULL, 'single', 6, '87', '155', 'white', 'sporty', 'high_school', 'rich', 'Iure sunt porro qui et.', 'Painter and Illustrator', 'Lebsack LLC', '7', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(24, 'Fredrick', 'Wilderman', 'laverne84@example.com', '$2y$10$BprhqTCH3ErFT3u7yjAA7.0eHABXOR5UCcF7c22xjm6G0YusEbUYu', 'rickie85', '290-686-5088', 'male', 'Ea recusandae velit aperiam reprehenderit numquam beatae. Non minima quibusdam totam quisquam enim. In ut quo rem tempora nostrum vitae. Numquam voluptate et adipisci necessitatibus sit.', 1, 'Non et et adipisci totam accusamus deserunt dolore. Ducimus porro aut ex ea quam enim. Vero doloribus error architecto ut deserunt vel.', '1979-01-11', NULL, 'single', 2, '88', '185', 'white', 'sporty', 'high_school', 'rich', 'Et harum tempora veniam ut.', 'Graduate Teaching Assistant', 'Cormier-Beier', '6', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(25, 'Terry', 'Mills', 'madaline.jacobi@example.org', '$2y$10$T154CC7hzJW/dSoSjPojdOIyWp5Xoeq.AMxTYiweJqFusouXRyCp.', 'turner.feeney', '798.286.9207', 'male', 'Est distinctio nihil sunt odio quia illum quisquam. Fugit reiciendis illum deleniti optio. Porro et facere reprehenderit et.', 1, 'Omnis modi voluptatum quo consectetur id eligendi mollitia. Ad est in sunt magnam mollitia porro.', '1999-05-02', NULL, 'single', 4, '93', '179', 'white', 'sporty', 'high_school', 'rich', 'Odio eos quam aut deserunt.', 'Tank Car', 'Wisoky, Crona and Bechtelar', '6', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(26, 'Yessenia', 'O\'Connell', 'nickolas39@example.net', '$2y$10$i9lT6cSIFC9TlsGBczBF1OARrADbbi8gDUeQUNpJd7IlpqvdRuXq.', 'omonahan', '(525) 801-9991 x95318', 'male', 'Doloribus dolor eos reiciendis ducimus quam totam adipisci. Porro animi sapiente eos accusamus magnam assumenda. Ipsum est quae magnam. Cumque quos et veritatis ratione.', 1, 'Commodi est dolores quis id. Tenetur sint ipsum ratione et qui adipisci. Repellendus provident quis voluptatem velit odio vel. Sit dolorem nemo ea maxime soluta dolorum sit.', '1994-03-20', NULL, 'single', 2, '61', '183', 'white', 'sporty', 'high_school', 'rich', 'Ut libero aut ad velit.', 'Database Administrator', 'Schneider, Sipes and VonRueden', '2', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:23', '2018-06-19 06:39:23'),
(27, 'Cecile', 'Nader', 'mertz.annamae@example.org', '$2y$10$84cXOLoiPuUso/ysiDm37.znxI7nQ9ayXnAFEbY/1CipESF4fEasC', 'jessica.bogan', '505-831-2105', 'male', 'Voluptas voluptatem porro qui sed voluptatibus doloribus. Dolor aut ut sit est corrupti tenetur doloremque. Doloremque autem omnis numquam vel.', 1, 'Sint sed voluptatem qui aut modi qui. Deleniti quo dolorum aperiam rerum libero. Consequatur aliquam et voluptatem et ea.', '1973-03-02', NULL, 'single', 2, '106', '158', 'white', 'sporty', 'high_school', 'rich', 'Placeat possimus sit ea.', 'Assessor', 'Quitzon, Cummings and Dooley', '9', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:24', '2018-06-19 06:39:24'),
(28, 'Ludwig', 'Mayer', 'nathanial75@example.com', '$2y$10$hL.JZtxeoml6AOe3bZS6nejSfenIlgjdPpm9ixzly.AN/txpn.Ls6', 'cfarrell', '278.417.0892', 'male', 'Architecto vero voluptas aliquam aut id iure. Odio ipsum facere fugiat quo corporis. Non alias hic amet natus iusto enim fuga. Magni quaerat ex optio voluptatem aperiam dicta velit.', 1, 'Dolores atque provident blanditiis iure. Veniam itaque nulla qui rerum voluptatem omnis voluptates architecto. Soluta provident doloribus laudantium consequatur perspiciatis dolores quos.', '1983-07-20', NULL, 'single', 6, '68', '162', 'white', 'sporty', 'high_school', 'rich', 'Ipsum distinctio aut quo.', 'Percussion Instrument Repairer', 'Kiehn PLC', '1', 'online', NULL, 'not_approved', NULL, '2018-06-19 06:39:24', '2018-06-19 06:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `client_password_resets`
--

CREATE TABLE `client_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_number1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phone1`, `phone2`) VALUES
(1, 'sakr quraish sheraton', 1114388555, 1118855223);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', 'egp', NULL, NULL),
(2, 'Bouvet Island (Bouvetoya)', 'SYP', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(3, 'Australia', 'FJD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(4, 'Libyan Arab Jamahiriya', 'ARS', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(5, 'United Kingdom', 'AUD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(6, 'Aruba', 'UZS', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(7, 'Senegal', 'MZN', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(8, 'Dominica', 'RWF', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(9, 'Peru', 'TOP', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(10, 'Algeria', 'CHF', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(11, 'Northern Mariana Islands', 'PKR', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(12, 'Morocco', 'SEK', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(13, 'Uruguay', 'AMD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(14, 'American Samoa', 'TOP', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(15, 'Tunisia', 'BGN', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(16, 'Gabon', 'BZD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(17, 'Malaysia', 'GYD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(18, 'Palestinian Territories', 'HKD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(19, 'Turkey', 'GNF', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(20, 'Taiwan', 'EGP', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(21, 'Bermuda', 'ALL', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(22, 'Zambia', 'TRY', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(23, 'Uzbekistan', 'BAM', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(24, 'Zimbabwe', 'BHD', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(25, 'Turks and Caicos Islands', 'SLL', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(26, 'Morocco', 'UZS', '2018-06-12 10:08:37', '2018-06-12 10:08:37'),
(27, 'Senegal', 'PGK', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(28, 'Guam', 'UZS', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(29, 'Somalia', 'IRR', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(30, 'Germany', 'GTQ', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(31, 'Comoros', 'GHS', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(32, 'Wallis and Futuna', 'STD', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(33, 'Mozambique', 'MKD', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(34, 'Bhutan', 'BTN', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(35, 'Congo', 'DJF', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(36, 'Guadeloupe', 'SYP', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(37, 'Syrian Arab Republic', 'MGA', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(38, 'Switzerland', 'SHP', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(39, 'Togo', 'KZT', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(40, 'Albania', 'GMD', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(41, 'Libyan Arab Jamahiriya', 'JMD', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(42, 'Christmas Island', 'LSL', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(43, 'South Africa', 'CHF', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(44, 'Belize', 'CVE', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(45, 'Liberia', 'MZN', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(46, 'Sudan', 'ISK', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(47, 'Cameroon', 'JPY', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(48, 'Micronesia', 'ARS', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(49, 'French Southern Territories', 'TJS', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(50, 'Niue', 'MXN', '2018-06-12 10:09:25', '2018-06-12 10:09:25'),
(51, 'Falkland Islands (Malvinas)', 'DKK', '2018-06-12 10:09:25', '2018-06-12 10:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'why are we good?', '<p>odod dsmds sjdnsjd sjkdamkdf abdul-wahab</p>'),
(2, 'why are we bad?', 'hdhsd sdsdjs sudewudhe sndsndhns');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `read` enum('seen','unseen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unseen',
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_06_09_094510_create_countries_table', 1),
(4, '2018_06_10_091522_create_cities_table', 1),
(5, '2018_06_10_094520_create_admins_table', 1),
(6, '2018_06_10_094521_create_admin_password_resets_table', 1),
(7, '2018_06_10_094539_create_clients_table', 1),
(8, '2018_06_10_094540_create_client_password_resets_table', 1),
(9, '2018_06_10_110027_create_contacts_table', 1),
(10, '2018_06_10_110404_create_site_infos_table', 1),
(11, '2018_06_11_104656_create_friends_table', 1),
(12, '2018_06_11_104929_create_blacklists_table', 1),
(13, '2018_06_11_105114_create_success_stories_table', 1),
(14, '2018_06_12_105244_create_mails_table', 1);

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
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fivicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_words` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_docx` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `policy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_used` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_methods` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `site_name`, `logo`, `fivicon`, `key_words`, `description`, `author`, `term_docx`, `policy`, `website_used`, `payment_methods`, `footer_about`, `fb`, `tw`, `instagram`, `google`, `created_at`, `updated_at`) VALUES
(1, 'جوزني', '1529419386.png', '1529419386.jpg', 'MARRY, TEST, DEMO', 'this is good site', 'RedaReda', '<p>أقسم بالله العظيم أني لم أدخل هذا الموقع الا بهدف الزواج الشرعي وفق كتاب الله و سنة رسوله , وليس لأي هدف آخر . وأعاهد الله وأعاهدكم على أن لا أضيع تعب الموقع , وأن لا أخدع الأعضاء , وأن أكون صادقا مع الله ثم مع نفسي , وأن ألتزم بشروط الموقع , و شروط المراسلة فيه , عسى ربي يكتب لي الخير في هذا المكان . والله خير الشاهدين</p>', 'good good greta', 'dvav  vCFSD DVDSV EDFVAVA PHP, Nodejs, python, c#, RubyOnRails, skype', 'csacavcdav', 'advadvdaxvda', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.google.com', '2018-06-19 12:50:02', '2018-06-19 12:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `admin_to_client_messages`
--
ALTER TABLE `admin_to_client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blacklists`
--
ALTER TABLE `blacklists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blacklists_client_id_foreign` (`client_id`),
  ADD KEY `blacklists_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`),
  ADD KEY `clients_city_id_foreign` (`city_id`);

--
-- Indexes for table `client_password_resets`
--
ALTER TABLE `client_password_resets`
  ADD KEY `client_password_resets_email_index` (`email`),
  ADD KEY `client_password_resets_token_index` (`token`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_client_id_foreign` (`client_id`),
  ADD KEY `friends_friend_id_foreign` (`friend_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mails_sender_id_foreign` (`sender_id`),
  ADD KEY `mails_receiver_id_foreign` (`receiver_id`);

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
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `success_stories_client_id_foreign` (`client_id`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_to_client_messages`
--
ALTER TABLE `admin_to_client_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blacklists`
--
ALTER TABLE `blacklists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blacklists`
--
ALTER TABLE `blacklists`
  ADD CONSTRAINT `blacklists_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blacklists_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friends_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mails`
--
ALTER TABLE `mails`
  ADD CONSTRAINT `mails_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mails_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD CONSTRAINT `success_stories_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
