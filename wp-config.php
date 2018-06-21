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
define('AUTH_KEY',         'TYQU?mm)XE1XD/noQr2rqH=[Hzs#1nP_/EoaV`a@#CEJDxRXil3U66RW.`X]jjap');
define('SECURE_AUTH_KEY',  '_/s0:;>2n))jyvnSLy2r81&l/_B/r$q+6DL>}4f{1OJGd/|HR-=3T`~_O>O?<{<z');
define('LOGGED_IN_KEY',    '?p_4$5JR`{S_vNzbVnkCqe#HQD/%=I]7=L;fUY;wywy3Em&P8vC_?lSf+}k/^$L-');
define('NONCE_KEY',        'B5dolctKXRaKfzC]/d7ucHx;j?enMU96qLpn<Z iPe6rk4]B(KE?Sl#^M`alx!.w');
define('AUTH_SALT',        'eN/1>.aE#fcm3XoGiRLD4{?+~hFc+I7GmgW|xSL55{fcDeM10@wq}ab&bf 8#HkQ');
define('SECURE_AUTH_SALT', '1S/1KYNya[&sKri)W0|{!+jE(2yHS0cCmq)|L6ZisELFSw8c-p|MJ@{*[HHT=WN5');
define('LOGGED_IN_SALT',   'g]ARxt@zz0>72Se&_273g)bm`e5Q.DKt]qxz>nzj?%x/hswFplbv/awI`S[oV.yV');
define('NONCE_SALT',       '5+_av%Fo?}#*PcxkA6,_jyqaIgg}8(1q^xI(xrOPLVMMHK~f/}VDN&O&/T$)yH}J');

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
