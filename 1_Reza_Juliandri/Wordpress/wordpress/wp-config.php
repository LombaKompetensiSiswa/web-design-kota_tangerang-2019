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
define('DB_NAME', 'reza_wp');

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
define('AUTH_KEY',         '_juG#<ert,lP]}f4aT;|(e$WMdYFcRXWOhmp>;E7CT.9u=jgB:,R(a2joGFpZ.9P');
define('SECURE_AUTH_KEY',  ';u(~8*F]K!w3~Vz/W|_To|i2Z3wj9,e3VQ0(ql[(;n![y$vKrblvuT{^If-?D[,R');
define('LOGGED_IN_KEY',    'Bt41&] ZP!9-Jl!xW35xk9*U$+TLn[ga`[B(:8?~T?hg~ qd t #L*kiBRbiNaWX');
define('NONCE_KEY',        '{]OT@UIda%]d|Oq1t<9Qvm{e]|77j6ob4%Ed^R8SY]K.d6e=go0y}v]Q[$U36/bj');
define('AUTH_SALT',        'i@!/hZ|j#$l}e2#$4W5qtM!rvr|ad^A!Tq/T];z:.YW2&Q5W6Y!7K&B5g/H;2Gq9');
define('SECURE_AUTH_SALT', '.)`1Y}.UJ%w@M>]($MZCn>OJLvOiOW^zirm6C@FSu&<[lbGTr45tRwNlAGZ4~3HK');
define('LOGGED_IN_SALT',   '~FVy5MGoQ%Bdvu(kvz457&#KdU@kX(?* },yv:ICVEJZ!xLZWW%4$WwHK&}CkqFS');
define('NONCE_SALT',       ')iBxP#d{KDbu9j=(ZL!==!j,fwr>x%5DOv<q>>%l.Co1!XKpg{)-5_Mt/dPN^)-N');

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
