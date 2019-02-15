-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2019 at 10:09 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Seorang Komentator WordPress', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-02-13 10:46:33', '2019-02-13 03:46:33', 'Hai, ini sebuah komentar.\nUntuk mulai memoderasi, mengedit, dan menghapus komentar, silakan kunjungi laman Komentar di dasbor.\nAvatar komentator diambil dari <a href=\"https://gravatar.com\">Gravatar</a>.', 0, 'post-trashed', '', '', 0, 0),
(2, 25, 'yudono', 'yudonoputro@gmail.com', '', '::1', '2019-02-14 09:46:26', '2019-02-14 02:46:26', 'yudono', 0, '1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/Yudonolks2019-wordpress', 'yes'),
(2, 'home', 'http://localhost/Yudonolks2019-wordpress', 'yes'),
(3, 'blogname', 'global fashion', 'yes'),
(4, 'blogdescription', 'Moto situs Anda bisa diletakkan di sini', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'yudonoputro@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j F Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'j F Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:89:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '7', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'blankslate', 'yes'),
(41, 'stylesheet', 'blankslate', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '43764', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '0', 'yes'),
(93, 'initial_db_version', '43764', 'yes'),
(94, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'WPLANG', 'id_ID', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:19:\"primary-widget-area\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(103, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'cron', 'a:5:{i:1550141194;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1550159194;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1550202425;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1550216763;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(113, 'theme_mods_twentynineteen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1550029674;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(122, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.0.3.zip\";s:6:\"locale\";s:5:\"id_ID\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.0.3.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.0.3-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.0.3-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.0.3\";s:7:\"version\";s:5:\"5.0.3\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1550116041;s:15:\"version_checked\";s:5:\"5.0.3\";s:12:\"translations\";a:0:{}}', 'no'),
(123, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1550134313;s:7:\"checked\";a:4:{s:10:\"blankslate\";s:5:\"4.0.4\";s:14:\"twentynineteen\";s:3:\"1.2\";s:15:\"twentyseventeen\";s:3:\"2.0\";s:13:\"twentysixteen\";s:3:\"1.8\";}s:8:\"response\";a:1:{s:10:\"blankslate\";a:4:{s:5:\"theme\";s:10:\"blankslate\";s:11:\"new_version\";i:2019;s:3:\"url\";s:40:\"https://wordpress.org/themes/blankslate/\";s:7:\"package\";s:57:\"https://downloads.wordpress.org/theme/blankslate.2019.zip\";}}s:12:\"translations\";a:0:{}}', 'no'),
(124, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1550134112;s:7:\"checked\";a:2:{s:19:\"akismet/akismet.php\";s:3:\"4.1\";s:9:\"hello.php\";s:5:\"1.7.1\";}s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.1\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.0.3\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=969907\";s:2:\"1x\";s:63:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=969907\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:65:\"https://ps.w.org/hello-dolly/assets/banner-772x250.png?rev=478342\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(125, '_site_transient_timeout_browser_4855f7e4df8eff40946f86d1c1948e0d', '1550634426', 'no'),
(126, '_site_transient_browser_4855f7e4df8eff40946f86d1c1948e0d', 'a:10:{s:4:\"name\";s:14:\"Microsoft Edge\";s:7:\"version\";s:8:\"15.15063\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:0:\"\";s:7:\"img_src\";s:0:\"\";s:11:\"img_src_ssl\";s:0:\"\";s:15:\"current_version\";s:8:\"15.15063\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(128, 'can_compress_scripts', '1', 'no'),
(141, 'current_theme', 'BlankSlate', 'yes'),
(142, 'theme_mods_blankslate', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(143, 'theme_switched', '', 'yes'),
(157, 'category_children', 'a:0:{}', 'yes'),
(161, '_transient_timeout_dash_v2_be061a787773cc7f8c0b12037a967a37', '1550150611', 'no'),
(162, '_transient_dash_v2_be061a787773cc7f8c0b12037a967a37', '<div class=\"rss-widget\"><p><strong>Masalah RSS:</strong> WP HTTP Error: cURL error 6: Could not resolve host: id.wordpress.org</p></div><div class=\"rss-widget\"><p><strong>Masalah RSS:</strong> WP HTTP Error: cURL error 6: Could not resolve host: planet.wordpress.org</p></div>', 'no'),
(195, '_transient_timeout_plugin_slugs', '1550220512', 'no'),
(196, '_transient_plugin_slugs', 'a:2:{i:0;s:19:\"akismet/akismet.php\";i:1;s:9:\"hello.php\";}', 'no'),
(197, 'recently_activated', 'a:0:{}', 'yes'),
(198, '_site_transient_timeout_theme_roots', '1550136113', 'no'),
(199, '_site_transient_theme_roots', 'a:5:{s:6:\"assets\";s:7:\"/themes\";s:10:\"blankslate\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 1, '_edit_lock', '1550029608:1'),
(4, 1, '_wp_trash_meta_status', 'publish'),
(5, 1, '_wp_trash_meta_time', '1550043961'),
(6, 1, '_wp_desired_post_slug', 'halo-dunia'),
(7, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:\"1\";}'),
(8, 6, '_edit_lock', '1550113386:1'),
(9, 7, '_wp_attached_file', '2019/02/elle-ss18-trend-report-2a-1508859946.jpg'),
(10, 7, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2000;s:6:\"height\";i:1000;s:4:\"file\";s:48:\"2019/02/elle-ss18-trend-report-2a-1508859946.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:48:\"elle-ss18-trend-report-2a-1508859946-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:48:\"elle-ss18-trend-report-2a-1508859946-300x150.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:48:\"elle-ss18-trend-report-2a-1508859946-768x384.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:384;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:49:\"elle-ss18-trend-report-2a-1508859946-1024x512.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(13, 9, '_edit_lock', '1550113376:1'),
(16, 11, '_edit_lock', '1550113356:1'),
(35, 18, '_edit_lock', '1550046461:1'),
(36, 19, '_edit_lock', '1550113320:1'),
(49, 22, '_edit_lock', '1550113397:1'),
(54, 25, '_edit_lock', '1550133339:1'),
(67, 32, '_wp_attached_file', '2019/02/elle-ss18-trend-report-2a-1508859946-1.jpg'),
(68, 32, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2000;s:6:\"height\";i:1000;s:4:\"file\";s:50:\"2019/02/elle-ss18-trend-report-2a-1508859946-1.jpg\";s:5:\"sizes\";a:4:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:50:\"elle-ss18-trend-report-2a-1508859946-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:50:\"elle-ss18-trend-report-2a-1508859946-1-300x150.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:50:\"elle-ss18-trend-report-2a-1508859946-1-768x384.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:384;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:51:\"elle-ss18-trend-report-2a-1508859946-1-1024x512.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(71, 19, '_thumbnail_id', '32'),
(74, 25, '_thumbnail_id', '32'),
(77, 22, '_thumbnail_id', '32'),
(80, 11, '_thumbnail_id', '32'),
(83, 9, '_thumbnail_id', '32'),
(86, 6, '_thumbnail_id', '32'),
(91, 37, '_wp_attached_file', '2019/02/map.png'),
(92, 37, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:846;s:6:\"height\";i:368;s:4:\"file\";s:15:\"2019/02/map.png\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:15:\"map-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:15:\"map-300x130.png\";s:5:\"width\";i:300;s:6:\"height\";i:130;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:15:\"map-768x334.png\";s:5:\"width\";i:768;s:6:\"height\";i:334;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(95, 39, '_edit_lock', '1550138963:1'),
(96, 40, '_wp_attached_file', '2019/02/Model-Baju-Wanita-Terbaru-AD16.jpg'),
(97, 40, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:850;s:6:\"height\";i:850;s:4:\"file\";s:42:\"2019/02/Model-Baju-Wanita-Terbaru-AD16.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:42:\"Model-Baju-Wanita-Terbaru-AD16-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:42:\"Model-Baju-Wanita-Terbaru-AD16-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:42:\"Model-Baju-Wanita-Terbaru-AD16-768x768.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(100, 39, '_thumbnail_id', '40'),
(101, 42, '_edit_lock', '1550133939:1');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-02-13 10:46:33', '2019-02-13 03:46:33', '<!-- wp:paragraph -->\n<p>Selamat datang di WordPress. Ini adalah pos pertama Anda. Edit atau hapus pos ini, lalu mulailah menulis!</p>\n<!-- /wp:paragraph -->', 'Halo dunia!', '', 'trash', 'open', 'open', '', 'halo-dunia__trashed', '', '', '2019-02-13 14:46:01', '2019-02-13 07:46:01', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=1', 0, 'post', '', 1),
(2, 1, '2019-02-13 10:46:33', '2019-02-13 03:46:33', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/Yudonolks2019-wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Laman Contoh', '', 'publish', 'closed', 'open', '', 'laman-contoh', '', '', '2019-02-13 10:46:33', '2019-02-13 03:46:33', '', 0, 'http://localhost/Yudonolks2019-wordpress/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-02-13 10:46:33', '2019-02-13 03:46:33', '<!-- wp:heading --><h2>Siapa kami</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Alamat situs web kami adalah: http://localhost/Yudonolks2019-wordpress.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Data pribadi apa yang kami kumpulkan dan mengapa kami mengumpulkannya</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Komentar</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Saat pengunjung meninggalkan komentar pada situs, kita mengumpulkan data yang ditampilkan pada form komentar, alamat IP pengunjung dan user agent browser untuk membantu pendeteksian spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>String anonim yang dibuat dari alamat email Anda (juga disebut hash) dapat diberikan ke layanan Gravatar untuk melihat apakah Anda menggunakannya. Kebijakan privasi layanan Gravatar tersedia di sini: https://automattic.com/privacy/. Setelah persetujuan atas komentar Anda, gambar profil Anda dapat dilihat oleh publik dalam konteks komentar Anda.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Jika Anda mengunggah gambar ke situs web, Anda harus menghindari mengunggah gambar dengan data lokasi tertanam (GPS EXIF) yang disertakan. Pengunjung ke situs web dapat mengunduh dan mengekstrak data lokasi apa pun dari gambar di situs web.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Formulir Kontak</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Jika Anda meninggalkan komentar di situs kami, Anda dapat memilih untuk menyimpan nama, alamat email, dan situs web Anda dalam cookie. Ini untuk kenyamanan Anda sehingga Anda tidak perlu mengisi detail Anda lagi ketika Anda meninggalkan komentar lain. Cookie ini akan bertahan selama satu tahun.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Jika Anda memiliki akun dan masuk ke situs ini, kami akan menetapkan cookie sementara untuk menentukan apakah peramban Anda menerima cookie. Cookie ini tidak menyimpan data pribadi dan dibuang saat Anda menutup peramban Anda.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Saat Anda log masuk, kami akan menyiapkan beberapa cookie untuk menyimpan informasi log masuk Anda dan tampilan yang Anda pilih. Cookie log masuk berlaku selama dua hari, dan cookie pengaturan tampilan berlaku selama satu tahun. Jika Anda memilih &quot;Ingatkan Saya&quot;, log masuk anda akan bertahan selama dua minggu. Jika Anda log keluar dari akun, cookie log masuk akan dihapus.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Jika Anda menyunting atau menerbitkan artikel, cookie tambahan akan disimpan di browser Anda. Cookie ini tidak menyertakan data pribadi dan hanya menunjukkan ID posting dari artikel yang baru saja Anda sunting. Kadaluwarsa setelah 1 hari.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Konten yang disematkan dari situs web lain</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Artikel-artikel di dalam situs ini dapat menyertakan konten terembed (seperti video, gambar, artikel, dll). Konten terembed dari situs web lain akan berlaku sama dengan pengunjung yang mengunjungi situs web lain.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Situs-situs web ini dapat mengumpulkan data tentang Anda, menggunakan cookies, menanamkan pelacak dari pihak ketiga, dan memonitor interaksi Anda dengan muatan tertanam, termasuk menggunakannya untuk melacak interaksi Anda jika Anda memiliki sebuah akun dan masuk ke dalam situs web tersebut.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analitik</h3><!-- /wp:heading --><!-- wp:heading --><h2>Dengan siapa kami membagi data Anda</h2><!-- /wp:heading --><!-- wp:heading --><h2>Berapa lama kami menyimpan data Anda</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Jika Anda meninggalkan komentar, komentar dan metadatanya dipertahankan tanpa batas. Ini agar kami dapat mengenali dan menyetujui komentar tindak lanjut secara otomatis dan tidak menahannya dalam antrean moderasi.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Untuk pengguna yang mendaftar pada website kami (jika ada), kami juga menyimpan informasi pribadi yang mereka berikan dalam profil pengguna mereka. Semua pengguna dapat melihat, mengedit, atau menghapus informasi pribadi mereka kapan saja (kecuali mereka tidak dapat mengubah nama pengguna mereka). Administrator situs juga dapat melihat dan mengedit informasi tersebut.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Hak apa yang Anda miliki atas data ANda</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Jika anda mempunyai akun di situs ini, atau telah meninggalkan komentar, anda dapat meminta untuk mendapat data personal dalam file export dari kami, termasuk data yang anda berikan kepada kami. Anda juga dapat meminta kami menghapus data personal mengenai anda. Ini tidak termasuk data yang wajib kami simpan untuk keperluan administratif, hukum, atau keamanan.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Ke mana kami kirim data Anda</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Komentar pengunjung dapat diperiksa melalui layanan deteksi spam otomatis.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Informasi kontak Anda</h2><!-- /wp:heading --><!-- wp:heading --><h2>Informasi tambahan</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Bagaimana kami melindungi data Anda</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Apa prosedur kebocoran data yang kami miliki</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Pihak ketiga mana saja data yang kami terima berasal</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Apa pengambilan keputusan otomatis dan/atau profil yang kami lakukan dengan data pengguna</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Persyaratan pengungkapan regulasi industri</h3><!-- /wp:heading -->', 'Kebijakan Privasi', '', 'draft', 'closed', 'open', '', 'kebijakan-privasi', '', '', '2019-02-13 10:46:33', '2019-02-13 03:46:33', '', 0, 'http://localhost/Yudonolks2019-wordpress/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-02-13 10:47:06', '0000-00-00 00:00:00', '', 'Konsep Otomatis', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-13 10:47:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=4', 0, 'post', '', 0),
(5, 1, '2019-02-13 14:46:01', '2019-02-13 07:46:01', '<!-- wp:paragraph -->\n<p>Selamat datang di WordPress. Ini adalah pos pertama Anda. Edit atau hapus pos ini, lalu mulailah menulis!</p>\n<!-- /wp:paragraph -->', 'Halo dunia!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2019-02-13 14:46:01', '2019-02-13 07:46:01', '', 1, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/1-revision-v1/', 0, 'revision', '', 0),
(6, 1, '2019-02-13 14:46:40', '2019-02-13 07:46:40', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global fashion 2017', '', 'publish', 'open', 'open', '', 'global-fashion-2017', '', '', '2019-02-14 10:05:29', '2019-02-14 03:05:29', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=6', 0, 'post', '', 0),
(7, 1, '2019-02-13 14:46:24', '2019-02-13 07:46:24', '', 'elle-ss18-trend-report-2a-1508859946', '', 'inherit', 'open', 'closed', '', 'elle-ss18-trend-report-2a-1508859946', '', '', '2019-02-13 14:46:24', '2019-02-13 07:46:24', '', 6, 'http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946.jpg', 0, 'attachment', 'image/jpeg', 0),
(8, 1, '2019-02-13 14:46:40', '2019-02-13 07:46:40', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!\n\n</p>\n<!-- /wp:paragraph -->', 'Global fashion 2017', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-02-13 14:46:40', '2019-02-13 07:46:40', '', 6, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/6-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2019-02-13 14:47:02', '2019-02-13 07:47:02', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2018', '', 'publish', 'open', 'open', '', 'global-fashion-2018', '', '', '2019-02-14 10:05:10', '2019-02-14 03:05:10', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=9', 0, 'post', '', 0),
(10, 1, '2019-02-13 14:47:02', '2019-02-13 07:47:02', '<p><br>\n<br>\n<!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!\n\n</p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2018', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2019-02-13 14:47:02', '2019-02-13 07:47:02', '', 9, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/9-revision-v1/', 0, 'revision', '', 0),
(11, 1, '2019-02-13 14:47:17', '2019-02-13 07:47:17', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2019', '', 'publish', 'open', 'open', '', 'global-fashion-2019', '', '', '2019-02-14 10:04:59', '2019-02-14 03:04:59', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=11', 0, 'post', '', 0),
(12, 1, '2019-02-13 14:47:17', '2019-02-13 07:47:17', '<p><br>\n<br>\n<!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!\n\n</p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2019', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2019-02-13 14:47:17', '2019-02-13 07:47:17', '', 11, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/11-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2019-02-13 15:10:43', '2019-02-13 08:10:43', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!\n\n</p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2018', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2019-02-13 15:10:43', '2019-02-13 08:10:43', '', 9, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/9-revision-v1/', 0, 'revision', '', 0),
(14, 1, '2019-02-13 15:10:59', '2019-02-13 08:10:59', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>\n\nLorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!\n\n</p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2019', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2019-02-13 15:10:59', '2019-02-13 08:10:59', '', 11, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/11-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2019-02-13 15:12:36', '2019-02-13 08:12:36', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2019', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2019-02-13 15:12:36', '2019-02-13 08:12:36', '', 11, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/11-revision-v1/', 0, 'revision', '', 0),
(16, 1, '2019-02-13 15:12:47', '2019-02-13 08:12:47', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global fashion 2018', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2019-02-13 15:12:47', '2019-02-13 08:12:47', '', 9, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/9-revision-v1/', 0, 'revision', '', 0),
(17, 1, '2019-02-13 15:12:55', '2019-02-13 08:12:55', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global fashion 2017', '', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2019-02-13 15:12:55', '2019-02-13 08:12:55', '', 6, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/6-revision-v1/', 0, 'revision', '', 0),
(18, 1, '2019-02-13 15:29:59', '0000-00-00 00:00:00', '', 'Konsep Otomatis', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-13 15:29:59', '0000-00-00 00:00:00', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=18', 0, 'post', '', 0),
(19, 1, '2019-02-13 15:30:41', '2019-02-13 08:30:41', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2020', '', 'publish', 'open', 'open', '', 'global-fashion-2020', '', '', '2019-02-14 10:04:14', '2019-02-14 03:04:14', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=19', 0, 'post', '', 0),
(20, 1, '2019-02-13 15:30:41', '2019-02-13 08:30:41', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-02-13 15:30:41', '2019-02-13 08:30:41', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/13/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2019-02-14 08:56:35', '2019-02-14 01:56:35', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-02-14 08:56:35', '2019-02-14 01:56:35', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/19-revision-v1/', 0, 'revision', '', 0),
(22, 1, '2019-02-14 08:59:09', '2019-02-14 01:59:09', '<p></p>\n<p><!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global Fashion 2021', '', 'publish', 'open', 'open', '', 'global-fashion-2016', '', '', '2019-02-14 10:05:40', '2019-02-14 03:05:40', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=22', 0, 'post', '', 0),
(23, 1, '2019-02-14 08:59:09', '2019-02-14 01:59:09', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global Fashion 2016', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2019-02-14 08:59:09', '2019-02-14 01:59:09', '', 22, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/22-revision-v1/', 0, 'revision', '', 0),
(24, 1, '2019-02-14 08:59:24', '2019-02-14 01:59:24', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global Fashion 2021', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2019-02-14 08:59:24', '2019-02-14 01:59:24', '', 22, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/22-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2019-02-14 08:59:41', '2019-02-14 01:59:41', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":37} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/map.png\" alt=\"\" class=\"wp-image-37\"/></figure>\n<!-- /wp:image -->', 'Global fashion 2022', '', 'publish', 'open', 'open', '', 'global-fashion-2022', '', '', '2019-02-14 15:16:57', '2019-02-14 08:16:57', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=25', 0, 'post', '', 1),
(26, 1, '2019-02-14 08:59:41', '2019-02-14 01:59:41', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global fashion 2022', '', 'inherit', 'closed', 'closed', '', '25-revision-v1', '', '', '2019-02-14 08:59:41', '2019-02-14 01:59:41', '', 25, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/25-revision-v1/', 0, 'revision', '', 0),
(27, 1, '2019-02-14 09:41:13', '2019-02-14 02:41:13', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->', 'Global fashion 2022', '', 'inherit', 'closed', 'closed', '', '25-revision-v1', '', '', '2019-02-14 09:41:13', '2019-02-14 02:41:13', '', 25, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/25-revision-v1/', 0, 'revision', '', 0),
(28, 1, '2019-02-14 09:42:04', '2019-02-14 02:42:04', '<p><br>\n<br>\n<!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global Fashion 2021', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2019-02-14 09:42:04', '2019-02-14 02:42:04', '', 22, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/22-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2019-02-14 09:42:19', '2019-02-14 02:42:19', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<p><br>\n<br>\n<!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-02-14 09:42:19', '2019-02-14 02:42:19', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/19-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2019-02-14 09:42:26', '2019-02-14 02:42:26', '<p><br /><br /><!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-02-14 09:42:26', '2019-02-14 02:42:26', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/19-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2019-02-14 09:42:30', '2019-02-14 02:42:30', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2019-02-14 09:42:30', '2019-02-14 02:42:30', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/19-revision-v1/', 0, 'revision', '', 0),
(32, 1, '2019-02-14 10:03:23', '2019-02-14 03:03:23', '', 'elle-ss18-trend-report-2a-1508859946', '', 'inherit', 'open', 'closed', '', 'elle-ss18-trend-report-2a-1508859946-2', '', '', '2019-02-14 10:03:23', '2019-02-14 03:03:23', '', 19, 'http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(33, 1, '2019-02-14 10:03:37', '2019-02-14 03:03:37', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--><br>\n<br>\n</p>', 'Global fashion 2020', '', 'inherit', 'closed', 'closed', '', '19-autosave-v1', '', '', '2019-02-14 10:03:37', '2019-02-14 03:03:37', '', 19, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/19-autosave-v1/', 0, 'revision', '', 0),
(34, 1, '2019-02-14 10:04:49', '2019-02-14 03:04:49', '<p>\n</p><p><!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global Fashion 2021', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2019-02-14 10:04:49', '2019-02-14 03:04:49', '', 22, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/22-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2019-02-14 10:05:40', '2019-02-14 03:05:40', '<p></p>\n<p><!--StartFragment--></p>\n\n<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<p><!--EndFragment--></p>\n<p></p>', 'Global Fashion 2021', '', 'inherit', 'closed', 'closed', '', '22-revision-v1', '', '', '2019-02-14 10:05:40', '2019-02-14 03:05:40', '', 22, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/22-revision-v1/', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(36, 1, '2019-02-14 15:16:52', '2019-02-14 08:16:52', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image -->\n<figure class=\"wp-block-image\"><img alt=\"\"/></figure>\n<!-- /wp:image -->', 'Global fashion 2022', '', 'inherit', 'closed', 'closed', '', '25-autosave-v1', '', '', '2019-02-14 15:16:52', '2019-02-14 08:16:52', '', 25, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/25-autosave-v1/', 0, 'revision', '', 0),
(37, 1, '2019-02-14 15:16:55', '2019-02-14 08:16:55', '', 'map', '', 'inherit', 'open', 'closed', '', 'map', '', '', '2019-02-14 15:16:55', '2019-02-14 08:16:55', '', 25, 'http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/map.png', 0, 'attachment', 'image/png', 0),
(38, 1, '2019-02-14 15:16:57', '2019-02-14 08:16:57', '<!-- wp:image {\"id\":7} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/elle-ss18-trend-report-2a-1508859946-1024x512.jpg\" alt=\"\" class=\"wp-image-7\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p> </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem! </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p> <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!   Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae saepe numquam unde at amet minima, impedit, explicabo ducimus ullam, voluptate modi in quam repellat obcaecati velit reprehenderit distinctio exercitationem!  </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":37} -->\n<figure class=\"wp-block-image\"><img src=\"http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/map.png\" alt=\"\" class=\"wp-image-37\"/></figure>\n<!-- /wp:image -->', 'Global fashion 2022', '', 'inherit', 'closed', 'closed', '', '25-revision-v1', '', '', '2019-02-14 15:16:57', '2019-02-14 08:16:57', '', 25, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/25-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2019-02-14 15:34:39', '2019-02-14 08:34:39', '<!-- wp:paragraph -->\n<p>adfasdasdasd</p>\n<!-- /wp:paragraph -->', 'Test', '', 'publish', 'open', 'open', '', 'test', '', '', '2019-02-14 15:34:39', '2019-02-14 08:34:39', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=39', 0, 'post', '', 0),
(40, 1, '2019-02-14 15:34:33', '2019-02-14 08:34:33', '', 'Model-Baju-Wanita-Terbaru-AD16', '', 'inherit', 'open', 'closed', '', 'model-baju-wanita-terbaru-ad16', '', '', '2019-02-14 15:34:33', '2019-02-14 08:34:33', '', 39, 'http://localhost/Yudonolks2019-wordpress/wp-content/uploads/2019/02/Model-Baju-Wanita-Terbaru-AD16.jpg', 0, 'attachment', 'image/jpeg', 0),
(41, 1, '2019-02-14 15:34:39', '2019-02-14 08:34:39', '<!-- wp:paragraph -->\n<p>adfasdasdasd</p>\n<!-- /wp:paragraph -->', 'Test', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2019-02-14 15:34:39', '2019-02-14 08:34:39', '', 39, 'http://localhost/Yudonolks2019-wordpress/2019/02/14/39-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2019-02-14 15:38:06', '0000-00-00 00:00:00', '', 'Konsep Otomatis', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-14 15:38:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/Yudonolks2019-wordpress/?p=42', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Tak Berkategori', 'tak-berkategori', 0),
(2, 'former', 'former', 0),
(3, 'former events', 'former-events', 0),
(4, 'form', 'form', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(6, 1, 0),
(6, 3, 0),
(9, 1, 0),
(9, 3, 0),
(11, 1, 0),
(11, 3, 0),
(19, 1, 0),
(19, 3, 0),
(22, 1, 0),
(22, 3, 0),
(25, 1, 0),
(25, 3, 0),
(39, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 7),
(2, 2, 'post_tag', '', 0, 0),
(3, 3, 'post_tag', '', 0, 6),
(4, 4, 'post_tag', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'yudono'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy'),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:6:{s:64:\"091438b6f2f806d01690a13ad7c092abd8bf1f95c51d258db9c212952f443a1a\";a:4:{s:10:\"expiration\";i:1550202425;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:129:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063\";s:5:\"login\";i:1550029625;}s:64:\"4ef9ebef2102869411ae2ff94b22306eb85d565460e62305d577548a28f8d03f\";a:4:{s:10:\"expiration\";i:1550216753;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36\";s:5:\"login\";i:1550043953;}s:64:\"63a970cc02a74ab24e30608312dd74719855155d4261ac1ae1429be41670b7e6\";a:4:{s:10:\"expiration\";i:1550218174;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36\";s:5:\"login\";i:1550045374;}s:64:\"d61ebb2ff49869162fc9cc21a80e863259aa396797df3bf15cd9e85ed217e6f4\";a:4:{s:10:\"expiration\";i:1550219399;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36\";s:5:\"login\";i:1550046599;}s:64:\"1e075886be257ea5a94ff17f45fe1fca575a91043a680116dde1c3eb2efbe162\";a:4:{s:10:\"expiration\";i:1550280210;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:129:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063\";s:5:\"login\";i:1550107410;}s:64:\"8a8cc43f1ddef71b507d7e21ae19e236889078179dd75c121d9ca31ab8bc8989\";a:4:{s:10:\"expiration\";i:1550284780;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36\";s:5:\"login\";i:1550111980;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'wp_user-settings', 'libraryContent=browse'),
(19, 1, 'wp_user-settings-time', '1550113460');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'yudono', '$P$BLvYUMEGuvZ6lT27GtjV2J7ZK.noDy/', 'yudono', 'yudonoputro@gmail.com', '', '2019-02-13 03:46:32', '', 0, 'yudono');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
