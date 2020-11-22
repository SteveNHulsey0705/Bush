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
define('DB_NAME', 'josecrea_bushmendb');

/** MySQL database username */
define('DB_USER', 'josecrea_bushmen');

/** MySQL database password */
define('DB_PASSWORD', 'eYgUqmAkv)GD');

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
define('AUTH_KEY',         ' RzrI<ep512ZQK_$^>cW$J`E1mu>[-~Aq`wX1%i.4V%f1ehw.r6nL0l5rrJo+`rL');
define('SECURE_AUTH_KEY',  '}1`r_fK>s$sSMqe^0KT7g&S2GE4R[RO6*wz35*{H-tO/.tgQCiGCxRtfC(hb|5V+');
define('LOGGED_IN_KEY',    'jiTb+Z*u#/]Ahcrdpg gBz6-0`eJm&0qHN,F$S0H<CF{:V5kva1}?E[K`KJgP}Qk');
define('NONCE_KEY',        'VN46A[tnW&V0YqV_n[pKp`#8rxNY#[}NX&L7TDv.4HmDymBBRm38ZqMUYD&Tz(%p');
define('AUTH_SALT',        'mr #]CQ%PEj&040:TNkF;RPaWk2]WClj@^;aWbLShk5qjXz|8N6;kH~_gw#vZpNY');
define('SECURE_AUTH_SALT', 'Mx<WCs.sqh=(lQ065z2z&+g;BWYr4^$N7&NxSx1Y&:&F#A#.D?>Fzvx+[rYA$Bj}');
define('LOGGED_IN_SALT',   '$~Yv!MOfr_i>h<,@^P,@|aa|~cov=,~P6Etg+Kg6.MY&T^ObRRGOGOpm$+o4cM+z');
define('NONCE_SALT',       '2)=>KDnn_K4TL?ER[68{COB$a?N*g]Aj7.X@re)%3OrKGUBAW7VgPQ4(AB?p7shb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cm_';

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
