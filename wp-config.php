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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'LIncDl;)aJe(+erz|WO:]UStMI|$&a=?erR{6$)UsP/ 9#UWb@xVt-wYnkovk%wl');
define('SECURE_AUTH_KEY',  'g421(S6Lgt?YB<lA]8 _t<H*`idh>x^DQ^HETr~kMJy$D-JkZAZ(VkOPViq|IT^F');
define('LOGGED_IN_KEY',    'Z|<kA@<A~d0vf[9J0VUP5yZ7>Me9_?->ACneNqwN@%5)|OCW;5B@.`k[*8~E48P,');
define('NONCE_KEY',        '/h+6s+-{M?-aES~{@2_86s$#q|)Fr95.mgK%),#hP<&bkarhi,IMdG $hP_CLwf]');
define('AUTH_SALT',        ',j.g=qiH)#>l()pXQtHXa(Pn4+DOi7K#_>-Ur7k<+UM9>t7E2a.(:M.@j(Q+%jW|');
define('SECURE_AUTH_SALT', 'k~s|cSAYcQ,DH_(2#WJpkI~~)+$6G&uy4K9.u1skJweX+]fX. d+W6hX8pxciW(q');
define('LOGGED_IN_SALT',   'P`~]oN7|(h9fl-vCkv(:|ohTh+~9q}zl$/M4QALg!JC6d:JC6OOU?mqSE1N-D0iv');
define('NONCE_SALT',       'aB<K38!r|sv*_x%-4^0nZ+(=iXhE{zfp.}L(ct.;Pvo-)RrR`ZgDmT[3`)UvggN8');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
