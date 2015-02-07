<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_course_l1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3-vbp`o&*b]B)Vlr!)&c$9-N)WMlKv(f6i(3Uq2wKk~LOV#jYB]ag5d-/hql*mob');
define('SECURE_AUTH_KEY',  'iNl+wc:3>;`{6Gmd~A_j9O/bNj3O@79wxBExLaK;yWO b-rU1$1E&pxw9k6d&b`z');
define('LOGGED_IN_KEY',    'PN,VmMyW$&,Zs!kz{|*HD-hQ8875CXLPxQl&!hW=qw?+<Y++g1WQJL/S6,MBH[!X');
define('NONCE_KEY',        'MF;Mco9uIW{xDd8y14EIUf&Tg^nzB)N7=>92;M0^Sfaw8uOcvc9U+T}(~~Fh2T+9');
define('AUTH_SALT',        'P*s;B7u|WJUz7TRn?$,eh~6[gz^EWd+TO/z]quP*OCzNDQJRkFfkUgKVxa>X}Uqi');
define('SECURE_AUTH_SALT', 'Y/%v}(&:9[V6@F[X)Rh($|E4I0#T.sN)hMo{c9>qN+%Y7fqy;JvU@on9}>!Ha=Vb');
define('LOGGED_IN_SALT',   'A*z@s_HV L 6u-.?~D6=Pvexy*yZ,^C6Jas|EZE-zx  g|Sxl&Ge]hI:j4@%A|Es');
define('NONCE_SALT',       'o`pC=0Us+N<8hCpy>]h,7qPvc63x!ei5Ud9!&k<d~MLNTY@%?;TCk6~}6OCEF+B;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
