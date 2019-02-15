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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&c&+Y_=#Ze{I]Xap.NI.JMpsH|YIp7up9lmn&BBxG{n2NDJ&6ne>4%xEh}hZ+(JZ');
define('SECURE_AUTH_KEY',  '&eD,Wm%I@0c2+HT._*a*^ 1:i6{bA[WBY]SB.WFZS`*2Xuy{s}cbWs&XVi`M5!RS');
define('LOGGED_IN_KEY',    'ALi6N@x$l5sPG6 :E(v|duB>[g4e:}X}cVN2dR-XMoH&wqS(v*[|dFIez 6EG|VE');
define('NONCE_KEY',        '_3H}MFWaH1KaeoYTlkH5dR-Fj:AR3@NryTcq .T2MKm#SBBQz^tNrm$R&axpBG$o');
define('AUTH_SALT',        'sAH_F}?u!qafdT7olRuaQIG7sPRIo#+4X([V#u&x$nrHwHi( ,0Xb?Q:*/85+U%B');
define('SECURE_AUTH_SALT', 'Y2 TiWeroakn+:>7>tRAb1cyNrIQ/{ZoWD=qh)Z$0|U$T$CH]!2<v0)juBSkm4=}');
define('LOGGED_IN_SALT',   'qua ~v_#)VNix<t{fPHqn=F~9dIUyCxVn>y|vB:D<a[MmlZgc*$|b&gi*DLDkxrM');
define('NONCE_SALT',       'ni kWr1<?KTw$?Y0>O]deV$7|~ieXbilmH+LkV^|+MVvvL+1;]EObej@a;I`KT;N');

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
