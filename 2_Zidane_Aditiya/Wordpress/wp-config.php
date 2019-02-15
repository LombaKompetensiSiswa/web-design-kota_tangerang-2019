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
define('DB_NAME', 'fashion');

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
define('AUTH_KEY',         'oXG1>z]61YceClY1@KV*fk?r%dYrB|f]ILpDbM>:lHof:##a5,Q5MfpnTBA?0b`,');
define('SECURE_AUTH_KEY',  '>U)-@x|,C$)},h*%,ync_Z!1j+Cw(W S1*:8TkI9LUcfUsPf4Wz4112ptV}>6Aw_');
define('LOGGED_IN_KEY',    'fPoa*ttH1y+:aOsZDC#!dCIEJHkSWNqx3B]^n3`[Uj:<>0|EgB8H&XxTm9n~-vG#');
define('NONCE_KEY',        '-BYwUWF8o3j8R`1H2|*QH04^=7cf7}Gupg1W/oc(:4oOMt_w#C=<Ib)1}y)ggu!M');
define('AUTH_SALT',        '?@fY5:3v-FO2?GS<zD=4vt2,P![yA9un7;.D$OyzI&;y<P<7oQPMiqm:yGmwOK40');
define('SECURE_AUTH_SALT', 'N{B=vxR_s>CL>8|[2eNZm:&oO;lM6eA8] Z-0/+/ *Oc0kDfUe;/BT0JG.?pe?jr');
define('LOGGED_IN_SALT',   '/Zr0P6]zVMy+sOP`2%_HrZ+pasiG5vIH:X`Tm0f=ov*.ty=IyIHW[R.DU;O{*ii=');
define('NONCE_SALT',       ',9+d-ks?O|k^JfZ|=x.ns@Zz2q`[#9vAfvNNwrKtB14c0-.XC:-`!L7b>@8G[Yto');

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
