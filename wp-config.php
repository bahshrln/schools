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
define('DB_NAME', 'd02bbab5');

/** MySQL database username */
define('DB_USER', 'd02bbab5');

/** MySQL database password */
define('DB_PASSWORD', 'mbsVRVPxVKbJoEQweh2c');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hjdbMDM#Z|^]MP]o|h6K1?=Z!A?7IG&D/@[>f;A}UQ8vpQ%o_BiZ-BTX?Ao#6&=]');
define('SECURE_AUTH_KEY',  'yLVjXWre#@}d5xi^bki7[uM+hqMC^j4,M41-w1?;z^=<d}P!=@j)V%3#(ZjCc/,7');
define('LOGGED_IN_KEY',    'qN(CwcTK6aFQr_o+z*@+3,3Ze6#6tbCFMH%jheX2GxXgCO)H/0_2yEM*U3R-5e3W');
define('NONCE_KEY',        '_x;Y;*vHf<Am+m!7ke0;aWJW6AgPw7|8P*8qdz3*BAt@3f{(7:F-RDgsvB|F2smK');
define('AUTH_SALT',        '#<<<6TmR:0bQ<EmI>FaLJT]|bU2=m`T_A,.sn!qrsF&k;N_NtkyS3_mJusdRcD-z');
define('SECURE_AUTH_SALT', 'giG.V}@B_7D)jsNuGn^66s;=6@OF[wRWIVKB-(`#I:gj*E7$0$AL=38Q!`ja_WWY');
define('LOGGED_IN_SALT',   'p$HArCoFyQ3WK2U`XBe]d%2#nC,CuM`uPwh+9{RoxMPLT,/^:7MIsWiz!1^V:pI/');
define('NONCE_SALT',       'ke;h%C__]V7MPGOCyt?[4}mvlf:[brKm+J2EB4_zWQ?&=oXz3@;@YjW}0PhSIFr^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lfb2u_';
define( 'WP_POST_REVISIONS', 10 );

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