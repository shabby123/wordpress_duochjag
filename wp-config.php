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
define('DB_NAME', 'wordpress_duochjag');

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
define('AUTH_KEY',         '?^@%P7<wIw1|-w-b,Ijxt0qLMM*6[7P.ih9u?7Kl%4-<nN-4y1+1BKtnMf&Q>^kc');
define('SECURE_AUTH_KEY',  '!7,c6tP:;@M>)d^e|.?eJ>a[mICe[-,f;d!fd3di#$zM-<2[AO_%OWw*=oQwm|}%');
define('LOGGED_IN_KEY',    '.un^y+sbnP aN`8:2+gx=r`,In}vu3wLmgg7$+_9 4UXnK:WE8+8:1w2U);4RV1H');
define('NONCE_KEY',        '!7#^RvM7*E9K</H15/|qV[1I K[;/!Cse9N*=T9pLJ)cc):WC?<~ArK7]#$Hvg[_');
define('AUTH_SALT',        'k0Rpoq[0bI@2o<jd|2nDbZM/)!<(&yQ0-+%dg3L)f>]E727lmR#~=S6.5Pn!0^jt');
define('SECURE_AUTH_SALT', 'p5(0@IeP(:TvBt{1WH0qfVXXnyf%d-x=JWz:9=T-YMjK]4ff~3SH}qf}77l|OJ6M');
define('LOGGED_IN_SALT',   ';^Vv|{p_T2gKBZ/ig:8 CNpmG=naQYamnI@:~{Mq|{>na[eVM|<$Ci$fQo#D*^?}');
define('NONCE_SALT',       '`;<+%E(:{]Zr_]|+pXB8?:G+i29l%uDJ4;>]wxi?6V2pG)4s.|-Q~!Xr`F@h+7?b');

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
