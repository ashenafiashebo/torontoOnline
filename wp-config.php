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
define('DB_NAME', 'calgaryOnline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '(yzrD`?i1X<uk!rC8^E [uI9N@u$@Ej!aE:9is9o?ehew/;9ad;Y8Y=-^D]HO:sb');
define('SECURE_AUTH_KEY',  'M8.<tOC^.40IS(^!Clgn-$kUis6y)6SU<Iui}TJB2C&!-ACB##J@K>0@g0{]?6$[');
define('LOGGED_IN_KEY',    'Tn)2]idJ-A>3-+TZbx $Hij_ExVaUm&)l} N]kB*+k(v2AX@07qx<oK4]_rd*nRI');
define('NONCE_KEY',        'fzxSt88NfhQcF{nH{W<vyywO sCNu9V@%thTR{y>/HBqg68?+1_!N>$}J2a=S?A!');
define('AUTH_SALT',        ':kW9&4Q^;x|HtKJ;[|qG?9S^s.P0-<ZoxG)2vcjF]|uz|kZi cArC9UldPV$?pUI');
define('SECURE_AUTH_SALT', 'h;fkij0ZWLDcYLWc+~$o]?[hP[O.KB@>>A(c800/9}lw6r#/T3/mTWo[Z7y^h?l-');
define('LOGGED_IN_SALT',   '/lYAE?G0CYY5Q,*G9Y:ZN{K+]sMT iW`jT!n:).sFDfX3f^W$ktE#*B4X^r2CBSy');
define('NONCE_SALT',       'j/?l3`@n`jPn)W^3Ks^M0L^R)c ir@&vy-y`_|Z/2nLYt8Pp;1+N<VcxzPd-ZO)b');

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
