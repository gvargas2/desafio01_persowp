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
define('DB_NAME', 'desafio736');

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
define('AUTH_KEY',         'O4DMLg#A<9,$x0;&>aygcKdc8O;QbDPSTNb`%0t?x>-_q?*|4mm%#hqrl.ohh^Z0');
define('SECURE_AUTH_KEY',  '9hYBfo9| xLSJJ9;y2eQ0J1D%p7,E/2bv|OU-;Us$D.*L$>x&|`(P?xzJ}i8IwJ=');
define('LOGGED_IN_KEY',    '`Ex^bk2@!0ildFUa%/|g][ -$:g-v.trfib-kYMl ./Zkt4gTjX{}~X Nft.mx`S');
define('NONCE_KEY',        'R u%+aoE+fa5mQ_!Jc12]v<cdf)(|ddOn@x Cqc#/w|Nm*W<OI3=E_+_`iwEr[4/');
define('AUTH_SALT',        'Iq6kt7Mk]kDHsaQEAi[Oji}<,F6+(wje$t#MQOuiJbVq*Hrjhqa4d.*b]HY8wh-j');
define('SECURE_AUTH_SALT', '4Pj/)Z/ 2=wgp|yR(45)+tBd|Jo)eKOamFBlJ~tOSarxo1xNJJyQf]w9/$Y$8Wr4');
define('LOGGED_IN_SALT',   '9uDd{>j%m*pu*qlMbMtmg[CMF0Iby-rbcH[xM{Dq7fqEtrRt)v:>if*#=5<EG0Y%');
define('NONCE_SALT',       'Fz{9!m@R?p3|]6c4}(/w?,*gG=OaEW)oP$(IaAZGY<85M-o2mpM^[;It Fp=]<[&');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
