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
define('AUTH_KEY',         'isay?:@zPKk%a1x P.ARfwHv_b6Ak5poH~5QA*;5!GRPOHgF!?X>#wCe8 OymhkC');
define('SECURE_AUTH_KEY',  ',sW7tTx/C9:ru&_:TFLq -nieh3`v_8VCF#/z3dtngiGqJ13X~G4i|o 7KE=f6{i');
define('LOGGED_IN_KEY',    ':#E<B.C&8Gz9cd-[9NApy0YuQC8+L]gsO?e{9=~s$[gQTW0;4a3Eefw q.RB{2h{');
define('NONCE_KEY',        'o o2WSy:{c^JJ+54@`14].Vy8 -|12{!>3,%%ub*=I)rU^5^fcYha]pGb<)V<mCY');
define('AUTH_SALT',        '@LA{w4zITW:g3R+@:Nu&l1lA%o{?+{RkS? EgXi<t z?H{J_dvU30.&5G;{M~Paf');
define('SECURE_AUTH_SALT', 'C=UHzRoSH):!i)~f9Glk6*qNE^EBJoHqaQfy8bB2Fu?Q :^hiALVyHt3G4Z(6FIP');
define('LOGGED_IN_SALT',   'zhBNEBDJK-v)iAKR `DBAvN%YygK9b{zcAYQzGx@@To>$wX4 0}$L](8Dd^YiOgA');
define('NONCE_SALT',       '4tq6(saOT^]tCVNpl7j6;Tjrv4#`&4d&F,-V<*;g R3UQsuLZ;c i):|u)s8XLB ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_34';

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
