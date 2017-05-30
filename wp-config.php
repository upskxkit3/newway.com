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
define('DB_NAME', 'newway');

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
define('AUTH_KEY',         'o:(fD.v-BVAG~v;D<V(w9gPQ8E4s[]s*4#S,-yEl9U2YBg>sm]{j;df<NH[9!PS:');
define('SECURE_AUTH_KEY',  'tqN4uqzFox!;2YR*eD)|i;7>Ifp/W.}chq==;bX>IDvC8WZ<3_rYh&Q7LXMw!/+W');
define('LOGGED_IN_KEY',    'a7QU,C=ywBEY%~#QE}kb0|H>ddk;#%aMmAq ;!-2G4I;2$kv<XMw#LJi>.[dH!dP');
define('NONCE_KEY',        '<klrNO_VVxDp^QNiA:&=uOzu.,o3&vD~35c?Y%<J-byPA4JVZ> S([koiCJd~tJj');
define('AUTH_SALT',        '*Vc@)>U(u(T+>z_UR(7ARgd]tAx4v4;Es_$%0eRVd7BYxgEi88*z5{kz)9})&p~Z');
define('SECURE_AUTH_SALT', 'naalq^VgjO)lt]TKt%.J`L1>+6JtVI{]zELdk.Mk|WJ!R<&ehi89PJ!Bx7/]mj~`');
define('LOGGED_IN_SALT',   '02N@u]V}?9]W0MzbL*RWMPr/LYu(~{d&g_V}1_euk@fA?SI33t6L/Jcek5QJdD]i');
define('NONCE_SALT',       'YrI#R/(B=pJH XvufHwUGi%TWX_`5EdYHB;mY9f1p(-wl`$c#q.`5Jg%6=P|vYWE');

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
