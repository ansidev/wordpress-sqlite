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
define('DB_NAME', 'safe_studio');

/** MySQL database username */
define('DB_USER', 'ansidev');

/** MySQL database password */
define('DB_PASSWORD', 'S4f3StuDi0');

/** MySQL hostname */
define('DB_HOST', 'mariadb.safe-studio.svc');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

define('DB_TYPE', 'sqlite');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z2B(Q033oQ#LP.lf(cL,+AtrH_xn|dh:sYP3mYFr_yk{[Si$yxBg7m;+91qe~9)a');
define('SECURE_AUTH_KEY',  '|_p;2g$pXC/]m`u_y4f?KX<z@2|TSn(!sn9V,,.-Fmv)(V-4grpEh|0rU^-k]W@W');
define('LOGGED_IN_KEY',    'HQ`A9*|{79Xt$L?$R9nh6Wk0W|<,{)|zSLVHv6U/+#(HlX@4ZB/k*XNpum89xqw/');
define('NONCE_KEY',        'Nii4~6I#i=;5XlJ1u)8V-`r|x]A~`g{&[Pr #e8EyVmK-QtkDgWb$EJT<,$WOc J');
define('AUTH_SALT',        'xDEDFKMpQs]W0zVe5+H~||mM+q$*/Dt$oRX vU=QZ7?,w`N7sKp#OpmNp3MCe,_N');
define('SECURE_AUTH_SALT', 'MM}gp*3_k?mry=nYaLVqlgkQ]T&)LETyd9vANp|*BVDGK0-+?|Niw|J!n-~+B@M+');
define('LOGGED_IN_SALT',   '5>|lg%NwWtgYG_%4GvYtcBz)8nkT2Tu>Z[(z`H?<CBv/V7#Yno8|Xn:TW-2kUIv:');
define('NONCE_SALT',       '$Ew0qt8H|?l&3AaK+tOJ=};i@:lGV3o%g%`d{0swezf1&9<7VIN*lyF5@>I7CN0G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ssb_';

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
