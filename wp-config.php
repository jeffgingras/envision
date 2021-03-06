<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'envision');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nEEAMV&;Y01]?.ZeSy/p|xnk[(rh6^fPWbP`ZHZ@db-|D,M;6rR{0cl1ymKA_xv@');
define('SECURE_AUTH_KEY',  'vbCQQt 5c4||KE+B7-<Ow9/khYs|4b2_TCXkSAp-n1`J7om;MT>Mc%N6h>5y<%e$');
define('LOGGED_IN_KEY',    'aoKXY<;II:fFFKoXQ>3%wIhf59eS(AFeE6Lbz<.[_)PCV{m1}QOGO$fP+Q+I<H_M');
define('NONCE_KEY',        'l-9(*@gS.A~K5d70VRGp~-LH.z#3;c|jLe2<twvQXJItOQO+7j+|zp(J4[^?RkT|');
define('AUTH_SALT',        ')rYsj[b-My~pZ~6<HUZR*-7&e_mM9Y|c5Pe?GV``lAmEff[*f(v$+:!>O{a$t.|+');
define('SECURE_AUTH_SALT', '?&-!<Ko]6X4LC-tsHzle^%N d6=D%hPMi$rwJPUo~.>f#-&05]+P0x|Yny!*#nSW');
define('LOGGED_IN_SALT',   '@z!M[v?j(Cn;|E0}Vh|~Mo->,DY=p]-%NTY}VE>`G>3VO9[o^y+a_Md+-q3v^ aM');
define('NONCE_SALT',       '8LvDlB<~:{OWgvKa.pX,#YfJEPG7T5|<~_IE/):ZvqmKARY0K--H?_c|&+E8zsdH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
