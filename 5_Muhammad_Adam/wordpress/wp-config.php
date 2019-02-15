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
define('DB_NAME', 'lks_wp');

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
define('AUTH_KEY',         'h]Ox3r[)[o9V}d40N:I.D&{zb.tC]Qod4AayLW.rE(!ThROQf,b8I3H>n`=rg;)9');
define('SECURE_AUTH_KEY',  'C=$I=/!d~23VCPJw^H x7tkQjz 59>[_3{tIDyKZj6nhD,-QrHDg;?!A4iM``xj)');
define('LOGGED_IN_KEY',    '#d%N,s9QG?HOB_!w9M&,2?_BS!aMKwq(cji2/1c1lY6|:Yh=oX#-S!:h.m(~-O?^');
define('NONCE_KEY',        'N^_TNw3q=@b:,3[f;DWC&!UaO[y6,69MvuBkHrA=Sd7)-iT`[W<fkx&l)o?jTq(z');
define('AUTH_SALT',        'EG@l5;AHbwc4|3$A~UHD7#@j7T[1T6v:@dA<;YXUMa=[Aa1$SzxPs5Q<Ip+8;`14');
define('SECURE_AUTH_SALT', '*O!&x [F?F+o;>o3@gNg4fRRr{j8f]@vQ{4sE*_iT;m@p9Q=lU%s0-zb2 xJ+IEX');
define('LOGGED_IN_SALT',   '%@9g#%F>Dx|~V,Lk#DbS2r(Y$4wWmnlrq_(,hJR.L/*@pQ1;SMSEDtyTV]9 `X(K');
define('NONCE_SALT',       'lH0$D.?z/*A95A@p&-,`)FJ+Y)!kU:$xoP!D&0BYYN;{at-&v;>/R-@6HnD&a $p');

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
