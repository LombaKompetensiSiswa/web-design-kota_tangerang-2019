-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 11:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-02-13 07:40:02', '2019-02-13 07:40:02', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/zidanea_wordpress', 'yes'),
(2, 'home', 'http://localhost/zidanea_wordpress', 'yes'),
(3, 'blogname', 'Global Fashion 2017', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'zidaneadhity17@gmail.com', 'yes'),
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
(23, 'date_format', 'F, j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:90:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=2&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:4:{i:1;s:22:\"image_slider/index.php\";i:2;s:18:\"security/index.php\";i:3;s:13:\"seo/index.php\";i:4;s:23:\"video_gallery/index.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '', 'yes'),
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
(53, 'show_on_front', 'page', 'yes'),
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
(78, 'widget_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', 'Asia/Jakarta', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '2', 'yes'),
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
(96, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_recent-posts', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'sidebars_widgets', 'a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:19:\"primary-widget-area\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(102, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'cron', 'a:5:{i:1550140803;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1550173203;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1550216412;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1550220990;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(112, 'theme_mods_twentynineteen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1550043925;s:4:\"data\";a:2:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(114, '_site_transient_update_core', 'O:8:\"stdClass\":3:{s:7:\"updates\";a:0:{}s:15:\"version_checked\";s:5:\"5.0.3\";s:12:\"last_checked\";i:1550132887;}', 'no'),
(115, '_site_transient_update_plugins', 'O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1550134494;}', 'no'),
(122, 'can_compress_scripts', '1', 'no'),
(130, 'theme_mods_blankslate', 'a:2:{s:18:\"custom_css_post_id\";i:16;s:18:\"nav_menu_locations\";a:1:{s:9:\"main-menu\";i:2;}}', 'yes'),
(133, '_site_transient_update_themes', 'O:8:\"stdClass\":1:{s:12:\"last_checked\";i:1550134581;}', 'no'),
(134, 'current_theme', 'BlankSlate', 'yes'),
(135, 'theme_switched', '', 'yes'),
(138, '_transient_timeout_plugin_slugs', '1550220894', 'no'),
(139, '_transient_plugin_slugs', 'a:6:{i:0;s:19:\"akismet/akismet.php\";i:1;s:9:\"hello.php\";i:2;s:22:\"image_slider/index.php\";i:3;s:13:\"seo/index.php\";i:4;s:18:\"security/index.php\";i:5;s:23:\"video_gallery/index.php\";}', 'no'),
(140, 'recently_activated', 'a:1:{s:9:\"hello.php\";i:1550125799;}', 'yes'),
(144, '_transient_timeout_dash_v2_88ae138922fe95674369b1cb3d215a2b', '1550156219', 'no'),
(145, '_transient_dash_v2_88ae138922fe95674369b1cb3d215a2b', '<div class=\"rss-widget\"><p><strong>RSS Error:</strong> WP HTTP Error: cURL error 6: Could not resolve host: wordpress.org</p></div><div class=\"rss-widget\"><p><strong>RSS Error:</strong> WP HTTP Error: cURL error 6: Could not resolve host: planet.wordpress.org</p></div>', 'no'),
(146, 'WPLANG', '', 'yes'),
(147, 'new_admin_email', 'zidaneadhity17@gmail.com', 'yes'),
(153, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(162, '_site_transient_timeout_theme_roots', '1550134687', 'no'),
(163, '_site_transient_theme_roots', 'a:4:{s:10:\"blankslate\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(11, 2, '_edit_lock', '1550127230:1'),
(12, 15, '_edit_lock', '1550117132:1'),
(13, 15, '_wp_trash_meta_status', 'publish'),
(14, 15, '_wp_trash_meta_time', '1550117148'),
(15, 18, '_edit_lock', '1550117414:1'),
(16, 18, '_wp_trash_meta_status', 'publish'),
(17, 18, '_wp_trash_meta_time', '1550117431'),
(18, 20, '_menu_item_type', 'post_type'),
(19, 20, '_menu_item_menu_item_parent', '0'),
(20, 20, '_menu_item_object_id', '2'),
(21, 20, '_menu_item_object', 'page'),
(22, 20, '_menu_item_target', ''),
(23, 20, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(24, 20, '_menu_item_xfn', ''),
(25, 20, '_menu_item_url', ''),
(27, 21, '_menu_item_type', 'post_type'),
(28, 21, '_menu_item_menu_item_parent', '0'),
(29, 21, '_menu_item_object_id', '2'),
(30, 21, '_menu_item_object', 'page'),
(31, 21, '_menu_item_target', ''),
(32, 21, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(33, 21, '_menu_item_xfn', ''),
(34, 21, '_menu_item_url', ''),
(35, 21, '_menu_item_orphaned', '1550117445'),
(36, 22, '_edit_lock', '1550118079:1'),
(37, 22, '_wp_trash_meta_status', 'publish'),
(38, 22, '_wp_trash_meta_time', '1550118122'),
(39, 24, '_edit_lock', '1550118433:1'),
(40, 24, '_wp_trash_meta_status', 'publish'),
(41, 24, '_wp_trash_meta_time', '1550118435'),
(42, 26, '_edit_lock', '1550118660:1'),
(43, 26, '_wp_trash_meta_status', 'publish'),
(44, 26, '_wp_trash_meta_time', '1550118667'),
(45, 28, '_edit_lock', '1550118728:1'),
(46, 28, '_wp_trash_meta_status', 'publish'),
(47, 28, '_wp_trash_meta_time', '1550118729'),
(48, 31, '_wp_attached_file', '2019/02/test.png'),
(49, 31, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:296;s:6:\"height\";i:264;s:4:\"file\";s:16:\"2019/02/test.png\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:16:\"test-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(50, 32, '_wp_attached_file', '2019/02/test2.png'),
(51, 32, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:296;s:6:\"height\";i:264;s:4:\"file\";s:17:\"2019/02/test2.png\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:17:\"test2-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(52, 33, '_edit_lock', '1550120247:1'),
(53, 33, '_wp_trash_meta_status', 'publish'),
(54, 33, '_wp_trash_meta_time', '1550120275'),
(55, 35, '_edit_lock', '1550120367:1'),
(56, 35, '_wp_trash_meta_status', 'publish'),
(57, 35, '_wp_trash_meta_time', '1550120376'),
(58, 38, '_edit_lock', '1550124445:1'),
(59, 38, '_wp_trash_meta_status', 'publish'),
(60, 38, '_wp_trash_meta_time', '1550124467'),
(61, 40, '_edit_lock', '1550124547:1'),
(62, 40, '_wp_trash_meta_status', 'publish'),
(63, 40, '_wp_trash_meta_time', '1550124555'),
(64, 42, '_wp_attached_file', '2019/02/Video-15.mp4'),
(65, 42, '_wp_attachment_metadata', 'a:10:{s:8:\"filesize\";i:3609595;s:9:\"mime_type\";s:9:\"video/mp4\";s:6:\"length\";i:39;s:16:\"length_formatted\";s:4:\"0:39\";s:5:\"width\";i:640;s:6:\"height\";i:360;s:10:\"fileformat\";s:3:\"mp4\";s:10:\"dataformat\";s:9:\"quicktime\";s:5:\"audio\";a:7:{s:10:\"dataformat\";s:3:\"mp4\";s:5:\"codec\";s:19:\"ISO/IEC 14496-3 AAC\";s:11:\"sample_rate\";d:44100;s:8:\"channels\";i:2;s:15:\"bits_per_sample\";i:16;s:8:\"lossless\";b:0;s:11:\"channelmode\";s:6:\"stereo\";}s:17:\"created_timestamp\";i:1507788504;}'),
(66, 43, '_wp_trash_meta_status', 'publish'),
(67, 43, '_wp_trash_meta_time', '1550124747'),
(68, 45, '_edit_lock', '1550124787:1'),
(69, 45, '_wp_trash_meta_status', 'publish'),
(70, 45, '_wp_trash_meta_time', '1550124797'),
(71, 47, '_wp_trash_meta_status', 'publish'),
(72, 47, '_wp_trash_meta_time', '1550124825'),
(73, 49, '_wp_trash_meta_status', 'publish'),
(74, 49, '_wp_trash_meta_time', '1550124882'),
(75, 51, '_wp_trash_meta_status', 'publish'),
(76, 51, '_wp_trash_meta_time', '1550124903'),
(77, 53, '_wp_trash_meta_status', 'publish'),
(78, 53, '_wp_trash_meta_time', '1550124918'),
(79, 55, '_wp_trash_meta_status', 'publish'),
(80, 55, '_wp_trash_meta_time', '1550124930'),
(81, 57, '_wp_attached_file', '2019/02/Video-15-1.mp4'),
(82, 57, '_wp_attachment_metadata', 'a:10:{s:8:\"filesize\";i:3609595;s:9:\"mime_type\";s:9:\"video/mp4\";s:6:\"length\";i:39;s:16:\"length_formatted\";s:4:\"0:39\";s:5:\"width\";i:640;s:6:\"height\";i:360;s:10:\"fileformat\";s:3:\"mp4\";s:10:\"dataformat\";s:9:\"quicktime\";s:5:\"audio\";a:7:{s:10:\"dataformat\";s:3:\"mp4\";s:5:\"codec\";s:19:\"ISO/IEC 14496-3 AAC\";s:11:\"sample_rate\";d:44100;s:8:\"channels\";i:2;s:15:\"bits_per_sample\";i:16;s:8:\"lossless\";b:0;s:11:\"channelmode\";s:6:\"stereo\";}s:17:\"created_timestamp\";i:1507788504;}'),
(83, 58, '_wp_trash_meta_status', 'publish'),
(84, 58, '_wp_trash_meta_time', '1550125082'),
(85, 60, '_wp_trash_meta_status', 'publish'),
(86, 60, '_wp_trash_meta_time', '1550125098'),
(87, 64, '_edit_lock', '1550134534:1'),
(88, 65, '_edit_lock', '1550134584:1');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-02-13 07:40:02', '2019-02-13 07:40:02', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2019-02-13 07:40:02', '2019-02-13 07:40:02', '', 0, 'http://localhost/zidanea_wordpress/?p=1', 0, 'post', '', 1),
(2, 1, '2019-02-13 07:40:02', '2019-02-13 07:40:02', '<!-- wp:video {\"id\":57} -->\n<figure class=\"wp-block-video\"><video controls src=\"http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/Video-15-1.mp4\"></video></figure>\n<!-- /wp:video -->\n\n<div class=\"text-center\">\nGLOBAL FASHION 2017 IS A BRAND NEW FASHION EVENT THAT TO BE HELD IN ABU DHABI. COME ON CONNECT WITH US\n</div>\n\n<style>\n.text-center{\ntext-align:center;\n}\nspan{\nbackground-color:grey;\n}\n</style>', 'Simple Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2019-02-14 13:18:30', '2019-02-14 06:18:30', '', 0, 'http://localhost/zidanea_wordpress/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-02-13 07:40:02', '2019-02-13 07:40:02', '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Our website address is: http://localhost/zidanea_wordpress.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What personal data we collect and why we collect it</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Comments</h3><!-- /wp:heading --><!-- wp:paragraph --><p>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Media</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Contact forms</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Cookies</h3><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Embedded content from other websites</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Analytics</h3><!-- /wp:heading --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Your contact information</h2><!-- /wp:heading --><!-- wp:heading --><h2>Additional information</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>How we protect your data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What data breach procedures we have in place</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What third parties we receive data from</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>What automated decision making and/or profiling we do with user data</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Industry regulatory disclosure requirements</h3><!-- /wp:heading -->', 'Privacy Policy', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2019-02-13 07:40:02', '2019-02-13 07:40:02', '', 0, 'http://localhost/zidanea_wordpress/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-02-13 07:40:13', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-13 07:40:13', '0000-00-00 00:00:00', '', 0, 'http://localhost/zidanea_wordpress/?p=4', 0, 'post', '', 0),
(9, 1, '2019-02-13 07:59:24', '2019-02-13 07:59:24', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/zidanea_wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', '[cek]', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-02-13 07:59:24', '2019-02-13 07:59:24', '', 2, 'http://localhost/zidanea_wordpress/2019/02/13/2-revision-v1/', 0, 'revision', '', 0),
(11, 1, '2019-02-13 07:59:58', '2019-02-13 07:59:58', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/zidanea_wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Simple Page', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-02-13 07:59:58', '2019-02-13 07:59:58', '', 2, 'http://localhost/zidanea_wordpress/2019/02/13/2-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2019-02-13 08:01:22', '2019-02-13 08:01:22', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/zidanea_wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', '[img_slider]', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-02-13 08:01:22', '2019-02-13 08:01:22', '', 2, 'http://localhost/zidanea_wordpress/2019/02/13/2-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2019-02-13 08:02:05', '2019-02-13 08:02:05', '<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/zidanea_wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->', 'Simple Page', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-02-13 08:02:05', '2019-02-13 08:02:05', '', 2, 'http://localhost/zidanea_wordpress/2019/02/13/2-revision-v1/', 0, 'revision', '', 0),
(14, 3, '2019-02-14 03:00:16', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-14 03:00:16', '0000-00-00 00:00:00', '', 0, 'http://localhost/zidanea_wordpress/?p=14', 0, 'post', '', 0),
(15, 1, '2019-02-14 11:05:48', '2019-02-14 04:05:48', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#menu,#search,.menu{\\n\\tfloat:right;\\n}\\n.search-submit{\\n\\tpadding:7px;\\n\\tborder:none;\\n\\tbackground-color:green;\\n}\\n.search-field{\\n\\tborder:none;\\n\\tpadding:7px;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:05:32\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'ccdb9746-05fd-4645-9744-5963f6ffa43f', '', '', '2019-02-14 11:05:48', '2019-02-14 04:05:48', '', 0, 'http://localhost/zidanea_wordpress/?p=15', 0, 'customize_changeset', '', 0),
(16, 1, '2019-02-14 11:05:48', '2019-02-14 04:05:48', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n	display:none;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	display:block;\n	margin:20px auto;\n}', 'blankslate', '', 'publish', 'closed', 'closed', '', 'blankslate', '', '', '2019-02-14 13:18:18', '2019-02-14 06:18:18', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/blankslate/', 0, 'custom_css', '', 0),
(17, 1, '2019-02-14 11:05:48', '2019-02-14 04:05:48', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#menu,#search,.menu{\n	float:right;\n}\n.search-submit{\n	padding:7px;\n	border:none;\n	background-color:green;\n}\n.search-field{\n	border:none;\n	padding:7px;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:05:48', '2019-02-14 04:05:48', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(18, 1, '2019-02-14 11:10:31', '2019-02-14 04:10:31', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#menu,#search,.menu{\\n\\tfloat:right;\\n}\\n.search-submit{\\n\\tpadding:7px;\\n\\tborder:none;\\n\\tbackground-color:green;\\n}\\n.search-field{\\n\\tborder:none;\\n\\tpadding:7px;\\n}\\n.menu ul li{\\n\\tpadding:5px;\\n}\\n.menu ul li a{\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n\\tpadding:15px;\\n}\\n.menu ul li a:hover{\\n\\tbackground-color:orangered;\\n\\tcolor:white;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:10:31\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'c4644948-e805-4ba1-a09c-55b19c1ae01e', '', '', '2019-02-14 11:10:31', '2019-02-14 04:10:31', '', 0, 'http://localhost/zidanea_wordpress/?p=18', 0, 'customize_changeset', '', 0),
(19, 1, '2019-02-14 11:10:31', '2019-02-14 04:10:31', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#menu,#search,.menu{\n	float:right;\n}\n.search-submit{\n	padding:7px;\n	border:none;\n	background-color:green;\n}\n.search-field{\n	border:none;\n	padding:7px;\n}\n.menu ul li{\n	padding:5px;\n}\n.menu ul li a{\n	text-decoration:none;\n	color:darkblue;\n	padding:15px;\n}\n.menu ul li a:hover{\n	background-color:orangered;\n	color:white;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:10:31', '2019-02-14 04:10:31', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(20, 1, '2019-02-14 11:10:59', '2019-02-14 04:10:59', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2019-02-14 11:10:59', '2019-02-14 04:10:59', '', 0, 'http://localhost/zidanea_wordpress/?p=20', 1, 'nav_menu_item', '', 0),
(21, 1, '2019-02-14 11:10:45', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2019-02-14 11:10:45', '0000-00-00 00:00:00', '', 0, 'http://localhost/zidanea_wordpress/?p=21', 1, 'nav_menu_item', '', 0),
(22, 1, '2019-02-14 11:22:02', '2019-02-14 04:22:02', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:22:02\"\n    },\n    \"blankslate::nav_menu_locations[main-menu]\": {\n        \"value\": 2,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:12:18\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '03173277-b14d-49c0-b110-f280436ba152', '', '', '2019-02-14 11:22:02', '2019-02-14 04:22:02', '', 0, 'http://localhost/zidanea_wordpress/?p=22', 0, 'customize_changeset', '', 0),
(23, 1, '2019-02-14 11:22:02', '2019-02-14 04:22:02', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:22:02', '2019-02-14 04:22:02', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(24, 1, '2019-02-14 11:27:14', '2019-02-14 04:27:14', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:10px 15px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:27:12\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '03b32327-8080-4d3f-a5c1-9cbde73535ea', '', '', '2019-02-14 11:27:14', '2019-02-14 04:27:14', '', 0, 'http://localhost/zidanea_wordpress/?p=24', 0, 'customize_changeset', '', 0),
(25, 1, '2019-02-14 11:27:14', '2019-02-14 04:27:14', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:10px 15px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:27:14', '2019-02-14 04:27:14', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2019-02-14 11:31:07', '2019-02-14 04:31:07', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:10px 15px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tdisplay:block;\\n\\tposition:absolute;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:31:00\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '10e242c5-d1bb-4aae-a46d-cdfaa654b33d', '', '', '2019-02-14 11:31:07', '2019-02-14 04:31:07', '', 0, 'http://localhost/zidanea_wordpress/?p=26', 0, 'customize_changeset', '', 0),
(27, 1, '2019-02-14 11:31:07', '2019-02-14 04:31:07', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:10px 15px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	display:block;\n	position:absolute;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:31:07', '2019-02-14 04:31:07', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(28, 1, '2019-02-14 11:32:09', '2019-02-14 04:32:09', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:10px 15px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tdisplay:block;\\n\\tposition:absolute;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:80%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:32:08\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '42cfbc3d-84ce-4dd6-8302-5fdbd2ca39ad', '', '', '2019-02-14 11:32:09', '2019-02-14 04:32:09', '', 0, 'http://localhost/zidanea_wordpress/?p=28', 0, 'customize_changeset', '', 0),
(29, 1, '2019-02-14 11:32:09', '2019-02-14 04:32:09', '#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:10px 15px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	display:block;\n	position:absolute;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:80%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:32:09', '2019-02-14 04:32:09', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2019-02-14 11:53:56', '2019-02-14 04:53:56', '', 'test', '', 'inherit', 'open', 'closed', '', 'test', '', '', '2019-02-14 11:53:56', '2019-02-14 04:53:56', '', 2, 'http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/test.png', 0, 'attachment', 'image/png', 0),
(32, 1, '2019-02-14 11:53:57', '2019-02-14 04:53:57', '', 'test2', '', 'inherit', 'open', 'closed', '', 'test2', '', '', '2019-02-14 11:53:57', '2019-02-14 04:53:57', '', 2, 'http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/test2.png', 0, 'attachment', 'image/png', 0),
(33, 1, '2019-02-14 11:57:55', '2019-02-14 04:57:55', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:10px 15px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tdisplay:block;\\n\\tposition:absolute;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:80%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:57:55\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '91f8ce89-18af-49d1-8434-e5f3c9962208', '', '', '2019-02-14 11:57:55', '2019-02-14 04:57:55', '', 0, 'http://localhost/zidanea_wordpress/?p=33', 0, 'customize_changeset', '', 0),
(34, 1, '2019-02-14 11:57:55', '2019-02-14 04:57:55', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:10px 15px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	display:block;\n	position:absolute;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:80%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:57:55', '2019-02-14 04:57:55', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2019-02-14 11:59:36', '2019-02-14 04:59:36', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:10px 15px;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:80%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 04:59:27\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e69e5d5b-2899-41ad-b747-39f7d4844bdd', '', '', '2019-02-14 11:59:36', '2019-02-14 04:59:36', '', 0, 'http://localhost/zidanea_wordpress/?p=35', 0, 'customize_changeset', '', 0),
(36, 1, '2019-02-14 11:59:36', '2019-02-14 04:59:36', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:10px 15px;\n}\nmain article{\n	min-height:600px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:80%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 11:59:36', '2019-02-14 04:59:36', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(38, 1, '2019-02-14 13:07:47', '2019-02-14 06:07:47', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:07:25\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'eb399457-2f02-445e-bc8c-790281b4c274', '', '', '2019-02-14 13:07:47', '2019-02-14 06:07:47', '', 0, 'http://localhost/zidanea_wordpress/?p=38', 0, 'customize_changeset', '', 0),
(39, 1, '2019-02-14 13:07:47', '2019-02-14 06:07:47', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:07:47', '2019-02-14 06:07:47', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(40, 1, '2019-02-14 13:09:15', '2019-02-14 06:09:15', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:0 auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:09:15\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'd06b50bc-1eb3-4fb2-a384-ae6ba8761933', '', '', '2019-02-14 13:09:15', '2019-02-14 06:09:15', '', 0, 'http://localhost/zidanea_wordpress/?p=40', 0, 'customize_changeset', '', 0),
(41, 1, '2019-02-14 13:09:15', '2019-02-14 06:09:15', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:0 auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:09:15', '2019-02-14 06:09:15', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2019-02-14 13:11:54', '2019-02-14 06:11:54', '', 'Video-15', '', 'inherit', 'open', 'closed', '', 'video-15', '', '', '2019-02-14 13:11:54', '2019-02-14 06:11:54', '', 2, 'http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/Video-15.mp4', 0, 'attachment', 'video/mp4', 0),
(43, 1, '2019-02-14 13:12:26', '2019-02-14 06:12:26', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:12:26\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '3a0d7d54-0489-47f5-b496-ac1a0a7a5f5b', '', '', '2019-02-14 13:12:26', '2019-02-14 06:12:26', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/3a0d7d54-0489-47f5-b496-ac1a0a7a5f5b/', 0, 'customize_changeset', '', 0),
(44, 1, '2019-02-14 13:12:26', '2019-02-14 06:12:26', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:12:26', '2019-02-14 06:12:26', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2019-02-14 13:13:17', '2019-02-14 06:13:17', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video{\\n\\tmargin:0px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:13:17\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '733e09b2-9499-4e8b-8171-dcf6852f6f93', '', '', '2019-02-14 13:13:17', '2019-02-14 06:13:17', '', 0, 'http://localhost/zidanea_wordpress/?p=45', 0, 'customize_changeset', '', 0),
(46, 1, '2019-02-14 13:13:17', '2019-02-14 06:13:17', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video{\n	margin:0px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:13:17', '2019-02-14 06:13:17', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2019-02-14 13:13:45', '2019-02-14 06:13:45', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tmargin:0px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:13:45\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e58efcce-54ae-4685-98c4-7ee91308e685', '', '', '2019-02-14 13:13:45', '2019-02-14 06:13:45', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/e58efcce-54ae-4685-98c4-7ee91308e685/', 0, 'customize_changeset', '', 0),
(48, 1, '2019-02-14 13:13:45', '2019-02-14 06:13:45', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	margin:0px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:13:45', '2019-02-14 06:13:45', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(49, 1, '2019-02-14 13:14:42', '2019-02-14 06:14:42', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tmargin:2px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:14:42\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '1465b5ee-2e6b-4b2c-ac03-5887534c4a27', '', '', '2019-02-14 13:14:42', '2019-02-14 06:14:42', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/1465b5ee-2e6b-4b2c-ac03-5887534c4a27/', 0, 'customize_changeset', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(50, 1, '2019-02-14 13:14:42', '2019-02-14 06:14:42', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	margin:2px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:14:42', '2019-02-14 06:14:42', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(51, 1, '2019-02-14 13:15:02', '2019-02-14 06:15:02', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\ttext-align:center;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:15:02\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '0aeab00d-c109-4078-8790-7e8c461cf033', '', '', '2019-02-14 13:15:02', '2019-02-14 06:15:02', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/0aeab00d-c109-4078-8790-7e8c461cf033/', 0, 'customize_changeset', '', 0),
(52, 1, '2019-02-14 13:15:02', '2019-02-14 06:15:02', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	text-align:center;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:15:02', '2019-02-14 06:15:02', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(53, 1, '2019-02-14 13:15:18', '2019-02-14 06:15:18', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tdisplay:block;\\n\\tmargin:2px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:15:18\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'c80cc8fa-cd45-4966-b5d5-663ca561f6fa', '', '', '2019-02-14 13:15:18', '2019-02-14 06:15:18', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/c80cc8fa-cd45-4966-b5d5-663ca561f6fa/', 0, 'customize_changeset', '', 0),
(54, 1, '2019-02-14 13:15:18', '2019-02-14 06:15:18', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	display:block;\n	margin:2px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:15:18', '2019-02-14 06:15:18', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(55, 1, '2019-02-14 13:15:30', '2019-02-14 06:15:30', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tdisplay:block;\\n\\tmargin:5px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:15:30\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '992f1a84-9969-4451-af60-26c60afd20e7', '', '', '2019-02-14 13:15:30', '2019-02-14 06:15:30', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/992f1a84-9969-4451-af60-26c60afd20e7/', 0, 'customize_changeset', '', 0),
(56, 1, '2019-02-14 13:15:30', '2019-02-14 06:15:30', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	display:block;\n	margin:5px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:15:30', '2019-02-14 06:15:30', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(57, 1, '2019-02-14 13:16:37', '2019-02-14 06:16:37', '', 'Video-15', '', 'inherit', 'open', 'closed', '', 'video-15-2', '', '', '2019-02-14 13:16:37', '2019-02-14 06:16:37', '', 2, 'http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/Video-15-1.mp4', 0, 'attachment', 'video/mp4', 0),
(58, 1, '2019-02-14 13:18:01', '2019-02-14 06:18:01', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n\\tdisplay:none;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tdisplay:block;\\n\\tmargin:5px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:18:01\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '07173258-8664-4d8c-ac62-e2e2e62103f1', '', '', '2019-02-14 13:18:01', '2019-02-14 06:18:01', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/07173258-8664-4d8c-ac62-e2e2e62103f1/', 0, 'customize_changeset', '', 0),
(59, 1, '2019-02-14 13:18:01', '2019-02-14 06:18:01', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n	display:none;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	display:block;\n	margin:5px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:18:01', '2019-02-14 06:18:01', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(60, 1, '2019-02-14 13:18:17', '2019-02-14 06:18:17', '{\n    \"custom_css[blankslate]\": {\n        \"value\": \"*{\\n\\tmargin:0;\\n}\\n#header{\\n    background-color: rgb(250, 166, 56);\\n\\tdisplay:block;\\n\\tpadding:10px 50px;\\n}\\n#branding{\\n\\tdisplay:inline-block;\\n}\\n#site-title h1 a{\\n    text-decoration: none;\\n    font-size: 30px;\\n    color: darkblue;\\n}\\n#site-description{\\n\\tdisplay:none;\\n}\\n#search{\\n\\tdisplay:none;\\n}\\n.menu{\\n\\tfloat:right;\\n}\\n.menu{\\n\\tmargin-top:-25px;\\n}\\n.menu li a{\\n\\tpadding:13px 10px;\\n\\ttext-decoration:none;\\n\\tcolor:darkblue;\\n}\\n.menu li a:hover{\\n\\tbackground-color:orangered;\\n}\\nmain article header{\\n\\tpadding:40px 15px;\\n\\tbackground-color:grey;\\n\\tdisplay:none;\\n}\\nmain article{\\n\\tmin-height:600px;\\n}\\n.entry-content{\\n\\tmargin:20px auto;\\n\\twidth:80%\\n}\\n.entry-title{\\n\\tfont-size:2.5rem;\\n\\tfont-weight:bold;\\n\\ttext-align:center;\\n}\\n#footer{\\n\\tposition:relative;\\n\\tbottom:0;\\n\\tleft:0;\\n\\tright:0;\\n\\tpadding:30px;\\n\\ttext-align:center;\\n\\tbackground-color:rgb(250, 166, 56);\\n}\\n#container{\\n\\twidth:100%;\\n\\tmargin:0 auto;\\n}\\n.wp-block-video video{\\n\\tdisplay:block;\\n\\tmargin:20px auto;\\n}\",\n        \"type\": \"custom_css\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2019-02-14 06:18:17\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '29fff5d8-1e50-4234-baec-81eb55747554', '', '', '2019-02-14 13:18:17', '2019-02-14 06:18:17', '', 0, 'http://localhost/zidanea_wordpress/2019/02/14/29fff5d8-1e50-4234-baec-81eb55747554/', 0, 'customize_changeset', '', 0),
(61, 1, '2019-02-14 13:18:18', '2019-02-14 06:18:18', '*{\n	margin:0;\n}\n#header{\n    background-color: rgb(250, 166, 56);\n	display:block;\n	padding:10px 50px;\n}\n#branding{\n	display:inline-block;\n}\n#site-title h1 a{\n    text-decoration: none;\n    font-size: 30px;\n    color: darkblue;\n}\n#site-description{\n	display:none;\n}\n#search{\n	display:none;\n}\n.menu{\n	float:right;\n}\n.menu{\n	margin-top:-25px;\n}\n.menu li a{\n	padding:13px 10px;\n	text-decoration:none;\n	color:darkblue;\n}\n.menu li a:hover{\n	background-color:orangered;\n}\nmain article header{\n	padding:40px 15px;\n	background-color:grey;\n	display:none;\n}\nmain article{\n	min-height:600px;\n}\n.entry-content{\n	margin:20px auto;\n	width:80%\n}\n.entry-title{\n	font-size:2.5rem;\n	font-weight:bold;\n	text-align:center;\n}\n#footer{\n	position:relative;\n	bottom:0;\n	left:0;\n	right:0;\n	padding:30px;\n	text-align:center;\n	background-color:rgb(250, 166, 56);\n}\n#container{\n	width:100%;\n	margin:0 auto;\n}\n.wp-block-video video{\n	display:block;\n	margin:20px auto;\n}', 'blankslate', '', 'inherit', 'closed', 'closed', '', '16-revision-v1', '', '', '2019-02-14 13:18:18', '2019-02-14 06:18:18', '', 16, 'http://localhost/zidanea_wordpress/2019/02/14/16-revision-v1/', 0, 'revision', '', 0),
(62, 1, '2019-02-14 13:18:30', '2019-02-14 06:18:30', '<!-- wp:video {\"id\":57} -->\n<figure class=\"wp-block-video\"><video controls src=\"http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/Video-15-1.mp4\"></video></figure>\n<!-- /wp:video -->\n\n<div class=\"text-center\">\nGLOBAL FASHION 2017 IS A BRAND NEW FASHION EVENT THAT TO BE HELD IN ABU DHABI. COME ON CONNECT WITH US\n</div>\n\n<style>\n.text-center{\ntext-align:center;\n}\nspan{\nbackground-color:grey;\n}\n</style>', 'Simple Page', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-02-14 13:18:30', '2019-02-14 06:18:30', '', 2, 'http://localhost/zidanea_wordpress/2019/02/14/2-revision-v1/', 0, 'revision', '', 0),
(63, 1, '2019-02-14 13:53:17', '2019-02-14 06:53:17', '<!-- wp:video {\"id\":57} -->\n<figure class=\"wp-block-video\"><video controls src=\"http://localhost/zidanea_wordpress/wp-content/uploads/2019/02/Video-15-1.mp4\"></video></figure>\n<!-- /wp:video -->\n\n<div class=\"text-center\">GLOBAL FASHION 2017 IS A BRAND NEW FASHION EVENT THAT TO BE HELD IN ABU DHABI. COME ON CONNECT WITH US</div>\n<style>\n.text-center{\ntext-align:center;\n}\nspan{\nbackground-color:grey;\n}\n</style>\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Simple Page', '', 'inherit', 'closed', 'closed', '', '2-autosave-v1', '', '', '2019-02-14 13:53:17', '2019-02-14 06:53:17', '', 2, 'http://localhost/zidanea_wordpress/2019/02/14/2-autosave-v1/', 0, 'revision', '', 0),
(64, 1, '2019-02-14 15:56:30', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-02-14 15:56:30', '0000-00-00 00:00:00', '', 0, 'http://localhost/zidanea_wordpress/?p=64', 0, 'post', '', 0),
(65, 1, '2019-02-14 15:57:59', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-02-14 15:57:59', '0000-00-00 00:00:00', '', 0, 'http://localhost/zidanea_wordpress/?page_id=65', 0, 'page', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'Menu 1', 'menu-1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(20, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
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
(16, 1, 'session_tokens', 'a:1:{s:64:\"7c9ab40c5bfb124cb4476e244886b99f124d240bef45e7fd0439f5333fa1110a\";a:4:{s:10:\"expiration\";i:1550216412;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:78:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0\";s:5:\"login\";i:1550043612;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 2, 'nickname', 'adMinX'),
(19, 2, 'first_name', 'admin'),
(20, 2, 'last_name', 'admin'),
(21, 2, 'description', ''),
(22, 2, 'rich_editing', 'true'),
(23, 2, 'syntax_highlighting', 'true'),
(24, 2, 'comment_shortcuts', 'false'),
(25, 2, 'admin_color', 'fresh'),
(26, 2, 'use_ssl', '0'),
(27, 2, 'show_admin_bar_front', 'true'),
(28, 2, 'locale', ''),
(29, 2, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(30, 2, 'wp_user_level', '10'),
(31, 2, 'dismissed_wp_pointers', 'wp496_privacy'),
(32, 3, 'nickname', '4Clients'),
(33, 3, 'first_name', 'client'),
(34, 3, 'last_name', 'client'),
(35, 3, 'description', ''),
(36, 3, 'rich_editing', 'true'),
(37, 3, 'syntax_highlighting', 'true'),
(38, 3, 'comment_shortcuts', 'false'),
(39, 3, 'admin_color', 'fresh'),
(40, 3, 'use_ssl', '0'),
(41, 3, 'show_admin_bar_front', 'true'),
(42, 3, 'locale', ''),
(43, 3, 'wp_capabilities', 'a:1:{s:6:\"editor\";b:1;}'),
(44, 3, 'wp_user_level', '7'),
(45, 3, 'dismissed_wp_pointers', 'wp496_privacy'),
(47, 3, 'wp_dashboard_quick_press_last_post_id', '14'),
(48, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(49, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(50, 1, 'nav_menu_recently_edited', '2'),
(51, 3, 'session_tokens', 'a:1:{s:64:\"d8c6eb402943f7f5db20e20edff6cdc4c162b64697de7a09c259e1d264f3e9ab\";a:4:{s:10:\"expiration\";i:1550307550;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:78:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0\";s:5:\"login\";i:1550134750;}}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BLQKvBe1kQ8t4pMcPG/2PDHmZdi9mI0', 'admin', 'zidaneadhity17@gmail.com', '', '2019-02-13 07:40:01', '', 0, 'admin'),
(2, 'adMinX', '$P$BB4QBILeZhuo9yhiPRuDmRqWwPlKIJ.', 'adminx', 'admin@gmail.com', '', '2019-02-14 02:59:13', '1550113155:$P$BFIUzU0NSRLmw49LIxDw8saVKvsuYr/', 0, 'admin admin'),
(3, '4Clients', '$P$BkgbB/ss/SPnfYQsDU0cR6EK8Gm.JP.', '4clients', 'client@gmail.com', '', '2019-02-14 02:59:48', '1550113189:$P$B0qdmyuA.8fX4JvEjziTTINUVjhXMd1', 0, 'client client');

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
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
