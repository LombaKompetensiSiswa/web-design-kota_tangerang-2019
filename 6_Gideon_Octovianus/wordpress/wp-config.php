<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lks');

/** MySQL database username */
define('DB_USER', 'adMinX');

/** MySQL database password */
define('DB_PASSWORD', 'Never4get!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9sIN9<X5=slL6fNY$.uvXPb?I&MWl5=KM(4(Ly859jV(!]c17xB=uOyO]djCSu].');
define('SECURE_AUTH_KEY',  'd0G}8C{EhAN+TJn7U3(}I}ho4q,,IicgDmpS=46)F|!c;Rt35BA|OA h@U{<%l(E');
define('LOGGED_IN_KEY',    'Dc(A{!N(Z?$g5C4M]fxx_+/GzesJF8mpvjpd3Vh~5:$F<1A9EQoyN&>xK{WR&gZ=');
define('NONCE_KEY',        'V%0Jp?PF5rs.Y$FWOg1^!lCybaCk20(5[awVR/qr0~F]:6[{]#3q&-VkY$&[EQk)');
define('AUTH_SALT',        '$J3d6}CIw6%|NCaZbEN:Cn~32oOCrK^2QAV<7NGuEks7Ebl)i [w<2POf6 &ObU(');
define('SECURE_AUTH_SALT', 'q|Up:^LKMI?_jpJ5jQCpd}+?pkiN?g6B6K^~H#%g}X/uG29qT:Mg=*P?51()J3m:');
define('LOGGED_IN_SALT',   '<V2GO$lO%sF@0&<h_kas [!XYUH8.9$VU8$%sq$*c .j_~I+gNftgQb#,|RM8dT9');
define('NONCE_SALT',       '0%0Y?e^,DkV:-e+J}zMNq}k=j0Rg8Sz~GMU^8]ULB2}bc@QFTIMe> zbu%5x4%1,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
