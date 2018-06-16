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
define('DB_NAME', 'twitchst_website');

/** MySQL database username */
define('DB_USER', 'twitchst_website');

/** MySQL database password */
define('DB_PASSWORD', 'TROLLtroll12345!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4_unitcode_ci');

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
define('AUTH_KEY',         '<<& +3Vs(D?q&$e C}b+LSA+*-?rOE|+yhV>xWYO[X9,&%U5IDIleEe^1%1_ dRd');
define('SECURE_AUTH_KEY',  '?GY-8G)aX:ZVTtX|oNnjWy7+VBgT]:~`Nnl.0whWI}2&|lws&p$&bfQP+I|}smG5');
define('LOGGED_IN_KEY',    'S+md;h[?=IoaYcI3B<:h>xD={8akM+5fYj|JXq5I--982&#Q7ge|[ x3D:)9OW$c');
define('NONCE_KEY',        '~|O_f?Ihc8+Q-)OO=HFUYRN48[cnJ}rMdAB#?~.4$pHgrC*(F?~p{jFEzysR^KR3');
define('AUTH_SALT',        '5}IMy[;IFX2$g#G6*I1/:5CQo9h:Sb&KSZ}P+;Db0/:e-2-6ftt~k2ggN6U}kelN');
define('SECURE_AUTH_SALT', 'VC>~vnVeORd72[S0MZ-Q0T%|]T{3Eal$v9w,/H ~p7s.m1rO2)?+#*itecI1m-F?');
define('LOGGED_IN_SALT',   'h;)PtCS3Tz]gq%k(9FBlJeZwyF_frM4^-EjJBlY4Q|M]@?{B[P(0H`yZWjvEd8E ');
define('NONCE_SALT',       ')fECNbJ.?Cukz%NHgSMn5l=feCZH0+9vM?_L3/5V#g;OL]q5$%?WzCUP}NNznR8O');

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
