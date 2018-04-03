<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         '/YT0p:#{0BSynX^$Y]0Y:sLM0~$#$/Ebx%T~Y/A2!~dEv4IKZ%VFaJjV,Os%#o$/');
define('SECURE_AUTH_KEY',  '3s^A*2)Z4-5^6Eo!Dfn;E8Ig[J#GX@gM}m:M;Rft*%Jo/_Y.i`+4Nu~nf49SinXG');
define('LOGGED_IN_KEY',    '@$MrQUi?4t`2lMKU6xk6<2j~7RAvi+Kv,*nH&g(0!H^v!$%(o,>RBm{8ZRxbf0Rj');
define('NONCE_KEY',        '7ciXF!>es8e|sum#s7(Xy?Z-y{YyxoH)M0{g}kXIiNUW[Bf:i(6L,F*hG4dnJF4W');
define('AUTH_SALT',        'wE3Yi.DMmRO_j{k8<uG:QjJG[q|o]fRHT%T2]QF$zXwM7I;J>rY)?0g{uxu75+=~');
define('SECURE_AUTH_SALT', 'd)i9`0^<BNb+=mDq3.C~iG}IDZl8O4:4D|9u/4usMj&Gw$13uFsjxD:+c(VJB2)Y');
define('LOGGED_IN_SALT',   '^dAP&{$qjXyq49XDBM~WFWS~+I]0.u/5I&uOTI/1[3ze4K1U{@A91!^NK-4GEvvT');
define('NONCE_SALT',       'sB+qZqlJO6UJ6?~Ma/!~S^R2;Iekmt5|i:eMOV;4Pb,qO&!i^kUSqkY7{S4XIXtw');

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
